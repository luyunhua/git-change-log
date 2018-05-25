<?php
/**
 * User: luyunhua
 * Email: luyunhua1987@gmail.com
 * Date: 18/5/25
 */

class user
{
	/**
	 * @param string $username
	 * @param string $email
	 * @return int|null
	 */
	public static function add(string $username, string $email)
	{
		// @TODO add a new user, here fake the result
		if (strlen($username) < 1) {
			return null;
		}
		if (strlen($username) >= 4 && strlen($username) <= 16) {
			return 12345;
		}
	}
}