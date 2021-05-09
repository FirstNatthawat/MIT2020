<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">จัดการผู้ใช้งาน</h4>
            <td ><a href='?controller=user&action=newUser'><button class='btn btn-success mb-3'>เพิ่มผู้ใช้งาน</button></a> </td>
            <div class="data-tables">
                <table class="table table-bordered">
                    <thead class="bg-light text-capitalize">
                    <tr>
                    <td>User ID</td>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>User role</td>
                    <td>Identification Card</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Action</td>
                    <td>Action</td>
                    </thead>
                </tr>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
