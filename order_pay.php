<?php
/**
 * User: luyunhua
 * Email: luyunhua1987@gmail.com
 * Date: 18/5/25
 */

class OrderPay
{
	/**
	 * Get the order payment url
	 * @param $order_id
	 * @return null|string
	 */
	public static function getPaymentUrl($order_id)
	{
		// @TODO get the payment url, if failed return null
		$payment_url = 'https://www.alipay.com/xxxxxxxx';
		if ($payment_url === null) {
			// @TODO trigger report
			return null;
		} else {
			return $payment_url;
		}
	}
}