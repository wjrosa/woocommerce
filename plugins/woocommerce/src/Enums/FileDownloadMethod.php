<?php

declare( strict_types = 1 );

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for the possible values of the 'woocommerce_file_download_method' option.
 *
 * @since 10.8.0
 */
final class FileDownloadMethod {
	/**
	 * Force downloads: files are served by WordPress with hidden URLs.
	 *
	 * @var string
	 */
	public const FORCE = 'force';

	/**
	 * X-Accel-Redirect / X-Sendfile: files are served by the web server using the X-Sendfile header.
	 *
	 * @var string
	 */
	public const XSENDFILE = 'xsendfile';

	/**
	 * Redirect only: the browser is redirected to the file URL.
	 *
	 * @var string
	 */
	public const REDIRECT = 'redirect';
}
