<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comprovativo".
 *
 * @property int $IdComprovativo
 * @property string $Matricula
 * @property int $IdUtilizador
 *
 * @property Utilizador $utilizador
 */
class Comprovativo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comprovativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Matricula', 'IdUtilizador'], 'required'],
            [['Matricula'], 'string'],
            [['IdUtilizador'], 'integer'],
            [['IdUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['IdUtilizador' => 'IdUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdComprovativo' => 'Id Comprovativo',
            'Matricula' => 'Matricula',
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
