<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $IdComentario
 * @property string $Mensagem
 * @property string $DataComent
 * @property int $IdUtilizador
 * @property int $IdApartamento
 * @property int $IdComentarioPai
 *
 * @property Utilizador $utilizador
 * @property Apartamento $apartamento
 * @property Comentario $comentarioPai
 * @property Comentario[] $comentarios
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Mensagem', 'IdUtilizador', 'IdApartamento'], 'required'],
            [['DataComent'], 'safe'],
            [['IdUtilizador', 'IdApartamento', 'IdComentarioPai'], 'integer'],
            [['Mensagem'], 'string', 'max' => 2000],
            [['IdUtilizador'], 'exist', 'skipOnError' => true, 'targetClass' => Utilizador::className(), 'targetAttribute' => ['IdUtilizador' => 'IdUtilizador']],
            [['IdApartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Apartamento::className(), 'targetAttribute' => ['IdApartamento' => 'IdApartamento']],
            [['IdComentarioPai'], 'exist', 'skipOnError' => true, 'targetClass' => Comentario::className(), 'targetAttribute' => ['IdComentarioPai' => 'IdComentario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdComentario' => 'Id Comentario',
            'Mensagem' => 'Mensagem',
            'DataComent' => 'Data Coment',
            'IdUtilizador' => 'Id Utilizador',
            'IdApartamento' => 'Id Apartamento',
            'IdComentarioPai' => 'Id Comentario Pai',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarioPai()
    {
        return $this->hasOne(Comentario::className(), ['IdComentario' => 'IdComentarioPai']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['IdComentarioPai' => 'IdComentario']);
    }
}
