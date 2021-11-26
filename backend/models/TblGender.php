<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_gender".
 *
 * @property int $id
 * @property string $name_gender
 *
 * @property Hoodies[] $hoodies
 */
class TblGender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_gender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_gender'], 'required'],
            [['name_gender'], 'string', 'max' => 20],
            [['name_gender'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_gender' => 'Name Gender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies()
    {
        return $this->hasMany(Hoodies::className(), ['name_gender' => 'name_gender']);
    }
}
