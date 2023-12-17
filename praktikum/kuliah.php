<?php
// Tangkap request class_nilai.php
require_once 'class_nilai.php';

$ns1 = new NilaiSantri('Fulan', 70);
$ns2 = new NilaiSantri('Badu', 69);
$ns3 = new NilaiSantri('Usro', 85);
$ns4 = new NilaiSantri('Jarwo', 40);
$ar_santri = [$ns1, $ns2, $ns3, $ns4];
?>

<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%; text-align: center;">No</th>
            <th style="width: 30%; text-align: center;">Nama</th>
            <th style="width: 15%; text-align: center;">Nilai</th>
            <th style="width: 20%; text-align: center;">Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_santri as $san) {
            echo '<tr>';
            echo '<td style="text-align: center;">' . $nomor . '</td>';
            echo '<td>' . $san->nama . '</td>';
            echo '<td style="text-align: center;">' . $san->nilai . '</td>';
            echo '<td style="text-align: center;">' . $san->gethasil() . '</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>