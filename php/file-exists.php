<?php include ('../include/header.php'); ?>
<div id="main">
	<div class="container">
		<div class="row">
			<code>
				<pre>
if (file_exists('files/lorem.txt')) {
	echo ('lorem.txt exists ' . 'and its size = ' . filesize ('files/lorem.txt') . ' bytes');
} else {
	echo ('file does not exists');
}</pre>
			</code>
			<?php
				if (file_exists('../files/lorem.txt')) {
					echo ('lorem.txt exists ' . 'and its size = ' . filesize ('../files/lorem.txt') . ' bytes');
				} else {
					echo ('file does not exists');
				}
			?>
		</div>
	</div>
</div>
<?php include ('../include/footer.php'); ?>