=== EG-Attachments-Human-o2-Icons ===
Contributors: EmmanuelG
Donate link: http://www.emmanuelgeorjon.com/donate?plugin=EG-Attachments-Human-o2-Icons
Tags: posts, attachments, icons
Requires at least: 3.9.0
Tested up to: 4.2 Beta 2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds a set of icons to the EG-Attachments plugin.

== Description ==

[EG-Attachments](http://wordpress.org/plugins/eg-attachments/) is a WordPress plugin, helping to display files attached to the posts. The plugin proposes a shortcode with many options.
EGA-Human-o2-Icons (this plugin) adds an additional set of icons, on top of the default icons set provided by EG-Attachments.

This plugin is working with EG-Attachments 2.1 and upper.

== Installation ==

Automatic installation

1.Log into your WordPress admin
2.Click Plugins
3.Click Add New
4.Search for EGA-Human-o2-Icons
5.Click Install Now under "EGA-Human-o2-Icons"
6.Activate the plugin Ega-Human-o2-Icons
 
Manual installation:

1.Download the plugin
2.Extract the contents of the zip file
3.Upload the contents of the zip file to the wp-content/plugins/ folder of your WordPress installation
4.Then activate the Plugin from Plugins page

The plugin is now ready to be used.
A new set of icons is added in the settings page of EG-Attachments


== Frequently Asked Questions ==

= Can I develop a similar plugin, with my own icons =

Of course.


= How can I develop this kind of plugin =

1. Duplicate this plugin
2. Rename the directory, and rename the php file in this directory
3. Edit the php file, 
	- Update the comments
	- Plugin Name: 	<name of the plugin>
		- Plugin URI: 	<url of your plugin> (can be empty)
		- Description: 	<short description of your plugin>
		- Version: 		<version>
		- Author: 		<name of the author>
		- Author:	 	<url to the author site>
		- Text Domain: 	<textdomain>
	- Change the name of the class in lines 30 and 137
	- Replace the name of the plugin (Ega-Human-o2-Icons), in all comments
4. Copy your own icon files into the directory
	- <plugin directory>/icons: icons related to types of files,
	- <plugin directory>/icons/file-ext: icons related to file extension

WordPress manages the following files types:
- audio			
- code			
- document		
- interactive	
- spreadsheet	
- text			
- video			

== Screenshots ==

1. List of attachments with the Human-O2 icons
2. Human-O2 icons set appears in the list of icon sets in the EG-Attachments settings

== Changelog ==

= Version 1.0 - March 20th,2015 =

* New: First release

