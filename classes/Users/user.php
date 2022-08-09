<?php
class User extends Database
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $date_of_birth;
    public $email;
    public $skinColor;
    public $height;
    public $bodyType;
    public $phoneNumber;
    public $status;

    public $result;


    public function userInfo($conditions = "", $fields = "*", $column = "")
    {
        return $this->lookUp("user", $fields, $conditions, $column);
    }

    public function singleUserInfo($userId)
    {
        $this->result = $this->userInfo("id = '$userId'");
        $this->first_name = $this->result['first_name'];
        $this->middle_name = $this->result['middle_name'];
        $this->last_name = $this->result['last_name'];
        $this->date_of_birth = $this->result['date_of_birth'];
        $this->email = $this->result['email'];
        $this->skinColor = $this->result['skin_color'];
        $this->height = $this->result['height'];
        $this->bodyType = $this->result['body_type'];
        $this->phoneNumber = $this->result['phone_number'];
        $this->status = $this->result['status'];
    }


    public function UserStatus($userId)
    {
        $this->singleUserInfo($userId);
        return $this->status == 0 ? 'Active' : 'Deleted';
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    public function getUserStatus($status)
    {
        return $this->userInfo("status = '$status'");
    }

    public function getDeletedUser()
    {
        return $this->getUserStatus(1);
    }

    public function getActiveUser()
    {
        return $this->getUserStatus(0);
    }

    

    public function validation()
    {
        if (commonFunc::checkEmptyInput([$this->first_name, $this->middle_name, $this->last_name, $this->date_of_birth, $this->email, $this->skinColor, $this->height, $this->bodyType, $this->phoneNumber])) {
            commonFunc::redirect("../../../views/BIO.php", "msg", "None of this field must be empty");
            exit;
        }

        //   if ($this->isExists("name = '$this->name'")) {
        //     // echo "This name already exists";
        //     Fun::reDirect("../views/user.php", "msg", "This name already exists");
        //   }


        if (is_numeric($this->first_name || $this->last_name || $this->middle_name)) {
            // echo "Gender must be in text only";
            commonFunc::redirect("../../../views/BIO.php", "msg", "This name must be text only");
            exit;
        }
        // if (!is_numeric($this->date_of_birth)) {
        //     // echo "Age must be in number only";
        //     commonFunc::redirect("../../../views/BIO.php", "msg", "Date of birth must be number only");
        // exit;

        // }
        commonFunc::redirect("../../../views/BIO.php", "msg", "submitted");
    }
    public function processUser($first_name, $middle_name, $last_name, $date_of_birth, $email, $skinColor, $height, $bodyType, $phoneNumber)

    {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->email = $email;
        $this->skinColor = $skinColor;
        $this->height = $height;
        $this->bodyType = $bodyType;
        $this->phoneNumber = $phoneNumber;
        $this->validation();
        $this->saveUserBio();
    }

    public function saveUserBio()
    {
        return $this->save("user", "first_name = '$this->first_name', middle_name = '$this->middle_name', last_name = '$this->last_name', date_of_birth = '$this->date_of_birth', email = '$this->email', skin_color = '$this->skinColor', height = '$this->height', body_type = '$this->bodyType',phone_number = '$this->phoneNumber' ");
    }
}
