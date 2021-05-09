<?php
class room
{

  public $room_id;
  public $nameroom;
  public $building_name;
  public $floor;
  public $the_amount_of_people_that_can_enter;
  public $roomdetail;
  public $table_and_chair_set;
  public $projector;
  public $white_board;
  public $power_socket;
  public $room_status;

  public function __construct($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status)
  {
    $this->room_id = $room_id;
    $this->nameroom = $nameroom;
    $this->building_name = $building_name;
    $this->floor = $floor;
    $this->the_amount_of_people_that_can_enter = $the_amount_of_people_that_can_enter;
    $this->roomdetail = $roomdetail;
    $this->table_and_chair_set = $table_and_chair_set;
    $this->projector = $projector;
    $this->white_board = $white_board;
    $this->power_socket = $power_socket;
    $this->room_status = $room_status;
  }

  public static function getAll()
  {

    $roomList = [];
    require("connection_connect.php");
    $sql = "select * from room  ";

    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc()) {
      $room_id = $my_row['room_id'];
      $nameroom = $my_row['nameroom'];
      $building_name = $my_row['building_name'];
      $floor = $my_row['floor'];
      $the_amount_of_people_that_can_enter = $my_row['the_amount_of_people_that_can_enter'];
      $roomdetail = $my_row['roomdetail'];
      $table_and_chair_set = $my_row['table_and_chair_set'];
      $projector = $my_row['projector'];
      $white_board = $my_row['white_board'];
      $power_socket = $my_row['power_socket'];
      $room_status = $my_row['room_status'];
      $roomList[] = new room($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status);
    }
    require("connection_close.php");
    return $roomList;
  }
  public static function getRoomByID($room_id)
  {
    require("connection_connect.php");
    $sql = "SELECT * FROM room WHERE room_id = '$room_id'  ";

    $result = $conn->query($sql);
    $my_row = $result->fetch_assoc();

    $room_id = $my_row['room_id'];
    $nameroom = $my_row['nameroom'];
    $building_name = $my_row['building_name'];
    $floor = $my_row['floor'];
    $the_amount_of_people_that_can_enter = $my_row['the_amount_of_people_that_can_enter'];
    $roomdetail = $my_row['roomdetail'];
    $table_and_chair_set = $my_row['table_and_chair_set'];
    $projector = $my_row['projector'];
    $white_board = $my_row['white_board'];
    $power_socket = $my_row['power_socket'];
    $room_status = $my_row['room_status'];

    require("connection_close.php");
    return  new room($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status);
  }

  public static function addRoom($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status)
  {
    require("connection_connect.php");
    if($room_status == '') $room_status = '4';
    $sql = "INSERT into room (room_id, nameroom, building_name, floor, the_amount_of_people_that_can_enter, roomdetail, table_and_chair_set, projector, white_board, power_socket, room_status) values (NULL, '$nameroom', '$building_name', '$floor', '$the_amount_of_people_that_can_enter','$roomdetail', '$table_and_chair_set', '$projector', '$white_board', '$power_socket', '$room_status') ";
    print_r($sql);
    $result = $conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
  }

  public static function updateRoom($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status)
  {
    require("connection_connect.php");
    $sql = "UPDATE room SET nameroom = '$nameroom', building_name = '$building_name', floor = '$floor', the_amount_of_people_that_can_enter = '$the_amount_of_people_that_can_enter',roomdetail = '$roomdetail', table_and_chair_set = '$table_and_chair_set', projector = '$projector', white_board = '$white_board', power_socket = '$power_socket', room_status = '$room_status' WHERE room_id = '$room_id' ";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result rows";
  }

  public static function deleteRoom($room_id)
  {
    require("connection_connect.php");
    $sql = "DELETE FROM room WHERE room_id = '$room_id' ";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "delete success $result rows";
  }

  public static function search($key)
  {
    $roomList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM room_status WHERE
    (room_id LIKE '$key' OR 
    nameroom LIKE '$key' OR
    building_name LIKE '$key' OR
    floor LIKE '$key' OR
    the_amount_of_people_that_can_enter LIKE '$key' OR
    roomdetail LIKE '$key' OR
    table_and_chair_set LIKE '$key' OR
    projector LIKE '$key' OR
    white_board LIKE '$key' OR
    power_socket LIKE '$key' OR
    room_status LIKE '$key') ";


    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc()) {

      $room_id = $my_row['room_id'];
      $nameroom = $my_row['nameroom'];
      $building_name = $my_row['building_name'];
      $floor = $my_row['floor'];
      $the_amount_of_people_that_can_enter = $my_row['the_amount_of_people_that_can_enter'];
      $roomdetail = $my_row['roomdetail'];
      $table_and_chair_set = $my_row['table_and_chair_set'];
      $projector = $my_row['projector'];
      $white_board = $my_row['white_board'];
      $power_socket = $my_row['power_socket'];
      $room_status = $my_row['room_status'];
      $roomList[] = new room($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status);
    }
    require("connection_close.php");
    return $roomList;
  }
}
