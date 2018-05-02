<?php
use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;

require '../vendor/autoload.php';
require '../config/config.php';

$app = new \Slim\App();

$container = $app->getContainer();

// логгер
$container['logger'] = function ($c)
{
    $logger = new \Monolog\Logger('APIlogger');
    $file_handler = new \Monolog\Handler\StreamHandler('../logs/app.log');
    $logger->pushHandler($file_handler);
    return $logger;
};

// обработка ошибок
$container['errorHandler'] = function ($c)
{
    return function ($request, $response, $exception) use ($c) {
        // если ошибка произошла по вине пользователя
        if ($exception instanceof UserExceptions)
        {
            return $c['response']->withJson(array ('success' => 'false',
                'error' => ["code" => $exception->getCode(),
                    "message" => $exception->getMessage()]), 200, JSON_UNESCAPED_UNICODE);
        }
        // иначе, системная ошибка
        $c->logger->addInfo($exception->getMessage());
        return $c['response']->withStatus($exception->getCode())
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong!');
    };
};

// Виталик
$app->get('/api/v1/problems/problem', function (Request $request, Response $response) {
$type = $request->getQueryParam('type', null);
$user_id = $request->getQueryParam('user_id', null);
$service = $request->getQueryParam('service', null);
    
});

// Виталик
$app->get('/api/v1/solutions/solution', function (Request $request, Response $response) {
$problem_id = $request->getQueryParam('problem_id', null);
$user_id = $request->getQueryParam('user_id', null);
$service = $request->getQueryParam('service', null);
    
});

// Виталик
$app->get('/api/v1/answers/answer', function (Request $request, Response $response) {
$problem_id = $request->getQueryParam('problem_id', null);
$user_id = $request->getQueryParam('user_id', null);
$service = $request->getQueryParam('service', null);
    
});

// Андрей
$app->post('/api/v1/answers/answer', function (Request $request, Response $response) {

});

// Андрей
$app->get('/api/v1/resources/resource', function (Request $request, Response $response) {

});

// Андрей
$app->put('api/v1/resources/resource', function (Request $request, Response $response)
{

});

// Андрей
$app->get('/api/v1/problems/problem_types/problem_type', function (Request $request, Response $response) {

});

$app->run();
?>
