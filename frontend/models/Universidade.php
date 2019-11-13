<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "universidade".
 *
 * @property int $IdUniversidade
 * @property string $Nome
 *
 * @property Utilizador[] $utilizadors
 */
class Universidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['Nome'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdUniversidade' => 'Id Universidade',
            'Nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUtilizadors()
    {
        return $this->hasMany(Utilizador::className(), ['IdUniversidade' => 'IdUniversidade']);
    }
}
