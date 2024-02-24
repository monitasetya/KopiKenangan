<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><br><br><br><br>
                <form action="proses-edit-minuman.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from minuman where id_minuman='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama"> Nama Pemesan</label>  
                        <input type="hidden" name="id_minuman" value="<?php echo $row['id_minuman']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_minuman"> Jenis Minuman</label>
                        <select name="jenis_minuman" class="form-control">
                        <option value="<?php echo $row['jenis_minuman']?>" selected><?php echo $row['jenis_minuman']?></option>
                        <option value="Black Coffe">Black Coffe</option>
                            <option value="Juice Semangka"> Juice Semangka</option>
                            <option value="Milk Shake">Milk Shake</option>
                            <option value="Teh Tarik"> Teh Tarik</option>
                            <option value="Ice Cream Big Topping">Ice Cream Big Topping</option>
                            <option value="Ice Cream Mix"> Ice Cream Mix</option>
                        
                        </select>
                    </div>
  
                    <div class="form-group">
                        <label for="jumlah">Jumlah Minuman</label>
                        <select name="jumlah"  class="form-control">
                        <option value="<?php echo $row['jumlah']?>" selected><?php echo $row['jumlah']?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="harga">Harga Minuman</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total">Total Minuman</label>
                        <input type="text" name="total" value="<?php echo $row['total']?>"class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>