<?php

    $status = " ";
    //check whether user sumbit the form
    if(isset($_POST['send'])){
    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $to = 'kumudu@kaytrun.com';
    $mail_subject = 'Message from Kaytrun!';
    $email_body = "Message from Contact Us Page of Kaytrun: <br>";
    $email_body .= "<b>From:</b>{$full_name}<br>";
    $email_body .= "<b>Subject</b><br>" . nl2br(strip_tags($subject));

    $header = "From: {$email} \r\nContent-Type: text/html;";

    $mail_result = mail($to, $mail_subject, $email_body, $header);


    if($mail_result){

        $status = '<p class = "success">Message sent successfully.</p>';
    }else{
        $status = '<p class = "error">Error: Message was not send.</p>';
    }
    

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaytrun</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <link rel="stylesheet" href="src/css/project.css">
    <link rel="stylesheet" href="./src/css/contact.css">
    <link rel="stylesheet" href="src/css/swipper.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css" integrity="sha512-nS1/hdh2b0U8SeA8tlo7QblY6rY6C+MgkZIeRzJQQvMsFfMQFUKp+cgMN2Uuy+OtbQ4RoLMIlO2iF7bIEY3Oyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.css" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <!-- top section -->
    <div class="top-area">
        <nav class="navbar" id="navbar">
            <div class="logo" data-aos="fade-right" data-aos-duration="1200" >
                Kaytrun
              
            </div>
            <div class="menu">
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger" id="hamburger" >&#9776;</label>

                <div class="menu-items" id="menu-items" data-aos="fade-left" data-aos-duration="1000" >
                    <ul>
                        <li><a href="#home" class="link">Home</a></li>
                        <li><a href="#projects" class="link">Projects</a></li>
                        <li><a href="#services" class="link">Services</a></li>
                        <li><a href="#about-kumudu" class="link">About</a></li>
                        <li><a href="#contact-title" class="link">Contact</a></li>
                    </ul>         
                   
                </div>
                
                
            </div>

        </nav> <!--END OF THE NAVBAR CODE-->

        <!-- Begining of hero section -->
        <div id="home" class="hero-section">
            <div class="hero-titles">
                <div class="hello" data-aos="fade-down" data-aos-duration="1000" >Hello I'm</div>
                <div class="my-name" ><h1 data-aos="fade-up" data-aos-duration="1200" >Kumudu Wijewardhana</h1>
                    <div  class="intro" data-aos="fade-right" data-aos-duration="1500" >
                        <p>Hello I'm a</p>
                        <p class="typing"></p>
                        <!-- Undergraduate student / Designer / Programmer -->
                    </div>
                </div>
                <div class="status">
                    
                    <div class="social-buttons">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/kumuduwije899" target="_blank"><i class="fa fa-facebook-square" data-aos="fade-down" data-aos-duration="2000"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/kumudu-wijewardhana-9b496b170/" target="_blank"><i class="fa fa-linkedin-square" data-aos="fade-down" data-aos-duration="2200"></i></a></li>
                            <li><a href="https://github.com/kumuduwije/" target="_blank"><i class="fa fa-github-square" data-aos="fade-down" data-aos-duration="2400"></i></a></li>
                            <li><a href="https://www.instagram.com/kumudu_i_/" target="_blank"><i class="fa fa-instagram" data-aos="fade-down" data-aos-duration="2600"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        
            <div id="work">
                <a href="#projects" class="work-btn" >See my work</a>
            </div>
            

            <div class="slogan">
                “If you are working on something that you really care about,<br> 
                    you don’t have to be pushed. <br>
                    The vision pulls you.”

                    <p>— Steve Jobs</p>
            </div>
        </div>
    </div>
    <!-- End of top area -->
    
    <div class="about-area" >
        <h1 id="about-kumudu" data-aos="fade-down" data-aos-duration="1500">About me</h1>
        <div class="divider" data-aos="fade-down" data-aos-duration="1500"></div>  
        
        <div class="about">
            <div class="img" data-aos="fade-right"  data-aos-duration="1500" >
                <img src="./src/images/me-two.png" alt="Kumudu's picture" title="Kumudu Wijewardhana">
            </div>
            <div class="description" data-aos="fade-left" data-aos-duration="1500" >
                <p>I am an undergraduate software engineer who likes to do new things, create different designs and learn new technologies. And I am also very interested in UI/UX Designer and machine learning. And I like to do photography and videography as a hobby and enjoy editing them. And I am very willing to take on challenges.The reason I say that is because there is no success or pride in life without challenges. 
                </p>
            </div>
            
        </div>
       
        <hr class="ruler"> <!--Customized dotted ruler-->
    </div>
     <!--END OF THE ABOUT SECTION -->

     <!-- SERVICES SECTION -->
     <div class="services-area">
        <h1 id="services"  data-aos="fade-right" data-aos-duration="500">What I do!</h1>
        <div class="divider" data-aos="fade-right" data-aos-duration="500"></div> 
        
        <div class="services">
            <div class="web" data-aos="fade-up" data-aos-duration="500">
                <!-- <i class="fa fa-brands fa-html5"></i> -->
                <img class="service-imgs" src="./src/images/responsive-design.png" alt="Responsive web design">
                <p>Web Development</p>
            </div>

            <div class="python" data-aos="fade-up" data-aos-duration="1000">
                <!-- <i class="fa fa-brands fa-python"></i> -->
                <img class="service-imgs" src="./src/images/python.png" alt="Python">
                <p>Python Programming</p>
            </div>
    
            <div class="mobile" data-aos="fade-up" data-aos-duration="1500">
                <!-- <i class="fa fa-solid fa-code"></i> -->
                <img class="service-imgs" src="./src/images/mobile-app.png" alt="Mobile app developmet">
                <p>Mobile Development</p>
            </div>
    
            <div class="ui-ux" data-aos="fade-up" data-aos-duration="2000">
                <!-- <i class="fa fa-regular fa-object-group"></i> -->
                <img class="service-imgs" src="./src/images/ui-design.png" alt="UI\UX Design">
                <p>UI/UX Design</p>
            </div>
        </div>
     </div>
     <!-- END OF SERVICES AREA -->
     <hr class="ruler"> <!--Customized dotted ruler-->



     <!-- Projects area -->


     <div class="slide-container swiper" >
        <h1 id="projects" data-aos="fade-up" data-aos-duration="500">Projects</h1>
        <div class="divider" data-aos="fade-up" data-aos-duration="500"></div> 
       
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide" data-aos="fade-up" data-aos-duration="500">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./src/images/project-images/group-target.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-project">Web dev group project</h2>
                        <p class="description-project">This is the first web development project I have done in the 1st year.And this is a sport website.Users can buy </p>

                        <button class="button">View More</button>
                    </div>
                </div>


                <div class="card swiper-slide" data-aos="fade-up" data-aos-duration="1000">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./src/images/project-images/project-two.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-project">Java project</h2>
                        <p class="description-project">This is a fuel queue mangement system.And user can see the details in a GUI view.</p>

                        <button class="button">View More</button>
                    </div>
                </div>


                <div class="card swiper-slide" data-aos="fade-up" data-aos-duration="1500">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./src/images/project-images/project-three.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-project">Python project</h2>
                        <p class="description-project">This is a simple game.Result of each plays can see in a web view and it will be stored in a database.</p>

                        <button class="button">View More</button>
                    </div>
                </div>


                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="./src/images/project-images/project-four.png" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name-project">Future projects</h2>
                        <p class="description-project">I hope to add more projects here including mobile development when I finished them 😊</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>  
        </div> 

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div> 
     
    </div> <!--End of the projects section-->  
    

    	<!-- Contact area  -->
    <hr class="ruler contact-ruler">
    <h3 id="contact-title" data-aos="fade-down" data-aos-duration="1000">Contact me for anything! 😊</h3>
    <div class="container">
        
        <form action="index.php" id="contact-form" method="POST">
        
          <div class="row">
            <h3>Contact me</h3>
          <div class="divider"></div>
            <?php echo $status; ?>
            <div class="col-25">
              <label for="fname">Full Name <span class="star">*</span></label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="name" placeholder="Enter your full name" required>
            </div>
          </div>

      
          <div class="row">
            <div class="col-25">
              <label for="lname">E-mail <span class="star">*</span></label>
            </div>

            <div class="col-75">
              <input type="email" id="email" name="email" placeholder="Enter your e-mail" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="subject">Subject <span class="star">*</span></label>
            </div>
            <div class="col-75">
              <textarea id="subject" name="subject" placeholder="Write your message" style="height:150px" required></textarea>
            </div>
          </div>
          <div class="row submit-row">
            <input type="submit" value="Send message" name="send">
          </div>
        </form>
      </div>
        <!--End of the contact form-->


        <!-- Footer section -->

        <footer>
            <div class="footer-area">
                <div class="border-bar"></div>
                <div class="footer-details">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/kumuduwije899" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/kumudu-wijewardhana-9b496b170/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a href="https://github.com/kumuduwije/" target="_blank"><i class="fa fa-github-square"></i></a></li>
                        <li><a href="https://www.instagram.com/kumudu_i_/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <p class="info"><a href="./site_info.html">Site information</a></p>
                    <p class="brand-details">© 2022 Kaytrun by Kumudu</p>
                </div>
            </div>
                <!-- Back to top button -->
                <button onclick="topClick() " id="toTop" title="Go to top" class="topBtn" style="display:block;"><i class="fa fa-arrow-circle-up"></i></button>
        </footer>

</body>
<script src="src/js/swipper-bundle.min.js"></script>
<script src="src/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="src/js/form.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    //https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbHRVRk1UZ3NEZnNLb1Q1VmhGY0JZT1FVbUxKd3xBQ3Jtc0tsbi1SaEJrNEZtN3pjcENoU1h2YXozX3JPbVJHaVNRdlBMVzNDUFRIWERXd1RMX2dNSEJISm5VUWM3X3IxRGYydlZiSGNxLXpNbjZ0ZTk0ZmZWSU54YWFZZWZfb2g4YjV2X1NoQkxXSDhhdG9FOWZtZw&q=https%3A%2F%2Fgithub.com%2Fmichalsnik%2Faos&v=0kmFlBJIUkQ
    AOS.init({
        once:true
    });
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>