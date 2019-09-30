<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\base\Model;

/**
 * Description of EntryForm
 *
 * @author pacho
 */
class EntryForm extends Model{
    //put your code here
    public $name;
    public $email;
    public $tel;
    
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['tel','number'],
        ];
    }
    
    
}
