<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bug_report".
 *
 * @property int $IdBug
 * @property string $Descricao
 * @property string $DataEnviado
 * @property int $IdUtilizador
 *
 * @property Utilizador $utilizador
 */
class BugReport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bug_report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descricao', 'IdUtilizador'], 'required'],
            [['DataEnviado'], 'safe'],
            [['IdUtilizador'], 'integer'],
            [['Descricao'], 'string', 'max' => 5000],
            [['IdUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['IdUtilizador' => 'IdUtilizador']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdBug' => 'Id Bug',
            'Descricao' => 'Descricao',
            'DataEnviado' => 'Data Enviado',
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
