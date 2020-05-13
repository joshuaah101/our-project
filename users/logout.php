<?php
	session_start();
	unset($_SESSION['tracking_id']);
	unset($_SESSION['is_admin']);
	echo "<script>location.href = '../index.php'</script>";
?>