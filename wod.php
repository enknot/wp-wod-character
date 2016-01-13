<?php
/*
  Plugin Name: World of Darkness
  Plugin URI:  https://github.com/enknot/wp-wod-character.git
  Description: A plugin suite for [World|Chronicle] Of Darkness RPG Games.
  Version:     0.0.1
  Author:      Enknot Muja <storytellerw@enknot.com>
  Author URI:  https://enknot.com
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  Domain Path: /???
  Text Domain: my-toolset
 */


if(! defined('ABSPATH')){
    //log and exit   use wp log
//    log('direct access error');  exit;
}


/**
 * Adds new post types: Character, Chronicle, Setting, and Session
 */
function wod_register_post_type(){
    register_post_type('character', ['public' => true, 'label' => 'Character']);
    register_post_type('chronicle', ['public' => true, 'label' => 'Chronicle']);
    register_post_type('story', ['public' => true, 'label' => 'Story']);
    register_post_type('session', ['public' => true, 'label' => 'Session']);
}
add_action('init', 'wod_register_post_type');