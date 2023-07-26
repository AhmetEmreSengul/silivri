<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Ahmet Emre Şengül">
  <meta name="description" content="offical website for silivri">
  <link rel="stylesheet" href="css.css">
  <title>Silivri</title>
</head>

<body>
<div class="bgimg-1 div_box">
  <div class="text_intro">
    <header>
      <h1 class="header__h1 clip">Contact Us</h1>

      <div class="card">
        <div class="search">
          <input type="text" placeholder="enter city name" spellcheck="false">
          <button><img src="./img/search.png" alt=""></button>
        </div>
        
        <div class="weather">
          <img src="./img/rain.png" class="weather_icon" alt="">
          <h1 class="temp">31°C</h1>
          <h2 class="city">İstanbul</h2>
          <div class="details">
            <div class="col">
              <img src="./img/humidity.png">
              <div>
                <p class="humidity">50%</p>
                <p class="col_text">Humidity</p>
              </div>
            </div>
            <div class="col">
              <img src="./img/wind.png">
              <div>
                <p class="wind">15 km/h</p>
                <p class="col_text">Wind Speed</p>
              </div>
            </div>
          </div>
        </div>

        <script src="java.js"></script>

      </div>
      <nav class="header__nav">
        <ul class="header__ul">
          <li>
              <a href="Untitled-1.html">Home</a>  
          </li>
          <li>
              <a href="gallery.html">Gallery</a>
          </li>
          <li>
              <a href="Untitled-1.html#activites">Activites</a>
          </li>
          
          <li>
            <a href="Untitled-1.html#about">About</a>
          </li>
        </ul>  
      </nav>
  </header>
  </div>
</div>
<!-- <div class="bgimg-1 div_box">
  <div class="text_intro">
    <header>
      <h1 class="header__h1_contact clip">Suggestions</h1>
      <nav class="header__nav_contact">
        <ul class="header__ul">
          <li>
              <a href="Untitled-1.html">Home</a>  
          </li>
          <li>
              <a href="gallery.html">Gallery</a>
          </li>
          <li>
              <a href="#activites">Activites</a>
          </li>
          
          <li>
              <a href="Untitled-1.html#about">About</a>
          </li>
        </ul>  
      </nav>
  </header>
  </div>
</div> -->



<div class="bar div_box" id="about">
   <h3>
    CONTACT US
   </h3>
</div>

<div class="bgimg-4 div_box">
  <div class="caption">
    <form action="contact.php" method="post" autocomplete="off" >
        <fieldset class="suggestion_form">
            <p class="suggestion_p">
                <br>
                <label for="name">Name</label>
                <input class="suggestion_input" type="text" name="name" id="name" placeholder="your name here" required>
            </p>
            <p class="suggestion_p">
                <label for="email">Email</label>
                <input class="suggestion_input" type="email" name="email" id="email" placeholder="your mail address here" required>
            </p>
            <p class="suggestion_p">
                <label for="suggestion">Suggestions</label>
                <br>
                <textarea class="suggestion_textarea" name="suggestion" id="suggestion" cols="35" rows="10"></textarea>
            </p>
            <button class="suggestion_button" type="submit">Send</button>
            <button class="suggestion_button" type="reset">Reset</button>
        </fieldset>
        <p class="php_message">
            <?php
            if(isset($_POST['name']))
            {
            // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
            $con = mysqli_connect('localhost', 'root', '','silivri');
            
            // get the post records
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $suggestion = $_POST['suggestion'];
            
            // database insert SQL code
            $sql = "INSERT INTO `users` (`Id`, `name`, `mail`, `suggestion`) VALUES ('0', '$name', '$email', '$suggestion')";
            
            // insert in database 
            try
            {
                mysqli_query($con, $sql);
                echo "suggestion sent";
            }
            catch(mysqli_sql_exception)
            {
                echo "a suggestion is already sent with this username";
            }
            }
            ?>
        </p>
        </form>
  </div>
</div>

<div>
<footer class="footer">
  <p class="back ">
    <a href="#">Back to Top</a>
  </p>
  <p>
      <span class="nowrap">Copyright</span> &copy;
      <span>Ahmet Emre Şengül</span>
  </p>
</footer>
</div>


</body>
</html>