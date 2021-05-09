<?php
class bookingPeriodController
{
    public static function index()
    {
        $bookingPeriodList = bookingPeriod::getAll();
        require_once('views/booking_period/index_bookingPeriod.php');
    }
    public static function newBookingPeriod()
    {
        $bookingPeriodList = bookingPeriod::getAll();
        require_once('views/booking_period/newBookingPeriod.php');
    }
    public static function addBookingPeriod()
    {
        $booking_period = $_POST["booking_period"];
        $time_period_start = $_POST["time_period_start"];
        $time_period_stop = $_POST["time_period_stop"];

        bookingPeriod::addBookingPeriod($booking_period, $time_period_start, $time_period_stop);
        bookingPeriodController::index();
    }
    public static function updateForm()
    {
        $booking_period = $_GET["bookingPeriod"];
        $bookingPeriod = bookingPeriod::getBookingPeriodById($booking_period);
        require_once('views/booking_period/updateForm.php');
    }
    public static function updateBookingPeriod()
    {
        $booking_period = $_POST["booking_period"];
        $time_period_start = $_POST["time_period_start"];
        $time_period_stop = $_POST["time_period_stop"];

        bookingPeriod::updateBookingPeriod($booking_period, $time_period_start, $time_period_stop);
        bookingPeriodController::index();
    }
    public static function deleteConfirm()
    {
        $booking_period = $_GET["bookingPeriod"];
        $bookingPeriod = bookingPeriod::getBookingPeriodById($booking_period);
        require_once('views/booking_period/deleteConfirm.php');
    }
    public static function deleteBookingPeriod()
    {
        $booking_period = $_GET["booking_period"];
        bookingPeriod::deleteBookingPeriod($booking_period);
        bookingPeriodController::index();
    }
}
