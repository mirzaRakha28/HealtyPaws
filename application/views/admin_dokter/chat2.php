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
</style>
<div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid">
              <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button">
                <i class="fas fa-bars">
                </i>
              </button>
              <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                  <div class="input-group-append">
                    <button class="btn btn-primary py-0" type="button" style="background: #007fd2;">
                      <i class="fas fa-search">
                      </i>
                    </button>
                  </div>
                </div>
              </form>
              <ul class="navbar-nav flex-nowrap ml-auto">
                <li class="nav-item dropdown d-sm-none no-arrow">
                  <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                    <i class="fas fa-search">
                    </i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto navbar-search w-100">
                      <div class="input-group">
                        <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                        <div class="input-group-append">
                          <button class="btn btn-primary py-0" type="button">
                            <i class="fas fa-search">
                            </i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                      <span class="badge badge-danger badge-counter">3+
                      </span>
                      <i class="fas fa-bell fa-fw">
                      </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                      <h6 class="dropdown-header">alerts center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="bg-primary icon-circle">
                            <i class="fas fa-file-alt text-white">
                            </i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500">December 12, 2019
                          </span>
                          <p>A new monthly report is ready to download!
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="bg-success icon-circle">
                            <i class="fas fa-donate text-white">
                            </i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500">December 7, 2019
                          </span>
                          <p>$290.29 has been deposited into your account!
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="bg-warning icon-circle">
                            <i class="fas fa-exclamation-triangle text-white">
                            </i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500">December 2, 2019
                          </span>
                          <p>Spending Alert: We've noticed unusually high spending for your account.
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts
                      </a>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                      <span class="badge badge-danger badge-counter">7
                      </span>
                      <i class="fas fa-envelope fa-fw">
                      </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                      <h6 class="dropdown-header">alerts center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                          <div class="bg-success status-indicator">
                          </div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">
                            <span>Hi there! I am wondering if you can help me with a problem I've been having.
                            </span>
                          </div>
                          <p class="small text-gray-500 mb-0">Emily Fowler - 58m
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                          <div class="status-indicator">
                          </div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">
                            <span>I have the photos that you ordered last month!
                            </span>
                          </div>
                          <p class="small text-gray-500 mb-0">Jae Chun - 1d
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                          <div class="bg-warning status-indicator">
                          </div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">
                            <span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!
                            </span>
                          </div>
                          <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                          <div class="bg-success status-indicator">
                          </div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">
                            <span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...
                            </span>
                          </div>
                          <p class="small text-gray-500 mb-0">Chicken the Dog · 2w
                          </p>
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts
                      </a>
                    </div>
                  </div>
                  <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  </div>
                </li>
                <div class="d-none d-sm-block topbar-divider">
                </div>
                <li class="nav-item dropdown no-arrow">
                  <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                      <span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin Paws
                      </span>
                      <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg">
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400">
                        </i>&nbsp;Profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400">
                        </i>&nbsp;Settings
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400">
                        </i>&nbsp;Activity log
                      </a>
                      <div class="dropdown-divider">
                      </div>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                        </i>&nbsp;Logout
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            <h3 class="text-dark mb-4">Konsultasi
            </h3>
          </div>
          <div class="container">
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
                      
                      foreach($list_chat as $lc){
                      ?>
                      <tr>
                        <td><?= $lc->user?>
                        </td>
                        <td>
                          <a class="btn btn-primary" role="button" href="<?= base_url()?>admin_dokter/chat2?id=<?= $lc->id?>&&id_user=<?= $lc->id_user?>" style="background: rgb(0,127,210);">Mulai
                          </a>
                        </td>
                      </tr>
                    <?php
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
                                  <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
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
                                  <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."> <input class="publisher-input" id ="pesan" type="text" placeholder="Write something"> <span class="publisher-btn file-group"> </span>  <a class="publisher-btn text-info" onclick="send();" data-abc="true"><i class="fa fa-paper-plane"></i></a> </div>
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
        
        str+="<div class='media media-chat media-chat-reverse'>"
        str+="<div class='media-body'>"
        str+="<p>"+data[z].message+"</p>"
        str+="</div>"
        str+="</div>"
        
      }else if(data[z].type == true){
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