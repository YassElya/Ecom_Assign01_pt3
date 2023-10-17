<?php
class UserController extends Controller{
    public function index(){
        $users = $this->model('user')->get();
        $this->view('user/index', ['user'=>$users]);
    }

    public function update($id){
        $theNewUser = $this->model('User')->find($id);
        if(isset($_POST['edit'])){
            $theNewUser->username = $_POST['username'];
            $theNewUser->email = $_POST['email'];
            $theNewUser->edit();
            header('location:/user/index');
        }else{
            $this->view('user/update', $theNewUser);
        }
    }
}
?>