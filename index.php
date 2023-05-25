<?php
require_once('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (name, gender, email, message, created_at) VALUES ('$name', '$gender', '$email', '$message', NOW())";
    if (mysqli_query($db, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>www.rahulbangar.com</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/head.css">
    <link rel="stylesheet" type="text/css" href="css/media_icons.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/port.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/foot.css">
    <link rel="stylesheet" type="text/css" href="css/education.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/animations.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
        /* CSS styles for the reload animation */
        body {
            transition: opacity 0.5s ease-in-out;
        }

        .reload-animation {
            opacity: 0;
        }
    </style>
    <script>
        function reloadPage() {
            // Add a class to the body element to trigger the animation
            document.body.classList.add('reload-animation');

            // Wait for the animation to finish, then reload the page
            setTimeout(function () {
                location.reload();
            }, 500); // Adjust the duration of the animation (in milliseconds) as needed
        }
    </script>

</head>

<body>

    <!-- <div class="loader">
        <div class="loader-progress"></div>
    </div> -->
    <?php include 'includes/header.php'; ?>
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="name fade-in">
                <div class="profile" style="text-align: center;">
                    <img src="pic.jpg" alt="Your Profile Picture" onclick="reloadPage()" style="display: inline-block;">
                </div>
                <h1>Hi, I am Rahul Bangar</h1>
                <p>Developer Coder</p>
                <div class="container fade-in">
                    <ul class="links">
                        <li><a href="https://www.facebook.com/irahulbangar7/" class="facebook" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/irahulbangar7/" class="linkedin" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/irahulbangar7" class="twitter" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/irahulbangar7/" class="instagram" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://github.com/rahul-bangar" class="github" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                        <!-- Add more social media links as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="about" id="about">
        <div class="container fade-in">
            <h2>More About Me</h2>
            <p>I'm Rahul Bangar, currently pursuing my BTech in Computer science and engineering from
                National Institute of Technology, Tiruchirappalli.</p> <br>
            <h3>Date of Birth</h3>
            <p>November 10th, 2002</p>
            <h3>City</h3>
            <p>Jind</p>
            <h3>State</h3>
            <p>Haryana</p>
            <h3>Languages</h3>
            <p>Hindi, English</p>
        </div>
    </section>

    <section class="education" id="education">
        <div class="container">
            <ul class="project-list">
                <li class="project-item scale">
                    <h2>Education</h2>
                </li>
                <li class="project-item scale">
                    <h2>Skills</h2>
                </li>
                <li class="project-item scale">
                    <h3>Jawahar Lal Nehru High School</h3>
                    <p>High School</p>
                </li>
                <li class="project-item scale">
                    <h3>Languages</h3>
                    <p>C, C++, Python</p>
                </li>
                <li class="project-item scale">
                    <h3>Sarswati Public School</h3>
                    <p>July 2018 to Mar 2020</p>
                </li>
                <li class="project-item scale">
                    <h3>Web Development</h3>
                    <p>HTML, CSS, JS</p>
                </li>
                <li class="project-item scale">
                    <h3>National Institute of Technology, Tiruchirappalli</h3>
                    <p>Dec. 2020 to Present</p>
                </li>
                <li class="project-item scale">
                    <h3>Database</h3>
                    <p>MySQL</p>
                </li>
                <!-- Add more education items as needed -->
            </ul>
        </div>
    </section>


    <section class="portfolio" id="portfolio">
        <div class="container fade-in">
            <h2>Portfolio</h2>
            <!-- Add your portfolio projects here -->
            <ul class="project-list">
                <li class="project-item scale">
                    <h3>LORENTZ AND SPI FACTOR CALCULATOR</h3>
                    <p>
                        Developed a Lorentz factor calculatorin Android Studio using JAVA which takes the velocity of
                        the
                        moving observer
                        as input and displays the Lorentz factor.<br><br>
                        Added a feature, practice session to calculate the same which turns the background green if
                        correct
                        input is
                        provided and vibrates with the red background if wrong.<br><br>
                        Implemented a Spi factor calculatorto update the spi factorforthe IST every second.
                    </p>

                    <a href="https://github.com/rahul-bangar/calculator.git" target="_blank">View</a>
                </li>
                <li class="project-item scale">
                    <h3>C/C++ Compiler for while loop with nested while loop and/or if-else constructs</h3>
                    <p>Simulation of the front-end and back-end phase of a C compiler involving the If-Else, While and
                        nested If-Else-While constructs.<br><br>
                        This includes SIX phases of a compiler: <br><br>
                        Lexical Analysis- Entering into an Input Table.<br><br>
                        Syntactic Analysis- Creation of an Abstract Syntax Tree.<br><br>
                        Semantic Analysis- Verifying Type compatability and generating the Intermediate Code.<br><br>
                        Intermediate Code Generation - Three Address code generated in Quadruples<br><br>
                        Machine Independent Code Optimization - Constant Folding, Common Sub-Expression Elimination,
                        Dead Code Elimination<br><br>
                        Assembly Code Generation - Final Target Code</p>
                    <a href="https://github.com/rahul-bangar/Compiler-Project.git" target="_blank">View</a>
                </li>
                <li class="project-item scale">
                    <h3>ARITHMETIC CALCULATOR</h3>
                    <p>
                        Developed an arithmetic calculator using HTML, CSS, and JavaScript.<br><br>
                        Created a user-friendly and visually appealing interface forthe calculator using HTML and
                        CSS.<br><br>
                        Implemented JavaScriptto add functionality to the calculator, allowing users to perform basic
                        arithmetic operations.<br><br>
                        Utilized event listeners to detect userinput and perform the appropriate arithmetic
                        operation,resulting in accurate
                        results.
                    </p>
                    <a href="https://github.com/rahul-bangar/Arithmetic-Calculator.git" target="_blank">View</a>
                </li>
                <li class="project-item scale">
                    <h3>ARITHMETIC CALCULATOR</h3>
                    <p>
                        Developed an arithmetic calculator using HTML, CSS, and JavaScript.<br><br>
                        Created a user-friendly and visually appealing interface forthe calculator using HTML and
                        CSS.<br><br>
                        Implemented JavaScriptto add functionality to the calculator, allowing users to perform basic
                        arithmetic operations.<br><br>
                        Utilized event listeners to detect userinput and perform the appropriate arithmetic
                        operation,resulting in accurate
                        results.
                    </p>
                    <a href="https://github.com/rahul-bangar/Arithmetic-Calculator.git" target="_blank">View</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container fade-in">
            <h2>Contacts</h2>

            <p>
                <i class="fas fa-envelope" style="color: blue;"></i> Personal Email:
                <a href="mailto:bangarrahul.b@gmail.com">bangarrahul.b@gmail.com</a>
            </p>
            <p>
                <i class="fas fa-envelope" style="color: red;"></i> Institute Email:
                <a href="mailto:106120092@nitt.edu">106120092@nitt.edu</a>
            </p>
            <p>
                <i class="fas fa-phone" style="color: green;"></i> Phone Number:
                <a href="tel:+919729648677">+91 9729648677</a>
            </p>


            <h4>Feedback</h4>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="subject" placeholder="Subject" required></textarea>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <section class="social-media ">
        <div class="container fade-in">
            <h2>Social Media</h2>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/irahulbangar7/" class="facebook" target="_blank"><i
                            class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.linkedin.com/in/irahulbangar7/" class="linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://twitter.com/irahulbangar7" class="twitter" target="_blank"><i
                            class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/irahulbangar7/" class="instagram" target="_blank"><i
                            class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/rahul-bangar" class="github" target="_blank"><i
                            class="fab fa-github"></i></a></li>
                <!-- Add more social media links as needed -->
            </ul>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script>
        // Wait for the page to load
        document.addEventListener('DOMContentLoaded', function () {
            // Get all the project items
            var projectItems = document.querySelectorAll('.project-item');

            // Add the "visible" class to each project item after a delay
            projectItems.forEach(function (item, index) {
                setTimeout(function () {
                    item.classList.add('visible');
                }, index * 200); // Adjust the delay (in milliseconds) as needed
            });
        });
    </script>
    <script>
        function reloadPage() {
            location.reload();
        }
    </script>
</body>

</html>