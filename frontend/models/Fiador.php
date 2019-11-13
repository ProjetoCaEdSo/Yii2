<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fiador".
 *
 * @property int $IdFiador
 * @property string $Nome
 * @property string $DataNasc
 * @property string $Email
 * @property int $Contacto
 * @property string $NumCarCid
 * @property string $Mensalidade
 * @property string $CasaPropria
 * @property string $Distrito
 * @property string $Concelho
 * @property string $Freguesia
 * @property string $Morada
 * @property string $CodigoPostal
 * @property int $IdUtilizador
 *
 * @property Utilizador $utilizador
 */
class Fiador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fiador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'DataNasc', 'Email', 'Contacto', 'NumCarCid', 'Mensalidade', 'CasaPropria', 'Distrito', 'Concelho', 'Freguesia', 'Morada', 'CodigoPostal', 'IdUtilizador'], 'required'],
            [['DataNasc'], 'safe'],
            [['Contacto', 'IdUtilizador'], 'integer'],
            [['Mensalidade'], 'number'],
            [['CasaPropria'], 'string'],
            [['Nome', 'Email', 'Morada'], 'string', 'max' => 50],
            [['NumCarCid', 'Distrito', 'Concelho', 'Freguesia'], 'string', 'max' => 20],
            [['CodigoPostal'], 'string', 'max' => 10],
            [['IdUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['IdUtilizador' => 'IdUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdFiador' => 'Id Fiador',
            'Nome' => 'Nome',
            'DataNasc' => 'Data Nasc',
            'Email' => 'Email',
            'Contacto' => 'Contacto',
            'NumCarCid' => 'Num Car Cid',
            'Mensalidade' => 'Mensalidade',
            'CasaPropria' => 'Casa Propria',
            'Distrito' => 'Distrito',
            'Concelho' => 'Concelho',
            'Freguesia' => 'Freguesia',
            'Morada' => 'Morada',
            'CodigoPostal' => 'Codigo Postal',
            'IdUtilizador' => 'Id Utilizador',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizador()
    {
        return $this->hasOne(Utilizador::className(), ['IdUtilizador' => 'IdUtilizador']);
    }
}
