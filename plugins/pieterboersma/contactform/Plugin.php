<?php
    namespace pieterboersma\contactform;

    use Backend\Facades\Backend;

    class Plugin extends \System\Classes\PluginBase {
        public function pluginDetails(){
            return [
                'name' => 'Contact',
                'description' => 'A configurable contact form',
                'author' => 'Pieter Boersma',
                'icon' => 'icon-leaf'
            ];
        }

        public function registerComponents(){
            return [
                'pieterboersma\contactform\components\form' => 'contactform'
            ];
        }

        public function registerNavigation(){               
            return [
                'contactform' => [
                    'label'       => 'contact',
                    'url'         => Backend::url('pieterboersma/contactform/overview'),
                    'icon'        => 'icon-newspaper-o',
                    'permissions' => ['pieterboersma.contactform.*'],
                    'order'       => 500
                ]
            ];
        }
    }
?>