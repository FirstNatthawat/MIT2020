
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตเวลา</h4>



<form method="post" action="?controller=booking_period&action=updateBookingPeriod">
<label>Booking Period ID <input type="text" name="booking_period" value="<?=$bookingPeriod->booking_period?>"></label><br>
    <label>Time Start <input type="time" name="time_period_start" value="<?=$bookingPeriod->time_period_start?>"></label><br>
    <label>Time End <input type="time" name="time_period_stop" value="<?=$bookingPeriod->time_period_stop?>"></label><br>
  
    <input type="hidden" name="controller" value="booking_period" />
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="updateBookingPeriod">Save</button>

    
</form>
        </div>
    </div>
</div>