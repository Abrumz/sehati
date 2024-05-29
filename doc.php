<?php

require_once 'webuser.php';

// DOCTOR
class Doctor extends WebUser {
    protected $doctorName;
    protected $spec;
    protected $phoneNumber;
    protected $nik;
    protected $password;
    protected $doctorId;

    public function __construct($email, $userType, $doctorName, $spec, $phoneNumber, $nik, $password, $doctorId) {
        parent::__construct($email, $userType);
        $this->doctorName = $doctorName;
        $this->spec = $spec;
        $this->phoneNumber = $phoneNumber;
        $this->nik = $nik;
        $this->password = $password;
        $this->doctorId = $doctorId;

        global $database;
        $userrow = $database->query("SELECT * FROM doctor WHERE docemail='$email'");
        if ($userrow) {
            $userfetch = $userrow->fetch_assoc();
            $this->doctorId = $userfetch["docid"];
            $this->doctorName = $userfetch["docname"];
            $this->spec = $userfetch["spec"]; // Assuming spec exists
            $this->phoneNumber = $userfetch["phoneNumber"]; // Assuming phoneNumber exists
            $this->nik = $userfetch["nik"]; // Assuming nik exists
            $this->password = $userfetch["password"]; // Assuming password exists
        } else {
            throw new Exception("User not found.");
        }
    }

    public function getSpecialties() {
        return $this->spec;
    }

    public function getSchedule() {
        // Implementasi untuk mendapatkan jadwal dokter
        $list110 = $database->query("select  * from  schedule where docid=$userid;");
    }

    public function deleteAppointment($appoid) {
        global $database;

        // Penghapusan sesuai id 
        $delete_query = "DELETE FROM appointment WHERE appoid = $appoid";
        $result = $database->query($delete_query);

        if($result) {
            // Jika penghapusan berhasil, redirect kembali ke halaman schedule.php
            header("Location: schedule");
            exit();
        } else {
            // Error
            echo "Error: Tidak bisa hapus jadwal.";
        }
    }

    public function getPatient() {
        session_start();

        if(isset($_SESSION["user"])){
            if($_SESSION["user"] == "" || $_SESSION['usertype'] != 'd'){
                header("location: ../login.php");
                exit();
            } else {
                $useremail = $_SESSION["user"];
            }
        } else {
            header("location: ../login.php");
            exit();
        }

        global $database; // Menggunakan koneksi database global
        $userrow = $database->query("SELECT * FROM doctor WHERE docemail='$useremail'");
        
        if ($userrow) {
            $userfetch = $userrow->fetch_assoc();
            $userid = $userfetch["docid"];
            $username = $userfetch["docname"];
            $email = $userfetch["docemail"];

            // Mendapatkan informasi pasien
            $patients = $database->query("SELECT * FROM patients WHERE doctor_id = '$userid'");
            $patientList = array();
            while($row = $patients->fetch_assoc()) {
                $patientList[] = $row;
            }
            
            return array('userid' => $userid, 'patients' => $patientList); // Mengembalikan userid dan daftar pasien
        } else {
            return array('userid' => null, 'patients' => array());
        }
    }
}
?>