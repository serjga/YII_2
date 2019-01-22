<?php
namespace app\components;

// use app\models\TestModel;
use yii\base\Component;

class TestService extends Component
{
    /**
    * My Test Service
    *
    * @return string Возвращает значение свойства.
    */

    public $unknown = 'ABC';

    public function returnUnknown()
    {
        return $this->unknown;
    }
}