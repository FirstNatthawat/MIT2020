<?php

$controllers = array(
    //'pages' => ['home', 'error'],
    'room' => ['index', 'newRoom', 'addRoom', 'updateRoom', 'deleteRoom', 'getRoomByID', 'search', 'updateForm', 'deleteConfirm'],
    'room_status' => ['index', 'newRoomStatus', 'addRoomStatus', 'updateRoomStatus', 'deleteRoomStatus', 'getRoomStatusByID', 'search', 'updateForm', 'deleteConfirm'],
    'book' => ['index'],
    'newbooking' => ['index'],
    'booking' => ['index', 'newBooking', 'addBooking', 'updateForm', 'updateBooking', 'deleteConfirm', 'deleteBooking'],
    'booking_period' => ['index', 'newBookingPeriod', 'addBookingPeriod', 'updateForm', 'updateBookingPeriod', 'deleteConfirm', 'deleteBookingPeriod'],
    'qr_code' => ['index'],
    'user' => ['index', 'newUser', 'addUser', 'updateUser', 'deleteUser', 'getUserByID', 'search', 'updateForm', 'deleteConfirm']
);
function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
//        case "pages":
//            require_once("models/pagesModel.php");
//            $controller = new PagesController();
//            break;

        case "room":
            require_once("models/roomModel.php");
            $controller = new roomController();
            break;

        case "room_status":
            require_once("models/roomStatusModel.php");
            $controller = new roomStatusController();
            break;

        case "user":
            require_once("models/userModel.php");
            $controller = new userController();
            break;
        case "book":
            require_once("models/bookModel.php");
            $controller = new bookController();
            break;
        case "newbooking":
            require_once("models/newbookingModel.php");
            $controller = new newbookingController();
            break;
        case "booking":
            require_once("models/bookingModel.php");
            require_once("models/userModel.php");
            require_once("models/roomModel.php");
            require_once("models/bookingPeriodModel.php");
            $controller = new bookingController();
            break;
        case "booking_period":
            require_once("models/bookingPeriodModel.php");
            $controller = new bookingPeriodController();
            break;
    }
    $controller->{$action}();
}

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } }
// else {
//        call('pages', 'error');
//    }
////} else {
////    call('pages', 'error');
////}
