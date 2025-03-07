<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Belanja Online</h2>
        
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label" for="customer">Nama Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Produk</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" value="TV" id="produk_tv" required>
                    <label class="form-check-label" for="produk_tv">TV - Rp 4.200.000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" value="Kulkas" id="produk_kulkas">
                    <label class="form-check-label" for="produk_kulkas">Kulkas - Rp 3.100.000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" value="MESIN CUCI" id="produk_mesin_cuci">
                    <label class="form-check-label" for="produk_mesin_cuci">MESIN CUCI - Rp 3.800.000</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <button type="submit" class="btn btn-success" name="proses">Kirim</button>
        </form>

        <hr>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            // Harga produk
            $harga_produk = [
                "TV" => 4200000,
                "Kulkas" => 3100000,
                "MESIN CUCI" => 3800000
            ];

            $total_belanja = $harga_produk[$produk] * $jumlah;

            echo "<h4>Struk Belanja</h4>";
            echo "<p>Nama Customer: <b>$customer</b></p>";
            echo "<p>Produk Pilihan: <b>$produk</b></p>";
            echo "<p>Jumlah Beli: <b>$jumlah</b></p>";
            echo "<p>Total Belanja: <b>Rp " . number_format($total_belanja, 0, ',', '.') . "</b></p>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>