<!DOCTYPE html>
<html>
    <head>
        <title><?= htmlspecialchars($title); ?></title>      
        <link rel=stylesheet type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
        <link rel=stylesheet type="text/css" href="/css/styles.css">
        <link rel="icon" href="static/img/favicon.png" type="image/x-icon" />
		<style>
		table, th, td {
			border: 1px solid cyan;
		}
		</style>
		<script src="js/jquery.js"></script>
    </head>
    <body>
        <div class="container">
            <?php render('navbar'); ?>
