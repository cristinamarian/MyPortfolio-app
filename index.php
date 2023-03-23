<?php

// Connection to DB

$userName='myuser';
$userPass='123';
$dbName='webdev';

$conn= new mysqli('localhost', $userName, $userPass, $dbName);

// Connection check

if($conn->connect_error){
   die('<h2>Connection failed!</h2>');
}
if(isset($_POST['send'])){
   $name =  $_POST['name'];
   $email =  $_POST['email'];
   $number =  $_POST['number'];
   $msg =  $_POST['message'];

$select_message="INSERT INTO `contact_form`
      (name, email, number, message)
       VALUES('$name',
       '$email', 
        '$number',
         '$msg')";
$result= $conn->query($select_message);
if($result== null){
         $message[] = 'message sent already!';
       }else{ $message[] = 'message sent successfully!';
           }header("Location: index.php");  
          exit;
         };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stil.css">


</head>

<body>
    <?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
    <!-- Header section Start-->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">My Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </header>
    <!-- Header section End -->

    <!-- Home section Start -->
    <section class="home" id="home">
        <div class="image">
            <img src="images/user-img.jpg" alt="">
        </div>
        <div class="content">
            <h3 data-aos="fade-up">Wellcome to my webpage!</h3>
            <h3 data-aos="fade-up">I'm Marian Cristina</h3>
            <span data-aos="fade-up">Certified Dental Technician </span>
            <p>Always productive and creative. Ready for a fresh start as a web developer! </p>

            <a href="#about" class="btn">About Me</a>
        </div>
    </section>

    <!-- Home section End -->

    <!-- About Section Start -->
    <section class="about" id="about">

        <h1 class="heading"> <span>biography</span></h1>

        <div class="biography">
            <p data-aos="fade-up"></p>

            <div class="bio">
                <h3 data-aos="zoom-in"> <span>name : </span> Marian Cristina </h3>
                <h3 data-aos="zoom-in"> <span>email : </span> cristinamarian34@gmail.com </h3>
                <h3 data-aos="zoom-in"> <span>address : </span> Romania,Cluj-Napoca </h3>
                <h3 data-aos="zoom-in"> <span>age : </span> 27 years </h3>

            </div>
            <a href="images/CV.docx" class="btn">Download CV</a>
        </div>
        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>skills</span> </h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span> <span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span> <span>60%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>PHP</span> <span>30%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>JavaScript</span> <span>50%</span></h3>
                </div>
            </div>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

            <div class="row">

                <div class="box-container">

                    <h3 class="title" data-aos="fade-right">education</h3>

                    <div class="box" data-aos="fade-right">
                        <span> 2015 - 2018 </span>
                        <h3>Dental Technician</h3>
                        <p>University of Medicine and Pharmacy "Iuliu-Hatieganu" In Cluj-Napoca</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2021 )</span>
                        <h3>Web designer Courses</h3>
                        <p>HTML & CSS COURSES- CODE WITH MOSH</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>2021 - 2022 </span>
                        <h3>Web developer Courses</h3>
                        <p>HTML, CSS, JavaScript, React & PHP at FASTRACKIT</p>
                    </div>

                </div>

                <div class="box-container">

                    <h3 class="title" data-aos="fade-left">experience</h3>

                    <div class="box" data-aos="fade-left">
                        <span> 2019 - 2023 </span>
                        <h3>Dental Technician</h3>
                        <p>BTM DENT SRL</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span> 2022-2023</span>
                        <h3>Start Learning programming</h3>
                        <p>Udemy JavaScript Course; </p>
                        <p>Code with Mosh HTML & CSS;</p>
                        <p>FASTRACKIT Web Developer Course</p>
                    </div>


                </div>

            </div>

        </div>




    </section>

    <!-- About Section End -->



    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <img src="images/dentistry.png" alt="tooth photo">
                <h3>Dental Technician</h3>
                <span>( 2019- 2023 )</span>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="images/implant.jpg" alt="tooth photo">
                <h3>Implants</h3>
                <span>( 2021)</span>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="images/exocadphoto.jpg" alt="dentistry photo">
                <h3>Exocad Course</h3>
                <span>( 2022 - 2023 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/webdesign.jpg" alt="laptop photo">
                <h3>Web Design Courses</h3>
                <span>( 2021 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/web.jpg" alt="laptop photo">
                <h3>Web Development Course</h3>
                <span>( 2022 - 2023 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/udemy.jpg" alt="laptop photo">
                <h3>Web Development Course</h3>
                <span>( 2022 - 2023 )</span>
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="Enter your full name" class="box"
                    required>
                <input data-aos="fade-left" type="email" name="email" placeholder="Enter your email" class="box"
                    required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter your phone number"
                class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter your message" cols="30"
                rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">


            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>cristinamarian34@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Location</h3>
                <p>Romania/Cluj-Napoca</p>
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- aos js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Initialize animation on scroll -->
    <script>
    AOS.init({
        duration: 800,
        delay: 300
    });
    </script>

</body>

</html>