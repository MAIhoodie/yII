<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoodies".
 *
 * @property int $id ид
 * @property int $articul_product Артикул
 * @property string $name Название худи
 * @property string $description Описание
 * @property string $description_two Описание короткое
 * @property double $price Цена
 * @property string $name_style фасон
 * @property string $name_material материал
 * @property string $name_print_thematick1 тематика
 * @property string $name_print_thematick2
 * @property string $name_print_thematick3
 * @property string $name_print_place где принт
 * @property string $name_gender пол
 * @property int $color_id
 *
 * @property TblGender $nameGender
 * @property Material $nameMaterial
 * @property PrintPlace $namePrintPlace
 * @property Style $nameStyle
 * @property Printthematics $namePrintThematick1
 * @property Printthematics $namePrintThematick2
 * @property Printthematics $namePrintThematick3
 * @property TblSizeQuantity[] $tblSizeQuantities
 */
class Hoodies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hoodies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['articul_product', 'name', 'description', 'description_two', 'price', 'name_style', 'name_material', 'name_print_thematick1', 'name_print_place', 'name_gender', 'color_id'], 'required'],
            [['articul_product', 'color_id'], 'integer'],
            [['price'], 'number'],
            [['name', 'description_two'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 250],
            [['name_style', 'name_material', 'name_print_thematick1', 'name_print_thematick2', 'name_print_thematick3', 'name_print_place', 'name_gender'], 'string', 'max' => 20],
            [['name_gender'], 'exist', 'skipOnError' => true, 'targetClass' => TblGender::className(), 'targetAttribute' => ['name_gender' => 'name_gender']],
            [['name_material'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['name_material' => 'material']],
            [['name_print_place'], 'exist', 'skipOnError' => true, 'targetClass' => PrintPlace::className(), 'targetAttribute' => ['name_print_place' => 'print_place']],
            [['name_style'], 'exist', 'skipOnError' => true, 'targetClass' => Style::className(), 'targetAttribute' => ['name_style' => 'style']],
            [['name_print_thematick1'], 'exist', 'skipOnError' => true, 'targetClass' => Printthematics::className(), 'targetAttribute' => ['name_print_thematick1' => 'name_thematics']],
            [['name_print_thematick2'], 'exist', 'skipOnError' => true, 'targetClass' => Printthematics::className(), 'targetAttribute' => ['name_print_thematick2' => 'name_thematics']],
            [['name_print_thematick3'], 'exist', 'skipOnError' => true, 'targetClass' => Printthematics::className(), 'targetAttribute' => ['name_print_thematick3' => 'name_thematics']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ид',
            'articul_product' => 'Артикул',
            'name' => 'Название худи',
            'description' => 'Описание',
            'description_two' => 'Описание короткое',
            'price' => 'Цена',
            'name_style' => 'фасон',
            'name_material' => 'материал',
            'name_print_thematick1' => 'тематика',
            'name_print_thematick2' => 'Name Print Thematick2',
            'name_print_thematick3' => 'Name Print Thematick3',
            'name_print_place' => 'где принт',
            'name_gender' => 'пол',
            'color_id' => 'Цвет',
        ];
    }

    public function getColorName()
    {

        $parent =  $this->hasOne(Color::className(), ['id' => 'color_id']);

        return $parent ? $parent->one()->color: '';
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNameGender()
    {
        return $this->hasOne(TblGender::className(), ['name_gender' => 'name_gender']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNameMaterial()
    {
        return $this->hasOne(Material::className(), ['material' => 'name_material']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamePrintPlace()
    {
        return $this->hasOne(PrintPlace::className(), ['print_place' => 'name_print_place']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNameStyle()
    {
        return $this->hasOne(Style::className(), ['style' => 'name_style']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamePrintThematick1()
    {
        return $this->hasOne(Printthematics::className(), ['name_thematics' => 'name_print_thematick1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamePrintThematick2()
    {
        return $this->hasOne(Printthematics::className(), ['name_thematics' => 'name_print_thematick2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamePrintThematick3()
    {
        return $this->hasOne(Printthematics::className(), ['name_thematics' => 'name_print_thematick3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblSizeQuantities()
    {
        return $this->hasMany(TblSizeQuantity::className(), ['id' => 'id']);
    }
}
