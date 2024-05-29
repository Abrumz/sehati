<?php

class WebUser {
    protected $email;
    protected $userType;

    public function __construct($email, $userType) {
        $this->email = $email;
        $this->userType = $userType;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUserType() {
        return $this->userType;
    }

    public function determineUserType() {
        return $this->userType;
    }
}

?>
