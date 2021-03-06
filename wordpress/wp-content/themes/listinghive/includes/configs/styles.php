<?php
/**
 * Styles configuration.
 *
 * @package HiveTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'parent_frontend' => [
		'handle' => 'hivetheme-parent-frontend',
		'src'    => hivetheme()->get_url( 'parent' ) . '/style.css',
		'scope'  => [ 'frontend', 'editor' ],
	],
];
