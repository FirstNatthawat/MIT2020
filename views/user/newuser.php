
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">เพิ่มผู้ใช้งาน</h4>
<form method="post" action="?controller=user&action=addUser">
    <label>User ID <input type="text" name="user_id"></label><br>
    <label>Name <input type="text" name="name"></label><br>
    <label>Surname <input type="text" name="surname"></label><br>
    <label>User Role <select name="user_role">
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Admin">Admin</option>
        </select></label><br>
    <label>Identification Card <input type=text name="ldentification_card"></label><br>
    <label>Username <input type="text" name="user_name"></label><br>
    <label>Password <input type="text" name="pass_word"></label><br>

    <input type="hidden" name="controller" value="user" />
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="addUser">Save</button>
</form>
        </div>
    </div>
</div>