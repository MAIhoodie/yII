<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chest".
 *
 * @property int $id
 * @property int $id_user Идентификатор пользователя
 * @property int $id_product Артикулы заказов
 * @property int $quantity Количество
 *
 * @property TblOrdersArticul[] $tblOrdersArticuls
 * @property TblOrdersArticul[] $tblOrdersArticuls0
 */
class Chest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user', 'id_product', 'quantity'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Идентификатор пользователя',
            'id_product' => 'Артикулы заказов',
            'quantity' => 'Количество',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrdersArticuls()
    {
        return $this->hasMany(TblOrdersArticul::className(), ['articul_product' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrdersArticuls0()
    {
        return $this->hasMany(TblOrdersArticul::className(), ['quantity' => 'quantity']);
    }
}
