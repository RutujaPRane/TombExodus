<!DOCTYPE html>

<html lang="en">


<head>
        
        
        
        <link href="imgslider.css" rel="Stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300&family=Smooch+Sans&display=swap" rel="stylesheet">
        
    </head>
    <?php include 'header.php'; ?>
<body>
        <div class="video1">
            <video autoplay muted loop>
                <source src="Tomb Exodus - Website.mp4" type="video/mp4">
            </video>
        </div>

        <main>
            <section id="image">
                <div class="marketing-text">
                <img src="logo.png" alt=" Logo" />
                <br><br>
                <h3> Third Person Shooter Game with Advanced Artificial Intelligence.</h3>
                </div>
            </section>

           

           

            <section id="concept-art">
            <img src="poster.png" alt=" Logo" id="poster"/>
                <h1 id="concept">Concept Art</h1>
                <!-- <div class="flex">
                    <div class="box">
                        <span class="badge weapon">Weapon</span>
                        <img src="weapon.jpg" />
                        <div class="box-lower-section">
                            <h4>Suspendisse ut justo tem por, rutrum</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                            
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge charater">Character</span>
                        <img src="character.jpg" />
                        <div class="box-lower-section">
                            <h4>Characters</h4>
                            <p>The Main Game Characters are Twin Blast which is the male Character and Lieutenant Belica  which is the female Character</p>
                            
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge adventure">Suspendisse</span>
                        <img src="WhatsApp Image 2022-01-02 at 3.25.07 PM.jpeg" />
                        <div class="box-lower-section">
                            <h4>Suspendisse ut justo tem por, rutrum</h4>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                           
                        </div>
                    </div>
                </div> -->
            
                <div class="img-slider">
                    <div class="slide active">
                      <img src="level1.jpg" alt="">
                    </div>
                    <div class="slide">
                      <img src="level2.png" alt="">
                    </div>
                    <div class="slide">
                      <img src="WhatsApp Image 2022-01-02 at 3.25.07 PM.jpeg" alt="">
                    </div>
                    <div class="slide">
                      <img src="15.jpeg" alt="">
                    </div>
                    <div class="slide">
                      <img src="16.jpeg" alt="">
                    </div>
                    <div class="slide">
                      <img src="12.jpg" alt="">
                    </div>
                    <div class="navigation">
                      <div class="btn active"></div>
                      <div class="btn"></div>
                      <div class="btn"></div>
                      <div class="btn"></div>
                      <div class="btn"></div>
                      <div class="btn"></div>
                    </div>
                  </div>
            
            </section>

            <section id="levels">
                <div class="flex">
                   
                    <div class="box">
                        <span class="badge game-level">GamePlay</span>
                        <div class="levels-image">
                            <img src="12.jpg" />
                        </div>
                        <div class="levels-content">
                            <h2 style="font-family: 'Bebas Neue', cursive;color:#e65651;">RUINS</h2>
                            <div> <strong> An open battle arena which used to be a temple is now an abandoned ruin.</strong></div>
                            
                        </div>
                    </div>

                    <div class="box">
                        <span class="badge game-level">GamePlay</span>
                        <div class="levels-image">
                            <img src="13.jpg" />
                        </div>
                        <div class="levels-content">
                            <h2 style="font-family: 'Bebas Neue', cursive;color:#e65651;">SOUL CAVE</h2>
                            <div> <strong>It is a collection of high quality rocks and water props,materials and textures.</strong></div>
                           
                        </div>
                    </div>
                </div>
            </section>

          
        </main>
       
          </body>
          <script type="text/javascript">
            var slides = document.querySelectorAll('.slide');
            var btns = document.querySelectorAll('.btn');
            let currentSlide = 1;
        
            // Javascript for image slider manual navigation
            var manualNav = function(manual){
              slides.forEach((slide) => {
                slide.classList.remove('active');
        
                btns.forEach((btn) => {
                  btn.classList.remove('active');
                });
              });
        
              slides[manual].classList.add('active');
              btns[manual].classList.add('active');
            }
        
            btns.forEach((btn, i) => {
              btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
              });
            });
        
            // Javascript for image slider autoplay navigation
            var repeat = function(activeClass){
              let active = document.getElementsByClassName('active');
              let i = 1;
        
              var repeater = () => {
                setTimeout(function(){
                  [...active].forEach((activeSlide) => {
                    activeSlide.classList.remove('active');
                  });
        
                slides[i].classList.add('active');
                btns[i].classList.add('active');
                i++;
        
                if(slides.length == i){
                  i = 0;
                }
                if(i >= slides.length){
                  return;
                }
                repeater();
              }, 10000);
              }
              repeater();
            }
            repeat();
            </script>
        <?php include 'footer.php'; ?>
        </html>
       