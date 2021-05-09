<?php
class booking
{
    public $booking_id;
    public $user_id;
    public $room_id;
    public $booking_period_id;
    public $participants;
    public $time_stramp;

    public function __construct($booking_id, $user_id, $room_id, $booking_period_id, $participants, $time_stramp)
    {
        $this->booking_id = $booking_id;
        $this->user_id = $user_id;
        $this->room_id = $room_id;
        $this->booking_period_id = $booking_period_id;
        $this->participants = $participants;
        $this->time_stramp = $time_stramp;
    }

    public static function addBooking($booking_id, $user_id, $room_id, $booking_period_id, $participants)
    {
        require("connection_connect.php");
        $sql = "INSERT into booking (booking_id,user_id,room_id,booking_period_id,participants) values ($booking_id,$user_id,$room_id,$booking_period_id ,$participants) ";
        echo $sql;
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function updateBooking($booking_id, $user_id, $room_id, $booking_period_id, $participants)
    {
        require("connection_connect.php");
        $sql = "UPDATE booking SET booking_id = '$booking_id' ,user_id = '$user_id' ,room_id = '$room_id',booking_period_id = '$booking_period_id' ,participants = '$participants' WHERE booking_id = '$booking_id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }
    public static function deleteBooking($booking_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM booking WHERE booking_id = '$booking_id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
    public static function getBookingById($booking_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM booking WHERE booking_id = '$booking_id'  ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $booking_id = $my_row["booking_id"];
        $user_id = $my_row["user_id"];
        $room_id = $my_row["room_id"];
        $booking_period_id = $my_row["booking_period_id"];
        $participants = $my_row["participants"];
        $time_stramp = $my_row["time_stramp"];

        require("connection_close.php");
        return new booking($booking_id, $user_id, $room_id, $booking_period_id, $participants, $time_stramp);
    }
    public static function getAll()
    {
        $bookList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM booking";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $booking_id = $my_row["booking_id"];
            $user_id = $my_row["user_id"];
            $room_id = $my_row["room_id"];
            $booking_period_id = $my_row["booking_period_id"];
            $participants = $my_row["participants"];
            $time_stramp = $my_row["time_stramp"];
            $bookList[] = new booking($booking_id, $user_id, $room_id, $booking_period_id, $participants, $time_stramp);
        }
        require("connection_close.php");
        return $bookList;
    }
}
