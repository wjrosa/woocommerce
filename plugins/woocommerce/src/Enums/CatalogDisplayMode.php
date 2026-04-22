<?php

declare( strict_types = 1 );

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for the possible values of the 'woocommerce_shop_page_display' and 'woocommerce_category_archive_display' options.
 *
 * @since 10.8.0
 */
final class CatalogDisplayMode {
	/**
	 * Show products (default).
	 *
	 * @var string
	 */
	public const PRODUCTS = '';

	/**
	 * Show subcategories.
	 *
	 * @var string
	 */
	public const SUBCATEGORIES = 'subcategories';

	/**
	 * Show both products and subcategories.
	 *
	 * @var string
	 */
	public const BOTH = 'both';
}
