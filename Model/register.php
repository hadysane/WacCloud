<?php

class Users
{
    protected $server; 
    protected $user; 
    protected $pass;
    protected $options; 
    public $pdo;  

    public function __construct() {
        $this->server = "mysql:host=localhost;dbname=my_cloud";
        $this->host = "localhost"; 
        $this->user = "root"; 
        $this->pass = "root"; 
        $this->options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        try{
            $this->pdo = new PDO($this->server, $this->user,$this->pass, $this->options);
            return $this->pdo;
        }  catch (PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    public function createUser($firstname, $lastname, $email, $username, $password){
        $query = $this->pdo->prepare("INSERT INTO users (username, firstname, lastname, email, password)
        VALUES(:username, :firstname, :lastname, :email, :password)"); 
        $query->bindValue(':username', $username); 
        $query->bindValue(':firstname', $firstname); 
        $query->bindValue(':lastname', $lastname); 
        $query->bindValue(':email', $email); 
        $query->bindValue(':password', $password); 
        $query->execute();
    }

    public function username_exists($username) {
        $sql = $this->pdo->prepare("SELECT username FROM users WHERE username = :username");
        $sql->bindValue(":username", $username);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function email_exists($email) {
        $sql = $this->pdo->prepare("SELECT email FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkUser($username){
        $query = $this->pdo->prepare("SELECT id_user ,email, username, firstname, lastname, email, active, password  FROM users WHERE username = :username"); 
        $query->bindValue(':username', $username);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    } 

    public function connexMembre($usernames) { 
        session_start();
        $result_login = $this->checkUser($usernames); 
        $_SESSION['id'] = $result_login['id_user']; 
        $_SESSION['email'] = $result_login['email'];
        $_SESSION['username'] = $result_login['username']; 
        $_SESSION['password'] = $result_login['password'];
        $_SESSION['firstname'] = $result_login['firstname']; 
        $_SESSION['lastname'] = $result_login['lastname'];
    }

    public function deactivate($id_user) {
        $sql = $this->pdo->prepare("UPDATE users SET active = 0 WHERE id_user = :id_user");
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateUsername($username, $id_user){
        $sql = $this->pdo->prepare("UPDATE users SET username = :username WHERE id_user = :id_user");
        $sql->bindValue(":username", $username);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateLastname($lastname, $id_user){
        $sql = $this->pdo->prepare("UPDATE users SET lastname = :lastname WHERE id_user = :id_user");
        $sql->bindValue(":lastname", $lastname);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateFirstname($firstname, $id_user){
        $sql = $this->pdo->prepare("UPDATE users SET firstname = :firstame WHERE id_user = :id_user");
        $sql->bindValue(":firstname", $firstname);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }


    public function updateEmail($email, $id_user){
        $sql = $this->pdo->prepare("UPDATE users SET email = :email WHERE id_user = :id_user");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updatePass($pass, $id_user){
        $sql = $this->pdo->prepare("UPDATE users SET password = :password WHERE id_user = :id_user"); 
        $sql->bindValue(":password", $pass);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function addfile($id_user, $name, $type, $size, $path){
        $sql= $this->pdo->prepare("INSERT INTO upload_files (id_user, name, type, size, path) VALUES (:id_user, :name, :type, :size, :path)");
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":type", $type);
        $sql->bindValue(":size", $size);
        $sql->bindValue(":path", $path);
        $sql->execute();
    }

    public function getFiles($id_user){
        $sql= $this->pdo->prepare("SELECT * FROM upload_files WHERE id_user = :id_user"); 
        $sql->bindValue(":id_user", $id_user); 
        $sql->execute(); 
        return $sql->fetchAll(); 
    }


}