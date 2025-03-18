<?php 
require_once 'nilai_mahasiswa.php';

$data_mhs =[];

//Data Awal
$data_mhs[] = new NilaiMahasiswa("Goy", "Pemograman Web", 85, 90, 80);
$data_mhs[] = new NilaiMahasiswa("Rahmad", "Pemograman Web", 90, 85, 95);
$data_mhs[] = new NilaiMahasiswa("Mamet", "Pemograman Web", 50, 50, 50);

?>

<?php ?>

<h3> Input data Mahasiswa </h3>

<form action="POST">
    <label for="nama">Nama Mahasiswa:</label><br>
    <input type="text" name="nama" id="nama" required><br><br>
    <label for="matakuliah">Mata Kuliah:</label><br>
    <input type="text" name="matakuliah" id="matakuliah"><br><br>
    <label for="uts">Nilai UTS:</label><br>
    <input type="number" name="uts" id="uts" required><br><br>
    <label for="uas">Nilai UAS:</label><br>
    <input type="number" name="uas" id="uas" required><br>
    <label for="quiz">Nilai Quiz:</label><br>
    <input type="number" name="quiz" id="quiz" required><br><br>
    <input type="submit" name="submit" value="Simpan">
</form>


<h3>Daftar Nilai Mahasiswa</h3>

<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Mata Kuliah</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Tugas</th>
        <th>Nilai Akhir</th>
        <th>Kelulusan</th>
    </tr>
    </thead>
    <tbody>
        <?php 
         $nomor = 1;
         foreach($data_mhs as $mhs){
            echo "<tr>";
            echo "<td>$nomor</td>";
            echo "<td>$mhs->nama</td>";
            echo "<td>$mhs->matakuliah</td>";
            echo "<td>$mhs->nilai_uts</td>";
            echo "<td>$mhs->nilai_uas</td>";
            echo "<td>$mhs->nilai_tugas</td>";
            echo "<td>". number_format($mhs->gethitungNilaiAkhir(), 2)."</td>";
            echo "<td>". $mhs->kelulusan(). "</td>";
            echo "</tr>";
            $nomor++; 
    }
?>
    </tbody>
</table>

