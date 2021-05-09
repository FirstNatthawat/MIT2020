<?php
class newbooking
{
    public $nameroom;
    public $time_period_start;
    public $time_period_stop;
    public $time_stramp;

    public function __construct($nameroom, $time_period_start, $time_period_stop, $time_stramp)
    {
        $this->nameroom = $nameroom;
        $this->time_period_start = $time_period_start;
        $this->time_period_stop = $time_period_stop;
        $this->time_stramp = $time_stramp;
    }
    public static function getAll()
    {
        $newbookingList = [];
        require("connection_connect.php");
        $sql = "SELECT
        room.nameroom,
        booking_period.time_period_start,
        booking_period.time_period_stop,
        booking.time_stramp
      FROM
        booking
      INNER JOIN
        booking_period ON booking.booking_period_id = booking_period.booking_period
      INNER JOIN
        room ON room.room_id = booking.room_id";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $nameroom = $my_row["nameroom"];
            $time_period_start = $my_row["time_period_start"];
            $time_period_stop = $my_row["time_period_stop"];
            $time_stramp = $my_row["time_stramp"];
            $newbookingList[] = new newbooking($nameroom, $time_period_start, $time_period_stop, $time_stramp);
        }
        require("connection_close.php");
        return $newbookingList;
    }
}
