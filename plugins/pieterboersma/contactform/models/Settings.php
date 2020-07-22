<?php
    namespace pieterboersma\contactform\models;

    use Model;

    class Settings extends Model {
        public $implement = ['System.Behaviors.SettingsModel'];
        public $settingsCode = 'pieterboersma_contactform_settings';
        public $settingsFields = 'fields.yaml';
    }
?>