<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
            color: #333;
            /* Ubah warna teks header */
        }

        td {
            color: #555;
            /* Ubah warna teks sel data */
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <center>
        <h1 style="color: #333;">Data Siswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $nis; ?></td>
                <td><?= $kelas; ?></td>
                <td><?= $tanggallahir; ?></td>
                <td><?= $tempatlahir; ?></td>
                <td><?= $alamat; ?></td>
                <td><?= $jeniskelamin; ?></td>
                <td><?= $agama; ?></td>
            </tr>
        </table>
        <p><a href="<?= base_url('tugasp7'); ?>">Kembali</a></p>
    </center>
</body>

</html>