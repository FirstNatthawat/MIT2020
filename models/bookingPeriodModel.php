<?php
class bookingPeriod
{
    public $booking_period;
    public $time_period_start;
    public $time_period_stop;

    public function __construct($booking_period, $time_period_start, $time_period_stop)
    {
        $this->booking_period = $booking_period;
        $this->time_period_start = $time_period_start;
        $this->time_period_stop = $time_period_stop;
    }
    public static function addBookingPeriod($booking_period, $time_period_start, $time_period_stop)
    {
        require("connection_connect.php");
        $sql = "INSERT into booking_period (booking_period,time_period_start,time_period_stop) values ($booking_period,'$time_period_start','$time_period_stop') ";
        echo $sql;
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function updateBookingPeriod($booking_period, $time_period_start, $time_period_stop)
    {
        require("connection_connect.php");
        $sql = "UPDATE booking_period SET booking_period = '$booking_period' ,time_period_start = '$time_period_start' ,time_period_stop = '$time_period_stop' WHERE booking_period = '$booking_period' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }
    public static function deleteBookingPeriod($booking_period)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM booking_period WHERE booking_period = '$booking_period' ";
        print_r($sql);
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
    public static function getBookingPeriodById($booking_period)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM booking_period WHERE booking_period = '$booking_period'  ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $booking_period = $my_row["booking_period"];
        $time_period_start = $my_row["time_period_start"];
        $time_period_stop = $my_row["time_period_stop"];

        require("connection_close.php");
        return new bookingPeriod($booking_period, $time_period_start, $time_period_stop);
    }
    public static function getAll()
    {
        $bookingPeriodList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM booking_period";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $booking_period = $my_row["booking_period"];
            $time_period_start = $my_row["time_period_start"];
            $time_period_stop = $my_row["time_period_stop"];

            $bookingPeriodList[] = new bookingPeriod($booking_period, $time_period_start, $time_period_stop);
        }
        require("connection_close.php");
        return $bookingPeriodList;
    }
}
