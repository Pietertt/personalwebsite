<?php
    namespace pieterboersma\contactform\Controllers;

    use Backend;
    use October\Rain\Support\Facades\Flash;
    use Backend\Facades\BackendMenu;
    use Backend\Classes\Controller;
    use Illuminate\Support\Facades\Redirect;

    use pieterboersma\contactform\models\Settings;

    class Overview extends Controller {

        public function __construct(){   
            parent::__construct();
            BackendMenu::setContext('Pieterboersma.Contactform', 'contactform', 'items');

            $this->pageTitle = 'Beheer je portfolio items';
        }
    
        public function index(){
            $settings = Settings::instance();
            $settings->api_key = 'ABCD';
            $settings->save();

            $t = Settings::get('api_key');

            $this->vars['test'] = $t;

        }
    }
?>