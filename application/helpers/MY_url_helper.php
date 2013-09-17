<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('admin_url'))
{
	/**
	 * Generate admin URLs
	 *
	 * @param  string $path 
	 *
	 * @return string
	 */
	function admin_url($path = '')
	{
		return site_url('admin/'.$path);
	}
}