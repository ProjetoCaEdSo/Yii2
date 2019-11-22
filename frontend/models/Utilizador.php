<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $IdUtilizador
 * @property string $Nome
 * @property string $DataNasc
 * @property string $NumCarCid
 * @property string $Email
 * @property int $Contacto
 * @property string $Distrito
 * @property string $Morada
 * @property string $CodigoPostal
 * @property string $DataRegis
 * @property string $Tipo
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $auth_key
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Apartamento[] $apartamentos
 * @property BugReport[] $bugReports
 * @property Comentario[] $comentarios
 * @property Favorito[] $favoritos
 * @property Solicitacao[] $solicitacaos
 */
class Utilizador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'DataNasc', 'NumCarCid', 'Email', 'Contacto', 'Tipo', 'password_hash', 'password_reset_token', 'auth_key', 'status', 'created_at', 'updated_at'], 'required'],
            [['DataNasc', 'DataRegis'], 'safe'],
            [['Contacto', 'status', 'created_at', 'updated_at'], 'integer'],
            [['Tipo'], 'string'],
            [['Nome', 'Email', 'Morada'], 'string', 'max' => 50],
            [['NumCarCid', 'Distrito'], 'string', 'max' => 20],
            [['CodigoPostal'], 'string', 'max' => 10],
            [['password_hash', 'password_reset_token', 'verification_token', 'auth_key'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdUtilizador' => 'Id Utilizador',
            'Nome' => 'Nome',
            'DataNasc' => 'Data Nasc',
            'NumCarCid' => 'Num Car Cid',
            'Email' => 'Email',
            'Contacto' => 'Contacto',
            'Distrito' => 'Distrito',
            'Morada' => 'Morada',
            'CodigoPostal' => 'Codigo Postal',
            'DataRegis' => 'Data Regis',
            'Tipo' => 'Tipo',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'verification_token' => 'Verification Token',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApartamentos()
    {
        return $this->hasMany(Apartamento::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBugReports()
    {
        return $this->hasMany(BugReport::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasMany(Favorito::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacaos()
    {
        return $this->hasMany(Solicitacao::className(), ['IdUtilizador' => 'IdUtilizador']);
    }
}
