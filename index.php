<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Blossem Aesthetic & Wellness Academy</title>
</head>

<body>
    <!-- <nav id="navbar">
        <div class="logo">
            <img src="img/logoba.jpeg" alt="Blossem Aesthetic" srcset="">
        </div>
        <a href="#" class="toggle-button">
            <spa class="bar"></spa>
            <spa class="bar"></spa>
            <spa class="bar"></spa>
        </a>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#courses">Courses</a></li>
            <li class="item"><a href="#Services">About</a></li>
            <li class="item"><a href="#contact">Contact</a></li>
        </ul>
    </nav> -->

    <nav class="navbar navbar-expand-lg  pb-3 fs-5">
        <div class="container-fluid me-2">
            <!-- <a class="navbar-brand text-white fs-3" href="#">adPandey</a> -->
            <img src="img/logoba.jpeg" alt="Blossem Aesthetic" srcset="" class="logo-img">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-dark me-4 ms-4" href="#home">Home</a>
                    <a class="nav-link text-dark me-4 ms-4" href="#courses">Courses</a>
                    <a class="nav-link text-dark me-4 ms-4" href="#Services">About</a>
                    <a class="nav-link text-dark me-4 ms-4" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home">
        <h1 class="h-primary main-heading animate__animated animate__bounceInUp">Blossem Aesthetic & Wellness Academy
        </h1>
        <p class="para">We take care to teach beauty from every medical aapects. We at Blossom Aesthetic mentor our
            students till they master it hands on and are at par with latest technology.</p>
    </section>

    <section id="about-container">
        <div class="sub-abt-container">
            <div id="about-img" class="abt--part1 animate__animated animate__backInLeft wow">
                <img src="img/img2.jpg" alt="This is about-img" srcset="">
            </div>
            <div class="abt-content animate__animated animate__backInRight wow " id="abt-content">
                <h2 class="h-primary" id="abt-h">Why Blossem Aesthetic?</h2>
                <p class="para">Government Recognised Cosmetology Course In India. Affordable and one stop solution for
                    all kind of cosmetology and Laser Course with Certificate. We take care to teach beauty from every
                    medical aapects. We at Blossom Aesthetic mentor our students till they master it hands on and are at
                    par with latest technology. We also provide guidance to our students to kick start they career in
                    Beauty Industry as beginners.</p>
            </div>
        </div>
    </section>

    <!-- <section id="courses">
        <h1 class="h-primary text-center animate__animated animate__bounce wow">Course</h1>
        <div id="card" class="animate__animated animate__zoomIn wow">
            <div class="box" id="box" >
                <img src="img/img1.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="img/img8.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Trichology</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="img/img9.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Lasers</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="img/img5.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology & Lasers Aesthetic</h2>
                <p>Lorem ipsum dolor sit, amet consectetur</p>
            </div>
        </div>
    </section> -->

    <Section class="Course1" id="Course1">
        <h2 class="h-primary text-center">Courses</h2>
        <div class="SubCourse1" id="SubCourse1">
            <div class="box" onclick="toggleFlow(event);">
                <img src="img/img1.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology & Lasers Aesthetic</h2>
                <p>Lorem ipsum dolor sit, amet consectetur</p>
            </div>

            <div class="box" onclick="toggleFlow(event);">
                <img src="img/img8.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology & Lasers Aesthetic</h2>
                <p>Lorem ipsum dolor sit, amet consectetur</p>
            </div>

            <div class="box" onclick="toggleFlow(event);">
                <img src="img/img5.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology & Lasers Aesthetic</h2>
                <p>Lorem ipsum dolor sit, amet consectetur</p>
            </div>

            <div class="box" onclick="toggleFlow(event);">
                <img src="img/img6.jpg" alt="" srcset="">
                <h2 class="h-secondary">Diploma in Cosmetology & Lasers Aesthetic</h2>
                <p>Lorem ipsum dolor sit, amet consectetur</p>
            </div>

        </div>

    </Section>

    <Section id="maincourse">
        <div class="sub-maincourse">
            <div class="maincourse-img">
                <img src="img/img10.jpg" alt="" srcset="">
            </div>
            <div class="main-course-content">
                <h3 class="h-tertiary">Certificate In Chemical peels</h3>
                <p class="para2 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="sub-maincourse">
            <div class="maincourse-img">
                <img src="img/img12.jpg" alt="" srcset="">
            </div>
            <div class="main-course-content">
                <h3 class="h-tertiary">Certificate In medi facials</h3>
                <p class="para2 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="sub-maincourse">
            <div class="maincourse-img">
                <img src="img/img3.jpg" alt="" srcset="">
            </div>
            <div class="main-course-content">
                <h3 class="h-tertiary">Certificates In Hydra facials</h3>
                <p class="para2 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="sub-maincourse">
            <div class="maincourse-img">
                <img src="img/img11.jpg" alt="" srcset="">
            </div>
            <div class="main-course-content">
                <h3 class="h-tertiary">Certificate In PRP Treatments</h3>
                <p class="para2 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <!-- <div class="sub-maincourse">
            <div class="maincourse-img">
                <img src="img/img13.jpg" alt="" srcset="">
            </div>
            <div class="main-course-content">
                <h3 class="h-tertiary">Certificate In Derma planning</h3>
                <p class="para2 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Iusto aut eum deserunt quaerat nulla maxime est assumenda quis praesentium quibusdam.</p>
            </div>
        </div> -->
        </div>
    </Section>

    <section id="Services">
        <h1 class="h-primary text-center">About Us</h1>
        <div class="sub-services">
            <div id="about-img" class="animate__animated animate__zoomIn wow">
                <img src="img/img4.jpg" alt="" srcset="">
            </div>
            <div class="services-content animate__animated animate__zoomIn wow">
                <h2 class="h-primary">We Are Blossem Aesthetic</h2>
                <p class="para">Government Recognised Cosmetology Course In India.
                    We provide Affordable and one stop solution for all kind of cosmetology and Laser Course with
                    Certificate. We take care to teach beauty from every medical aapects. We at Blossom Aesthetic mentor
                    our students till they master it hands on and are at par with latest technology. We also provide
                    guidance to our students to kick start they career in Beauty Industry as beginners.
                </p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary text-center">Contact Us</h1>
        <div class="contact-box">
            <form action="<?php echo htmlspecialchars('connect.php');?>" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
                <label for="Phone">Phone no</label>
                <input type="text" name="phone" placeholder="Enter you phone number" maxlength="10" required>
                <label for="Email">Email</label>
                <input type="email" name="email" placeholder="Enter your Email" required>
                <label for="Query">Query</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ask you query"
                    required></textarea>
                <div class="btn">
                    <button class="submit-btn" name="submitQuery">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>