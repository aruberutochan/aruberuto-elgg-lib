<?php
/**
 * Describe plugin here
 */

elgg_register_event_handler('init', 'system', 'aruberuto_lib_init');

function aruberuto_lib_init() {
	// Rename this function based on the name of your plugin and update the
	// elgg_register_event_handler() call accordingly
	elgg_extend_view('css/elgg', 'aruberuto_lib/aat_css');
	elgg_extend_view('css/elgg', 'aruberuto_lib/integer_css');
	
	// Register a script to handle (usually) a POST request (an action)
	$base_dir = elgg_get_plugins_path() . 'aruberuto_lib/lib';
	elgg_register_library('aruberuto:aat', "$base_dir/aat.php");

	
}
