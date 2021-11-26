<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property string $material
 *
 * @property Hoodies[] $hoodies
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['material'], 'required'],
            [['material'], 'string', 'max' => 20],
            [['material'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material' => 'Material',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies()
    {
        return $this->hasMany(Hoodies::className(), ['name_material' => 'material']);
    }
}
