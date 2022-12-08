<?php

class User
{
                private $errors = array();
                public function signup($POST)
                {
                                //validation 
                                $DB = new DatabaseConnection();
                                $data = array();
                                $data['firstname'] = trim($POST['firstname']);
                                $data['lastname'] = trim($POST['lastname']);
                                $data['email'] = trim($POST['email']);
                                $data['password'] = trim($POST['password']);
                                $password_confirm = trim($POST['password_confirm']);
                                if (empty($data['email']) || !preg_match("/^[a-zA-Z]+@[a-zA-Z]+.[a-zA-Z]+$/", $data['email'])) {
                                                $this->errors[] = "Please Enter A valid email";
                                }
                                if (empty($data['firstname']) || !preg_match("/^[a-zA-Z]+$/", $data['firstname'])) {
                                                $this->errors[] = "Please Enter A Valid firstName";
                                }
                                if (empty($data['lastname']) || !preg_match("/^[a-zA-Z]+$/", $data['lastname'])) {
                                                $this->errors[] = "Please Enter A Valid lastName";
                                }
                                if ($data['password'] !== $password_confirm) {
                                                $this->errors[] = "Password not match";
                                }
                                if (strlen($data['password']) < 4) {
                                                $this->errors[] = "Password must be at least 4 character";
                                }
                                #check email if exists
                                $arr = false;
                                $sql = "SELECT * FROM users WHERE email=:email LIMIT 1";
                                $arr['email'] = $data['email'];
                                //echo $arr['email'];
                                //die;
                                $check = $DB->read($sql, $arr);
                                if (is_array($check)) {

                                                //die;
                                                $this->errors[] = "That Email is already in use";
                                }

                                if (count($this->errors) == 0) {

                                                //$data['date'] = date("Y-m-d H:i:s");
                                                echo "rrrrr";

                                                $data['password'] = hash('sha1', $data['password']);

                                                $query = "INSERT INTO users (nom,prenom,email,passowrd) VALUES (:firstname,:lastname,:email,:password)";
                                                $result = $DB->write($query, $data);
                                                if ($result) {
                                                                header('Location:login.php');
                                                                die;
                                                }
                                }
                                return $this->errors;
                }
                public function login($POST)
                {
                                $DB = new DatabaseConnection();
                                $data = array();
                                #echo "one";
                                $data['email'] = trim($POST['email']);
                                $data['password'] = trim($POST['password']);
                                if (empty($data['email']) || !preg_match("/^[a-zA-Z]+@[a-zA-Z]+.[a-zA-Z]+$/", $data['email'])) {
                                                $this->errors[] = "Please Enter a valid Email";
                                }
                                if (empty($data['password'])) {
                                                $this->errors[] = "please Enter a valid password";
                                }
                                if (count($this->errors) == 0) {

                                                $data['password'] = hash('sha1', $data['password']);
                                                $query = "SELECT * FROM users WHERE email=:email AND password=:password";
                                                $result = $DB->read($query, $data);
                                                if (is_array($result)) {
                                                                $result = $result[0];
                                                                $_SESSION['firstname'] = $result['firstname'];
                                                                $_SESSION['lastname'] = $result['lastname'];
                                                                $_SESSION['email'] = $result['email'];
                                                                header('Location:index.php');
                                                                die;
                                                }

                                                $this->errors[] = "Wrong Email or Password";
                                }
                                return $this->errors;
                }
                public function logout()
                {
                                if (isset($_SESSION['name'])) {
                                                session_unset();
                                                session_destroy();
                                }
                                header('Location:login.php');
                                die;
                }
                
}
