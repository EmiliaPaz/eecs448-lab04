<!DOCTYPE html>
<html>
<body>

<table>
	<thead>
		<tr>
			<th></th>
			<?php for($x = 1; $x <= 100; $x++): ?>
				<?php if($x > 0): ?>
					<th><?php echo "$x" ?></th>
				<?php endif; ?>
			<?php endfor; ?>
		</tr>
	</thead>
	<tbody>
		<?php for($i = 1; $i <= 100; $i++): ?>
			<tr>
				<?php for($j = 0; $j <= 100; $j++): ?>
					<?php if($j == 0): ?>
						<td><b><?php echo "$i"; ?></b></td>
					<?php else: ?>
						<td>
							<?php
								$z = $i * $j;
								echo "$z";
							?>
						</td>
					<?php endif; ?>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</tbody>
</table>

</body>
</html>
