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
    <td>nameroom</td>
    <td>time_period_start</td>
    <td>time_period_stop</td>
    <td>time_stramp</td>

                    </thead>
                    </tr>
                    <tbody>

<?php
    foreach($newbookingList as $new){
        echo "<tr>
                <td>$new->nameroom</td>
                <td>$new->time_period_start</td>
                <td>$new->time_period_stop</td>
                <td>$new->time_stramp</td>
                
                </tr>";
    }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>