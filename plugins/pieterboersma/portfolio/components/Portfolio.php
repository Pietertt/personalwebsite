<?php
      namespace pieterboersma\Portfolio\Components;

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
              return ['First Post', 'Second Post', 'Third Post'];
          }
      }
?>