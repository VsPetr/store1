<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Authorization</title>
</head>
<body>
<?php echo validation_errors(); ?>
<form action="<?php echo base_url()?>index.php/store/login" method="<?php echo 'post'?>">
    <p><input type="hidden" name="user_id"></p>
    <p>Имя пользователя</p>
    <p><input type="text" name="user_name" placeholder="user name" value="<?php echo set_value('user_name')?>"><?php echo
        form_error('user_name')?></p>
    <p>Пароль</p>
    <p><input type="text" name="password" placeholder="password" value="<?php echo set_value('password')?>"><?php echo
        form_error('password')?></p>
    <p><input type="submit" name="send" value="Авторизоваться"></p>
</form>
</body>
</html>