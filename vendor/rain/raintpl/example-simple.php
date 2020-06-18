<?php

    // namespace
    use Rain\Tpl;

	// include
	include "library/Rain/Tpl.php";
	
	// config
	$config = array(
					"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
					"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views/cache/",
					"debug"         => false // set to false to improve the speed
				   );

	Tpl::configure( $config );

	// Add PathReplace plugin (necessary to load the CSS with path replace)
	require_once('library/Rain/Tpl/Plugin/PathReplace.php');
	Rain\Tpl::registerPlugin( new Rain\Tpl\Plugin\PathReplace() );


	// create the Tpl object
	$tpl = new Tpl;

	// assign a variable
	$tpl->assign( "name", "Obi Wan Kenoby" );

	// assign an array
	$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

	// draw the template
	$tpl->draw( "simple_template" );

        
?>