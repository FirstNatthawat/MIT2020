<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">จัดการสถานะห้อง</h4>
            <td ><a href='?controller=room_status&action=newRoomStatus'><button class='btn btn-success mb-3'>เพิ่มสถานะห้อง</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>Room Status ID</td>
    <td>Room Staus Name</td>
    <td>Action</td>
    <td>Action</td>
                    </thead>
                    </tr>
                    <tbody>

<?php

    foreach($roomStatusList as $roomStatus){
        echo "<tr>
                <td>$roomStatus->room_status_id</td>
                <td>$roomStatus->room_status_name</td>
                <td><a href=\"?controller=room_status&action=updateForm&room_status_id=$roomStatus->room_status_id\"> Update </a></td>
                <td><a href=\"?controller=room_status&action=deleteConfirm&room_status_id=$roomStatus->room_status_id\"> Delete </a></td>

               
                </tr>";
    }?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>
