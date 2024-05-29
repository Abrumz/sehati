<?php

require_once 'webuser.php';

class Patient extends WebUser {
    protected $patientName;
    protected $phoneNumber;
    protected $dateOfBirth;
    protected $nik;
    protected $password;
    protected $patientId;
    protected $patientEmail;

    public function __construct($email, $userType, $patientName, $phoneNumber, $dateOfBirth, $nik, $password, $patientId) {
        parent::__construct($email, $userType);
        $this->patientName = $patientName;
        $this->phoneNumber = $phoneNumber;
        $this->dateOfBirth = $dateOfBirth;
        $this->nik = $nik;
        $this->password = $password;
        $this->patientId = $patientId;
        $this->patientEmail = $email;
    }

    public function getUserInfo($useremail) {
        global $database;
        $sql = "SELECT * FROM patient WHERE pemail=?";
        $stmt = $database->prepare($sql);
        $stmt->bind_param("s", $useremail);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function bookAppointment($userid, $sesi_id) {
        global $database;
        $title = '';
        $docid = '';
        $date = '';
        $time = '';

        // Ambil informasi sesi yang dipilih dari database
        $sesi_query = "SELECT * FROM schedule WHERE scheduleid = ?";
        $stmt = $database->prepare($sesi_query);
        $stmt->bind_param("i", $sesi_id);
        $stmt->execute();
        $sesi_result = $stmt->get_result();

        if ($sesi_result->num_rows > 0) {
            // Jika sesi ditemukan, ambil informasinya
            $sesi_data = $sesi_result->fetch_assoc();
            $title = $sesi_data['title'];
            $docid = $sesi_data['docid'];
            $date = $sesi_data['scheduledate'];
            $time = $sesi_data['scheduletime'];
        }

        // Gabungkan tanggal dan waktu menjadi format datetime yang sesuai
        $datetime = date('Y-m-d H:i:s', strtotime("$date $time"));

        // Query untuk memasukkan data booking ke dalam tabel appointment
        $query = "INSERT INTO appointment (pid, scheduleid, appodate) 
                  VALUES (?, ?, ?)";
        $stmt = $database->prepare($query);
        $stmt->bind_param("iis", $userid, $sesi_id, $datetime);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAppointment($appoid) {
        global $database;
        // Penghapusan sesuai id 
        $delete_query = "DELETE FROM appointment WHERE appoid = ?";
        $stmt = $database->prepare($delete_query);
        $stmt->bind_param("i", $appoid);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function chooseDoctor() {
        // Implementasi untuk memilih dokter
    }

    public function getSessionName() {
        // Implementasi untuk mendapatkan nama sesi pasien
    }
}

?>
