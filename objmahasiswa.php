<?php

require_once 'Mahasiswa.php';

// Form input
echo '
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 align= center>Form Nilai Ujian Mahasiswa</h1>
    <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Kuliah: <input type="text" name="kuliah"><br>
        Matakuliah: <input type="text" name="mataKuliah"><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" value="Submit">
    </form>';

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilai = $_POST['nilai'];

    // Buat objek
    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $mataKuliah);
    $mahasiswa->setNilai($nilai);

   // Output dengan tabel
echo '
    <h1 align=center>Daftar Nilai Ujuan Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Universitas</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>' . $mahasiswa->nim . '</td>
            <td>' . $mahasiswa->nama . '</td>
            <td>' . $mahasiswa->kuliah . '</td>
            <td>' . $mahasiswa->mataKuliah . '</td>
            <td>' . $mahasiswa->nilai . '</td>
            <td>' . $mahasiswa->grade . '</td>
            <td>' . $mahasiswa->predikat . '</td>
            <td>' . $mahasiswa->status . '</td>
        </tr>
    </table>
</body>
</html>';
}
?>
