<?php require 'header.php';?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Log in</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" method="post">
					<input type="text" name="user" placeholder="User">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" value="Log in">

                    <?php if(!empty($errores)): ?>
                        <div class="error">
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
				</form>
			</article>
		</div>
	</div>