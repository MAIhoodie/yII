<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "print_place".
 *
 * @property int $id Ид расположения
 * @property string $print_place Название расположения
 *
 * @property Hoodies[] $hoodies
 */
class PrintPlace extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'print_place';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['print_place'], 'required'],
            [['print_place'], 'string', 'max' => 25],
            [['print_place'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид расположения',
            'print_place' => 'Название расположения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies()
    {
        return $this->hasMany(Hoodies::className(), ['name_print_place' => 'print_place']);
    }
}
