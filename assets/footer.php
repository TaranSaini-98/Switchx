

<section id="section-4">
    <div class="container footer">
        <div class="footer-sec">
            <h2 class="contact-heading">Contact Us</h2>
            <div class="contact-location">
                <div class="contact-icon">
                    <img src="images/Icons/Location.svg" alt="">
                </div>
                <span>3916 56 Avenue SE,<br>Calgary. T2C2B5</span>
            </div>
            <div class="contact-email">
                <div class="contact-icon">
                    <img src="images/Icons/Email.svg" alt="">
                </div>
                <span>switchxdelivery@gmail.com,<br>switchxintermodal@outlook.com</span>
            </div>
            <div class="contact-mobile">
                <div class="contact-icon">
                    <img src="images/Icons/Mobile.svg" alt="">
                </div>
                <span>(587)-892-4300,<br>(647)-892-9674</span>
            </div>
        </div>            
        <div class="footer-sec">
            <section class="contact">
                <!-- <h2>Contact Me!</h2> -->

                <form action="config/actions.php" method="post">
                    <div class="input-box">
                        <div class="input-field field">
                            <label for="name" class="lablein">Full Name</label>
                            <input type="text" id="name" name="fname" class="item" autocomplete="off">
                            <div class="error-txt">Full Name can't be blank</div>
                        </div>
                        <div class="input-field field">
                            <label for="email" class="lablein">Email</label>
                            <input type="text" id="email" name="email" class="item" autocomplete="off">
                            <div class="error-txt">Email Address can't be blank</div>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class="input-field field">
                            <label for="phone" class="lablein">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="item" autocomplete="off">
                            <div class="error-txt">Phone can't be blank</div>
                        </div>
                        <div class="input-field field">
                            <label for="subject" class="lablein">Subject</label>
                            <input type="text" id="subject" name="subject" class="item" autocomplete="off">
                            <div class="error-txt">Subject can't be blank</div>
                        </div>
                    </div>

                    <div class="textarea-field field">
                        <label for="message" class="lablein">Message</label>
                        <br>
                        <textarea id="message" name="message" cols="30" rows="5" class="item" autocomplete="off"></textarea>
                        <div class="error-txt">Message can't be blank</div>
                    </div>
                    <div class="button-field field">
                        <button type="submit" name="send">Send Message</button>
                    </div>
                    
                    <!-- <input id="btn" type="submit" name="send" value="Send"> -->

                </form>
            </section>
        </div>
        <div class="footer-sec">
            <div class="footer-nav">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="services.php">Services</a></li>
                        <!-- <li><a href="">Forms & Applications</a></li> -->
                        <button class="button" role="button"><span class="call-us">Call Now</span></button>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <p class="copyright">
        &#169; <span id="curYr"></span> by Switchx Intermodal All Rights Reserved. <br>Powered & secured by NF Services
    </p>
</section>

<script>
// FOOTER YEAR START
var date = new Date();
var year = date.getFullYear();
document.getElementById('curYr').innerHTML = year;
// FOOTER YEAR END
</script>