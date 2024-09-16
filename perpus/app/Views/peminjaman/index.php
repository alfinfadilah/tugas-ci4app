<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Daftar Peminjaman</h1>
    <a href="/peminjaman/create" class="btn btn-primary mb-3">Tambah Peminjaman</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Buku ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peminjaman as $item): ?>
            <tr>
                <td><?= $item['PeminjamanID']; ?></td>
                <td><?= $item['UserID'];?></td>
                <td><?= $item['BukuID'];?></td>
                <td><?= $item['TanggalPeminjaman']; ?></td>
                <td><?= $item['TanggalPengembalian']; ?></td>
                <td><?= $item['StatusPeminjaman']; ?></td>
                <td>
                    <a href="/peminjaman/edit/<?= $item['PeminjamanID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/peminjaman/delete/<?= $item['PeminjamanID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
