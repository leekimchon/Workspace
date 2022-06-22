<?php
class LoginModel extends DB{
    function check_insert_user($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
    function insert_user($full_name, $email, $phone_number, $address, $password){
        $sql = "INSERT INTO users VALUES ('', '$full_name', '$email', '$phone_number', '$address', '$password', 4, 1)";
        $this->conn->exec($sql);
    }

    function check_Email_login($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetch();
        return $result;
    }
}
?>