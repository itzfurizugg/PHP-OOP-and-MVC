<?php 

class MemberController extends MemberModel {
    public function getMember() {
        return $this->findAll();
    }

    public function getMemberBy() {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if ($onlyId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>
