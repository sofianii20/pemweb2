<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
        }
        .form-group label {
            font-weight: 500;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Form Nilai Mahasiswa</h5>
                        <form method="POST" action="nilai_siswa.php">

                            <div class="form-group">
                                <label for="Nama">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="Nama" name="Nama" type="text" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Matkul">Mata Kuliah</label>
                                <select id="Matkul" name="Matkul" class="form-control" required>
                                    <option value="DDP">Dasar Dasar Pemrograman</option>
                                    <option value="PWB1">Pemrograman Web 1</option>
                                    <option value="PWB2">Pemrograman Web 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nilai_uts">Nilai UTS</label>
                                <input id="nilai_uts" name="nilai_uts" type="number" class="form-control" placeholder="Masukkan Nilai UTS" min="0" max="100" required>
                            </div>

                            <div class="form-group">
                                <label for="nilai_uas">Nilai UAS</label>
                                <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" placeholder="Masukkan Nilai UAS" min="0" max="100" required>
                            </div>

                            <div class="form-group">
                                <label for="nilai_tugas">Nilai Tugas/Praktikum</label>
                                <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control" placeholder="Masukkan Nilai Tugas" min="0" max="100" required>
                            </div>

                            <div class="form-group text-center">
                                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>