<?php
/*
Plugin Name: Dive Log Book
Plugin URI: http://www.blue-design.ch
Description: A brief description of the Plugin.
Version: 0.1
Author: Marco Wagner
Author URI: http://www.blue-design.ch
License: GNU General Public License Version 2
*/

/*  Copyright 2011 Marco Wagner

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function my_function($text){
	//$text = "Hello World";
	return $text;
}
add_filter('the_content', 'my_function');
?>
