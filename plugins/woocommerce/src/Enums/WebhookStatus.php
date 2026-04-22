<?php

declare( strict_types = 1 );

namespace Automattic\WooCommerce\Enums;

/**
 * Enum class for the possible webhook statuses (as returned by `wc_get_webhook_statuses()`).
 *
 * @since 10.8.0
 */
final class WebhookStatus {
	/**
	 * Active webhook: delivers payload.
	 *
	 * @var string
	 */
	public const ACTIVE = 'active';

	/**
	 * Paused webhook: does not deliver payload, paused by admin.
	 *
	 * @var string
	 */
	public const PAUSED = 'paused';

	/**
	 * Disabled webhook: does not deliver payload, paused automatically due to consecutive failures.
	 *
	 * @var string
	 */
	public const DISABLED = 'disabled';
}
