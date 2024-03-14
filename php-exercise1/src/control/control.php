<?php
require 'src/model/model.php';
use model\Message;

$hello = new Message();
$message = $hello->showMessage();

include "src/view/view.php";
