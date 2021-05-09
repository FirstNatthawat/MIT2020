
<?php

if (!$_SESSION["user_id"]){  //check session

    Header("Location: index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}
?>
<div class="col-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">อัปเดตผู้ใช้งาน</h4>



<form method="post" action="?controller=user&action=updateUser">
    <label>User ID <input type="text" name="user_id" value="<?php echo $userList->user_id; ?>"></label><br>
    <label>Name <input type="text" name="name" value="<?php echo $userList->name; ?>"></label><br>
    <label>Surname <input type="text" name="surname" value="<?php echo $userList->surname; ?>"></label><br>
    <label>User Role <select name="user_role">
            <option value="Student" <?php if ($userList->user_role == "Student") echo " selected = \"selected\" "; ?>>Student</option>
            <option value="Teacher" <?php if ($userList->user_role == "Teacher") echo " selected = \"selected\" "; ?>>Teacher</option>
            <option value="Admin" <?php if ($userList->user_role == "Admin") echo " selected = \"selected\" "; ?>>Admin</option>
        </select></label><br>
    <label>ldentification_card <input type=text name="ldentification_card" value="<?php echo $userList->ldentification_card; ?>"></label><br>
    <label>Username <input type="text" name="user_name" value="<?php echo $userList->user_name; ?>"></label><br>
    <label>Password <input type="text" name="pass_word" value="<?php echo $userList->pass_word; ?>"></label><br>

    <input type="hidden" name="controller" value="user" />
    <button type="button" class="btn btn-danger" value="Back"  onclick="history.back()" >Back</button>
    <button type="submit" class="btn btn-primary" name="action" value="updateUser">Save</button>
</form>
        </div>
    </div>
</div>