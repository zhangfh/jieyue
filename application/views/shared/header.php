<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $this->lang->line('title_keyword');?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/app.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/js/trevor/sir-trevor.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/js/trevor/sir-trevor-bootstrap.css" />
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/js/trevor/sir-trevor-icons.css" />

    <script src="<?=BASE_URL;?>/assets/bower_components/modernizr/modernizr.js"></script>
    <script src="<?=BASE_URL;?>/assets/js/jquery-1.10.2.min.js"></script>
  </head>
  <body>
