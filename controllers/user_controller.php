<?php
class userController
{
    public static function index()
    {
        $userList = user::getAll();
        require_once('views/user/index_user.php');
    }
    public function newUser()
    {
        $userList = user::getAll();
        require_once('views/user/newuser.php');
    }
    public function addUser()
    {
        $user_id = $_POST["user_id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $user_role = $_POST["user_role"];
        $ldentification_card = $_POST["ldentification_card"];
        $user_name = $_POST["user_name"];
        $pass_word = $_POST["pass_word"];
        user::addUser($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word);
        userController::index();
    }
    public function updateForm()
    {
        $user_id = $_GET['user_id'];
        $userList = user::getUserByID($user_id);
        require_once('views/user/updateForm.php');
    }
    public function updateUser()
    {
        $user_id = $_POST["user_id"];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $user_role = $_POST["user_role"];
        $ldentification_card = $_POST["ldentification_card"];
        $user_name = $_POST["user_name"];
        $pass_word = $_POST["pass_word"];
        user::updateUser($user_id, $name, $surname, $user_role, $ldentification_card, $user_name, $pass_word);
        userController::index();
    }
    public function deleteConfirm()
    {
        $user_id = $_GET['user_id'];
        $userList = user::getUserByID($user_id);
        require_once('views/user/deleteConfirm.php');
    }
    public function deleteUser()
    {
        $user_id = $_GET["user_id"];
        user::deleteUser($user_id);
        userController::index();
    }
    public function getUserByID()
    {
        $user_id = $_POST["user_id"];
        $userList = user::getUserByID($user_id);
        userController::index();
    }
    public function search()
    {
        $user_id = $_POST["user_id"];
        $userList = user::search($user_id);
        userController::index();
    }
}
