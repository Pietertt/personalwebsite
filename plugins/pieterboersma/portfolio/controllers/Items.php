<?php
    namespace pieterboersma\Portfolio\Controllers;

    use Backend;
    use Backend\Facades\BackendMenu;
    use Backend\Classes\Controller;

    class Items extends Controller {
        public $implement = ['Backend.Behaviors.FormController'];
        public $formConfig = 'config_form.yaml';

        public function __construct()
        {   
            parent::__construct();
            BackendMenu::setContext('Pieterboersma.Portfolio', 'portfolio', 'items');

            $this->pageTitle = 'Voeg portfolio items toe';
        }
    
        public function index()   
        {
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/fields.yaml');
            $config->model = new \pieterboersma\portfolio\models\item;

            $widget = $this->makeWidget('Backend\Widgets\Form', $config);

            $this->vars['widget'] = $widget;
        }
    }
?>