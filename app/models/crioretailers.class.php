<?php
class Crioretailers
{
    private $error = "";

    // below function generates a random string of given length
    private function get_random_string_max($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(4, $length);
        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }
    // below function checks frr if user is login or not if true return all the users data
    public function check_login(){
        if(isset($_SESSION['user_url'])){
            $arr['url'] = $_SESSION['user_url'];
            $query = "SELECT * FROM crioretailers WHERE url_address = :url limit 1";
            $db = Database::getInstance();
            $result = $db->read($query,$arr);
            if(is_array($result)){
                return $result[0];
            }
        }
        return false;
    }
    // below function is for user logout
    public function logout(){
        if(isset($_SESSION['user_url'])){
            unset($_SESSION['user_url']);
            header("Location:".ROOT."home");
            die;
        }
    }

    // the function below will be used to signup a user
    public function signup($POST)
    {    $db = Database::getInstance();
        // IMP here using the $POST var getting all the names of the form submission
        $preparingQuery = array();
        $preparingQuery['name']    = trim($POST['Name']);
        $preparingQuery['email']    = trim($POST['email']);
        $preparingQuery['password']    = trim($POST['password']);
        // confirm pass will not be the part of the final query so not storing it inside the preparingQuery array
        $confirmPass    = trim($POST['confirmPass']);

        if (empty($preparingQuery['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $preparingQuery['email'])) {
            // if there is a error storing it in the error property lastly we will check for any errors in this private error variable
            // will only advance if there is no error or strig in the error variable
            $this->error .= "Please enter a valid Email </br>";
        }
        if (empty($preparingQuery['name']) || !preg_match("/^[a-zA-Z]+$/",$preparingQuery['name'])) {
            $this->error .= "Please enter a valid Name </br>";
        }

        if ($preparingQuery['password']!=$confirmPass) {
            $this->error .= "Passwords dont match </br>";
        }
        if (strlen($preparingQuery['password']) < 4) {
            $this->error .= "Passwords length must be atleast 4 characters long </br>";
        }
        // checking if email already exists
        $sqlCheckEmailExist = "SELECT * FROM crioretailers WHERE email = :email LIMIT 1";
        $emailExist['email'] = $preparingQuery['email'];
        $checkEmail = $db->read($sqlCheckEmailExist,$emailExist);
        if(is_array($checkEmail) && count($checkEmail)){
            $this->error .= "the email is already in use";
            $emailExist = false;
            // above setting the $emailExist array to false or resetting the array after use
        }
        // checking if random url_address exist almost impossible still making sure 

        $preparingQuery['url_address'] = $this->get_random_string_max(60);
        $sqlCheckUrlExist = "SELECT * FROM crioretailers WHERE url_address = :url_address LIMIT 1";
        $urlExist['url_address'] = $preparingQuery['url_address'];
        $checkUrl = $db->read($sqlCheckUrlExist,$urlExist);
        if(is_array($checkUrl)){
            $preparingQuery['url_address'] = $this->get_random_string_max(60);
        }

        if ($this->error == "") {
            // save the data to database
            //IMP HERE will prepare all the ranks or anything that is needed for the user signup
            $preparingQuery['rank'] = 'customer';
            //IMP Below we can hash the password but i chose not to
            // $preparingQuery['password'] = hash('sha1',$preparingQuery['password']);
            $preparingQuery['date'] = date('Y-m-d H:i:s');
            // preparing the query
            $query = "INSERT INTO crioretailers (url_address,name,email,password,date,rank) values (:url_address,:name,:email,:password,:date,:rank)";
        //    the db was initialized above in line 22 IMP
            $result = $db->write($query,$preparingQuery);
            if($result){
                // if true head the user to the login page
                header("Location:".ROOT."Login");
                die;
            }
        }

        $_SESSION['ERROR'] = $this->error;
    }



    public function login($POST)
    {
        $db = Database::getInstance();
        // IMP here using the $POST var getting all the names of the form submission
        $preparingQuery = array();
        $preparingQuery['email']    = trim($POST['email']);
        $preparingQuery['password']    = trim($POST['password']);

        if (empty($preparingQuery['email']) || !preg_match("/^[a-zA-Z_-]+@[a-zA-Z]+.[a-zA-Z]+$/", $preparingQuery['email'])) {
            // if there is a error storing it in the error property lastly we will check for any errors in this private error variable
            // will only advance if there is no error or strig in the error variable
            $this->error .= "Please enter a valid Email </br>";
        }
        if (strlen($preparingQuery['password']) < 4) {
            $this->error .= "Passwords length must be atleast 4 characters long </br>";
        }
     
        if ($this->error == "") {
               // checking if user exists already exists
        $sqlCheckEmailExist = "SELECT * FROM crioretailers WHERE email = :email AND password = :password LIMIT 1";
        $result = $db->read($sqlCheckEmailExist,$preparingQuery);
        if(is_array($result)){
            // arrow was used below as from database we are returning an arrayy of objects so first part is an array 
            // the second part is an object so arrow is used to access the key to get the value
            $_SESSION['user_url'] = $result[0]->url_address;
            header("Location:".ROOT."home");
            die;
        }
        $this->error = "Wrong email or password";
            
        }

        $_SESSION['ERROR'] = $this->error;
    }
    public function get_user($url)
    {
    }
}
