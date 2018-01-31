<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csdetteam".
 *
 * @property integer $pkdetteam
 * @property integer $fkteam
 * @property integer $fkintegrante
 * @property string $estado
 *
 * @property Csteam $fkteam0
 * @property Csuser $fkintegrante0
 */
class Csdetteam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'csdetteam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkintegrante'], 'required'],
            [['fkintegrante'], 'integer'],
            [['estado'], 'string', 'max' => 1],
            
            [['fkintegrante'], 'exist', 'skipOnError' => true, 'targetClass' => Csuser::className(), 'targetAttribute' => ['fkintegrante' => 'pkuser']],
            [['fkteam'], 'exist', 'skipOnError' => true, 'targetClass' => Csteam::className(), 'targetAttribute' => ['fkteam' => 'pkteam']],            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkdetteam' => 'Identificador primario',
            'fkteam' => 'Equipo de desarrollo',
            'fkintegrante' => 'Miembro de equipo',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkteam0()
    {
        return $this->hasOne(Csteam::className(), ['pkteam' => 'fkteam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkintegrante0()
    {
        return $this->hasOne(Csuser::className(), ['pkuser' => 'fkintegrante']);
    }
}
