<?php
define('RIZE_VERSION', '0.0');
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/modules/inc/' );
require_once dirname( __FILE__ ) . '/modules/inc/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

require_once(get_template_directory().'/modules/functions/theme.php');