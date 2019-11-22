<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "favorito".
 *
 * @property int $IdFavorito
 * @property string $DataFavorito
 * @property int $IdUtilizador
 * @property int $IdApartamento
 *
 * @property Utilizador $utilizador
 * @property Apartamento $apartamento
 */
class Favorito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favorito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DataFavorito'], 'safe'],
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
            'IdFavorito' => 'Id Favorito',
            'DataFavorito' => 'Data Favorito',
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
