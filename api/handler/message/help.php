<?php
/**
 * Created by PhpStorm.
 * User: kurenchuksergey
 * Date: 08.03.18
 * Time: 16:46
 */

class help implements iHandler {

	public static function run($data) {
		$message = "Вот список команд, которые ты можешь использовать:
\"случайное задание\" - я пришлю текст случайного задания из банка заданий
\"задание <название темы>\" - я пришлю текст задания на определенную тематику. Например,\"задание робот\".
\"задание <номер в КИМе>\" - я пришлю текст задания под указанным тобой номером. Например, \"задание 13\".
\"ответ <номер задания>\" - я пришлю правильный ответ на задание под указанным тобой номером. Например, \"ответ 12345\".
\"<номер задания> <ответ>\" - я проверю правильность твоего ответа на задание под указанным тобой номером. Например, \"12345 101\".
\"разбор <номер задания>\" - я пришлю текст решения задания под указанным тобой номером. Например, \"разбор 12345\".
\"статистика\" - я пришлю тебе твои результаты решений задач.";
		return array("user_id" => $data->object->user_id, "message" => $message);
	}
}