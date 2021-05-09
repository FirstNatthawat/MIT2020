<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">ประวัติการจองห้อง</h4>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
    <td>Booking ID</td>
    <td>Name</td>
    <td>Surname</td>
    <td>User Role</td>
    <td>Name Room</td>
    <td>Building Name</td>
    <td>Time Start</td>
    <td>Time End</td>
    <td>Participants</td>
                    </thead>
                    </tr>
                    <tbody>

<?php
    foreach($bookList as $book){
        echo "<tr>
                <td>$book->booking_id</td>
                <td>$book->name</td>
                <td>$book->surname</td>
                <td>$book->user_role</td>
                <td>$book->nameroom</td>
                <td>$book->building_name</td>
                <td>$book->time_period_start</td>
                <td>$book->time_period_stop</td>
                <td>$book->participants</td>
            </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
