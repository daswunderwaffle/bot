<?php
/**
 * Created by PhpStorm.
 * User: kurenchuksergey
 * Date: 08.03.18
 * Time: 15:52
 */
include_once "iHandler.php";

class confirmation {

	public static function run($data) {
		echo CONFIRMATION_TOKEN;
		exit();
	}
}