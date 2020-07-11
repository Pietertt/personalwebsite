<?php
      namespace pieterboersma\Portfolio\Components;

use Illuminate\Support\Facades\DB;

class Portfolio extends \Cms\Classes\ComponentBase {
          public function componentDetails(){
              return [
                  'name' => 'Portfolio',
                  'description' => 'Displays all available portfolio items'
              ];
          }
      
          // This array becomes available on the page as {{ component.posts }}
          public function posts()
          {
            $users = DB::select('select * from users where active = ?', [1]);
          }
      }
?>