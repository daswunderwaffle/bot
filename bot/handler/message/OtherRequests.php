<?php
/**
 * Created by PhpStorm.
 * User: Fow
 * Date: 13.04.2018
 * Time: 14:39
 */

class OtherRequests
{
    public static function getThemesList() {
        $message = "темы темы темы";
        // get запрос /api/v1/problems/problem_types/problem_type
        return $message;
    }
    public static function getResourceTypesList() {
        $message = "ресурсы ресурсы ресурсы";
        // get запрос /api/v1/resources/resource
        return $message;
    }
    public static function setUserPreferredResource($userId, $preferredResource) {
        $message = "функция setUsePreferredResource, пользователь " . $userId . " ресурс " . $preferredResource;
        // put запрос api/v1/resources/resource
        return array("user_id" => $userId, "message" => $message);
    }
    public static function getHelpMessage() {
        $message = ["Вот список команд, которые ты можешь использовать:\r\n
                    \"задание\" - я пришлю текст случайного задания из банка заданий\r\n
                    \"задание <название темы>\" - я пришлю текст задания на определенную тематику. Например, \"задание робот\"\r\n
                    \"задание <номер в КИМе>\" - я пришлю текст задания под указанным тобой номером. Например, \"задание 13\"\r\n
                    \"ответ <номер задания>\" - я пришлю правильный ответ на задание под указанным тобой номером. Например, \"ответ 12345\"",
                    "\"<номер задания> <ответ>\" - я проверю правильность твоего ответа на задание под указанным тобой номером. Например, \"12345 101\"\r\n
                    \"разбор <номер задания>\" - я пришлю текст решения задания под указанным тобой номером. Например, \"разбор 12345\"\r\n
                    \"темы\" - я пришлю список доступных тем, по которым можно запрашивать задания\r\n
                    \"ресурсы\" - я пришлю список типов ресурсов, которые доступны при выдаче задания и условия\r\n
                    \"ресурс <название ресурса>\" - я запомню, что задания и разборы ты хочешь получать в указанном виде (конечно, если я так умею). Например, \"ресурс изображения\""];
        return $message;
    }
    public static function getBasicMessage() {
        $message = "Я не понимаю, что ты от меня хочешь. Напиши \"помощь\", чтобы узнать, что я умею";
        return $message;
    }
}