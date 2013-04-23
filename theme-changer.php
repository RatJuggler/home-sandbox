<!DOCTYPE html>
<?php
  // This page simply sets the theme cookie then redirects back to the referring page,
  // which will then pick up the new cookie and load the appropriate theme CSS.
  $theme = $_GET['theme'];
  setcookie("theme", $theme, time() + 604800); // Cookie should last for a week.
  header("Location: ".$_SERVER['HTTP_REFERER']);
?>
