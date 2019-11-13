<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "solicitacao".
 *
 * @property int $IdSolicitacao
 * @property string $DataSolic
 * @property int $IdUtilizador
 * @property int $IdApartamento
 *
 * @property Utilizador $utilizador
 * @property Apartamento $apartamento
 */
class Solicitacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solicitacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DataSolic'], 'safe'],
            [['IdUtilizador', 'IdApartamento'], 'required'],
            [['IdUtilizador', 'IdApartamento'], 'integer'],
            [['IdUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['IdUtilizador' => 'IdUtilizador']],
            [['IdApartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Apartamento::className(), 'targetAttribute' => ['IdApartamento' => 'IdApartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdSolicitacao' => 'Id Solicitacao',
            'DataSolic' => 'Data Solic',
            'IdUtilizador' => 'Id Utilizador',
            'IdApartamento' => 'Id Apartamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizador::className(), ['IdUtilizador' => 'IdUtilizador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApartamento()
    {
        return $this->hasOne(Apartamento::className(), ['IdApartamento' => 'IdApartamento']);
    }
}
