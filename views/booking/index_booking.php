<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">การจองห้อง</h4>
            <td ><a href='?controller=booking&action=newBooking'><button class='btn btn-success mb-3'>จองห้อง</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>Booking ID</td>
    <td>User ID</td>
    <td>Room ID</td>
    <td>Booking Period ID</td>
    <td>Participants</td>
    <td>Time stamp</td>
    <td>Action</td>
    <td>Action</td>
                    </thead>
                    </tr>
                    <tbody>

<?php
    foreach($bookingList as $booking){
        echo "<tr>
                <td>$booking->booking_id</td>
                <td>$booking->user_id</td>
                <td>$booking->room_id</td>
                <td>$booking->booking_period_id</td>
                <td>$booking->participants</td>
                <td>$booking->time_stramp</td>
                <td><a href=\"?controller=booking&action=updateForm&booking_id=$booking->booking_id\"> Update </a></td>
                <td><a href=\"?controller=booking&action=deleteConfirm&booking_id=$booking->booking_id\"> Delete </a></td>

                </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
