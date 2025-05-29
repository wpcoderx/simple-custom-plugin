<?php
/*
Plugin Name: My Simple Custom Plugin
Description: A basic plugin for CI/CD demo.
Version: 1.0
Author: siraj shaikh
*/

require_once plugin_dir_path(__FILE__) . 'includes/class-my-simple-custom-plugin.php';

/* test Call */
My_Simple_Plugin::init();

