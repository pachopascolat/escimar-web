<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id_noticias
 * @property string $titulo_noticia
 * @property string $body_noticia
 * @property string $fecha_noticia
 * @property int $categoria_noticia
 * @property int $author_id
 * @property int $publicado
 */
class Noticias extends UploadForm {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['titulo_noticia', 'body_noticia'], 'required'],
            [['body_noticia', 'image_path'], 'string'],
            [['fecha_noticia'], 'safe'],
            [['categoria_noticia', 'author_id', 'publicado','imagen_id'], 'integer'],
            [['titulo_noticia'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id_noticias' => 'Id Noticias',
            'titulo_noticia' => 'Titulo Noticia',
            'body_noticia' => 'Body Noticia',
            'fecha_noticia' => 'Fecha Noticia',
            'categoria_noticia' => 'Categoria Noticia',
            'author_id' => 'Author ID',
            'imagen_id' => 'Imagen Principal',
            'publicado' => 'Publicado',
        ];
    }

    public function upload() {
        if ($this->validate()) {
            $this->image_path = 'img/noticias/' . md5(date('Ymd H:i:s:u')). '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($this->image_path);
            return true;
        } else {
            return false;
        }
    }

    public function getNoticiasPrincipales() {
        return $this->hasOne(NoticiasPrincipales::className(), ['noticia_id' => 'id_noticias']);
    }
    public function getImagen() {
        return $this->hasOne(\noam148\imagemanager\models\ImageManager::className(), ['imagen_id' => 'id']);
    }

    public function getShortBody($length=20){
        return  $this->strWordCut($this->body_noticia, $length);
    }
    
    private function strWordCut($string, $length) {
        $str_len = strlen($string);
        $string = strip_tags($string);

        if ($str_len > $length) {

            // truncate string
            $stringCut = substr($string, 0, $length - 15);
            $string = $stringCut . '.....' . substr($string, $str_len - 10, $str_len - 1);
        }
        return $string;
    }

    
    function getImagePath(){
        $image = \Yii::$app->imagemanager->getImagePath($this->imagen_id);
        if(!$image){
            return $this->image_path;
        }
        return $image;
    }
}
