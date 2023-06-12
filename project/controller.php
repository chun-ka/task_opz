<?php
require_once 'model.php';

class UserController
{
    private UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function getUsers(): void
    {
        $users = $this->model->getUsers();
        include 'views/user_list.php';
    }

    public function addUser(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $position = $_POST['position'];
            $result = $this->model->addUser($name, $age,$gender,$address,$position);
            if ($result) {
                $users = $this->model->getUsers();
            } else {
                echo "Failed to add user.";
            }
        }
        include 'views/user_list.php';
    }

    public function editUser($id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $position = $_POST['position'];
            $result = $this->model->updateUser($id, $name, $age,$gender,$address,$position);
            if ($result) {
                $users = $this->model->getUsers();
                include 'views/user_list.php';
            } else {
                echo "Failed to update user.";
            }
        } else {
            $user = $this->getUserById($id);
            if ($user) {
                include 'views/edit_user.php';
            }
        }
    }

    public function deleteUser($id): void
    {
        $user = $this->getUserById($id);
        if ($user) {
            $result = $this->model->deleteUser($id);
            if ($result) {
                echo "<script>alert('Xóa thành công')</script>";
            } else {
                echo "<script>alert('Nhân viên không tồn tại hoặc đã bị xóa')</script>";
            }
        } else {
            echo "<script>alert('Nhân viên không tồn tại hoặc đã bị xóa')</script>";
        }
        $this->getUsers();
//        header('Location: controller.php') ;
    }

    private function getUserById($id)
    {
        $users = $this->model->getUsers();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}

$action = $_GET['action'] ?? '';

$userController = new UserController();

switch ($action) {

    case 'add':
        $userController->addUser();
        break;
    case 'edit':
        $userId = $_GET['id'] ?? '';
        $userController->editUser($userId);
        break;
    case 'delete':
        $userId = $_GET['id'] ?? '';
        $userController->deleteUser($userId);
        break;
    default:
        $userController->getUsers();
        break;
}


