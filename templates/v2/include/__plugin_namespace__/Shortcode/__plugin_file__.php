<?php


namespace {{plugin_namespace}}\Shortcode;

class {{plugin_class}} extends Shortcode {
	
	protected $shortcode = '{{shortcode_slug}}';

{{#mce}}
	private $mce = null;
{{/mce}}


{{#mce}}
	protected function __construct() {
		parent::__construct();

		$this->mce = MCE\{{plugin_class}}::instance();
	}
{{/mce}}

	function do_shortcode( $atts, $content ) {
		return sprintf( '<pre>%s</pre><p>%s</p>', var_export( $atts, true ), $content );
	}

}