<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <style>
        /* CSS untuk menempatkan input di tengah dan memberi border */
        .centered-input {
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 100vh; /* Mengatur tinggi elemen menjadi tinggi layar */
        }
        .input-container {
            width: 400px; /* Lebar container input */
            padding: 20px; /* Padding di sekitar input */
            border: 2px solid #ced4da; /* Border */
            border-radius: 5px; /* Border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)
        }
    </style>
    <title>Document</title>
</head>
<body>
    
    <div class="container centered-input" >
        <!-- Form untuk menambahkan produk -->
        <div class="row" >
            <div class="col-md-6 "> <!-- Menggunakan class untuk mengatur input di tengah -->
                <div class="input-container">
                    <h2 class="mb-4">Tambah Produk</h2>
                    <form>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="name" id="judul" class="form-control" step="0.1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="name" id="penulis" class="form-control" step="0.1" required>
                            </div>
                            <div class="col-md-6">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="name" id="penerbit" class="form-control" step="0.1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tahun terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" id="tahun terbit" class="form-control" step="0.1" required>
                            </div>
                        </div>
                        <button type="submit" onclick="tambah()" class="btn btn-success">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function tambah(){
            let $judul= document.getElementById('judul').value;
            let $penulis= document.getElementById('penulis').value;
            let $penerbit= document.getElementById('penerbit').value;
            let $tahun= document.getElementById('tahun terbit').value;

            let form= new FormData()
            form.append("judul", $judul)
            form.append("penulis", $penulis)
            form.append("penerbit", $penerbit)
            form.append("tahun_terbit", parseInt($tahun))
            // console.log($desain);
            if(!$judul || !$penulis || !$penerbit || !$tahun ){
                alert('Tidak boleh ada input yang kosong')
            }else{
                fetch(`http://localhost:8080/tambah`,{
                    method: 'POST',
                    body:form
                })
                .then(response=>{
                    window.location.href= 'http://localhost:8080/tampil'
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    </script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
