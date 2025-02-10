<?php
	$title = "Administration section"; // set the page title
	require_once "./template/header.php";
?>
<!-- simple design of the admin page contains two sections name, pass -->
<br><br><br>
<form class="form-horizontal" method="post" action="admin_verify.php">
	<div class="form-group">
		<label for="name" class="control-label col-md-4">Name</label>
		<div class="col-md-4">
			<input type="text" name="name" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="pass" class="control-label col-md-4">Pass</label>
		<div class="col-md-4">
			<input type="password" name="pass" class="form-control">
		</div>
	</div>
	<input type="submit" name="submit" class="btn btn-primary">
</form>

<?php
	require_once "./template/footer.php";
?>
