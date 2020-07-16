<?php
    namespace pieterboersma\Portfolio\Controllers;

    use Backend;
    use October\Rain\Support\Facades\Flash;
    use Backend\Facades\BackendMenu;
    use Backend\Classes\Controller;

    class Items extends Controller {
        public $implement = [
            'Backend.Behaviors.FormController',
            'Backend.Behaviors.ListController'
        ];

        public $formConfig = 'config_form.yaml';
        public $listConfig = 'config_list.yaml';

        public function __construct(){   
            parent::__construct();
            BackendMenu::setContext('Pieterboersma.Portfolio', 'portfolio', 'items');

            $this->pageTitle = 'Voeg portfolio items toe';
        }
    
        public function index(){
         
        }

        public function test(){
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/columns.yaml');
            $config->model = new \pieterboersma\portfolio\models\item;

            $widget = $this->makeWidget('Backend\Widgets\Lists', $config);

            $this->vars['widget'] = $widget;
        }

        public function update(){
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/fields.yaml');
            $config->model = new \pieterboersma\portfolio\models\item;

            $widget = $this->makeWidget('Backend\Widgets\Form', $config);

            $this->vars['widget'] = $widget;
        }

        public function onUpdate($id = null){
            $data = post();

            trace_log($data);
            Flash::success('Succesvol opgeslagen');
        }
    }
?>