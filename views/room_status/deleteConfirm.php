<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ลบสถานะห้อง</h4>
<?php echo"<br>Are you sure to delete this Room Status $roomStatusList->room_status_id $roomStatusList->room_status_name? <br>" ; ?>
            

<form method="get" action=" ">
    
<input type="hidden" name="controller" value="room_status"/>
<input type="hidden" name="room_status_id" value="<?php echo $roomStatusList->room_status_id;?>"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
<button type="submit"class="btn btn-primary"  name="action" value="deleteRoomStatus">delete</button>
</form>
            </div>
    </div>
</div>