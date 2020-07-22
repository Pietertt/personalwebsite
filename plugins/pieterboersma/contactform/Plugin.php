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

        public function registerNavigation(){               
            return [
                'blog' => [
                    'label'       => 'contact',
                    'url'         => Backend::url('pieterboersma/contact/overview'),
                    'icon'        => 'icon-newspaper-o',
                    'permissions' => ['pieterboersma.contact.*'],
                    'order'       => 500
                ]
            ];
        }
    }
?>