
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:login.php");
  }
?>
<?php include "header.php";?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><br><br><br><br>
                <form action="proses-input-minuman.php" method="POST">
                  
                    <div class="form-group">
                        <label for="nama"> Nama Pemesan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_minuman"> Jenis Minuman</label>
                        <select name="jenis_minuman" class="form-control" onchange="getharga()">
                        <option value="jenis_minuman">Pilih Minuman</option>
                            <option value="Mango Yuzu Raspberry">Mango Yuzu Raspberry</option>
                            <option value="Raspberry Hibiscus">Raspberry Hibiscus</option>
                            <option value="Lemon Black Tea">Lemon Black Tea</option>
                            <option value="1 Kopi Kenangan Mantan (R) 1 Roti Martabak">1 Kopi Kenangan Mantan (R) 1 Roti Martabak</option>
                            <option value="1 Americano (R) 1 Roti Coklat Klasik">1 Americano (R) 1 Roti Coklat Klasik</option>
                            <option value="Black aren">Black aren</option>
                            <option value="MANTANCINO">MANTANCINO</option>
                            <option value="Avocuddle">Avocuddle</option>
                        </select>
                    </div>
  
                    <div class="form-group">
                        <label for="jumlah">Jumlah Minuman</label>
                        <input type="number" name="jumlah" class="form-control" oninput="calculateTotal()" min="1">
                    </div>



                    <div class="form-group">
                        <label for="harga">Harga Minuman</label>
                        <input type="text" name="harga" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="total">Total Minuman</label>
                        <input type="text" name="total" class="form-control" readonly>
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
                <script>
   function getharga() {
   var jenis_minuman = document.getElementById('jenis_minuman').value;

   var xhr = new XMLHttpRequest();
   xhr.open('POST', 'proses-input-minuman.php', true);
   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
   xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
         document.getElementById('harga').value = xhr.responseText;
         console.log('Harga:', xhr.responseText); // Tambahkan ini untuk debugging
         calculateTotal();
      }
   };
   xhr.send('jenis_minuman=' + jenis_minuman);
}

function calculateTotal() {
   var jumlah = document.getElementById('jumlah').value;
   var harga = document.getElementById('harga').value;
   console.log('Jumlah:', jumlah); // Tambahkan ini untuk debugging
   console.log('Harga:', harga); // Tambahkan ini untuk debugging
   var total = parseFloat(harga) * parseInt(jumlah);
   document.getElementById('total').value = isNaN(total) ? '' : total.toFixed(2);
}


    function calculateTotal() {
        // Mendapatkan nilai jumlah minuman
        var jumlah = document.getElementById('jumlah').value;

        // Mendapatkan nilai harga minuman
        var harga = document.getElementById('harga').value;

        // Menghitung total harga (harga x jumlah)
        var total = parseFloat(harga) * parseInt(jumlah);

        // Menampilkan total harga
        document.getElementById('total').value = isNaN(total) ? '' : total.toFixed(2);
    }
</script>

            </div>
        </div>
    </div>
    
<?php include "footer.php";?>



</body>
</html>
