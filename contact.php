<?php include "assets/header.php"?>

<section id="contact_section_1" class="container">
    <div class="main_background">
        <img src="images/truck.jpg" alt="logo - Switchx Intermodal">

        <div class="login-box">
            <h3 class="subheading">Leave Message</h3>

            <form action="config/actions.php" method="post">
                <div class="input-box">
                    <div class="input-field field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="fname" class="item" autocomplete="off">
                        <div class="error-txt">Full Name can't be blank</div>
                    </div>
                    <div class="input-field field">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" class="item" autocomplete="off">
                        <div class="error-txt">Email Address can't be blank</div>
                    </div>
                </div>

                <div class="input-box">
                    <div class="input-field field">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="item" autocomplete="off">
                        <div class="error-txt">Phone can't be blank</div>
                    </div>
                    <div class="input-field field">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="item" autocomplete="off">
                        <div class="error-txt">Subject can't be blank</div>
                    </div>
                </div>

                <div class="textarea-field field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" cols="30" rows="5" class="item" autocomplete="off"></textarea>
                    <div class="error-txt">Message can't be blank</div>
                </div>
                <div class="button-field field">
                    <button type="submit" name="send">Send Message</button>
                </div>
                    <!-- <input id="btn" type="submit" name="send" value="Send"> -->
            </form>
        </div>
    </div>
</section>

<section id="contact_section_2" class="container-sm">
    <div class="contact-us">
        <div class="outer-container">
            <h3 class="subheading">Email us</h3>
            <div class="inner-container">
                <div class="inner-item">
                    <ul>
                        <li>Basic Enquiry</li>
                        <li>Intermodal</li>
                        <li>LTL/FTL</li>
                        <li>Calgary</li>
                        <li>Edmonton</li>
                        <li>Toronto</li>
                    </ul>
                </div>
                <div class="inner-item">
                    <ul>
                        <li>: info@switchxdelivery.com</li>
                        <li>: switchxintermodal@outlook.com</li>
                        <li>: switchxdelivery@gmail.com</li>
                        <li>: calcsr@switchxdelivery.com</li>
                        <li>: edmcsr@switchxdelivery.com</li>
                        <li>: torcsr@switchxdelivery.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="outer-container">
            <h3 class="subheading">Call us</h3>
            <div class="inner-container">
                <div class="inner-item">
                    <ul>
                        <li>Dispatch (Toll-Free)</li>
                        <li>&nbsp;</li>
                        <li>Intermodal, Warehouse</li>
                        <li>LTL/FTL, Warehouse</li>
                        <li>Safety Manager</li>
                    </ul>
                </div>
                <div class="inner-item">
                    <ul>
                        <li>(T): 877-673-1150,</li>
                        <li>(T): 587-254-2400</li>
                        <li>(T): 647-892-9674 <span class="highlited">(24*7)</span></li>
                        <li>(T): 587-892-4300 <span class="highlited">(24*7)</span></li>
                        <li>(T): 403-921-3965</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="visit-us">
        <h3 class="subheading">Visit us</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2510.734395961592!2d-113.9801568!3d51.0025801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717b82b37fbaf9%3A0x8be791b82df35def!2sSwitch%20X%20delivery%20Expert!5e0!3m2!1sen!2sin!4v1731527382547!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p class=".subheading-para">Located in Calgary, Alberta, SwitchX provides reliable intermodal trucking services throughout the entire province, ensuring timely delivery for all your transport needs.</p>
        <p class=".subheading-para">Calgary, Alberta</p>
        <p class=".subheading-para">3916 56 ave SE, Calgary. T2C 2B5</p>
            
    </div>
</section>

<section id="contact_section_3">
    <p class="copyright">
        &#169; <span id="curYr"></span> by Switchx Intermodal All Rights Reserved. <br>Powered & secured by NF Services
    </p>
</section>



<script>
var date = new Date();
var year = date.getFullYear();
document.getElementById('curYr').innerHTML = year;
</script>


<!-- <div id="progress" class="go-top active">
    <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
</div> -->

<?php include "assets/progress.php"?>
<?php include "assets/whatsapp.php"?>

