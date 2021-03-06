<?php
session_start();
include('/model/m_user.php');

class C_user{
	function registerAccount($firstname, $lastname, $email, $password){
		$m_user = new M_user();
		$id_user = $m_user->register($firstname, $lastname, $email, $password);
		$user = $m_user->login($email,$password);
		if($id_user > 0){
			$_SESSION['success'] = "Success Registration";
			$_SESSION['user_name'] = $user->firstname;
			header('location:index.php');
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
			}
		}else{
			$_SESSION['error'] = "Fail Registration";
			header('location:register.php');
		}
	}
	
	public function loginAccount($email, $password){
		$m_user = new M_user();
		$user = $m_user->login($email,$password);
		if($user == true){
			$_SESSION['user_name'] = $user->firstname;
			header('location:index.php');
			if(isset($_SESSION['user_error'])){
				unset($_SESSION['user_error']);
			}
		}else{
			$_SESSION['user_error'] = "Wrong Infomation";
			header('location:login.php');
		}
	}
	function logout(){
		session_destroy();
		header("location:index.php");
	}
	function createAccount($firstname, $lastname, $email, $password){
		$m_user = new M_user();
		$id_user = $m_user->register($firstname, $lastname, $email, $password);
		if($id_user > 0){
			$_SESSION['success'] = "Success Registration";
			header('location:admin.php');
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
			}
		}else{
			$_SESSION['error'] = "Fail Registration";
			header('location:register.php');
		}
	}
	public function showData(){
		$m_user = new M_user();
		$showUser = $m_user->getData();
		return array('showUser'=>$showUser);
	}
	public function update(){
		$edit_state = false;
	}
}
?>
