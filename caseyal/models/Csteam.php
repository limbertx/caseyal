<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csteam".
 *
 * @property integer $pkteam
 * @property string $codigo
 * @property string $descripcion
 * @property integer $fkpropietario
 * @property string $estado
 *
 * @property Csdetteam[] $csdetteams
 * @property Csdiagrama[] $csdiagramas
 * @property Csuser $fkpropietario0
 */
class Csteam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'csteam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo'], 'string', 'max' => 25],
            [['codigo'], "required"],

            [['descripcion'], 'string', 'max' => 50],
            [['descripcion'], "required"],

            [['estado'], 'string', 'max' => 1],
            [['estado'], 'required']            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkteam' => 'Identificador de equipo',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'fkpropietario' => 'Identificador de creador de EQ.',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsdetteams()
    {
        return $this->hasMany(Csdetteam::className(), ['fkteam' => 'pkteam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsdiagramas()
    {
        return $this->hasMany(Csdiagrama::className(), ['fkteam' => 'pkteam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkpropietario0()
    {
        return $this->hasOne(Csuser::className(), ['pkuser' => 'fkpropietario']);
    }
}
