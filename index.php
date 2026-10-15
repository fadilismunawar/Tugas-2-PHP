<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { font-size: .875rem; }
        .sidebar { min-height: 100vh; background-color: #f8f9fa; border-right: 1px solid #dee2e6; }
        .sidebar .nav-link { color: #333; font-weight: 500; }
        .sidebar .nav-link.active { color: #0d6efd; }
    </style>
</head>
<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="#">sitamart</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="bi bi-house-door me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-file-earmark me-2"></i>Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-cart me-2"></i>Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-people me-2"></i>Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-bar-chart-line me-2"></i>Reports</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-layers me-2"></i>Integrations</a></li>
                    </ul>
                    <hr>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="mb-3">
                    <h3 class="h4">Data Produk</h3>
                    <button type="button" class="btn btn-secondary btn-sm mt-2">Add Product</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-light border-top">
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col" style="width: 30%;">Nama Barang</th>
                                <th scope="col" style="width: 20%;">Harga</th>
                                <th scope="col" style="width: 20%;">Stok</th>
                                <th scope="col" style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT * FROM produk");
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= htmlspecialchars($data['nama_barang']); ?></td>
                                    <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                    <td><?= $data['stok']; ?></td>
                                    <td>
                                        <a href="#" class="text-decoration-none">Edit</a> | 
                                        <a href="#" class="text-decoration-none text-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php 
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>