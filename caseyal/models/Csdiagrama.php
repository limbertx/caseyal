<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csdiagrama".
 *
 * @property integer $pkdiagrama
 * @property string $nombre
 * @property integer $fkteam
 *
 * @property Csteam $fkteam0
 */
class Csdiagrama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'csdiagrama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'fkteam'], 'required'],
            [['fkteam'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['fkteam'], 'exist', 'skipOnError' => true, 'targetClass' => Csteam::className(), 'targetAttribute' => ['fkteam' => 'pkteam']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkdiagrama' => 'Pkdiagrama',
            'nombre' => 'Nombre de proyecto',
            'fkteam' => 'Equipo de desarrollo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkteam0()
    {
        return $this->hasOne(Csteam::className(), ['pkteam' => 'fkteam']);
    }
}
