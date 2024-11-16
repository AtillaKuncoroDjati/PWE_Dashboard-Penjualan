<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
    <h2>Dashboard Penjualan</h2>
    <ul>
        <li><a href="<?php echo e(url(Auth::user()->role . '/home')); ?>">Home</a></li>
        <li><a href="<?php echo e(url(Auth::user()->role . '/produk')); ?>">Produk</a></li>
        <li><a href="#">Penjualan</a></li>
        <li><a href="<?php echo e(url(Auth::user()->role . '/laporan')); ?>">Laporan</a></li>
        <li>
            <form action="<?php echo e(url('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="text-decoration-none bg-transparent border-0 text-white" style="font-size: 18px;">
                    Logout
                </button>
            </form>
        </li>
    </ul>
</div>


    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Selamat Datang di Dashboard Penjualan</h1>
        </header>
        
        <div class="container mt-4">
            <h2 class="text-center mb-4">Laporan Produk</h2>
            
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah Produk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($product->nama_produk); ?></td>
                        <td><?php echo e($product->deskripsi); ?></td>
                        <td><?php echo e(number_format($product->harga, 0, ',', '.')); ?></td> <!-- Format harga -->
                        <td><?php echo e($product->jumlah_produk); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
          <!-- Export to PDF Button -->
          <a href="<?php echo e(url(Auth::user()->role . '/report')); ?>" class="btn btn-secondary w-100 d-flex justify-content-center align-items-center text-white cursor-pointer">Export to PDF</a>

        </div>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>
<?php /**PATH C:\Users\ella3\OneDrive\Dokumen\UNIVERSITAS MERCU BUANA\SEMESTER 5\PWE\Atilla Kuncoro Djati\atillakd\resources\views/laporan.blade.php ENDPATH**/ ?>