<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "style".
 *
 * @property int $id Ид фасона
 * @property string $style Название фасона
 *
 * @property Hoodies[] $hoodies
 * @property HoodiesStyle[] $hoodiesStyles
 */
class Style extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'style';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['style'], 'required'],
            [['style'], 'string', 'max' => 20],
            [['style'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид фасона',
            'style' => 'Название фасона',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies()
    {
        return $this->hasMany(Hoodies::className(), ['name_style' => 'style']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodiesStyles()
    {
        return $this->hasMany(HoodiesStyle::className(), ['style' => 'style']);
    }
}
