
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตการจอง</h4>


            <form method="post" action="?controller=booking&action=updateBooking">
    <label>Booking ID <input type="text" name="booking_id" value="<?php echo $booking->booking_id; ?>"></label><br>
    <label>User ID <input type="text" name="user_id" value="<?php echo $booking->user_id; ?>"></label><br>
    <label>Room ID <input type="text" name="room_id" value="<?php echo $booking->room_id; ?>"></label><br>
    <label>Booking Period ID <select name="booking_period_id" >
    <option value="1">1</option>
            <!-- <option value="Student" <?php if ($booking->user_role == "Student") echo " selected = \"selected\" "; ?>>Student</option>
            <option value="Teacher" <?php if ($booking->user_role == "Teacher") echo " selected = \"selected\" "; ?>>Teacher</option>
            <option value="Admin" <?php if ($booking->user_role == "Admin") echo " selected = \"selected\" "; ?>>Admin</option> -->
        </select></label><br>
    <label>Participants <input type=text name="participants" value="<?php echo $booking->participants; ?>"></label><br>
    
    <input type="hidden" name="controller" value="booking" />
                <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
                <button type="submit" class="btn btn-primary" name="action" value="updateBooking">Save</button>
</form>
        </div>
    </div>
</div>