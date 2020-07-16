<?php
      namespace pieterboersma\Portfolio;

      use Backend\Facades\Backend;

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

            public function registerNavigation(){               
                return [
                    'blog' => [
                        'label'       => 'portfolio',
                        'url'         => Backend::url('pieterboersma/portfolio/items'),
                        'icon'        => 'icon-book',
                        'permissions' => ['pieterboersma.portfolio.*'],
                        'order'       => 500,
                        // Set counter to false to prevent the default behaviour of the main menu counter being a sum of
                        // its side menu counters
                        //'counter'     => ['\Author\Plugin\Classes\MyMenuCounterService', 'getBlogMenuCount'],
                        //'counterLabel'=> 'Label describing a dynamic menu counter'
                    ]
                ];
            }
      }
?>