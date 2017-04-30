<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to shop</title>
</head>
<body>
<?php if ($this->session->authorization = true) {
    echo "Welcome to shop";
} else {
    $this->load->view('authorization_view');
} ?>

</body>
</html>