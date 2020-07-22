<?php
    namespace pieterboersma\contactform\components;

    use October\Rain\Exception\ValidationException;
    use October\Rain\Support\Facades\Flash;
    
    class Form extends \Cms\Classes\ComponentBase {

        public function componentDetails(){
            return [
                'name' => 'Contact',
                'description' => 'Generates a contact form'
            ];
        }

        public function onTest(){
            $name = input("name");
            $email = input("email");
            $message = input("message");
            $avg = input("avg");
            
            if(empty($name)){
                throw new ValidationException(['name' => 'Vergeet niet om je naam in te vullen!']);
            }

            if(empty($email)){
                throw new ValidationException(['name' => 'Vergeet niet om je e-mailadres in te vullen!']);
            }

            if(empty($message)){
                throw new ValidationException(['name' => 'Vergeet niet om een bericht achter te laten!']);
            }   

            if(empty($avg)){
                throw new ValidationException(['name' => 'Je moet akkoord gaan met de privacyverklaring!']);
            }   

            $vars = ['name' => 'Joe', 'user' => 'Mary'];

            mail("info@pieterboersma.nl", "Bericht van " . $name . "(" . $email . ")", $message);

            Flash::success("Je bericht is verzonden!");
        }

        public function onT(){
            print("Hoi");
        }
    }
?>