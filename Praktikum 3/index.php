<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 50px;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        font-weight: bold;
    }

    hr {
        margin-top: 50px;
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="hasil_nilai.php" method="post">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="matakuliah" class="col-4 col-form-label">Mata Pelajaran</label>
                <div class="col-8">
                    <select id="matakuliah" name="matakuliah" class="custom-select">
                        <option value="">Pilih Mata Pelajaran</option>
                        <option value="Matematika">Matematika</option>
                        <option value="PKN">PKN</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai Tugas</label>
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Nilai Tugas" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="uas" name="uas" placeholder="Nilai UTS" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="tugas" name="tugas" placeholder="Nilai UAS" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button id="submit" name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <hr>
    </div>
</body>

</html>