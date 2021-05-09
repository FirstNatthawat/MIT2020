<?php
class user
{

  public $user_id;
  public $name;
  public $surname;
  public $user_role;
  public $ldentification_card;
  public $user_name;
  public $pass_word;

  public function __construct($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word)
  {
    $this->user_id = $user_id;
    $this->name = $name;
    $this->surname = $surname;
    $this->user_role = $user_role;
    $this->ldentification_card = $ldentification_card;
    $this->user_name = $user_name;
    $this->pass_word = $pass_word;
  }

  public static function getAll()
  {

    $userList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM user ";

    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc()) {

      $user_id = $my_row["user_id"];
      $name = $my_row["name"];
      $surname = $my_row["surname"];
      $user_role = $my_row["user_role"];
      $ldentification_card = $my_row["ldentification_card"];
      $user_name = $my_row["user_name"];
      $pass_word = $my_row["pass_word"];
      $userList[] = new user($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word);
    }
    require("connection_close.php");
    return $userList;
  }

  public static function getUserByID($user_id)
  {
    require("connection_connect.php");
    $sql = "SELECT * FROM user WHERE user_id = '$user_id'  ";

    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();

    $user_id = $my_row["user_id"];
    $name = $my_row["name"];
    $surname = $my_row["surname"];
    $user_role = $my_row["user_role"];
    $ldentification_card = $my_row["ldentification_card"];
    $user_name = $my_row["user_name"];
    $pass_word = $my_row["pass_word"];

    require("connection_close.php");
    return new user($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word);
  }

  public static function addUser($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word)
  {
    require("connection_connect.php");
    $sql = "INSERT into user (user_id,name,surname,user_role,ldentification_card,user_name,pass_word) values ('$user_id','$name','$surname','$user_role','$ldentification_card','$user_name','$pass_word') ";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
  }

  public static function updateUser($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word)
  {
    require("connection_connect.php");
    $sql = "UPDATE user SET name = '$name' ,surname = '$surname' ,user_role = '$user_role',ldentification_card = '$ldentification_card' ,user_name = '$user_name',pass_word = '$pass_word'
    WHERE user_id = '$user_id' ";
    
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result rows";
  }

  public static function deleteUser($user_id)
  {
    require("connection_connect.php");
    $sql = "DELETE FROM user WHERE user_id = '$user_id' ";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "delete success $result rows";
  }

  public static function search($key)
  {
    $userList = [];
    require("connection_connect.php");
    $sql = "SELECT user_id, name, surname, user_role, ldentification_card, user_name, pass_word FROM user WHERE
    ( user_id LIKE '$key' OR 
    name LIKE '$key' OR 
    surname LIKE '$key' OR 
    user_role LIKE '$key' OR 
    ldentification_card LIKE '$key' OR
    user_name LIKE '$key' ) ";


    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc()) {
      $user_id = $my_row["user_id"];
      $name = $my_row["name"];
      $surname = $my_row["surname"];
      $user_role = $my_row["user_role"];
      $ldentification_card = $my_row["ldentification_card"];
      $user_name = $my_row["user_name"];
      $pass_word = $my_row["pass_word"];
      $userList[] = new user($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word);
    }
    require("connection_close.php");
    return $userList;
  }
}
