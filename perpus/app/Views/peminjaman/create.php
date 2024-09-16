<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Tambah Peminjaman</h1>

    <form action="/peminjaman/store" method="post">
        <div class="mb-3">
            <label for="UserID" class="form-label">User</label>
            <select name="UserID" id="UserID" class="form-select">
                <?php foreach ($users as $user): ?>
                    <option value="<?= $user['UserID']; ?>"><?= $user['Username']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="BukuID" class="form-label">Buku</label>
            <select name="BukuID" id="BukuID" class="form-select">
                <?php foreach ($buku as $item): ?>
                    <option value="<?= $item->id_buku; ?>"><?= $item->judul; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="TanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
            <input type="date" name="TanggalPeminjaman" id="TanggalPeminjaman" class="form-control">
        </div>

        <div class="mb-3">
            <label for="TanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
            <input type="date" name="TanggalPengembalian" id="TanggalPengembalian" class="form-control">
        </div>

        <div class="mb-3">
            <label for="StatusPeminjaman" class="form-label">Status Peminjaman</label>
            <select name="StatusPeminjaman" id="StatusPeminjaman" class="form-select">
                <option value="masih dipinjam">Masih Dipinjam</option>
                <option value="sudah dikembalikan">Sudah Dikembalikan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/peminjaman" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>