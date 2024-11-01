<?php
/**
 * Plugin Name: SyntaxHighligher Evolved: Swift Brush
 * Plugin URI: http://randexdev.com/syntaxhighlighter-evolved-swift-brush
 * Description: Adds support for the Swift Programming Language to the SyntaxHighlighter Evolved plugin.
 * Version: 1.0
 * Author: Randex
 * Author URI: http://randexdev.com/
 * License: GPL2

	Copyright 2014  Randexdev  (email : randexdev@me.com)

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
	
	// SyntaxHighlighter Evolved does not do anything early in the "init" hook, so best to wait until after that
	add_action('init', 'syntaxhighlighter_swift_regscript');
	
	// Tell SyntaxHighlighter Evolved about this new brush
	add_filter('syntaxhighlighter_brushes', 'syntaxhighlighter_swift_addlang');
	
	// Register the brush file with WordPress
	function syntaxhighlighter_swift_regscript() {
		wp_register_script('syntaxhighlighter-brush-swift', plugins_url('shBrushSwift.js', __FILE__), array('syntaxhighlighter-core'), '1.0.2');
	}
	
	// Filter SyntaxHighlighter Evolved's language array
	function syntaxhighlighter_swift_addlang($brushes) {
		$brushes['swift'] = 'swift';
		return $brushes;
	}
?>