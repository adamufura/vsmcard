<?php 

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'vsm');

$phone_number = $_SESSION['phone_number'];

if(isset($_GET['number'])){
    $_SESSION['number'] = $_GET['number'];
}
    $receiver = $_SESSION['number'];

if(isset($_POST['send'])){
  $message = mysqli_real_escape_string($connection, $_POST['message']);
  $sender = mysqli_real_escape_string($connection, $_SESSION['phone_number']);

  $sql = "INSERT INTO messages(sender, receiver, message, message_read) VALUES ('$sender', '$receiver', '$message', 0)";
  $query = mysqli_query($connection, $sql);

  if(!$query){
      die(mysqli_error($connection));
  }

  header("Location: msg.php");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send New Text</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <div class="conatiner">

        <div class="row">

        <div class="col-lg-3"></div>

         <div class="col-lg-5">
            <div class="msg">
                <?php 
                
                    $sql = "SELECT * FROM messages WHERE receiver = $phone_number OR sender = $phone_number ORDER BY id ASC ";
                    $query = mysqli_query($connection, $sql);
                    
                    if(!$query){
                    die(mysqli_error($connection));
                    }

                ?>
            <form method="POST">

            	<div class="col-lg-12 col-sm-10 display">

                    <?php 

                    while ($row = mysqli_fetch_assoc($query)) {
                        $sender = $row['sender'];
                        $message = $row['message'];
                        if ($sender !== $phone_number) {

                    ?>
            		<div class="receiver">
            			<p class="sent"><?php echo $message; ?> </p>
            		</div>
                    <br>
                    <?php }else{ ?>

            		<div class="sender offset-lg-4">
            			<p class="outbox"><?php echo $message; ?>.</p>
            		</div>
                    
                    <?php }} ?>
            	</div>

                <textarea name="message" class="form-control" placeholder="Start Chat now!!!" rows="5"></textarea>
                <br>
             
                <button class="btn-send"><i class="fas fa-image"></i></button>
                <button class="btn-send"><i class="far fa-smile-wink"></i></button>
                <button class="btn-send"><i class="fas fa-map-marker-alt"></i></button>
                <button type="submit" name="send" class="btn-send-now offset-lg-6">Send</button>
          




            </form>
        </div>
         </div>





         <div class="col-lg-3"></div>
        </div>        
        
  
<br>














    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/fontawesome/js/all.js"></script>
    </div>
</body>
</html>