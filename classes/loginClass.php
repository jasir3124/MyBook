<?php
class Login{
    private $error = "";

    public function evaluate($data){

        $email = addslashes($data['email']);
        $password = addslashes($data['password']);

        $query = "SELECT * FROM users WHERE email = '$email' limit 1 "; 

        $DB = new DataBase();
        $result = $DB->read($query);

        if($result){

            $row = $result[0];

            if ($password == $row['password']) {
                // create session dara

                $_SESSION['user_id'] = $row['user_id'];
                
            }else{
                $this->error .= "Wrond password.";
            }

        } else{
            return $this->error .= "No such email was found.";
        }
    }
}
?>