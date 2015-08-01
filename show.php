<?php

require 'model.php';

$post = get_post_by_id($_GET['id']);


// presentation
require 'templates/show.php';
?>