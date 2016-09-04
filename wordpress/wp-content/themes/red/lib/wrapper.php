<?php namespace App;

/**
 * Theme wrapper
 *
 * @link https://roots.io/sage/docs/theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */

function template_path() 
{
	return Wrapper::$main_template;
}

function sidebar_path() 
{
	return new Wrapper('templates/sidebar.php');
}

class Wrapper 
{
	public static $main_template;
	public $slug;
	public $templates;
	public static $base;
	
	public function __construct($template = 'base.php') 
	{
		$this->slug = basename($template, '.php');
		$this->templates = [$template];

		if (self::$base) 
		{
			$str = substr($template, 0, -4);
			array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
		}
	}

	public function __toString() 
	{
		$this->templates = apply_filters('sage/wrap_' . $this->slug, $this->templates);
		return locate_template($this->templates);
	}

	public static function wrap($main) 
	{
		if (!is_string($main)) 
			return $main;

		self::$main_template = $main;
		self::$base = basename(self::$main_template, '.php');

		if (self::$base === 'index')
			self::$base = false;

		return new Wrapper();
	}
}
add_filter('template_include', [__NAMESPACE__.'\Wrapper', 'wrap'], 109);
?>