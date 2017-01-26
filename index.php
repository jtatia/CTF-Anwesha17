<?php
require('flagcontroller.php');
if(isLogin()) {
  header('Location: quest.php');
  exit();
}
?>
<!DOCTYPE html>
<!--
Capture The Flag hosted by Anwesha IITP 2017.
-->
<html>
    <head>
        <title>CAPTURE THE FLAG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        
      $(function () {
        $('#form1').on('submit', function (e) {

          e.preventDefault();
          console.log($('#form1').serialize());

          $.ajax({
            type: 'post',
            url: 'register.php',
            data: $('#form1').serialize(),
            success: function (response) {
              alert(response);
              cosole.log(response);
              
            }
          });

        });

      });
    </script>
        
    <script>
        
      $(function () {
        $('#form2').on('submit', function (e) {

          e.preventDefault();
          console.log($('#form2').serialize());

          $.ajax({
            type: 'post',
            url: 'login.php',
            data: $('#form2').serialize(),
            success: function (response) {
                var result = $.trim(response);
                if(result.includes("Login")) {
                     location.href="quest.php";
                } else {
                  alert(response);
                }
              console.log(response);
              
            }
          });

        });

      });
    </script>
    </head>
    <body>
        <div class="Site-top">
            <div class="container">
            <h2>Capture the Flag</h2>
                <div class='register'>
                      <button onclick="document.getElementById('register').style.display='block'"  id="reg_bttn">Register</button>
                  </div>
      <div id="register" class="modal">
     <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
     <form class="modal-content animate" id="form1">      <!-- Modal Content -->
         <label><b>Anwesha Id</b></label>
         <input type="text" placeholder="Enter AnweshId" class="mytext" maxlength="15" style="height: 30px" name="anwid" required>
         <label><b>Username</b></label>
         <input type="text" placeholder="Enter Username"  maxlength="25" style="height: 30px" name="username" required>  
         <label><b>Password</b></label>
         <input type="password" placeholder="Enter Password"  style="height: 30px" name="pass" required>
         <button type="submit">Submit</button>
         <button type="button" onclick="document.getElementById('register').style.display='none'" class="cancelbtn">Cancel</button>
     </form>
 </div>
                  <div class='log'>
                      <button onclick="document.getElementById('login').style.display='block'">Login</button>
                  </div>
      <div id="login" class="modal">
     <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
     <form class="modal-content animate" id="form2">      <!-- Modal Content -->
         <label><b>ANWID</b></label>
         <input type="text" placeholder="ANWxxxx"  maxlength="15" style="height: 30px" name="anwid" required>
         <label><b>Password</b></label>
         <input type="password" placeholder="Enter Password"  style="height: 30px" name="pass" required>
         <button type="submit">Login</button>
         <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
     </form>
 </div>
            </div> 
        </div>
        
        <div class="list">
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <a href="index.php" style="text-decoration: none;margin-left:0"><li ><b>Home </b></li></a>
                      <a href="rules.html" style="text-decoration: none"><li><b>Rules</b></li></a>
                      <a href="leaderboard.html" style="text-decoration: none"><li><b>Leaderboard</b></li></a>
                      <a href="https://www.facebook.com/ctfiitp/" style="text-decoration: none"><li><b>DiscussionForum</b></li></a>
                    </ul>
                  </div>
                </nav>
        </div>
        
        <div class='body-area'>
        <div class='container'></div></div>
        <div class="footer">
        <div class="container"></div></div>
    </body>
</html>
 