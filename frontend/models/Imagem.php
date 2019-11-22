<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "imagem".
 *
 * @property int $IdImagem
 * @property string $Imagem
 * @property int $IdApartamento
 *
 * @property Apartamento $apartamento
 */
class Imagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Imagem', 'IdApartamento'], 'required'],
            [['Imagem'], 'string'],
            [['IdApartamento'], 'integer'],
            [['IdApartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Apartamento::className(), 'targetAttribute' => ['IdApartamento' => 'IdApartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdImagem' => 'Id Imagem',
            'Imagem' => 'Imagem',
            'IdApartamento' => 'Id Apartamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApartamento()
    {
        return $this->hasOne(Apartamento::className(), ['IdApartamento' => 'IdApartamento']);
    }
}
