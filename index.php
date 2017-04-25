<?php
header('Content-Disposition: Attachment;filename=image.png');
header('Content-type:image/png');
$greeting = "Hello World!";
require 'index.view.php';
