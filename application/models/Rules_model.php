<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

class Rules_model extends CI_Model
{
    public $config = array(
        array(
            'field' => 'username',
            'label' => 'Имя пользователя',
            'rules' => 'required'
        ),
        array(
            'field' => 'hash_password',
            'label' => 'Пароль',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Почта',
            'rules' => 'required'
        ),
    );
}

?>