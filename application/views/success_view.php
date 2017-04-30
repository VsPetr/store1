<html>
<head>
    <title>My Form</title>
</head>
<body>
<?php header("Location: http://store1.local/index.php/store/shop",false,302) ?>
<!--<h3>Ваша форма была успешно отправлена!</h3>-->

<p><?php echo anchor('form', 'Заполнить еще раз!'); ?></p>

</body>
</html>