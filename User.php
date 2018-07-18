<?php 
	include_once 'Session.php';
	include 'Database.php';
	/**
		* 
		*/
		class User 
		{
			
			private $db;
			
			public function __construct()
			{
				# code...
				$this -> db = new Database();
			}

			public function userRegistration($data)
			{
				# code...
				$name = $data['name'];
				$phone = $data['phone'];
				$email = $data['email'];
				$password = md5($data['password']);

				if ($name == "" OR $email == "" OR $password == "") {
					# code...
					$msg = "<div class='alert alert-danger'>Empty</div>";
					return $msg;
					
				}

				 

				if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				
					# code...
					$msg = "<div class='alert alert-danger'>wrong Email</div>";
					return $msg;
				}


				$sql = "INSERT INTO users (name, phone, email, password) VALUES (:name, :phone, :email, :password)";
				$query = $this->db->pdo->prepare($sql);
				$query->bindValue(':name', $name);
				$query->bindValue(':phone', $phone);
				$query->bindValue(':email', $email);
				$query->bindValue(':password', $password);
				
				if ($query-> execute()) {
					# code...
					$msg = "<div class='alert alert-success'>Success</div>";
					return $msg;
				} 
				else{
					$msg = "<div class='alert alert-danger'>Error</div>";
					return $msg;
				}
			}

			public function getLoginUser($email,$password)
			{
				# code...
				$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
				$query = $this->db->pdo->prepare($sql);
				
				$query->bindValue(':email', $email);
				$query->bindValue(':password', $password);
				$query->execute();
				$result = $query->fetch(PDO::FETCH_OBJ);
				return $result;

			}


			public function userLogin($data)
			{ 
				
				$email = $data['email'];
				$password = md5($data['password']);

				if ($email == "" OR $password == "") {
					# code...
					$msg = "<div class='alert alert-danger'>Must not be empty</div>";
					return $msg;
					
				}
				if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				
					# code...
					$msg = "<div class='alert alert-danger'>Error</div>";
					return $msg;
				}

				$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
				$query = $this->db->pdo->prepare($sql);
				
				$query->bindValue(':email', $email);
				$query->bindValue(':password', $password);
				$result = $query-> execute();
				// if ($result) {
				// 	# code...
				// 	$msg = "<div class='alert alert-success'>asd</div>";
				// 	return $msg;
				// }
				// else{
				// 	$msg = "<div class='alert alert-danger'>Error while logging</div>";
				// 	return $msg;
				// }

				$result = $this->getLoginUser($email,$password);
				 
				if ($result) {
					# code...
					Session::init();
					Session::set("login",true);
					Session::set("id",$result->id);
					Session::set("name",$result->name);
					Session::set("email",$result->email);
					Session::set("loginmsg","<div class='alert alert-success'>Successfully logged in!</div>");
					header("Location: index.php");
				}else{
					$msg = "<div class='alert alert-danger'>Data not found</div>";
					return $msg;
				}
			}
		}	


 ?>