<?php
namespace app\controllers;

use app\components\TestService;
use yii\web\Controller;

class TestController extends Controller
{
    /**
    * Test-model
    *
    * @property string $new
    * @return array Возвращает массив с переменными и их значениями в /test/index.
    */

    public function actionIndex()
    {
        return $this->render('index', [
            'new'=>\YII::$app->test->returnUnknown(),
        ]);
    }
}