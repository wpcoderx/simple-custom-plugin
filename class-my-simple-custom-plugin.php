<?php

class My_Simple_Plugin {
    public static function init() {
        add_action('init', [__CLASS__, 'say_hello']);
    }

    public static function say_hello() {
        error_log('Hello from My Simple Plugin!');
    }
}
