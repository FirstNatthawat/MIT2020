<?php
class book
{
    public $booking_id;
    public $user_id;
    public $room_id;
    public $booking_period_id;
    
    public $name;
    public $surname;
    public $user_role;
    public $nameroom;
    public $floor;
    public $building_name;
    public $time_period_start;
    public $time_period_stop;
    
    public $participants;
    public $timestamp;

    public function __construct($booking_id, $name, $surname, $user_role, $nameroom, $floor, $building_name, $time_period_start, $time_period_stop, $participants)
    {
        $this->booking_id = $booking_id;
        $this->name = $name;
        $this->surname = $surname;
        $this->user_role = $user_role;
        $this->nameroom = $nameroom;
        $this->floor = $floor;
        $this->building_name = $building_name;
        $this->time_period_start = $time_period_start;
        $this->time_period_stop = $time_period_stop;
        $this->participants = $participants;
    }

    public static function getAll()
    {

        $bookList = [];
        require("connection_connect.php");
        $sql = "SELECT booking_id,user.name,user.surname,user.user_role,room.nameroom,room.floor,room.building_name,booking_period.time_period_start,booking_period.time_period_stop,booking.participants FROM booking
    INNER JOIN booking_period ON booking.booking_period_id = booking_period.booking_period
    INNER JOIN room ON room.room_id=booking.room_id
    INNER JOIN user ON user.user_id=booking.user_id";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $booking_id = $my_row["booking_id"];
            $name = $my_row["name"];
            $surname = $my_row["surname"];
            $user_role = $my_row["user_role"];
            $nameroom = $my_row["nameroom"];
            $floor = $my_row["floor"];
            $building_name = $my_row["building_name"];
            $time_period_start = $my_row["time_period_start"];
            $time_period_stop = $my_row["time_period_stop"];
            $participants = $my_row["participants"];
            $bookList[] = new book($booking_id, $name, $surname, $user_role, $nameroom, $floor, $building_name, $time_period_start, $time_period_stop, $participants);
        }
        require("connection_close.php");
        return $bookList;
    }
}
