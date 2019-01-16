<?php
namespace app\controllers;

use app\models\TestModel;
use yii\web\Controller;

class TestController extends Controller
{
    /**
    * Test-model
    *
    * @property string $info
    * @return array Возвращает массив с переменными и их значениями в /test/index.
    */

    public function actionIndex()
    {
        $info = new TestModel();

        $info->secondName = 'Bobrov';
        $info->age = 42;
        $info->timeWork = 3;

       // return 'test';
        // обернуто layouts
        // return $this->renderContent('test');
        // собственная view
        return $this->render('index', [
            'new'=>'Персональные данные',
            'info'=>$info
        ]);
    }
}