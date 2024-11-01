<?php
/*
Plugin Name: SyntaxHighlighter Evolved: @Formula Brush
Description: Adds support for the Lotus Notes @Formula language to the SyntaxHighlighter Evolved plugin.
Author: Ulrich Krause <eknori@eknori.de>
Version: 1.0.0
Author URI: https://eknori.de
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
*/

function wpse_load_formula_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'style_formula', $plugin_url . 'css/syntaxhighlighter_formula.css' );
}

add_action( 'wp_enqueue_scripts', 'wpse_load_formula_plugin_css' );
add_action( 'init', 'syntaxhighlighter_formula_regscript' );
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_formula_addlang' );

function syntaxhighlighter_formula_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-formula', plugins_url( 'shAtFormula.js', __FILE__ ), array('syntaxhighlighter-core'), '1.0.0' );
}

function syntaxhighlighter_formula_addlang( $brushes ) {
    $brushes['formula'] = 'formula';

    return $brushes;
}

?>