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
                        'icon'        => 'icon-bars',
                        'permissions' => ['pieterboersma.portfolio.*'],
                        'order'       => 500
                    ]
                ];
            }
      }
?>