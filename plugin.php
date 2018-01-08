<?php

class pluginMinifyHTML extends Plugin {

	public function init()
	{
		// Fields and default values for the database of this plugin
	}

	public function afterSiteLoad()
	{
        require_once('class-minify-html.php');
        $buffer = ob_get_clean();
        echo Minify_HTML::minify($buffer);

	}

}