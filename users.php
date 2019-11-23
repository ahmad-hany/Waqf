<?php
include_once "Database.php";
include_once "Operations.php";
class users extends Database implements Operations
{
    var //$userID,
        $userType,
        $userName,
        $userFirstName,
        $userLastName,
        $userPhone,
        $userEmail,
        $userPassword,
        $userPortfolio,
        $userStatus,
        $userTaxRecord;

    // public function getUserID()
    // {
    //     return $this->userID;
    // }
    // public function setUserID($id)
    // {
    //     $this->userID = $id;
    // }

    public function getUserType()
    {
        return $this->userType;
    }
    public function setUserType($type)
    {
        $this->userType = $type;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function setUserName($name)
    {
        $this->userName = $name;
    }

    public function getUserFirstName()
    {
        return $this->userFirstName;
    }
    public function setUserFirstName($FName)
    {
        $this->userFirstName = $FName;
    }

    public function getUserLastName()
    {
        return $this->userLastName;
    }
    public function setUserLastName($LName)
    {
        $this->userLastName = $LName;
    }

    public function getUserPhone()
    {
        return $this->userPhone;
    }
    public function setUserPhone($Phone)
    {
        $this->userPhone = $Phone;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }
    public function setUserEmail($email)
    {
        $this->userEmail = $email;
    }

    public function getUserPassword()
    {
        return $this->userPassword;
    }
    public function setUserPassword($password)
    {
        $this->userPassword = $password;
    }

    public function getUserPortfolio()
    {
        return $this->userPortfolio;
    }
    public function setUserPortfolio($portfolio)
    {
        $this->userPortfolio = $portfolio;
    }

    public function getUserStatus()
    {
        return $this->userStatus;
    }
    public function setUserStatus($status)
    {
        $this->userStatus = $status;
    }

    public function getUserTaxRecord()
    {
        return $this->userTaxRecord;
    }
    public function setUserTaxRecord($taxRecord)
    {
        $this->userTaxRecord = $taxRecord;
    }

    public function Add()
    {

        if ($this->getUserType() == "Organization") {
            return parent::RUNDML("insert into users (UserType,Username,FirstName,LastName,PhoneNo,Email,Password,status,TaxRecord) values ('" . $this->getUserType() . "','" . $this->getUserName() . "','" . $this->getUserFirstName() . "','" . $this->getUserLastName() . "','" . $this->getUserPhone() . "','" . $this->getUserEmail() . "','" . $this->getUserPassword() . "','Pending','" . $this->getUserTaxRecord() . "')", "Waiting for approval");
        } else {
            return parent::RUNDML("insert into users (UserType,Username,FirstName,LastName,PhoneNo,Email,Password,status) values ('" . $this->getUserType() . "','" . $this->getUserName() . "','" . $this->getUserFirstName() . "','" . $this->getUserLastName() . "','" . $this->getUserPhone() . "','" . $this->getUserEmail() . "','" . $this->getUserPassword() . "','Approved')", "Your account is now approved");
        }
    }
    public function Update()
    {
        return parent::RUNDML("update users set FirstName='" . $this->getUserFirstName() . "',LastName='" . $this->getUserLastName() . "',PhoneNo='" . $this->getUserPhone() . "',Email='" . $this->getUserEmail() . "',Password='" . $this->getUserPassword() . "' where Username='" . $this->getUserName() . "'", "Profile has been updated");
    }
    public function Delete()
    { }

    public function Search()
    { }

    public function Login()
    {
        $log = parent::RunSearch("Select * From users where (Username='" . $this->getUserName() . "' or Email='" . $this->getUserEmail() . "' or PhoneNo='" . $this->getUserPhone() . "') and Password='" . $this->getUserPassword() . "'");
        return $log;
    }
    public function checkUser()
    {
        $check = parent::RunSearch("select * from users where (Username='" . $this->getUsername() . "' or Email='" . $this->getUserEmail() . "' or PhoneNo='" . $this->getUserPhone() . "')");
        $rows = mysqli_fetch_assoc($check);
        if ($rows) {
            return $rows;
        } else {
            return "fkdlsld";
        }
    }
}
