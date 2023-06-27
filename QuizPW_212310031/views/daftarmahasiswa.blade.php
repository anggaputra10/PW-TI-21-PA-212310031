<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = [['nama' => 'mattew', 'npm' => '212310052', 'prodi' => 'Teknologi Informasi'],
            ['nama' => 'Angga Putra Andika', 'npm' => '212310031', 'prodi' => 'Teknologi Informasi'],
            ['nama' => 'Michael Teddy', 'npm' => '212310047', 'prodi' => 'Teknologi Informasi']];

            foreach ($mahasiswa as $mhs) {
                echo '<tr>';
                echo '<td>' . $mhs['nama'] . '</td>';
                echo '<td>' . $mhs['npm'] . '</td>';
                echo '<td>' . $mhs['prodi'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>