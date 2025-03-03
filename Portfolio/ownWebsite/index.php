<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <!-- Navbar header section -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <h2 class="logo-heading"></h2>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars hamburger-icon"></i>
                <i class="fas fa-times cross-icon"></i>
            </div>
            <div class="menu">
                <ul class="menu-list">
                    <li class="menu-list-items">
                        <a class="links" href="#home">Home</a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="#about">About</a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="#projects">Projects</a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Main hero banner -->
    <section id="home" class="hero">
        <div class="intro">
            <div class="headings">
                <h3 class="greet-heading">Hello, I'm</h3>
                <h1 class="my-heading">Samir Gouda</h1>
                <h4 class="sub-heading">Web developer.</h4>
            </div>
            <div class="intro-buttons">
                <button class="btn btn-outline-success">Hire me</button>
                <button class="btn btn-outline-warning">Get Resume</button>
            </div>
            <div class="social_media">
                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="image">
            <div class="photo"></div>
        </div>
    </section>



    <!-- About Section -->
    <section class="about-me" id="about">
        <div class="container">
            <div class="about-image">
                <img src="">
            </div>
            <div class="about-content">
                <h2>About Me</h2>
                <h3>Hi, I'm Samir</h3>
                <p>
                    I'm a passionate web developer skilled in PHP, JavaScript, MySQL, and Bootstrap. 
                    I love building user-friendly and dynamic web applications. Currently, I’m exploring AJAX and Laravel 
                    to enhance my full-stack development skills.
                </p>
                <div class="social-icons">
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Education -->
    <section id="education">
        <h2>My Education</h2>
        <div class="education-container">
            <div class="education-item">
                <h3 class="degree">Master Of Computer Application</h3>
                <p class="university">Regional College of Management (2023 - 2025)</p>
                <button class="toggle-btn">More Details</button>
                <div class="details">
                    <p>GPA: 8.2/10</p>
                    <p>Key Courses: Data Structures, Web Development</p>
                </div>
            </div>

            <div class="education-item">
                <h3 class="degree">Bachelor of Science</h3>
                <p class="university">Berhampur university (2018 - 2022)</p>
                <button class="toggle-btn">More Details</button>
                <div class="details">
                    <p>GPA: 7.23/10</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skill Section -->

    <div class="container mt-5">
        <h2 class="text-center mb-4">My Skills</h2>
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Bootstrap</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">MySQL</h5>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    

    <!-- Project Section -->
<section id="projects" class="projects-section">
    <div class="container mt-5">
        <h2 class="text-center mb-4">My Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Student CRUD Operation</h5>
                        <p class="card-text">A web application to manage student records with Create, Read, Update, and Delete functionalities using PHP and MySQL. Make a Admin Panel and Show the users in the datatable.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Weather Application</h5>
                        <p class="card-text">A web application that provides real-time weather information for any location. Features include current weather conditions and based on condition it show emoj. Built with HTML, CSS, JavaScript, and OpenWeatherMap API.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Simon Says Game</h5>
                        <p class="card-text">A fun and interactive memory game where players must repeat a sequence of colors. Features include increasing difficulty levels and score tracking.Built with HTML, CSS, and JavaScript.</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Me -->
 

    <!-- Footer -->
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-md-4">
                <h5 class="footer-title">About Me</h5>
                <p>
                    Passionate web developer & designer, crafting beautiful and functional digital experiences.  
                    I love solving problems, writing clean code, and exploring new technologies.  
                    Let's build something amazing together!  
                </p>
            </div>

            <div class="col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">About</a></li>
                    <li><a href="#" class="footer-link">Portfolio</a></li>
                    <li><a href="#" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="footer-title">Follow Me</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="social-icon facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="mb-0">© 2025 Your Name. All Rights Reserved.</p>
        </div>
    </div>
</footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>