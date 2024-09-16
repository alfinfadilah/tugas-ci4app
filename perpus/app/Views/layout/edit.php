<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url("css/bootstrap.min.css") ?>" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="form-container">
        <form>
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tahun terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit">
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12 mt-2">
                    <button type="button" class="btn btn-primary btn-block" onclick="update()" style="width: 100%">Edit</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        window.onload = function() {
            var urlParam = new URLSearchParams(window.location.search);
            var judul = urlParam.get("judul");
            var penulis = urlParam.get("penulis");
            var penerbit = urlParam.get("penerbit")
            var tahun_terbit = urlParam.get("tahun_terbit")

            var inputJudul = document.getElementById("judul");
            var inputPenulis = document.getElementById("penulis");
            var inputPenerbit = document.getElementById("penerbit");
            var inputTahun_terbit = document.getElementById("tahun_terbit");

            inputJudul.value = judul;
            inputPenulis.value = penulis;
            inputPenerbit.value = penerbit
            inputTahun_terbit.value = tahun_terbit
        }

        function update() {
            var urlParam = new URLSearchParams(window.location.search);
            var id_buku = urlParam.get("id_buku");
            var inputJudul = document.getElementById("judul").value;
            var inputPenulis = document.getElementById("penulis").value;
            var inputPenerbit = document.getElementById("penerbit").value;
            var inputTahun_terbit = document.getElementById("tahun_terbit").value;
            
            var form = new FormData();
            form.append("judul", inputJudul);
            form.append("penulis", inputPenulis);
            form.append("penerbit", inputPenerbit)
            form.append("tahun_terbit", inputTahun_terbit)

            if (!inputJudul || !inputPenulis || !inputPenerbit || !inputTahun_terbit ) {
                alert("Semua kolom harus diisi!");}
            else{
                fetch(`http://localhost:8080/update/${id_buku}`, {
                        method: 'POST',
                        body: form
                    })
                    .then(response => {
                    if (response.ok) {
                        window.location.href = "http://localhost:8080/tampil";
                    } else {
                    alert("Gagal mengupdate data!");
                    }
                })
                .catch(error => console.error('Error:', error));
            }

        }
    </script>
    <script src="<?= base_url("js/bootstrap.bundle.min.js") ?>"></script>
</body>

</html>