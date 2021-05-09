
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตห้อง</h4>


            <form method="post" action="?controller=room&action=updateRoom">
    <label>Room ID <input type="text" name="room_id" value="<?php echo $roomList->room_id; ?>"></label><br>
    <label>Name Room <input type="text" name="nameroom" value="<?php echo $roomList->nameroom; ?>"></label><br>
    <label>Building Name <input type="text" name="building_name" value="<?php echo $roomList->building_name; ?>"></label><br>
    <label>Floor <input type="text" name="floor" value="<?php echo $roomList->floor; ?>"></label><br>
    <label>จำนวนคนที่รองรับ <input type="number" name="the_amount_of_people_that_can_enter" value="<?php echo $roomList->the_amount_of_people_that_can_enter; ?>"></label><br>
    <label>Room Detail <input type="text" name="roomdetail" value="<?php echo $roomList->roomdetail; ?>"></label><br>
    <label>Table and Chair <input type="number" name="table_and_chair_set" value="<?php echo $roomList->table_and_chair_set; ?>"></label><br>
    <label>Projector <input type="text" name="projector" value="<?php echo $roomList->projector; ?>"></label><br>
    <label>Whiteboard <input type="text" name="white_board" value="<?php echo $roomList->white_board; ?>"></label><br>
    <label>Power Socket <input type="text" name="power_socket" value="<?php echo $roomList->power_socket; ?>"></label><br>
    <label>Room Status <input type="text" name="room_status" value="<?php echo $roomList->room_status; ?>"></label><br>

    <input type="hidden" name="controller" value="room" />
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="updateRoom">Save</button>
</form>
        </div>
    </div>
</div>