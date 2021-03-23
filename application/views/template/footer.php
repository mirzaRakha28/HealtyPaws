</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
 
  <script src="<?= base_url()?>assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

   
    var pusher = new Pusher('0ae2082ac6b3c6c4118b', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel'); 
    channel.bind('my-event', function(data) {
      // alert(JSON.stringify(data));
      addData(data);
    });
    function addData(data){
      var str ="";
      for(var z in data){
        if(data[z].type == true){
          str+= '<div class="chat-message-right mb-4">';
          str+='<div>';
          str+='<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">';
          str+=         '<div class="text-muted small text-nowrap mt-2">2:43 am</div>';
          str+=       '</div>';
          str+=       '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">';
          str+=         '<div class="font-weight-bold mb-1">you</div>';
          str+=         '<div id =h_message>'+data[z].message+'</div>';
          str+=       '</div>';
          str+=     '</div>';
        }else if(data[z].type == false){
          str+= '<div class="chat-message-left mb-4">';
          str+='<div>';
          str+='<img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">';
          str+=         '<div class="text-muted small text-nowrap mt-2">2:43 am</div>';
          str+=       '</div>';
          str+=       '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">';
          str+=         '<div class="font-weight-bold mb-1">you</div>';
          str+=         '<div id =h_message>'+data[z].message+'</div>';
          str+=       '</div>';
          str+=     '</div>';
        }
        // str+='1';
      }
      $('#terkirim').html(str);
    }
  </script>
<script>

function send(){
  
  var value = {
   
    id_user:"<?=  $_SESSION['id']?>",
    id_dokter:"<?=$_GET['id_dokter']?>",
    id_participant:"<?= $_GET['id']?>",
    type:1,
    pesan: $("#pesan").val()
  }
  $.ajax({
    url:'<?=site_url();?>home/message',
    type:'POST',
    data: value,
    dataType:'JSON'
  });
  
}


function openForm() {

  document.getElementById("myForm").style.display = "block"; 
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/js/main.js"></script>

 
</body>

</html>