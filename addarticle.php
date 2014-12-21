<?php
/*include 'view/forms.php';*/
require_once 'boot.php';
$controller = new NewsController;
$controller -> action(add);
