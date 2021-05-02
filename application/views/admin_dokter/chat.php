<style>
.chat-list {
    padding: 0;
    font-size: .8rem;
}

.chat-list li {
    margin-bottom: 10px;
    overflow: auto;
    color: #ffffff;
}

.chat-list .chat-img {
    float: left;
    width: 48px;
}

.chat-list .chat-img img {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    width: 100%;
}

.chat-list .chat-message {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background: #5a99ee;
    display: inline-block;
    padding: 10px 20px;
    position: relative;
}

.chat-list .chat-message:before {
    content: "";
    position: absolute;
    top: 15px;
    width: 0;
    height: 0;
}

.chat-list .chat-message h5 {
    margin: 0 0 5px 0;
    font-weight: 600;
    line-height: 100%;
    font-size: .9rem;
}

.chat-list .chat-message p {
    line-height: 18px;
    margin: 0;
    padding: 0;
}

.chat-list .chat-body {
    margin-left: 20px;
    float: left;
    width: 70%;
}

.chat-list .in .chat-message:before {
    left: -12px;
    border-bottom: 20px solid transparent;
    border-right: 20px solid #5a99ee;
}

.chat-list .out .chat-img {
    float: right;
}

.chat-list .out .chat-body {
    float: right;
    margin-right: 20px;
    text-align: right;
}

.chat-list .out .chat-message {
    background: #fc6d4c;
}

.chat-list .out .chat-message:before {
    right: -12px;
    border-bottom: 20px solid transparent;
    border-left: 20px solid #fc6d4c;
}

.card .card-header:first-child {
    -webkit-border-radius: 0.3rem 0.3rem 0 0;
    -moz-border-radius: 0.3rem 0.3rem 0 0;
    border-radius: 0.3rem 0.3rem 0 0;
}
.card .card-header {
    background: #17202b;
    border: 0;
    font-size: 1rem;
    padding: .65rem 1rem;
    position: relative;
    font-weight: 600;
    color: #ffffff;
}

.content{
    margin-top:40px;    
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
                      <tr>
                        <td>Ario Dwiponco
                        </td>
                        <td>
                          <a class="btn btn-primary" role="button" href="#" style="background: rgb(0,127,210);">Mulai
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mirza Rakha
                        </td>
                        <td>
                          <a class="btn btn-primary" role="button" href="#" style="background: rgb(0,127,210);">Mulai
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-6">
                
    
              <div class="overflow-auto   overflow-scroll " style=" height: 40%;max-heigh:40%; " > 
                <div class="card">
                <div class="card-header">Chat</div>
        		<div class="card-body height3" id='terkirim'>
                <?php if ($chat  == null){?>
                        <li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Jimmy Willams</h5>
        							<p>Raw denim heard of them tofu master cleanse</p>
        						</div>
        					</div>
        				</li>
                        <li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Jimmy Willams</h5>
        							<p>Raw denim heard of them tofu master cleanse</p>
        						</div>
        					</div>
        				</li>
                    <?php } ?>
        			<ul class="chat-list">
                    <div id='terkirim'>
                    <?php foreach($chat as $ct){
                                if($ct->type == false){
                                ?>
                		<li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Jimmy Willams</h5>
        							<p><?=$ct->message?></p>
        						</div>
        					</div>
        				</li>
                        <?php }else if($ct->type == true){?>
                            <li class="out">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Jimmy Willams</h5>
        							<p><?=$ct->message?></p>
        						</div>
        					</div>
        				</li>
                        <?php
                        }}?></div>
        			</ul>
        		</div>
        	</div>
            </div>


                <form method="post">
                
                  <div class="form-group">
                    <textarea id="pesan" class="form-control" name="message" placeholder="Message" rows="14" style="height: 50px;">
                    </textarea>
                    <button class="btn btn-primary"  onclick="send();" type="submit">send 
                    </button>
                  </div>
                </form>
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
        
        str+= '<li class="out">';
        str+='<div class="chat-img">';
        str+='<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar6.png">';
        str+='</div>';
        str+='<div class="chat-body">';
        str+='<div class="chat-message">';
        str+="<h5>Serena</h5>";
        str+= '<p>Next level veard</p>';
        str+='</div>';
        str+='</div>';
        str+='</li>';
      }else if(data[z].type == true){
        str+= '<li class="in">';
        str+='<div class="chat-img">';
        str+='<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar6.png">';
        str+='</div>';
        str+='<div class="chat-body">';
        str+='<div class="chat-message">';
        str+="<h5>Serena</h5>";
        str+= '<p>Next level veard</p>';
        str+='</div>';
        str+='</div>';
        str+='</li>';
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