<html>
<body>

<form method="post" action="http://localhost:3000/LEARN/PHP/codegym/customer-manager/test.php?page=add">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
//<?php echo $_SERVER['PHP_SELF']."?page=add";

print_r($_REQUEST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>