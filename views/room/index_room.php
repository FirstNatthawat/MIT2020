<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">จัดการห้อง</h4>
            <td ><a href='?controller=room&action=newRoom'><button class='btn btn-success mb-3'>เพิ่มห้อง</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
    <tr>
        <td>Room ID</td>
        <td>Name Room</td>
        <td>Building Name</td>
        <td>Floor</td>
        <td>จำนวนคนที่รองรับ</td>
        <td>Room Detail</td>
        <td>Table and Chair</td>
        <td>Projector</td>
        <td>Whiteboard</td>
        <td>Power Socket</td>
        <td>Room Status</td>
        <td>Action</td>
        <td>Action</td>
                    </thead>
                    </tr>
                    <tbody>
    <?php
    foreach ($roomList as $room) {
        echo "<tr>
                <td>$room->room_id</td>
                <td>$room->nameroom</td>
                <td>$room->building_name</td>
                <td>$room->floor</td>
                <td>$room->the_amount_of_people_that_can_enter</td>
                <td>$room->roomdetail</td>
                <td>$room->table_and_chair_set</td>
                <td>$room->projector</td>
                <td>$room->white_board</td>
                <td>$room->power_socket</td>
                <td>$room->room_status</td>
                <td><a href=\"?controller=room&action=updateForm&room_id=$room->room_id\"> Update </a></td>
                <td><a href=\"?controller=room&action=deleteConfirm&room_id=$room->room_id\"> Delete </a></td>
              
                </tr>";
    }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
