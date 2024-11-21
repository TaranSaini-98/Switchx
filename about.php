<?php include "assets/header.php"?>


<section id="about_section_1" class="container-sm">
    <h2 class="heading">GET TO KNOW US</h2>
    <p class="heading-para">SwitchX Delivery Experts, is a Calgary based transportation company who specialize in providing delivery 
        services all over Alberta. It is our company's guarantee that we will offer you on-time pickup and delivery 
        on everything from a parcel to a trailer load and Intermodal Service . We accept all general goods as well as any 
        specially handled goods. Our team is also equipped and trained for the safe delivery of Dangerous Goods.
    </p>
</section>


<section id="about_section_2">
    <div class="rectangle container">
        <img src="images/mission_img.jpg" alt="Image">
        <div class="box">
            <div class="box-content">
                <h3 class="subheading">Our Mission</h3>
                <p class="subheading-para">
                    We aim to provide reliable, client-focused logistics 
                    and build strong relationships through exceptional service and support.
                </p>
            </div>
        </div>
    </div>
    <div class="rectangle container">
        <div class="box">
            <div class="box-content">
                <h3 class="subheading">Our Vision</h3>
                <p class="subheading-para">
                At SwitchX, our goal is to be Alberta&#39;s top logistics provider. We&#39;re 
                committed to market leadership by actively seeking new opportunities, 
                strengthening customer connections, and delivering the best service in the industry.
                </p>
            </div>
        </div>
        <img src="images/vision_img.jpg" alt="Image">
    </div>
</section>

<section id="about_section_3">

    <div class="our-team container-sm">
        <h2 class="heading">OUR CLIENTS</h2>
        <p class="heading-para">Our clients are the core of our business, ranging from small businesses to large corporations across
            diverse industries. They trust us to deliver their goods safely, efficiently, and on time. We&#39;re proud to provide 
            tailored logistics solutions that meet their unique needs and drive their success. Our commitment to
            excellence ensures that each shipment is handled with the utmost care, helping our clients stay 
            ahead in a fast-paced world.
        </p>
    </div>

    <div class="marquee">
        <ul class="marquee-content">
            <li><img src="images/Company_logos/landstar_logo.png" alt=""></li>
            <li><img src="images/Company_logos/18wheels_logo.png" alt=""></li>
            <li><img src="images/Company_logos/iway_logo.png" alt=""></li>
            <li><img src="images/Company_logos/ctclogistics_logo.png" alt=""></li>
            <li><img src="images/Company_logos/radiant_logo.png" alt=""></li>
            <li><img src="images/Company_logos/camindustrial_logo.png" alt=""></li>
            <li><img src="images/Company_logos/cole_logo.png" alt=""></li>
            <li><img src="images/Company_logos/dbschenker_logo.png" alt=""></li>
            <li><img src="images/Company_logos/Euroasia_logo.png" alt=""></li>
        </ul>
    </div>

    <div class="our-team container-sm">
        <h2 class="heading">OUR TEAM</h2>
        <p class="heading-para">Our Team is available round the clock 7 days a week to provide service to our valued customers 
            whenever they need it. Experience is a key component of our organization and something that we take pride in 
            having served the province for 6 years. Our team provides nothing short of the best customer experience to 
            each and every one of our clients.
        </p>
    </div>
</section>




<script>
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector("ul.marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for(let i=0; i<marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
</script>


<?php include "assets/footer.php"?>
<?php include "assets/progress.php"?>
<?php include "assets/whatsapp.php"?>

