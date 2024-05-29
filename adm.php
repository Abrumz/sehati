<?php

require_once 'webuser.php';
//  ADMIN
class Admin extends WebUser {
    protected $adminEmail;
    protected $adminName;
    protected $apassword;
    protected $database; // tambahkan properti database
    protected $userType;

    public function __construct($email, $userType, $adminEmail, $adminName, $apassword, $database) {
        parent::__construct($email, $userType);
        $this->email = $email;
        $this->userType = $userType;
        $this->adminName = $adminName;
        $this->apassword = $apassword;
        $this->adminEmail = $adminEmail;
        $this->database = $database;
    }

    public function addDoctor($name, $email, $nic, $tele, $spec, $password) {
        // Implementasi untuk menambahkan dokter
        $name = $this->database->real_escape_string($name);
        $email = $this->database->real_escape_string($email);
        $nic = $this->database->real_escape_string($nic);
        $tele = $this->database->real_escape_string($tele);
        $spec = $this->database->real_escape_string($spec);
        $password = $this->database->real_escape_string($password);

        $query = "INSERT INTO doctor (docname, docemail, docnic, doctel, specialties, docpassword) VALUES ('$name', '$email', '$nic', '$tele', '$spec', '$password')";
        $result = $this->database->query($query);

        if ($result) {
            // Data disimpan ke webuser 
            $sql2 = "INSERT INTO webuser (email, usertype) VALUES ('$email', 'd')";
            $result2 = $this->database->query($sql2);

            if ($result2) {
                // Redirect ke halaman dokter setelah data disimpan
                header("location: doctors");
                exit; // pastikan keluar setelah redirect
            } else {
                // Error
                return "Terjadi error saat memasukkan data ke tabel webuser: " . $this->database->error;
            }
        } else {
            // Error
            return "Terjadi error saat memasukkan data ke tabel dokter: " . $this->database->error;
        }
    }

    public function deleteDoctor($id) {
        $result001 = $this->database->query("SELECT * FROM doctor WHERE docid=$id;");
        $email = ($result001->fetch_assoc())["docemail"];

        $sql = $this->database->query("DELETE FROM webuser WHERE email='$email';");
        $sql = $this->database->query("DELETE FROM doctor WHERE docemail='$email';");
    }

    public function editDoctor() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            // Validasi input
            $name = $_POST["name"];
            $email = $_POST["email"];
            $nic = $_POST["nic"];
            $tele = $_POST["tele"];
            $spec = $_POST["specialties"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $id = $_POST["id00"];
            $oldemail = $_POST["oldemail"];

            // Periksa apakah kata sandi cocok
            if ($password != $cpassword) {
                $this->error = "Passwords do not match.";
            } else {
                // Simpan data ke tabel doctor
                $stmt = $this->database->prepare("UPDATE doctor SET docname=?, docemail=?, docnic=?, doctel=?, docpassword=?, specialties=? WHERE docid=?");
                $stmt->bind_param("ssssssi", $name, $email, $nic, $tele, $password, $spec, $id);
                $stmt->execute();

                // Periksa apakah pernyataan berhasil dieksekusi
                if ($stmt->affected_rows === 0) {
                    $this->error = "Failed to update doctor data.";
                } else {
                    // Perbarui email di tabel webuser jika email baru digunakan
                    if ($oldemail != $email) {
                        $stmt = $this->database->prepare("UPDATE webuser SET email=? WHERE email=?");
                        $stmt->bind_param("ss", $email, $oldemail);
                        $stmt->execute();
                    }

                    header("location: doctors.php?action=edit&success=true");
                    exit;
                }
                $stmt->close();
            }
        }
    }

    public function getDoctorDetails() {
        if (isset($_GET['id'])) {
            $docid = $_GET['id'];
            $result = $this->database->query("SELECT * FROM doctor WHERE docid=$docid");
            if ($result->num_rows == 1) {
                return $result->fetch_assoc();
            } else {
                // Handle jika dokter tidak ditemukan
                echo "Dokter tidak ditemukan.";
                exit;
            }
        } else {
            // Handle jika parameter id tidak ditemukan
            echo "Parameter id tidak ditemukan.";
            exit;
        }
    }

    public function editSchedule($scheduleid, $title, $docid, $nop, $date, $time) {
        $query = "UPDATE schedule SET title = ?, docid = ?, nop = ?, scheduledate = ?, scheduletime = ? WHERE scheduleid = ?";
        $statement = $this->database->prepare($query);
    
        $statement->bind_param("siissi", $title, $docid, $nop, $date, $time, $scheduleid);
    
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

    public function getScheduleData($scheduleid) {
        // Retrieve existing schedule data for editing
        $schedule_query = "SELECT * FROM schedule WHERE scheduleid = ?";
        $statement = $this->database->prepare($schedule_query);
        $statement->bind_param("i", $scheduleid);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows == 0) {
            return false;
        } else {
            return $result->fetch_assoc();
        }
    }

    public function getActiveDoctors() {
        // Query to fetch list of active doctors
        $doctor_query = "SELECT docid, docname FROM doctor WHERE status = 1 ORDER BY docname ASC";
        $result = $this->database->query($doctor_query);

        $doctors = [];
        while ($row = $result->fetch_assoc()) {
            $doctors[] = $row;
        }

        return $doctors;
    }

    public function addSchedule($title, $docid, $date, $time){
        $title = $this->database->real_escape_string($title);
        $docid = $this->database->real_escape_string($docid);
        $date = $this->database->real_escape_string($date);
        $time = $this->database->real_escape_string($time);

        $query = "INSERT INTO schedule (title, docid, scheduledate, scheduletime) 
                VALUES ('$title', '$docid', '$date', '$time')";

        if ($this->database->query($query) === TRUE) {
            return true;
        } else {
            return "Error: " . $query . "<br>" . $this->database->error;
        }
    }

    public function deleteSchedule($scheduleid) {
        global $database;

        // Penghapusan sesuai id 
        $delete_query = "DELETE FROM schedule WHERE scheduleid = $scheduleid";
        $result = $database->query($delete_query);

        if($result) {
            // Jika penghapusan berhasil, redirect kembali ke halaman schedule.php
            header("Location: schedule.php");
            exit();
        } else {
            // Error
            echo "Error: Tidak bisa hapus jadwal.";
        }
    }

    public function updateDoctorStatus($docid, $status) {
        // Update status dokter di database
        // Gunakan prepared statement untuk menghindari serangan SQL Injection
        $stmt = $this->database->prepare("UPDATE doctor SET status = ? WHERE docid = ?");
        $stmt->bind_param("ii", $status, $docid);
        $stmt->execute();
        $stmt->close();

        // Keluarkan pesan sukses atau gagal ke JavaScript
        echo "Status dokter berhasil diperbaharui!";
    }
}

?>