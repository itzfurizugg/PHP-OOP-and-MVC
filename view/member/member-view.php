<?php

class MemberView extends MemberController {
    public function show() {
        $members = $this->getMember();

        foreach ($members as $member) { ?>
            <tr>
                <td><?php echo $member['id']; ?></td>
                <td><?php echo $member['nama']; ?></td>
                <td><?php echo $member['role']; ?></td>
                <td><?php echo $member['country']; ?></td>
            </tr>
<?php
        }
    }

    public function cari() {
        $detailMember = $this->getMemberBy();
        if (empty($detailMember))
            return;

        foreach ($detailMember as $detail) { ?>
            <div>
                <h3><?php echo $detail['nama']; ?></h3>
                <p>Jabatan: <?php echo $detail['role']; ?></p>
                <p>Asal Negara: <?php echo $detail['country']; ?></p>
            </div>
<?php
        }
    }
}
?>
