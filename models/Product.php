<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    CONST SCENARIO_UPDATE = 'update';
    CONST SCENARIO_CREATE = 'create';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        
        return [
            // self::SCENARIO_DEFAULT => ['name', 'price', 'created_at']
            self::SCENARIO_UPDATE => ['!name', 'price', 'created_at'],
            self::SCENARIO_CREATE => ['name', 'price', 'created_at']
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'created_at'], 'required'],
            [['created_at'], 'integer'],
            [['price'], 'integer', 'min' => 1, 'max' => 999],
            [['name'], 'string', 'max' => 20],
            [['name'], 'filter', 'filter' => function($val) {
                return strip_tags(trim($val));
            }],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }
}
