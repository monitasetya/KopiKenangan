<?php include "header.php"; ?>

	<!-- single product -->
    <section id="detail-product" class="mt-5">
        <div class="single-product mt-150 mb-150 mt-5 ">
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-img">
                            <img src="assets/product/SKU-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <h3>Mango Yuzu Raspberry</h3>
                            <p class="single-product-pricing">Rp15.000</p>
                            <p>Teh yuzu dan raspberry hibiscus dengan potongan buah mangga</p>
                            <div class="single-product-form">
                                <form action="index.php">
                                    <input type="number" placeholder="0">
                                </form>
                                <a href="input-minuman.php" class="cart-btn"> Order Now</a>
                                <p><strong>Categories: </strong>Drink</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
	<!-- end single product -->
    <?php include "ulasan.php";?>
    <?php include "footer.php";?>


    <script src="js/bootstrap.js"></script>
    <script src="main css/main.js"></script>

 

  </body>
</html>