
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">จองห้อง</h4>
<form method="post" action="?controller=booking&action=addBooking">
    <label>booking_id <input type="text" name="booking_id"></label><br>
    <label>user_id <select type="text" name="user_id">
    <?php foreach ($userList as $user) {
                echo "<option value=".$user->user_id.">".$user->name."  ".$user->surname."</option>";
            }
            ?>
    </select></label><br>
    <label>room_id <select type="text" name="room_id">
    <?php foreach ($roomList as $room) {
                echo "<option value=".$room->room_id.">".$room->nameroom."</option>";
            }
            ?>
    </select></label><br>
    <label>booking_period_id <select name="booking_period_id">
            <?php foreach ($bookingPeriodList as $bookingPeriod) {
                echo "<option value=".$bookingPeriod->booking_period.">".$bookingPeriod->time_period_start." - ".$bookingPeriod->time_period_stop."</option>";
            }
            ?>
        </select></label><br>
    <label>participants <input type=text name="participants"></label><br>
    <input type="hidden" name="controller" value="booking" />
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="addBooking">Save</button>
</form>
        </div>
    </div>
</div>