<?php
require_once 'app/init.php';

$itemsQuery = $db->prepare("
	SELECT id, task, name, done
	FROM todo
	WHERE user_id = :user_id");

$itemsQuery->execute(['user_id' => $_SESSION['user_id']]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

$update = false;
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$update = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>To do</title>
</head>
<body>
	<div class="list">
		<h1 class="header">To do</h1>

		<form class="item-add" action="add.php" method="POST">
			<input type="text" name="task" placeholder="Ditt namn" class="input" autocomplete="off" required>
			<input type="text" name="name" placeholder="Uppgift" class="input" autocomplete="off" required>
			<input type="submit" value="Lägg till" class="submit">
		</form>
		<?php if (!empty($items)): ?>
		<ul class="items">
		<?php foreach($items as $item): ?>
			<?php
			if($update and $item['id'] == $id) { ?>


					<li>
						<form class="item-add" action="update.php?id=<?php echo $item['id']; ?>" method="POST">
							<input type="text" name="task" value="<?php echo $item['task'] ?>" placeholder="Uppdatera ditt namn" class="input" autocomplete="off" required>
							<input type="text" name="name" value="<?php echo $item['name'] ?>" placeholder="Uppdatera uppgift" class="input" autocomplete="off" required>
							<input type="submit" value="Uppdatera" class="submit">
						</form>
					</li>

			<?php	} else { ?>


			<li>
			<span class="task"><?php echo $item['task']?></span>
			<span>ska</span>
			<span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name'] ?></span>
				<?php if(!$item['done']): ?>
					<a href="mark.php?as=done&name=<?php echo $item['id']; ?>" class="done-btn">Markera som klar</a>
				<?php endif; ?>
				<?php if($item['done']): ?>
					<a href="mark.php?as=notdone&name=<?php echo $item['id']; ?>" class="notdone-btn">Ångra</a>
				<?php endif; ?>
				<span>
					<a class="delete-btn" href="delete.php?id=<?php echo $item['id']; ?>">Radera</a>
				</span>
				<span>
					<a class="update-btn" href="index.php?id=<?php echo $item['id']; ?>">Redigera</a>
				</span>
			</li>
			<?php } endforeach; ?>
		</ul>
		<?php else: ?>
			<p>Du har inte lagt till något ännu</p>
		<?php endif; ?>
	</div>
</body>
</html>