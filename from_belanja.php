<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 900px;
        }
        .harga-box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color:rgba(248, 249, 250, 0.89);
        }
        .harga-box h5 {
            background-color:rgba(255, 0, 21, 0.52);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .text-info-custom {
            background-color:rgb(255, 0, 76); 
            color: white; 
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <form method="POST" action="form_belanja.php">
                    <div class="form-group">
                        <label for="customer">Customer</label>
                        <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer" required>
                    </div>
                    <div class="form-group">
                        <label>Pilih Produk</label><br>
                        <input type="radio" id="tv" name="produk" value="TV" required> TV<br>
                        <input type="radio" id="kulkas" name="produk" value="KULKAS"> Kulkas<br>
                        <input type="radio" id="mesincuci" name="produk" value="MESIN CUCI"> Mesin Cuci<br>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="proses">Kirim</button>
                </form>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];

                    // Daftar harga produk
                    $harga_produk = [
                        "TV" => 6000000,
                        "KULKAS" => 5000000,
                        "MESIN CUCI" => 4000000
                    ];

                    // Menghitung total belanja
                    $total_belanja = $harga_produk[$produk] * $jumlah;
                    
                    echo "<hr>";
                    echo "<p>Nama Customer: <strong>$customer</strong></p>";
                    echo "<p>Produk Pilihan: <strong>$produk</strong></p>";
                    echo "<p>Jumlah Beli: <strong>$jumlah</strong></p>";
                    echo "<p>Total Belanja: <strong>Rp. " . number_format($total_belanja, 0, ',', '.') . ",-</strong></p>";
                }
                ?>
            </div>

            <div class="col-md-4">
                <div class="harga-box">
                    <h5>Daftar Harga</h5>
                    <p>TV : Rp. 6.000.000</p>
                    <p>Kulkas : Rp. 5.000.000</p>
                    <p>Mesin Cuci : Rp. 4.000.000</p>
                    <p class="text-info-custom">Harga Dapat Berubah Setiap Saat</p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>