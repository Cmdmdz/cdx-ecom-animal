<?php
include('env.config.php');

class DB_con
{
    /**
     * @return false|mysqli
     */
    private $databaseConnect;

    function __construct()
    {
        $conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
        $this->databaseConnect = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL" . mysqli_connect_error();
        }

    }

    public function register($name, $email, $password, $token, $id_rank)
    {
        return mysqli_query($this->databaseConnect, "INSERT INTO `repairman`(`name`, `email`, `password`, `token`,`id_rank`, `contact_id` ) VALUES ('$name','$email','$password','$token','$id_rank','F')");
    }

    public function login($email,$password){
        return mysqli_query($this->databaseConnect, "select * from `repairman` where email = '$email' and password = '$password'");
    }

    public function existEmail($email)
    {
        return mysqli_query($this->databaseConnect, "SELECT email FROM repairman WHERE email = '$email' ");
    }

    public function findAllRank()
    {
        $array = array();
        $result = mysqli_query($this->databaseConnect, "select * from `rank`");

        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }

        return $array;
    }

    public function findAllRankCase()
    {
        $array = array();
        $result = mysqli_query($this->databaseConnect, "select * from `rank_case`");

        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }

        return $array;
    }

    public function createCase($firstName, $lastName, $mobileNumber, $detail, $status, $rank_case_id,$contact_id)
    {

        return mysqli_query($this->databaseConnect, "INSERT INTO `case_repair`(`firstName`, `lastName`, `mobileNumber`, `detail_case`, `status`, `rank_case_id`,`contact_id`) VALUES ('$firstName','$lastName','$mobileNumber','$detail','$status','$rank_case_id','$contact_id')");

    }

    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}


