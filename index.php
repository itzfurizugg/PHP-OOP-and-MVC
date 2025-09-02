<?php
include "connect.php";
include "./model/member-model.php";
include "./controller/member-controller.php";
include "./view/member/member-view.php";
$member = new MemberView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
</head>
<body>
    <?php include "./view/utils/navbar-utils.php"; ?>

    <?php $member->cari(); ?>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Negara</th>
        </tr>
        <?php $member->show() ?>
    </table>
</body>
</html>