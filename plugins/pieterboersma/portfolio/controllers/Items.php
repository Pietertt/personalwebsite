<?php
    namespace pieterboersma\Portfolio\Controllers;

    use Backend;
    use October\Rain\Support\Facades\Flash;
    use Backend\Facades\BackendMenu;
    use Backend\Classes\Controller;
    use Illuminate\Support\Facades\Redirect;

    use \pieterboersma\Portfolio\Models\Item;

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

            $this->pageTitle = 'Beheer je portfolio items';
        }
    
        public function index(){
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/columns.yaml');
            $config->model = new \pieterboersma\portfolio\models\item;
            $config->recordUrl = 'pieterboersma/portfolio/items/update/:id';

            $widget = $this->makeWidget('Backend\Widgets\Lists', $config);
            $widget->bindToController();
            $this->vars['widget'] = $widget;
        }

        public function create(){
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/fields.yaml');
            $config->model = new \pieterboersma\portfolio\models\item;

            $widget = $this->makeWidget('Backend\Widgets\Form', $config);

            $this->vars['widget'] = $widget;
        }

        public function update($id = null){
            $config = $this->makeConfig('$/pieterboersma/portfolio/models/item/fields.yaml');
            $config->model = Item::find($id);

            $widget = $this->makeWidget('Backend\Widgets\Form', $config);

            $this->vars['widget'] = $widget;
        }

        public function onUpdate($id = null){
            $data = post();

            $item = Item::find($id);
            $item->title = $data["title"];
            $item->description = $data["description"];
            $item->identifier = $data["identifier"];
            $item->labels = $data["labels"];

            $item->save();

            Flash::success("Succesvol opgeslagen");
        }

        public function onCreate(){
            $data = post();

            $item = new Item;
            $item->title = $data["title"];
            $item->description = $data["description"];
            $item->identifier = $data["identifier"];
            $item->labels = $data["labels"];

            $item->save();

            Flash::success("Succesvol opgeslagen");
            return Redirect::to(Backend::url('pieterboersma/portfolio/items'));
        }

        public function onDeletes($id){
            $data = post();

            $item = Item::find($id);

            $item->delete();

            Flash::success("Item succesvol verwijderd");
            return Redirect::to(Backend::url('pieterboersma/portfolio/items'));
        }
    }
?>