<style>
.card-bordered {
    border: 1px solid #ebebeb
}

.card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
    -webkit-transition: .5s;
    transition: .5s
}

.padding {
    padding: 3rem !important
}

body {
    background-color: #f9f9fa
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    padding: 15px 20px;
    background-color: transparent;
    border-bottom: 1px solid rgba(77, 82, 89, 0.07)
}

.card-header .card-title {
    padding: 0;
    border: none
}

h4.card-title {
    font-size: 17px
}

.card-header>*:last-child {
    margin-right: 0
}

.card-header>* {
    margin-left: 8px;
    margin-right: 8px
}

.btn-secondary {
    color: #4d5259 !important;
    background-color: #e4e7ea;
    border-color: #e4e7ea;
    color: #fff
}

.btn-xs {
    font-size: 11px;
    padding: 2px 8px;
    line-height: 18px
}

.btn-xs:hover {
    color: #fff !important
}

.card-title {
    font-family: Roboto, sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77, 82, 89, 0.07)
}

.ps-container {
    position: relative
}

.ps-container {
    -ms-touch-action: auto;
    touch-action: auto;
    overflow: hidden !important;
    -ms-overflow-style: none
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0
}

.media {
    padding: 0px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media .avatar {
    flex-shrink: 0
}

.avatar {
    position: relative;
    display: inline-block;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 100%;
    background-color: #f5f6f7;
    color: #8b95a5;
    text-transform: uppercase
}

.media-chat .media-body {
    -webkit-box-flex: initial;
    flex: initial;
    display: table
}

.media-body {
    min-width: 0
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px;
    font-weight: 100;
    color: #9b9b9b
}

.media>* {
    margin: 0 8px
}

.media-chat .media-body p.meta {
    background-color: transparent !important;
    padding: 0;
    opacity: .8
}

.media-meta-day {
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 0;
    color: #8b95a5;
    opacity: .8;
    font-weight: 400
}

.media {
    padding: 0px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media-meta-day::before {
    margin-right: 16px
}

.media-meta-day::before,
.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb
}

.media-meta-day::after {
    content: '';
    -webkit-box-flex: 1;
    flex: 1 1;
    border-top: 1px solid #ebebeb
}

.media-meta-day::after {
    margin-left: 16px
}

.media-chat.media-chat-reverse {
    padding-right: 12px;
    padding-left: 64px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
    flex-direction: row-reverse
}

.media-chat {
    padding-right: 64px;
    margin-bottom: 0
}

.media {
    padding: 0px 12px;
    -webkit-transition: background-color .2s linear;
    transition: background-color .2s linear
}

.media-chat.media-chat-reverse .media-body p {
    float: right;
    clear: right;
    background-color: #48b0f7;
    color: #fff
}

.media-chat .media-body p {
    position: relative;
    padding: 6px 8px;
    margin: 4px 0;
    background-color: #f5f6f7;
    border-radius: 3px
}

.border-light {
    border-color: #f1f2f3 !important
}

.bt-1 {
    border-top: 1px solid #ebebeb !important
}

.publisher {
    position: relative;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 12px 20px;
    background-color: #f9fafb
}

.publisher>*:first-child {
    margin-left: 0
}

.publisher>* {
    margin: 0 8px
}

.publisher-input {
    -webkit-box-flex: 1;
    flex-grow: 1;
    border: none;
    outline: none !important;
    background-color: transparent
}

button,
input,
optgroup,
select,
textarea {
    font-family: Roboto, sans-serif;
    font-weight: 300
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #8b95a5;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear
}

.file-group {
    position: relative;
    overflow: hidden
}

.publisher-btn {
    background-color: transparent;
    border: none;
    color: #cac7c7;
    font-size: 16px;
    cursor: pointer;
    overflow: -moz-hidden-unscrollable;
    -webkit-transition: .2s linear;
    transition: .2s linear
}

.file-group input[type="file"] {
    position: absolute;
    opacity: 0;
    z-index: -1;
    width: 20px
}

.text-info {
    color: #48b0f7 !important
}
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');


.cross {
    padding: 10px;
    color: #d6312d;
    cursor: pointer;
    font-size: 23px
}

.cross i {
    margin-top: -5px;
    cursor: pointer
}

.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid #ff0000
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: inline-flex;
    margin-top: -10px;
    flex-direction: row-reverse
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 28px;
    font-size: 35px;
    color: #ff0000;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
</style>
<div class="d-flex flex-column" id="content-wrapper">
        
          <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align: center;">Konsultasi Dr. Paws
          </h1>
        </div>
      </div>
            <div class="row">
              <div class="col-md-6">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama
                        </th>
                        <th>Chat
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      
                      foreach($notification as $lc){
                          if($lc->active ==1){
                      ?>
                      <tr>
                        <td><?= $lc->user?>
                        </td>
                        <td>
                        <a class="btn btn-primary" role="button" href="<?= base_url()?>home/chat2?id=<?= $lc->id?>&&id_participant=<?= $lc->id_participant?>&&id_user=<?= $lc->id_user?>&&id_dokter=<?= $lc->id_dokter?>" style="background: rgb(0,127,210);">Mulai
                          </a>
                        </td>
                      </tr>
                    <?php
                        }
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-6">
                  
                <!--  -->
                <div class="page-content page-container" id="page-content">
                  <div class="">
                      <div class="row container d-flex justify-content-center">
                          <div class="">
                              <div class="card card-bordered">
                                  <div class="card-header">
                                      <h4 class="card-title"><strong>Chat</strong></h4> <a class="btn btn-xs btn-secondary" href="#" data-abc="true">Let's Chat App</a>
                                  </div>
                                  <div class="ps-container ps-theme-default ps-active-y " id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                                      <div id='terkirim'>
                                      <?php 
                                      foreach($chat as $list){
                                        if($list->type == false){
                                      ?>
                                      <div class="media media-chat"> <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                                          <div class="media-body">
                                              <p><?=$list->message?></p>
                                          </div>
                                      </div>
                                      <?php 
                                        }else if ($list->type == true){
                                      ?>
                                      <div class="media media-chat media-chat-reverse">
                                          <div class="media-body">
                                              <p><?=$list->message?></p>
                                            </div>
                                      </div>
                                      <?php 
                                        }
                                      }
                                      ?>
                                      </div>
                                  </div>
                                  <?php if($_SESSION['end']==true){?>
                                  <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."> <input class="publisher-input" type="text" id ="pesan"placeholder="Write something"> <span class="publisher-btn file-group">  </span>  <a class="publisher-btn text-info" onclick="send();" data-abc="true"><i class="fa fa-paper-plane"></i></a> </div>
                                  <?php } else {?>
                                    <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."> <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#form">Block level button</button>
 <span class="publisher-btn file-group">  </span>  </div>
                                  <?php } ?>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
<!--  -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up">
        </i>
      </a>
    </div>

    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross"> <i class="fa fa-times mr-2"></i> </div>
            <div class="card-body text-center"> <img src=" https://i.imgur.com/d2dKtI7.png" height="100" width="100">
                <div class="comment-box text-center">
                    <h4>Add a comment</h4>
                    <form method="post" class="register-form"enctype="multipart/form-data" id="login-form"action="<?= base_url()?>rating/add_data?id_participant=<?= $_GET["id_participant"]?>&&id_user=<?= $_GET["id_user"]?>&&id_dokter=<?= $_GET["id_dokter"]?>">
                    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
                    <div class="text-center mt-4"> <button class="btn btn-success send px-5">Send message <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                </div>
            </div>
        </div>
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
      if(data[z].type == true){
        
        str+="<div class='media media-chat media-chat-reverse'>"
        str+="<div class='media-body'>"
        str+="<p>"+data[z].message+"</p>"
        str+="</div>"
        str+="</div>"
        
      }else if(data[z].type == false){
        str+="<div class='media media-chat'> <img class='avatar' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='...'>"
        str+="<div class='media-body'>"
        str+="<p>"+data[z].message+"</p>"
        str+="</div>"
        str+="</div>"
        
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
  type:1,
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