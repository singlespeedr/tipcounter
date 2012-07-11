<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Countdown</title>
</head>
<body>
  <?php
  if ($_POST["submit"] == "Add") {
    $total = $_POST["total"] + $_POST["amount"];
  }
  if ($_POST["clear"] == "Clear") {
    $total = 0;
  }
  ?>
  <h2>Total: <?php print $total; ?></h2>
  <form action="" method="post" >
    <input type="text" name="amount" id="amount">
    <input type="hidden" name="total" value="<?php print $total; ?>">
    <input type="submit" name="submit" value="Add">
    <input type="submit" name="clear" value="Clear">
  </form>
  <script type="text/javascript">
    document.getElementById('amount').focus();
  </script>
</body>
</html>