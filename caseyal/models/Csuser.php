<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "csuser".
 *
 * @property integer $pkuser
 * @property string $nickname
 * @property string $nombrecom
 * @property string $apellidocom
 * @property string $password
 * @property string $email
 * @property string $authkey
 * @property string $accesstoken
 * @property string $estado
 *
 * @property Csteam[] $csteams
 */
class Csuser extends \yii\db\ActiveRecord
{
    public $password_repeat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'csuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'nombrecom', 'apellidocom', 'password', 'email', 'authkey', 'accesstoken'], 'string', 'max' => 50],
            [['estado'], 'string', 'max' => 1],
            
            [['password_repeat'], 'required', 'skipOnEmpty' => true],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'skipOnEmpty' => true, 'message'=>"Contraseñas diferentes!!"],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkuser' => 'Identificador de usuario',
            'nickname' => 'Nombre de usuario',
            'nombrecom' => 'Nombre completo',
            'apellidocom' => 'Apellidos',
            'password' => 'Contraseña',
            'email' => 'Correo electronico',
            'authkey' => 'Authkey',
            'accesstoken' => 'Accesstoken',
            'estado' => 'Estado',
            'password_repeat' => 'Repita contraseña'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsteams()
    {
        return $this->hasMany(Csteam::className(), ['fkpropietario' => 'pkuser']);
    }
}
