
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">เพิ่มห้อง</h4>
<form method="post" action="?controller=room&action=newRoom">
    <label>Room ID <input type="text" name="room_id"></label><br>
    <label>Name Room <input type="text" name="nameroom"></label><br>
    <label>Building Room <input type="text" name="building_name"></label><br>
    <label>Floor <input type="text" name="floor"></label><br>
    <label>จำนวนคนที่รองรับ <input type="number" name="the_amount_of_people_that_can_enter"></label><br>
    <label>Room Detail <input type="text" name="roomdetail"></label><br>
    <label>Table and chair <input type="number" name="table_and_chair_set"></label><br>
    <label>Projector <input type="text" name="projector"></label><br>
    <label>Whiteboard <input type="text" name="white_board"></label><br>
    <label>Power Socket <input type="text" name="power_socket"></label><br>
    <label>Room Status <input type="text" name="room_status"></label><br>


    <input type="hidden" name="controller" value="room" />
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="addRoom">Save</button>
</form>
        </div>
    </div>
</div>