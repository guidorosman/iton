<section class="pagination">
	<ul>
		<?php 
			# Establecemos el numero de paginas
			$cantPages = cantPages($blog_config['articles_per_page'], $conn);        
		?>
		<!-- Mostramos el boton para retroceder una pagina -->
		<?php if (currentPage() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo currentPage() - 1?>">&laquo;</a></li>
		<?php endif; ?>

		<!-- Creamos un elemento li por cada pagina que tengamos -->
		<?php for ($i = 1; $i <= $cantPages; $i++): ?>
			<!-- Agregamos la clase active en la pagina actual -->
			<?php if (currentPage() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li>
					<a href="index.php?p=<?php echo $i?>"><?php echo $i; ?></a>
				</li>
			<?php endif; ?>
		<?php endfor; ?>

		<!-- Mostramos el boton para avanzar una pagina -->
		<?php if (currentPage() == $cantPages):?>
			<li class="disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo currentPage() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
</section>