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
    <link rel="stylesheet" href="<?=$assets;?>css/app.css" />
    <script src="<?=$assets;?>bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
