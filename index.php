<?php
require '../basic/basic.php';
inc([
    'env',
    'error',
    'controller',
    'model',
    'view'
]);
error(true);
controller('auth/signup');
?>
