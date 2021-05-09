
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตสถานะห้อง</h4>



            <form method="post" action="?controller=room_status&action=updateRoomStatus">
    <label>Room Status ID <input type="text" name="room_status_id" value="<?php echo $roomStatusList->room_status_id; ?>"></label><br>
    <label>Room Status Name <input type="text" name="room_status_name" value="<?php echo $roomStatusList->room_status_name; ?>"></label><br>

    <input type="hidden" name="controller" value="room_status" />
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="updateRoomStatus">Save</button>
</form>
        </div>
    </div>
</div>