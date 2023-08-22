<?php require 'header.php' ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Create article</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="form" method="post">
					<input type="text" name="title" placeholder="Title of the article">
					<input type="text" name="extract" placeholder="Extract of the article">
					<textarea name="text" placeholder="Text of the article"></textarea>
					<input type="file" name="image">

					<input type="submit" value="Create article">
				</form>
			</article>
		</div>
	</div>

