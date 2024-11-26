<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nav.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

<header id="navbar" class="container">
<nav>
        <div class="logo">
            <a href="index.php"><img src="images/Switchx_logo.png" alt="logo - Switchx Intermodal"></a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Services</a></li>
            <!-- <li><a href="#">Contact Us</a></li> -->
            <!-- <li><button class="login-button" href="#">Login</button></li>
            <li><button class="join-button" href="#">Join</button></li> -->
        </ul>
        <div class="profile_login">
            <!-- <a href="forms_applications/dummy.pdf" download="dummy.pdf"><span>Login</span>
            <img src="images/Icons/profile_logo.svg" alt="logo - Login Profile"></a> -->
        </div>
    </nav>
</header>









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

    
</body>
</html>
