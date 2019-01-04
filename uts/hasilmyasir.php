<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Akhir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3 align="center">Hasil Akhir Nilai</h3>
    <table border="1" align="center">
       <tr> 
        <td>Tanggal Lahir</td>
        <td>Nama Mahasiswa</td>
        <td>Jenis Kelamin</td>
        <td>Jurusan</td>
        <td>Semester</td>
        <td>MataKuliah</td>
        <td>Nilai angka</td>
        <td>Nilai Huruf</td>
      </tr>
      <tr>
          <td>
              <?php echo $_GET['hari'] ?> - <?php echo $_GET['bulan'] ?> - <?php echo $_GET['tahun'] ?>
          </td>
          <td>
              <?php echo $_GET['nama'] ?>
          </td>
          <td>
              <?php echo $_GET['kelamin'] ?>
          </td>
          <td>
              <?php echo $_GET['jurusan'] ?>
          </td>
          <td>
              <?php echo $_GET['semester'] ?>
          </td>
          <td>
            <?php echo $_GET['matakuliah'] ?>
          </td>
          <td>
              <?php 
                $nilai1 = $_GET['ntugas'];
                $nilai2 = $_GET['nuts'];
                $nilai3 = $_GET['nuas'];
                $nilai4 = 3;
                $nhasil = ($nilai1+$nilai2+$nilai3)/$nilai4;
                echo $nhasil
              ?>
          </td>
          <td>
              <?php
                if ($nhasil <= 40) {
                    $nh = "E";
                } 
                elseif($nhasil <= 50) {
                    $nh = "D";
                }
                elseif($nhasil <= 70) {
                    $nh = "C";
                }
                elseif($nhasil <= 80) {
                    $nh = "B";
                }
                else {
                    $nh = "A";
                }
              ?>
              <?php
                echo $nh;
              ?>
          </td>
      </tr> 
    </table>
</body>
</html>