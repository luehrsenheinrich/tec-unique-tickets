<?php
/**
 * _Lhpbp\Plugin_Component_Interface interface
 *
 * @package tecut
 */

namespace tecut;

/**
 * Interface for a plugin component that exposes template tags.
 */
interface Plugin_Component_Interface {
	/**
	 * Gets template tags to expose as methods on the Plugin_Functions class instance, accessible through `wp_tecut()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function plugin_functions();
}
