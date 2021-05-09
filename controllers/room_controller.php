<?php 
class roomController{
    public function index()
    {
        $roomList = room :: getAll();
        require_once('views/room/index_room.php') ;
    }
    public function newRoom()
    {
        $roomList = room::getAll();
        require_once('views/room/newRoom.php');
    }
    public function addRoom()
    {
        $room_id = $_POST['room_id'];
        $nameroom = $_POST['nameroom'];
        $building_name = $_POST['building_name'];
        $floor = $_POST['floor'];
        $the_amount_of_people_that_can_enter = $_POST['the_amount_of_people_that_can_enter'];
        $roomdetail = $_POST['roomdetail'];
        $table_and_chair_set = $_POST['table_and_chair_set'];
        $projector = $_POST['projector'];
        $white_board = $_POST['white_board'];
        $power_socket = $_POST['power_socket'];
        $room_status = $_POST['room_status'];
        room::addRoom($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status);
        roomController::index();
    }
    public function updateForm()
    {
        $room_id = $_GET['room_id'];
        $roomList = room::getRoomByID($room_id);
        require_once('views/room/updateForm.php');
    }
    public function updateRoom()
    {
        $room_id = $_POST['room_id'];
        $nameroom = $_POST['nameroom'];
        $building_name = $_POST['building_name'];
        $floor = $_POST['floor'];
        $the_amount_of_people_that_can_enter = $_POST['the_amount_of_people_that_can_enter'];
        $roomdetail = $_POST['roomdetail'];
        $table_and_chair_set = $_POST['table_and_chair_set'];
        $projector = $_POST['projector'];
        $white_board = $_POST['white_board'];
        $power_socket = $_POST['power_socket'];
        $room_status = $_POST['room_status'];
        room::updateRoom($room_id, $nameroom, $building_name, $floor, $the_amount_of_people_that_can_enter, $roomdetail, $table_and_chair_set, $projector, $white_board, $power_socket, $room_status);
        roomController::index();
    }
    public function deleteConfirm()
    {
        $room_id = $_GET['room_id'];
        $roomList = room::getRoomByID($room_id);
        require_once('views/room/deleteConfirm.php');
    }
    public function deleteRoom()
    {
        $room_id = $_GET['room_id'];
        room::deleteRoom($room_id);
        roomController::index();
    }
    public function getRoomByID()
    {
        $room_id = $_GET['room_id'];
        $roomList = room::getRoomByID($room_id);
        roomController::index();
    }
    public function search()
    {
        $room_id = $_GET['room_id'];
        $roomList = room::search($room_id);
        roomController::index();
    } 
   
}
?>