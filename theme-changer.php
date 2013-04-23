<!DOCTYPE html>
<?php
  $theme = $_GET['theme'];
  setcookie("theme", $theme, time() + 604800); // Cookie should last for a week.
  header("Location: ".$_SERVER['HTTP_REFERER']);
?>
