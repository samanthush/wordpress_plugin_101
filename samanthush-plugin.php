<?php
/**
 * @package SamanThushPlugin
 */
/**
 * Plugin Name:       SamanThush Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Thushara Saman
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 */

/*
SamanThushPlugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
SamanThushPlugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with SamanThushPlugin. If not, see {URI to Plugin License}.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

class SamanThushPlugin{

    function activate(){

        echo 'plugin is activated!';
    }

    function deactivate(){

    }

    function uninstall(){


    }
}

if(class_exists('SamanThushPlugin')){

    $plugin = new SamanThushPlugin();
}

register_activation_hook(__FILE__, [$plugin, 'activate']);

register_deactivation_hook(__FILE__, [$plugin, 'deactivate']);