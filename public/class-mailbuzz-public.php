<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.mailbuzz.io/
 * @since      1.0.0
 *
 * @package    Mailbuzz
 * @subpackage Mailbuzz/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mailbuzz
 * @subpackage Mailbuzz/public
 * @author     james <james@mailbuzz.io>
 */
class Mailbuzz_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Unique ID for this class.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $id    The ID of this class.
	 */
	private $id;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		$this->id     = $this->plugin_name . '-public';
	}

	/**
	 * Register the JavaScript and stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_public_resources()
	{
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mailbuzz_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mailbuzz_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style($this->id, MAILBUZZ_URL . 'public/css/mailbuzz-public.css', array(), $this->version, 'all');
		wp_enqueue_script($this->id, MAILBUZZ_URL . 'public/js/mailbuzz-public.js', array('jquery'), $this->version, false);
	}

	/**
	 * Register the JavaScript and stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_public_display()
	{
		include 'partials/mailbuzz-public-display.php';
	}
}