<?php
      namespace pieterboersma\Portfolio;

      class Plugin extends \System\Classes\PluginBase {
            public function pluginDetails(){
                  return [
                        'name' => 'Portfolio',
                        'description' => 'Work display',
                        'author' => 'Pieter Boersma'
                  ];
            }

            public function registerComponents(){
                  return [
                        'pieterboersma\Portfolio\Components\Portfolio' => 'portfolio'
                  ];
            }
      }
?>