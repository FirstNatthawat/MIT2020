<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ห้อง</h4>
            <td ><a href='?controller=booking_period&action=newBookingPeriod'><button class='btn btn-success mb-3'>เพิ่มเวลา</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>Booking Period ID</td>
    <td>Time Start</td>
    <td>Time End</td>
    <td>Action</td>
    <td>Action</td>
</tr>

<?php
    foreach($bookingPeriodList as $bookingPeriod){
        echo "<tr>
                <td>$bookingPeriod->booking_period</td>
                <td>$bookingPeriod->time_period_start</td>
                <td>$bookingPeriod->time_period_stop</td>
                <td><a href=\"?controller=booking_period&action=updateForm&bookingPeriod=$bookingPeriod->booking_period\"> Update </a></td>
                <td><a href=\"?controller=booking_period&action=deleteConfirm&bookingPeriod=$bookingPeriod->booking_period\"> Delete </a></td>

                </tr>";
    }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
