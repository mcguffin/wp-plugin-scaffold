<?php
/**
 *	@package {{plugin_namespace}}\WPRest
 *	@version 1.0.0
 *	2018-09-22
 */


namespace {{plugin_namespace}}\WPRest;

use AccessAreas\Core;
use AccessAreas\Model;


class WPRest{{module.classname}} extends Core\Singleton {

	/**
	 *	@inheritdoc
	 */
	protected function __construct() {

		$namespace = WPRest::instance()->get_namespace();

		register_rest_route( $namespace, '/{{module.slug}}', array(
			array(
				'methods'				=> \WP_REST_Server::READABLE,
				'permission_callback'	=> array( $this, 'get_permissions' ),
				'callback'				=> array( $this, 'get_item' ),
			),
			array(
				'methods'				=> \WP_REST_Server::EDITABLE,
				'permission_callback'	=> array( $this, 'get_permissions' ),
				'callback'				=> array( $this, 'edit_item' ),
				'args' 					=> array(
					'title' => array(
						'required' 			=> true,
						'type'				=> 'string',
						'sanitize_callback'	=> 'sanitize_textfield',
						'description'		=> __( 'Name of the Item', '{{wp_plugin_slug}}' ),
					),
				),
			),
			array(
				'methods'				=> \WP_REST_Server::DELETABLE,
				'permission_callback'	=> array( $this, 'get_permissions' ),
				'callback'				=> array( $this, 'delete_item' ),
			)
		) );
	}

	public function get_permissions() {
		return current_user_can( 'manage_options' );
	}

	public function get_item( $request ) {
	}


	public function edit_item( $request ) {
	}


	public function delete_item( $request ) {
	}


}
