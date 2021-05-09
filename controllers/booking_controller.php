<?php 
class bookingController{
    public static function index()
    {
        $bookingList = booking::getAll();
        require_once('views/booking/index_booking.php');
    }
    public static function newBooking()
    {
        $bookingList = booking::getAll();
        $userList = user::getAll();
        $roomList = room::getAll();
        $bookingPeriodList = bookingPeriod::getAll();
        require_once('views/booking/newBooking.php');
    }
    public static function addBooking()
    {
        $booking_id = $_POST["booking_id"];
        $user_id = $_POST["user_id"];
        $room_id = $_POST["room_id"];
        $booking_period_id = $_POST["booking_period_id"];
        $participants = $_POST["participants"];
        
        booking::addBooking($booking_id,$user_id,$room_id,$booking_period_id ,$participants);
        bookingController::index();
    }
    public static function updateForm()
    {
        $booking_id = $_GET["booking_id"];
        $booking = booking::getBookingById($booking_id);
        require_once('views/booking/updateForm.php');
    }
    public static function updateBooking()
    {
        $booking_id = $_POST["booking_id"];
        $user_id = $_POST["user_id"];
        $room_id = $_POST["room_id"];
        $booking_period_id = $_POST["booking_period_id"];
        $participants = $_POST["participants"];
        
        booking::updateBooking($booking_id,$user_id,$room_id,$booking_period_id ,$participants);
        bookingController::index();
    }
    public static function deleteConfirm()
    {
        $booking_id = $_GET["booking_id"];
        $booking = booking::getBookingById($booking_id);
        require_once('views/booking/deleteConfirm.php');
    }
    public static function deleteBooking()
    {
        $booking_id = $_GET["booking_id"];
        booking::deleteBooking($booking_id);
        bookingController::index();
    }
}