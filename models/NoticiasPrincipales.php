<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias_principales".
 *
 * @property int $id_noticias_principales
 * @property int $noticia_id
 * @property int $ranking
 *
 * @property Noticias $noticia
 */
class NoticiasPrincipales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias_principales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noticia_id', 'ranking'], 'integer'],
            [['noticia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Noticias::className(), 'targetAttribute' => ['noticia_id' => 'id_noticias']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_noticias_principales' => 'Id Noticias Principales',
            'noticia_id' => 'Noticia ID',
            'orden' => 'Orden',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticia()
    {
        return $this->hasOne(Noticias::className(), ['id_noticias' => 'noticia_id']);
    }
}
