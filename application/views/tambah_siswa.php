<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/from.css') ?>">
</head>

<body>
    <h2>Form Tambah Siswa</h2>
    <div class="container">
        <form action=" <?= site_url('siswa/simpan') ?>" method="POST">
            <div class="input">
                <input type=" text" name="nis" placeholder="NIS" required>
            </div>
            <div class="input">
                <input type="text" name="nama" placeholder="Nama" required>
            </div>
            <div class="input">
                <select name="kelas" id="">
                    <option value="">Kelas</option>
                    <option value="X-RA">X-RA</option>
                    <option value="X-RB">X-RB</option>
                    <option value="X-RC">X-RC</option>
                </select>
            </div>
            <div class="save-up-btn">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</body>

</html>