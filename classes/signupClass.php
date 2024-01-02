<?php
    class SignUp{
        private $error = "";
        public function evaluate($data){
            foreach ($data as $key => $value) {
                if(empty($value)){
                    $this->error .= "$key is required and cannot be empty. <br>";
                }
            }

            if ($this->error == "") {
                // no error
                $this->createUser($data);
            } else {
                return $this->error;
            }
        }
        public function createUser($data){

            $firstName = $data['firstname'];
            $lastName = $data['$lastName'];
            $gender = $data['$gender'];
            $email = $data['email'];
            $password = $data['$password'];

            // create these
            $urlAddress = strtolower($firstName) . "." . strtolower($lastName);
            $userID = $this->createUserID();

            $query = "INSERT INTO users 
            (user_id, firstName, lastName, gender, email, password, urlAddress)
            VALUES ('$userID', '$firstName', '$lastName', '$gender', '$email', '$password', '$urlAddress')"; 

            $DB = new DataBase();
            $DB->save($query);
        }

        private function createUserID(){
            $length = rand(4,19);
            $number = '';
            for ($i=0; $i < $length ; $i++) { 
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }
            return $number;
        }
    }
?>