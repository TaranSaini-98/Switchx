<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Switchx_logo.png">

    <script src="https://kit.fontawesome.com/aa79683c92.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    
    <title>Switchx Intermodal</title>
</head>
<body>
    
        <header>    
            <div class="container" id="navbar">
                <section class="logo">
                    <a href="index.php"><img src="images/Switchx_logo.png" alt="logo - Switchx Intermodal"></a>
                </section>

                
                <nav>
                    <ul class="nav-links">
                        <li><a href="index.html" >Home</a></li>
                        <li><a href="about.php" >About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="services.php">Services</a></li>
                        

                        <li><div class="form-applications">
                            <button onclick="myFunction()" id="dropdownButton" class="dropbtn">Forms & Applications
                                <!-- <i id="dropdownIcon" class="fas fa-chevron-down"></i> -->
                            </button>

                                <ul id="myDropdown" class="dropdown-content">
                                    <li class="">Forms
                                        <li class="lang"><a href="forms_applications/dummy.pdf" download="Pre Authorised Form.pdf">Pre Authorised Form</a></li>
                                        <li class="lang"><a href="forms_applications/dummy.pdf" download="New Customer Form.pdf">New Customer Form</a></li>
                                        <li class="lang"><a href="forms_applications/dummy.pdf" download="Value Package Form.pdf">Value Package Form</a></li>
                                    </li>
                                    <hr>
                                    <li><a href="forms_applications/dummy.pdf" download="Waybill.pdf" class="dropdown-headings">Waybill</a></li>
                                    <hr>
                                    <li><a href="forms_applications/dummy.pdf" download="Terms & Conditions.pdf" class="dropdown-headings">Terms & Conditions</a></li>
                                </ul>
                        </div>
                        </li>


                    </ul>
                </nav>
                <div class="profile_login">
                    <!-- <a href="forms_applications/dummy.pdf" download="dummy.pdf"><span>Login</span>
                    <img src="images/Icons/profile_logo.svg" alt="logo - Login Profile"></a> -->
                </div>

                <div class="hamburger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>    
        </header>








<script>
    /* When the user clicks on the button,
   toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    const button = document.getElementById('dropdownButton');
    const icon = document.getElementById('dropdownIcon');

    button.addEventListener('click', () => {
        icon.classList.toggle('rotate');
    });
</script>









<script>
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    hamburger.addEventListener('click', ()=>{
    //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });

        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });
</script>


<script>
    /* When the user clicks on the button,
   toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    const button = document.getElementById('dropdownButton');
    const icon = document.getElementById('dropdownIcon');

    button.addEventListener('click', () => {
        icon.classList.toggle('rotate');
    });
</script>




<script src="js/script.js"></script>
