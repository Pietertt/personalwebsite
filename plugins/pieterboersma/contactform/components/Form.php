<?php
    namespace pieterboersma\contactform\components;

    class Form extends \Cms\Classes\ComponentBase {
        public function componentDetails(){
            return [
                'name' => 'Contact',
                'description' => 'Generates a contact form'
            ];
        }

        public function onTest(){
            print(input("name") . input("email") . input("message"));
        }
    }
?>