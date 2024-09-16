<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("asset/AdminLTE-3.2.0/AdminLTE-3.2.0/css/bootstrap.min.css")?>">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>Data user</h1>   
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/register" class="btn btn-primary mb-3 mt-5">Tambah Data User</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($user as $data): ?>
                            <tr>
                                <td><?= $no?></td>
                                <td><?= $data['Username']?></td>
                                <td><?= $data['Password']?></td>
                                <td><?= $data['Email']?></td>
                                <td><?= $data['NamaLengkap']?></td>
                                <td><?= $data['Alamat']?></td>
                                <td>
                                    <form action="user/edit" method="post">
                                        <input type="hidden" name="UserID" value="<?= $data['UserID']?>">
                                        <button type="submit">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="user/hapus" method="post">
                                        <input type="hidden" name="UserID" value="<?= $data['UserID']?>">
                                        <button type="submit" class="btn btn-danger">hapus</button>
                                    </form> 
                                </td>
                            </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>