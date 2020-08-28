<?php
      namespace pieterboersma\Portfolio\Components;

use Illuminate\Support\Facades\DB;
use pieterboersma\Portfolio\Models\Item;

class Portfolio extends \Cms\Classes\ComponentBase {
          public function componentDetails(){
              return [
                  'name' => 'Portfolio',
                  'description' => 'Displays all available portfolio items'
              ];
          }
      
          public function items()
          {
            $items = Item::all();
            $items->reverse();

            return $items;
          }
      }
?>