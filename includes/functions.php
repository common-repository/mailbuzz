<?php

/**
 * Get the Plugin Default Options.
 *
 * @since 1.0.0
 *
 * @param null
 *
 * @return array Default Options
 *
 * @author     james <james@mailbuzz.io>
 *
 */
if (!function_exists('mailbuzz_default_options')) :
	function mailbuzz_default_options()
	{
		$default_theme_options = array(
			'enable_popup' => false,
			'audience_id' => esc_html__('', 'mailbuzz'),
			'popup_image' => [
				'mediaId' => 0,
				'mediaUrl' => esc_url(''),
			],
			'title' => esc_html__('', 'mailbuzz'),
		);

		return apply_filters('mailbuzz_default_options', $default_theme_options);
	}
endif;

/**
 * Get the Plugin Saved Options.
 *
 * @since 1.0.0
 *
 * @param string $key optional option key
 *
 * @return mixed All Options Array Or Options Value
 *
 * @author     james <james@mailbuzz.io>
 *
 */
if (!function_exists('mailbuzz_get_options')) :
	function mailbuzz_get_options($key = '')
	{
		$options         = get_option('mailbuzz_options');
		$default_options = mailbuzz_default_options();

		if (!empty($key)) {
			if (isset($options[$key])) {
				return $options[$key];
			}
			return isset($default_options[$key]) ? $default_options[$key] : false;
		} else {
			if (!is_array($options)) {
				$options = array();
			}
			return array_merge($default_options, $options);
		}
	}
endif;