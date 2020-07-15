<?php
    namespace pieterboersma\Portfolio\Controllers;

    use Backend;
    use Backend\Facades\BackendMenu;
    use Backend\Classes\Controller;

    class Items extends Controller {

        public function __construct()
        {   
            parent::__construct();

            BackendMenu::setContext('Pieterboersma.Portfolio', 'portfolio', 'items');
        }
    
        public function index()   
        {
            return "Hoi";
        }
    }
?>