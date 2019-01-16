<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * TestModel is the model behind the login form.
 *
 * @var $secondName Фамилия сотрудника.
 * @var $age Возраст сотрудника.
 * @var $timeWork Стаж сотрудника.
 */
class TestModel extends Model
{
    public $secondName;
    public $age;
    public $timeWork;
}
