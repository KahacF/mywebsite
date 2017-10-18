<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $this->config->item('name'); ?> | <?= $this->config->item('title'); ?></title>
	<!-- Meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="<?= $this->config->item('name'); ?> - Serveur privée DOFUS utilisant le CMS 'OssPortail' par Ossow">
    	<meta name="author" content="Ossow">
    	<!-- Favicon -->
    	<link rel="shortcut icon" href="<?= img_url('favicon.ico'); ?>">
    	<!-- CSS Global Compulsory -->
    	<link rel="stylesheet" href="<?= css_url('font-awesome.min'); ?>">
    	<link rel="stylesheet" href="<?= css_url('main'); ?>">
</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<img src="<?= img_url('avatar.png'); ?>" alt="Avatar" />
						<h1>Hey! Avec le serveur <strong><?= $this->config->item('name'); ?></strong>, tu aura la <strong>meilleur</strong> expérience web et jeu!</h1>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="<?= $this->config->item('link_forum'); ?>">
										<img src="<?= img_url('choix/forum.jpg'); ?>" alt="" />
										<h3>Forum de la communauté</h3>
									</a>
								</div>
								<div>
									<a href="<?= $this->config->item('link_site'); ?>">
										<img src="<?= img_url('choix/web.jpg'); ?>" alt="" />
										<h3>Site internet</h3>
									</a>
								</div>
								<div>
									<a href="<?= $this->config->item('link_site'); ?>points/vote">
										<img src="<?= img_url('choix/vote.jpg'); ?>" alt="" />
										<h3>Voter pour nous</h3>
									</a>
							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						 &copy; 2017 <?= $this->config->item('name'); ?>.<br> 
                        <a href="https://twitter.com/OssowDEV" target="_blank">OssPortail</a> version <?php if($this->config->item('beta_portail_tf') == TRUE){ ?><?= $this->config->item('beta_portail'); ?><?php } ?> <?= $this->config->item('version_portail'); ?> (<a href="https://github.com/OssowDEV/OssPortail_v0.1" target="_blank"><?= $this->config->item('publicpriver_portail'); ?></a>)
					</footer>

			</div>

<!--=== End of Wrapper ===-->
		<script type="text/javascript" src="<?= js_url('jquery'); ?>"></script>
		<!-- JS Page Level -->           
		<script type="text/javascript" src="<?= js_url('jquery.poptrox'); ?>"></script>
		<script type="text/javascript" src="<?= js_url('main'); ?>"></script>
        <script type="text/javascript" src="<?= js_url('skel.min'); ?>"></script>
</body>
</html>

