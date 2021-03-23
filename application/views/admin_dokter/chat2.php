<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
   
    <div class="chat-popup" id="myForm">
        <span class="closebtn" onclick="closeForm()" title="Close Overlay">×</span>
        <main class="content" style="">
            <div class="container p-0 ">
                <div class="card"style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-12 col-lg-5 col-xl-3 border-right">
                        <?php foreach($list_chat as $lc){?>
                       <a href="<?= base_url()?>admin_dokter/chat2?id=<?= $lc->id?>&&id_user=<?= $lc->id_user?>" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                            <img src="<?= $lc->gambar?>" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                            <div class="flex-grow-1 ml-3">
                                <?= $lc->user?>
                            </div>
                            </div>
                        </a>
                        <?php }?>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-9 h-70">
                        <div class="py-2 px-4 border-bottom d-none d-lg-block">
                            <div class="d-flex align-items-center py-1">
                            <div class="position-relative">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                            </div>
                            <div class="flex-grow-1 pl-3">
                                <strong><?=$name?></strong>
                                
                            </div>
                            </div>
                        </div>

                        <div class="position-relative ">
                            <div class="chat-messages p-4 "><div id='terkirim'>
                            <?php foreach($chat as $ct){
                                if($ct->type == false){
                                ?>
                            <div class="chat-message-right mb-4">
                                <div>
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                <div class="font-weight-bold mb-1">You</div>
                                <?=$ct->message?>
                                </div>
                            </div>
                            <?php }else if($ct->type == true){?>
                            <div class="chat-message-left pb-4">
                                <div>
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                <div class="font-weight-bold mb-1"><?=$ct->user?></div>
                                <?=$ct->message?>
                                </div>
                            </div>
                            <?php
                        }}?>
                            </div>                             
                            </div>
                        </div>

                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <div class="input-group">
                            <input type="text" class="form-control" id ="pesan" placeholder="Type your message">
                            <button class="btn btn-primary" onclick="send();">Send</button>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

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
        if(data[z].type == false){
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
        }else if(data[z].type == true){
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
    id_user:"<?= $_GET['id_user']?>",
    id_dokter:"<?= $_SESSION['id_dokter']?>",
    id_participant:"<?= $_GET['id']?>",
    type:0,
    pesan: $("#pesan").val()
  }

  document.getElementById("pesan").value="";
  $.ajax({
    url:'<?=site_url();?>admin_dokter/message',
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