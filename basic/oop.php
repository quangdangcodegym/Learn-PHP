<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class User
  {
    public $name;
    public $email;
    public $age;
    public $password;
    function set_name($name)
    {
      $this->name = $name;
    }

    function __construct($name, $email, $age, $password)
    {
      $this->name = $name;
      $this->email = $email;
      $this->age = $age;
      $this->$password = $password;
    }
    function sayHello(){
      echo 'User Toi ten la '.$this->name;
    }
  }

  class Employee  extends User
  {
    public $title;
    public function __construct($name, $email, $age, $password, $title)
    {
      parent::__construct($name, $email, $age, $password);      // parrent::_contruct() gọi đến supper của lớp cha
      $this->title = $title;
    }
    public function get_title(){
      return $this->title;
    }
    public function sayHello()
    {
        echo 'Employee Toi ten la '.$this->name;
    }
  }

  $user2 = new User('Hà Hên', 'hahen@gmail.com', 18, '123');
  echo $user2->sayHello();

  $user3  = new  Employee('Hà Hên', 'hahen@gmail.com', 18, '123', 'HBI company');
  
  echo $user3->sayHello();
  ?>
</body>

</html>