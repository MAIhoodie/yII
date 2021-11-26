<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "printthematics".
 *
 * @property int $id ИД тематики
 * @property string $name_thematics Название тематики
 * @property int $quantity_sale Всего продано
 *
 * @property Hoodies[] $hoodies
 * @property Hoodies[] $hoodies0
 * @property Hoodies[] $hoodies1
 * @property TblUsersTag[] $tblUsersTags
 */
class Printthematics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'printthematics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_thematics'], 'required'],
            [['quantity_sale'], 'integer'],
            [['name_thematics'], 'string', 'max' => 25],
            [['name_thematics'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД тематики',
            'name_thematics' => 'Название тематики',
            'quantity_sale' => 'Всего продано',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies()
    {
        return $this->hasMany(Hoodies::className(), ['name_print_thematick1' => 'name_thematics']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies0()
    {
        return $this->hasMany(Hoodies::className(), ['name_print_thematick2' => 'name_thematics']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoodies1()
    {
        return $this->hasMany(Hoodies::className(), ['name_print_thematick3' => 'name_thematics']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsersTags()
    {
        return $this->hasMany(TblUsersTag::className(), ['name_print_thematick' => 'name_thematics']);
    }
}
