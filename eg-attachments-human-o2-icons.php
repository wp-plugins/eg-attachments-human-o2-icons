<?php
/*
Plugin Name: EG-Attachments-Human-o2-Icons
Plugin URI: http://wordpress.org/plugins/ega-human-o2-icons
Description: Add a set of icons to the plugin EG-Attachments
Version: 1.0
Author: EmmanuelG
Author URI: http://www.emmanuelgeorjon.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /lang
Text Domain: ega-human-o2-icons
*/

/*
Ega-Human-o2-Icons is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Ega-Human-o2-Icons is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Ega-Human-o2-Icons. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

Class EGA_Human_o2_Icons {

	static $instance 			= null;
	static $icon_set_id 		= 'human';
	static $icon_set_title		= 'Human O2';
	static $icon_path_for_ext 	= 'images/file-ext';
	static $icon_path_for_type 	= 'images';
	static $textdomain			= 'ega-human-o2-icons';

	static $path;
	static $url;

	/**
	  * icons_file_ext
	  *
	  *
	  * @package Ega-Human-o2-Icons
	  *
	  * @param
	  * @return
	  */
	static function icons_file_ext($icon_path_url) {

		if ( self::$icon_path_for_ext ) {
			$icon_path_url  = array_merge( $icon_path_url,
									array( self::$icon_set_id => array( path_join(self::$path, self::$icon_path_for_ext) => path_join(self::$url, self::$icon_path_for_ext)
								)
							)
						);
		}
		return ($icon_path_url);
	} // End of icons_file_ext

	/**
	  * icons_type
	  *
	  *
	  * @package Ega-Human-o2-Icons
	  *
	  * @param
	  * @return
	  */
	static function icons_type($icon_path_url) {

		if ( self::$icon_path_for_type ) {
		$icon_path_url  = array_merge( $icon_path_url,
									array( self::$icon_set_id => array( path_join(self::$path,self::$icon_path_for_type) => path_join(self::$url, self::$icon_path_for_type)
								)
							)
						);
		}
		return ($icon_path_url);
	} // End of icons_type

	/**
	  * icons_set
	  *
	  *
	  * @package Ega-Human-o2-Icons
	  *
	  * @param
	  * @return
	  */
	static function icons_set($icon_set_list) {

		$icon_set_list = array_merge( $icon_set_list,
									array(self::$icon_set_id => __(self::$icon_set_title, self::$textdomain)
								)
							);
		return ($icon_set_list);
	} // End of function icons_set

	/**
	  * init_instance
	  *
	  *
	  * @package Ega-Human-o2-Icons
	  *
	  * @param
	  * @return
	  */
	static function init_instance() {
        is_null( self::$instance ) AND self::$instance = new self;
        return self::$instance;
	} // End of function init

	/**
	  * init
	  *
	  *
	  * @package Ega-Human-o2-Icons
	  *
	  * @param
	  * @return
	  */
	function __construct() {

		self::$path = plugin_dir_path(__FILE__);
		self::$url  = plugin_dir_url(__FILE__);

		add_filter('ega_add_icon_set', 			array( $this, 'icons_set')		);
		add_filter('ega_add_icon_for_file_ext', array( $this, 'icons_file_ext')	);
		add_filter('ega_add_icon_for_type', 	array( $this, 'icons_type')		);
    } // End of function __construct

} // End of class

add_action( 'plugins_loaded', array( 'EGA_Human_o2_Icons', 'init_instance' ) );



?>