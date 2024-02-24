

<?php include "header.php"; ?>
<!-- ======= Contact Section ======= -->


    <!-- contact form -->
    <section id="contact">	
        <div class="contact-from-section mt-150 mb-150">
        <section id="contact" class="contact ">
      <div class="container mb-5 mt-5">
      <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
        <div class="container mt-5 mb-5">
            <div class="col-md-12 mt-5 mb-5 ">
                <span class="section-title text-center ">Contact Us</span>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                        <p>Hubungi Kami jika ada pertanyaan</p>
                    </div>
                    <div class="contact-form">
                    <form action="proses-contact.php" method="post" role="form" class="form">
                    
          <div class="row">
            <div class="col-md-6 form-group ">
              <input type="text" name="nama" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group ">
              <input type="email" class="form-control" name="email"  placeholder="Your Email" required>
            </div>
              
            <div class="col-md-6 form-group" >
              <input type="text" name="nohp" class="form-control" placeholder="Your Number Phone" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" name="subject" class="form-control" placeholder="Your Subject" required>
            </div>
            </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>

          <div class="text-center mt-3"><button type="submit">Send Message</button></div>

        </form>
        <script>
    document.getElementById('tanggal').valueAsDate = new Date();
</script>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form">
                        <div class="contact-box">
                            <h4><img src="icons/bootstrap-icons-1.9.0/map.svg" alt=""> Address</h4>
                            <p>Jl.Merdeka No.3 <br> Medan <br> Sumatera Utara</p>
                        </div>
                        <div class="contact-box">
                            <h4><img src="icons/bootstrap-icons-1.9.0/clock.svg" alt=""> Shop Hours</h4>
                            <p>MON - SAT: 8 AM to 10 PM </p>
                        </div>
                        <div class="contact-box">
                            <h4><img src="icons/bootstrap-icons-1.9.0/phone.svg" alt=""> Contact</h4>
                            <p>Phone: 0812-2222-2222 <br> Email: kopikenanganku@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
</section>
<!-- end contact form -->
      
<?php include "footer.php";?>


   