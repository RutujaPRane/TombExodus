<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form </title>
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
</head>

<?php include 'header.php'; ?>
<body>
<img src="poster.png" alt=" Logo" id="poster1"/>
  <div class="wrapper">
  <header class="header-wrapper">Send us a Message</header>
    <div id="error_message">
     
  </div>
  
   
<form name="frmContact" method="post" action="mail.php" onsubmit="return validation()">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" id="name" placeholder="Enter your name" onkeypress="return allowOnlyLetters(event,this);">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" id="email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="contact" id="contact" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
       
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message" id="message"></textarea>
        <i class="material-icons">message</i>
      </div> <br>
      <div class="button-area">
        <button type="submit" name="insert">Send Message</button>
        <span>sending your message</span>
      </div>
   
</form>
  </div>
  <!-- src="scripts.js" -->

 <script >
   function validation(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contact").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  

  var text;

  error_message.style.padding = "10px";

  if(name.length < 5 ){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
 
  if(isNaN(contact) || contact.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 20){
    text = "Please Enter More Than 20 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Message has been sent sucessfully!");
  return true;
}
 </script>
 <script language="Javascript" type="text/javascript">    
    
    function allowOnlyLetters(e, t)   
    {    
       if (window.event)    
       {    
          var charCode = window.event.keyCode;    
       }    
       else if (e)   
       {    
          var charCode = e.which;    
       }    
       else { return true; }    
       if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))    
           return true;    
       else  
       {    
          alert("Please enter only alphabets");
          window.location.href = "index.php";    
          return false;    
       }           
    }      
    </script>   

<footer class="footer1">
            <div class="flex">
                <small>Copyright &copy; 2021 All rights reserved  <span class="footer-heart">&#9829;</span> .</small>
                <ul class="socials">
                    <li>
                        <a href="https://youtu.be/_fIaM4sHUTA" target="_blank">
                            <i class="fa fa-youtube fa-2x"></i></a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/__sabretoothentertainment__/?hl=en" target="_blank">
                            <i class="fa fa-instagram fa-2x"></i></a>
                      </li>
                    
                 </ul>
               
                  
                      
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="About.php">About</a>
                    </li>

                    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="download.php">Download</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>

        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>

</body>

</html>

