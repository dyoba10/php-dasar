<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Nilai Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3 align="center">Input Nilai Mahasiswa</h3>
    <form action="hasilmyasir.php" method="get" name="form1">
        <table border="1" align="center" cellpadding="0">
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <select name="hari" id="">
                        <?php for($hari=1; $hari<=31; $hari++) { ?>
                            <option value="<?php echo $hari; ?>">
                                <?php echo $hari; ?>
                            </option>
                        <?php } ?> 
                    </select>
                    <select name="bulan" id="">
                    <?php for($bulan=1; $bulan<=12; $bulan++) { ?>
                            <option value="<?php echo $bulan; ?>">
                                <?php echo $bulan; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select name="tahun" id="">
                    <?php for($tahun=2018; $tahun>=1909; $tahun--) { ?>
                            <option value="<?php echo $tahun; ?>">
                                <?php echo $tahun; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>   
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="kelamin" id="" value="Laki-laki">Laki-laki
                <input type="radio" name="kelamin" id="" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" id="">
                        <option value="D3(KA)">D3(KA)</option>
                        <option value="D3 (MI)">D3 (MI)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>
                    <select name="semester" id="">
                        <?php for($hari=1; $hari<=6; $hari++) { ?>
                            <option value="<?php echo $hari; ?>">
                                <?php echo $hari; ?>
                            </option>
                        <?php } ?> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td>
                    <select name="matakuliah" id="">
                        <option value="Web Programing 1">Web Programming 1</option>
                        <option value="Java Fudamental">Java Fudamental</option>
                        <option value="Pemrograman Delphi">Pemrograman Delphi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="text" name="ntugas" id=""></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="text" name="nuts" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="text" name="nuas" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit">
                <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>