<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

<?php

echo '<div class="row ">
<div class="col-4">
  <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">IP:Port</a>
    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Software</a>
    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Protocolo</a>
    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Nome do servidor</a>
  </div>
</div>
<div class="col-8">
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><h1>'.$_SERVER['REMOTE_ADDR'].':'.$_SERVER['SERVER_PORT'].'</h1></div>
    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1></div>
    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><h1>'.$_SERVER['SERVER_PROTOCOL'].'</h1></div>
    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><h1>'.$_SERVER['SERVER_NAME'].'</h1></div>
  
  </div>
</div>
</div>';

// echo "<h1>".$_SERVER['REMOTE_ADDR']."</h1>";
// echo "<h1>".$_SERVER['SERVER_PORT']."</h1>";
// echo "<h1>".$_SERVER['PHP_SELF']."</h1>";
// echo "<h1>".$_SERVER['SERVER_NAME']."</h1>";
// echo "<h1>".$_SERVER['SERVER_SOFTWARE']."</h1>";
// echo "<h1>".$_SERVER['SERVER_PROTOCOL']."</h1>";
// echo "<h1>".$_SERVER['REQUEST_METHOD']."</h1>";

?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</html>