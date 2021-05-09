<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ลบการจอง</h4>
            <?php echo"<br>Are you sure to delete this BOOKING ID $booking->booking_id ?<br>" ; ?>
            

<form method="get" action=" ">
    
<input type="hidden" name="controller" value="booking"/>
<input type="hidden" name="booking_id" value="<?php echo $booking->booking_id;?>"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="deleteBooking">Delete</button>
</form>
        </div>
    </div>
</div>