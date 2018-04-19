<?php
/**
 * Created by PhpStorm.
 * User: Fow
 * Date: 16.04.2018
 * Time: 23:36
 */

class UnidentifiedPartialRequests
{
    public static function help()
    {
        return "Чтобы посмотреть справку, напиши \"помощь\"";
    }
    public static function themes()
    {
        return "Если хочешь узнать список тем, напиши \"темы\".
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
    public static function tasks()
    {
        return "Извини, я понимаю всего три похожие команды: 
                \"задание\" - я пришлю тебе случайно выбранное мной задание
                \"задание <тема>\" - я пришлю тебе задание по теме, которую ты укажешь
                \"задание <номер в КИМе>\" - я пришлю тебе задание по номеру из КИМа\r\n
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
    public static function anasysis()
    {
        return "Если ты хочешь получить разбор какого-либо задания, напиши мне \"разбор <номер задания>\"\r\n
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
    public static function resources()
    {
        return "Ты хочешь узнать список ресурсов? Напиши мне \"ресурсы\"\r\n
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
    public static function resource()
    {
        return "Чтобы установить ресурс, которые тебе нравится, напиши \"ресурс <название ресурса>\"\r\n
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
    public static function answer()
    {
        return "Чтобы узнать ответ на задание, напиши мне \"ответ <номер задания>\"\r\n
                Чтобы посмотреть список всех команд, которые я понимаю, напиши \"помощь\"";
    }
}