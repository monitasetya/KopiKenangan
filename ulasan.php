
<?php include "header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Product</h1>
            
          

            <table id="example" class="table table-striped">
                
                <thead>
                    <tr>
                        <th>Nama Contact</th><th>Judul Contact</th><th>Isi Contact</th>
                        <th>
                           
                        </th>
                    </tr> 
                </thead> 
                <tbody>
                    <?php
                    include "koneksi.php";
                    $sql=$koneksi->query("select * from contact order by nama ASC");
                    while($row= $sql->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['nama']?></td>
                        
                        <td><?php echo $row['subject']?></td>
                        <td><?php echo $row['message']?></td>
                       
                        <td>
                           
                        </td>
                    </tr>
                    <?php    
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
 	
new DataTable('#example');
</script>

</body>
</html>
