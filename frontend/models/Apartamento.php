<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "apartamento".
 *
 * @property int $IdApartamento
 * @property string $Preco
 * @property string $Aprovado
 * @property string $Distrito
 * @property string $Concelho
 * @property string $Freguesia
 * @property string $Morada
 * @property string $CodPostal
 * @property string $Descricao
 * @property int $Fianca
 * @property string $DataAnuncio
 * @property string $Fumador
 * @property string $Mobilado
 * @property string $Internet
 * @property int $NumQuartos
 * @property string $TipoApart
 * @property string $Cozinha
 * @property string $Parking
 * @property string $Animais
 * @property string $Casais
 * @property string $Genero
 * @property int $NumWC
 * @property int $IdUtilizador
 *
 * @property Utilizador $utilizador
 * @property Comentario[] $comentarios
 * @property Favorito[] $favoritos
 * @property Imagem[] $imagems
 * @property Solicitacao[] $solicitacaos
 */
class Apartamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apartamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Preco', 'Aprovado', 'Distrito', 'Concelho', 'Freguesia', 'Morada', 'CodPostal', 'Descricao', 'Fianca', 'Fumador', 'Mobilado', 'Internet', 'NumQuartos', 'TipoApart', 'Cozinha', 'Parking', 'Animais', 'Casais', 'Genero', 'NumWC', 'IdUtilizador'], 'required'],
            [['Preco'], 'number'],
            [['Aprovado', 'Fumador', 'Mobilado', 'Internet', 'TipoApart', 'Cozinha', 'Parking', 'Animais', 'Casais', 'Genero'], 'string'],
            [['Fianca', 'NumQuartos', 'NumWC', 'IdUtilizador'], 'integer'],
            [['DataAnuncio'], 'safe'],
            [['Distrito', 'Concelho', 'Freguesia'], 'string', 'max' => 20],
            [['Morada'], 'string', 'max' => 50],
            [['CodPostal'], 'string', 'max' => 10],
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
            'IdApartamento' => 'Id Apartamento',
            'Preco' => 'Preco',
            'Aprovado' => 'Aprovado',
            'Distrito' => 'Distrito',
            'Concelho' => 'Concelho',
            'Freguesia' => 'Freguesia',
            'Morada' => 'Morada',
            'CodPostal' => 'Cod Postal',
            'Descricao' => 'Descricao',
            'Fianca' => 'Fianca',
            'DataAnuncio' => 'Data Anuncio',
            'Fumador' => 'Fumador',
            'Mobilado' => 'Mobilado',
            'Internet' => 'Internet',
            'NumQuartos' => 'Num Quartos',
            'TipoApart' => 'Tipo Apart',
            'Cozinha' => 'Cozinha',
            'Parking' => 'Parking',
            'Animais' => 'Animais',
            'Casais' => 'Casais',
            'Genero' => 'Genero',
            'NumWC' => 'Num Wc',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['IdApartamento' => 'IdApartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasMany(Favorito::className(), ['IdApartamento' => 'IdApartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['IdApartamento' => 'IdApartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacaos()
    {
        return $this->hasMany(Solicitacao::className(), ['IdApartamento' => 'IdApartamento']);
    }
}
