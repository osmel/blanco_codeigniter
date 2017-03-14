<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $this->session->userdata('c2'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <?php echo link_tag('css/reset.css'); ?>
    <?php echo link_tag('css/estilo.css'); ?>

	<link rel="stylesheet" href="<?php echo base_url(); ?>js/bootstrap-3.3.1/dist/css/bootstrap.min.css">
	<?php echo link_tag('css/sistema.css'); ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

	
</head>
<body style="background-color: #ffffff;">
	<div class="container-fluid1">
		<div id="foo"></div>
		
		<div class="row-fluid1" id="wrapper1">
			<div class="alert" id="messages"></div>

    <!-- Inicia Formulario -->
