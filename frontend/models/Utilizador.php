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
 * @property string $Concelho
 * @property string $Freguesia
 * @property string $Morada
 * @property string $CodigoPostal
 * @property string $DataRegis
 * @property string $Tipo
 * @property int $IdUniversidade
 *
 * @property Apartamento[] $apartamentos
 * @property BugReport[] $bugReports
 * @property Comentario[] $comentarios
 * @property Comprovativo[] $comprovativos
 * @property Favorito[] $favoritos
 * @property Fiador[] $fiadors
 * @property Solicitacao[] $solicitacaos
 * @property Universidade $universidade
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
            [['Nome', 'DataNasc', 'NumCarCid', 'Email', 'Contacto', 'Tipo'], 'required'],
            [['DataNasc', 'DataRegis'], 'safe'],
            [['Contacto', 'IdUniversidade'], 'integer'],
            [['Tipo'], 'string'],
            [['Nome', 'Email', 'Morada'], 'string', 'max' => 50],
            [['NumCarCid', 'Distrito', 'Concelho', 'Freguesia'], 'string', 'max' => 20],
            [['CodigoPostal'], 'string', 'max' => 10],
            [['IdUniversidade'], 'exist', 'skipOnError' => true, 'targetClass' => Universidade::className(), 'targetAttribute' => ['IdUniversidade' => 'IdUniversidade']],
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
            'Concelho' => 'Concelho',
            'Freguesia' => 'Freguesia',
            'Morada' => 'Morada',
            'CodigoPostal' => 'Codigo Postal',
            'DataRegis' => 'Data Regis',
            'Tipo' => 'Tipo',
            'IdUniversidade' => 'Id Universidade',
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
    public function getComprovativos()
    {
        return $this->hasMany(Comprovativo::className(), ['IdUtilizador' => 'IdUtilizador']);
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
    public function getFiadors()
    {
        return $this->hasMany(Fiador::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacaos()
    {
        return $this->hasMany(Solicitacao::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniversidade()
    {
        return $this->hasOne(Universidade::className(), ['IdUniversidade' => 'IdUniversidade']);
    }
}
