
<?php
session_start();
if (!isset($_SESSION["user-id"])) {
    header("Location: signlog.php");
}
session_unset();
session_destroy();
?>
<script>
		alert('logged out successfully');
		document.location.href='signlog.php';
</script>
