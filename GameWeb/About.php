 
 <!DOCTYPE html>
<html>
    <head>
    
        <link href="About.css" rel="Stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300&family=Smooch+Sans&display=swap" rel="stylesheet">
       
    </head>
    <?php include 'header.php'; ?>

   
 
 <!-- About section  -->
 <section id="about" class="about" style="margin:0px;"> 
        <div class="video">
            <video autoplay muted loop>
                <source src="Tomb Exodus - Website.mp4" type="video/mp4">
            </video>
        </div>
   
     <div class="about-info">
      <h1 class="about-info-heading">About Us</h1>
      <p class="about-info-desc">Tomb Exodus is a series of single-player third-person shooter events in which the agent goes on an expedition in different places to find an artifact with the help of clues, the artifact helps to heal any ill person in need. But later the agent gets to know that an alien race is also here in search of the same artifact.</p>
      <br><br>
      <h1 class="about-info-heading">Watch the Trailer here.</h1>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/_fIaM4sHUTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>   
  </section>
  <!-- End About section  -->

  <footer class="footer2">
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