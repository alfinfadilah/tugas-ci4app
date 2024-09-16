<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" id="kd" placeholder="kd_buku yang ingin di hapus">
    <button onclick="hapusData()">Hapus data</button>
    <script>
        let nama= document.getElementById
    function hapusData(){
        let id = document.getElementById('id').value
        let konfirmasi = confirm(`Hapus data dengan kd_buku = ${id}`)
        if(konfirmasi==true){
            fetch(`http://localhost:8080/hapus_permanen/${id}`,{
                method:'DELETE'
            }).then(
                window.location.href= "http://localhost:8080/tampil"
            )
        }
    }

    </script>
</body>
</html>