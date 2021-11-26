<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_bptype".
 *
 * @property int $id
 * @property string $bptypename
 * @property string $bptypekod
 *
 * @property TblBizprocess[] $tblBizprocesses
 * @property TblTask[] $tblTasks
 */
class TblBptype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_bptype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bptypename', 'bptypekod'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bptypename' => 'Наименование',
            'bptypekod' => 'Код',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBizprocesses()
    {
        return $this->hasMany(TblBizprocess::className(), ['bptype' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTasks()
    {
        return $this->hasMany(TblTask::className(), ['id_typebp' => 'id']);
    }
}
