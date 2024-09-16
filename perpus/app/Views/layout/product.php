<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center; /* Menengahkan secara vertikal */
            margin: 0;
        }
        .table-container {
            max-width: 1000px;
            width: 100%;
        }
        .btn-primary a, .btn-danger a {
            color: white;
            text-decoration: none;
        }
        .flex-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }
        .btn-tambah {
            margin-bottom: 10px; /* Memberi jarak antara tombol dan tabel */
        }
        .table-bordered {
            border: solid 2px;
        }
    </style>
</head>

<body>
    <div class="container table-container">
        <div class="flex-container">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Nomor</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; foreach ($hasil as $key){?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $key->judul; ?></td>
                            <td><?php echo $key->penulis; ?></td>
                            <td><?php echo $key->penerbit; ?></td>
                            <td><?php echo $key->tahun_terbit; ?></td>
                            <td>
                                <button class="btn btn-primary" style="background-color: blue;">
                                    <a href="/edit?id_buku=<?php echo urlencode($key->id_buku); 
                                    ?>&judul=<?php echo urlencode($key->judul); 
                                    ?>&penulis=<?php echo urlencode($key->penulis); 
                                    ?>&penerbit=<?php echo urlencode($key->penerbit);
                                    ?>&tahun_terbit=<?php echo urlencode($key->tahun_terbit);
                                    ?>">Edit</a>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger" style="background-color: red;" onclick="hapus(<?php echo $key->id_buku ?>)">Hapus</button>
                            </td>
                        </tr>
                    <?php $nomor++;} ?>
                </tbody>
            </table>
            <button class="btn btn-success btn-tambah">
                <a href="/tambah" class="text-white text-decoration-none">Tambah Produk</a>
            </button>
        </div>
    </div>

    <script>
        function hapus(kd_product) {
            if (confirm(`Apakah anda yakin menghapus data berikut?`)) {
                fetch(`http://localhost:8080/hapus_permanen/${kd_product}`, {
                    method: 'DELETE'
                }).then(response => {
                    window.location.reload();
                });
            }
        }
    </script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
