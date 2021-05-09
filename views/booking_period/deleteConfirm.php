<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ลบเวลา</h4>
<?php

echo"<br>Are you sure to delete this BOOKING $bookingPeriod->booking_period ?<br>" ; ?>
            

<form method="get" action=" ">
    
<input type="hidden" name="controller" value="booking_period"/>
<input type="hidden" name="booking_period" value="<?php echo $bookingPeriod->booking_period ;?>"/>
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="deleteBookingPeriod">Delete</button>
</form>
        </div>
    </div>
</div>