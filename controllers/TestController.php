<?php
namespace app\controllers;

use app\components\TestService;
use yii\web\Controller;
use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use yii\db\Query;

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
     //   \YII::$app->db->createCommand()->insert('user', ['username' => 'Петр', 'password_hash' => 'jhb8GjhdsJ', 'auth_key' => 'bshcbs39575bhfbghb', 
     //       'creator_id' => 1234566, 'updater_id' => 1245677, 'created_at' => 675484, 'updated_at' => 9644692])->execute();

/*
        \YII::$app->db->createCommand()->batchInsert('user', ['username', 'password_hash', 'auth_key', 'creator_id', 'updater_id', 'created_at', 'updated_at'], 
        
            [
                ['Иван', 'sbvsjrbvjsbEn', 'daCECSACHBH874jj', 67247652, 36164266, 1234543, 1240986],
                ['Степан', 'hsvcvcueqhs73', 'wteegvdWytrr8', 17895433, 13469889, 29875333, 1356788],
                ['Юрий', '263ygdav', 'fcdgvxhfee63bb', 1238765, 13467777, 87653222, 1280444], 
            ]
        )->execute();
*/
        $id = 1;

        $query = new Query();
        /*
        a)
        $result = $query
            ->from('user')
            ->where('id' => $id)
            ->all();
        */

        /*
        б)
        $result = $query
            ->from('user')
            ->where(['>', 'id', $id])
            ->orderBy(['username' => SORT_DESC])
            ->all();
       
        в)
        $result =  $query->select('count(1)')->from('user');
        _end($result);
        */

        /*
        
        5.

        \YII::$app->db->createCommand()->batchInsert('task', ['title', 'description', 'creator_id', 'updater_id', 'created_at', 'updated_at'], 
        
            [
                ['Задание 1', 'Описание задания 1', 2, 67247652, 36164266, 1234543],
                ['Задание 2', 'Описание задания 2', 2, 17895433, 13469889, 29875333],
                ['Задание 3', 'Описание задания 3', 2, 1238765, 13467777, 87653222], 
            ]
        )->execute();

        */

        $result = $query
            ->from('task')
            ->leftJoin('user', 'task.creator_id = user.id')
            ->all();    
            
        _end($result);    

        return $this->render('index', [
            'new'=>\YII::$app->test->returnUnknown(),
        ]);
    }
}