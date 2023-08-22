<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iton</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
    <script src="https://kit.fontawesome.com/4c7b79f486.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
		<div class="container">
			<div class="logo left">
				<p><a href="<?php echo RUTA; ?>">Iton</a></p>
			</div>

			<div class="right">
				<form action="<?php echo RUTA; ?>search.php" method="get" name="search" class="search">
					<input type="text" name="search" placeholder="Search">
					<button type="submit" class="icon fa fa-search"></button>
				</form>
				
				<nav class="menu">
					<ul>
						<li>
							<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#">Contact us<i class="icon fa fa-envelope"></i></a></li>
						<?php if(checkSession()):?>
                            <li><a href="<?php echo RUTA; ?>/admin">Admin Panel<i class="icon fa-solid fa-user"></i></a></li>
                        <?php else:?>
                            <li><a href="<?php echo RUTA; ?>login.php">Login<i class="icon fa-solid fa-user"></i></a></li>
                        <?php endif;?>
                    </ul>
				</nav>
			</div>

		</div>
    </header>