<?php
class Login {
    private $error = "";

    public function evaluate($data) {
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);

        $query = "SELECT * FROM users WHERE email = '$email' limit 1 "; 

        $DB = new DataBase();
        $result = $DB->read($query);

        if ($result) {
            $row = $result[0];

            if ($password == $row['password']) {
                // create session data
                $_SESSION['myBook_user_id'] = $row['user_id'];
            } else {
                $this->error .= "Wrong password.";
            }
        } else {
            $this->error .= "No such email was found.";
        }

        return $this->error;
    }

    public function checkLogin($userID){

        $query = "SELECT user_id FROM users WHERE user_id = '$userID' limit 1";
        
        $DB = new DataBase();
        $result = $DB->read($query);

        if ($result) {
            return true;
        }

        return false;
    }
}

?>