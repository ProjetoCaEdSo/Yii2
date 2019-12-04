<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $IdUtilizador
 * @property string $Nome
 * @property string $Apelido
 * @property string $DataNasc
 * @property string $NumCarCid
 * @property string $Email
 * @property int $Telemovel
 * @property string|null $Distrito
 * @property string|null $Morada
 * @property string|null $CodigoPostal
 * @property string|null $Universidade
 * @property string $DataRegis
 * @property string $Tipo
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $verification_token
 * @property string $auth_key
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
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
            [['Nome', 'Apelido', 'DataNasc', 'NumCarCid', 'Email', 'Telemovel', 'Tipo', 'password_hash', 'verification_token', 'auth_key'], 'required'],
            [['DataNasc', 'DataRegis'], 'safe'],
            [['Telemovel', 'status', 'created_at', 'updated_at'], 'integer'],
            [['Tipo'], 'string'],
            [['Nome', 'Apelido', 'NumCarCid', 'Distrito'], 'string', 'max' => 20],
            [['Email', 'Morada', 'Universidade'], 'string', 'max' => 50],
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
            'Apelido' => 'Apelido',
            'DataNasc' => 'Data Nascimento',
            'NumCarCid' => 'Numero Fiscal',
            'Email' => 'Email',
            'Telemovel' => 'Telemovel',
            'Distrito' => 'Distrito',
            'Morada' => 'Morada',
            'CodigoPostal' => 'Código Postal',
            'Universidade' => 'Universidade',
            'DataRegis' => 'Data Registo',
            'Tipo' => 'Tipo de Utilizador',
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



    
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
