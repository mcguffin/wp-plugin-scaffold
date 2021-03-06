<?php
/**
 *	@package {{plugin_namespace}}\Shortcode\Mce
 *	@version 1.0.0
 *	2018-09-22
 */


namespace {{plugin_namespace}}\Shortcode\Mce;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}

use {{plugin_namespace}}\Core;
use {{plugin_namespace}}\Admin\Mce;

class Mce{{module.classname}} extends Mce\Mce {

	protected $module_name = '{{shortcode_slug}}-shortcode';

	protected $editor_buttons = array(
		'mce_buttons_2' => array(
			'{{shortcode_slug}}_shortcode'	=> -1,
		),
	);

	protected $toolbar_css	= true;

	protected $editor_css	= true;

	/**
	 *	@inheritdoc
	 */
	protected function __construct() {
		$this->plugin_params = array(
			'l10n' => array(
				'name'		=> __( '{{shortcode_name}}', '{{wp_plugin_slug}}' ),
				'insert'	=> __( 'Insert {{shortcode_name}}', '{{wp_plugin_slug}}' ),
			),
		);

		parent::__construct();
	}
}
