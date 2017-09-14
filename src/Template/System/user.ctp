<!DOCTYPE html>
<html>
<head>
	<title>USER MANAGEMENT</title>
</head>
<body>
	<p class="title">User Management</p>
	<?= $this->Form->create($user) ?>

	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Username</th>
					<th>Level</th>
				</tr>
			</thead>
			<thead>
				<?php foreach($user as $user):?>
					<tr>
						<td><?= h($user->username) ?></td>
						<td><?= h($user->level)?></td>
					</tr>
			</thead>
			<?php endforeach; ?>
		</table>
	</div>
</body>

<style type="text/css">
	th,td{text-align: center;}
</style>
</html>