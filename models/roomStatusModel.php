<?php
class roomStatus
{
    public $room_status_id;
    public $room_status_name;

    public function __construct($room_status_id, $room_status_name)
    {
        $this->room_status_id = $room_status_id;
        $this->room_status_name = $room_status_name;
    }

    public static function getAll()
    {
        $roomStatusList = [];

        require("connection_connect.php");
        $sql = "SELECT * FROM room_status ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $room_status_id = $my_row["room_status_id"];
            $room_status_name = $my_row["room_status_name"];
            $roomStatusList[] = new roomStatus($room_status_id, $room_status_name);
        }
        require("connection_close.php");
        return $roomStatusList;
    }

    public static function getRoomStatusByID($room_status_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM room_status WHERE room_status_id = '$room_status_id'  ";

        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $room_status_id = $my_row["room_status_id"];
        $room_status_name = $my_row["room_status_name"];

        require("connection_close.php");
        return  new roomStatus($room_status_id, $room_status_name);
    }

    public static function addRoomStatus($room_status_id, $room_status_name)
    {
        require("connection_connect.php");
        $sql = "INSERT into room_status (room_status_id, room_status_name) values ('$room_status_id', '$room_status_name') ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function updateRoomStatus($room_status_id, $room_status_name)
    {
        require("connection_connect.php");
        $sql = "UPDATE room_status SET room_status_name = '$room_status_name' WHERE room_status_id = '$room_status_id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }

    public static function deleteRoomStatus($room_status_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM room_status WHERE room_status_id = '$room_status_id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }

    public static function search($key)
    {
        $roomStatusList = [];
        require("connection_connect.php");
        $sql = "SELECT room_status_id, room_status_name FROM room_status WHERE
    ( room_status_id LIKE '$key' OR 
    room_status_name LIKE '$key' ) ";


        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $room_status_id = $my_row["room_status_id"];
            $room_status_name = $my_row["room_status_name"];
            $roomStatusList[] = new roomStatus($room_status_id, $room_status_name);
        }
        require("connection_close.php");
        return $roomStatusList;
    }
}
