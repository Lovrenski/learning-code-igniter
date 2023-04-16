<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Siswa</title>
    </head>

    <body>
        <h2>Form Edit Siswa</h2>
        <div class="container">
            <form action="<?= site_url('siswa/update_data') ?>" method="POST">
                <input type="hidden" value="<?= $daftar_siswa->id ?>">
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
</body>

</html>