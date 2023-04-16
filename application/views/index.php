<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
</head>

<body>
    <h1>Daftar Siswa</h1>
    <div class="list">
        <table>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($daftar_siswa as $s) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s->nis ?></td>
                <td><?= $s->nama ?></td>
                <td><?= $s->kelas ?></td>
                <td>
                    <a href="<?= site_url('Siswa/edit/' . $s->id) ?>"><button>Edit</button></a>
                    <form action="<?= site_url('Siswa/hapus_data') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $s->id ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="tambah-btn">
        <a href="<?= site_url('tambah') ?>"><button>Tambah Siswa</button></a>
    </div>
</body>

</html>