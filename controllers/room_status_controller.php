<?php 
class roomStatusController{
    public function index()
    {
        $roomStatusList = roomStatus :: getAll();
        require_once('views/room_status/index_room_status.php') ;
    }
    public function newRoomStatus()
    {
        $roomStatusList = roomStatus::getAll();
        require_once('views/room_status/newRoomStatus.php');
    }
    public function addRoomStatus()
    {
        $room_status_id = $_POST["room_status_id"];
        $room_status_name = $_POST["room_status_name"];
        roomStatus::addRoomStatus($room_status_id, $room_status_name);
        roomStatusController::index();
    }
    public function updateForm()
    {
        $room_status_id = $_GET["room_status_id"];
        $roomStatusList = roomStatus::getRoomStatusByID($room_status_id);
        require_once('views/room_status/updateForm.php');
    }
    public function updateRoomStatus()
    {
        $room_status_id = $_POST["room_status_id"];
        $room_status_name = $_POST["room_status_name"];
        roomStatus::updateRoomStatus($room_status_id, $room_status_name);
        roomStatusController::index();
    }
    public function deleteConfirm()
    {
        $room_status_id = $_GET['room_status_id'];
        $roomStatusList = roomStatus::getRoomStatusByID($room_status_id);
        require_once('views/room_status/deleteConfirm.php');
    }
    public function deleteRoomStatus()
    {
        $room_status_id = $_GET["room_status_id"];
        roomStatus::deleteRoomStatus($room_status_id);
        roomStatusController::index();
    }
    public function getRoomStatusByID()
    {
        $room_status_id = $_POST["room_status_id"];
        $roomStatusList = roomStatus::getRoomStatusByID($room_status_id);
        roomStatusController::index();
    }
    public function search()
    {
        $room_status_id = $_POST["room_status_id"];
        $roomStatusList = roomStatus::search($room_status_id);
        roomStatusController::index();
    } 
}
