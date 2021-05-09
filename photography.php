<?php
  include 'comment.php';
  include 'DB.php';
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles2.scss">
  <script src="https://kit.fontawesome.com/c572d42f03.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
  </script>
  <title>Anete K Photography</title>
</head>


<body>


  <nav class="main-nav">
    <ul>
      <li><a href="/main.html">HOME</a></li>
      <li class='dropdown'><a href="/photography.html">PHOTOGRAPHY</a></li>
      <li><a href="/about.html">ABOUT ME</a></li>
      <li><a href="/inquiry.html">CONTACT ME</a></li>
    </ul>
  </nav>

  <div class='spinner-wrapper'>
    <div class="spinner">
      <div></div>
      <div></div>
    </div>
  </div>

  <h1> EVENTS </h1>
  <div class='event' id='events'>

  </div>

  <h1>PORTRAITS</h1>
  <div class='event' id='portraits'>

  </div>

  <h1>FAMILY</h1>
  <div class='event' id='family'>

  </div>

  <div id='bg'></div>
<h2>Let us know what you think</h2>


<?php 
  echo "<form method='POST' action='".setComments($conn)."' class='comment'>

    <input type='text' class='name' name='name' placeholder='YOUR NAME'>
    <textarea type='text' class='comment' name='comment' placeholder='COMMENT'></textarea>
    <button type='submit' id='button' name='commentSubmit'>Comment</button>

  </form>";

  getComments($conn);
?>

  <footer>
   
    <div class='icons'>
      <a href="https://www.instagram.com/lividonero/">
        <i class="fab fa-instagram"></i>
      </a>

      <a href="https://www.facebook.com/anetekraukle">
        <i class="fab fa-facebook-messenger"></i>
      </a>

      <a href="https://twitter.com/undercrows">
        <i class="fab fa-twitter"></i>
      </a>
    </div>

    <p>Copyright © All rights reserved.</p>

  </footer>



</body>



<script src='photography.js'></script>

<script>
  $(window).on('load', function() {
    $('.spinner-wrapper').fadeOut('slow');
  });
</script>

</html>