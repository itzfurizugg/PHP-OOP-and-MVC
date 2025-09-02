<?php

class MemberModel extends Connect {
    protected $nama;
    protected $email;
    protected $alamat;

    protected function findAll() {
        $result = $this->connect()->query("SELECT * FROM member");
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $member[] = $data;
            }
            return $member;
        }
    }

    protected function findOne($id) {
        $result = $this->connect()->query("SELECT * FROM member WHERE id = '$id'");
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $member[] = $data;
            }
            return $member;
        }
    }
}
?>
