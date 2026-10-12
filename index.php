<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Produk</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-size: .875rem;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
</head>
<body>

    <!-- Top Navbar -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="#">sitamart</a>
        <button class="navbar-toggler d-md-none collapsed me-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="bi bi-house-door me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">
                                <i class="bi bi-file-earmark me-2"></i>Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">
                                <i class="bi bi-cart me-2"></i>Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">
                                <i class="bi bi-people me-2"></i>Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reports.php">
                                <i class="bi bi-bar-chart-line me-2"></i>Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="integrations.php">
                                <i class="bi bi-layers me-2"></i>Integrations
                            </a>
                        </li>
                    </ul>

                    <hr>

                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                                <i class="bi bi-box-arrow-right me-2"></i>Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- Sub Header & Add Product Trigger -->
                <div class="mb-3">
                    <h3 class="h4">Data Produk</h3>
                    <!-- Modal Trigger Button -->
                    <button type="button" class="btn btn-secondary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalTambahProduk">
                        <i class="bi bi-plus-lg me-1"></i>Add Product
                    </button>
                </div>

                <!-- Data Table -->
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
                            <!-- Contoh Data 1 -->
                            <tr>
                                <td>1,001</td>
                                <td>Buku Tulis A5</td>
                                <td>Rp 5.000</td>
                                <td>120</td>
                                <td>
                                    <a href="edit.php?id=1001" class="text-decoration-none">Edit</a> | 
                                    <a href="hapus.php?id=1001" class="text-decoration-none text-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                                </td>
                            </tr>
                            <!-- Contoh Data 2 -->
                            <tr>
                                <td>1,002</td>
                                <td>Pensil 2B</td>
                                <td>Rp 3.000</td>
                                <td>50</td>
                                <td>
                                    <a href="edit.php?id=1002" class="text-decoration-none">Edit</a> | 
                                    <a href="hapus.php?id=1002" class="text-decoration-none text-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Form Tambah Produk -->
    <div class="modal fade" id="modalTambahProduk" tabindex="-1" aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="tambah_proses.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahProdukLabel">Tambah Produk Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required placeholder="Masukkan nama barang">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required placeholder="Masukkan harga">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required placeholder="Masukkan jumlah stok">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>