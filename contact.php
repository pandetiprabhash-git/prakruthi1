<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Prakruthi Hostel</title>

    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/contact.css">
    <link rel="stylesheet" href="assets/styles/footer.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<?php include 'assets/components/header.php'; ?>


<!-- ==================================================
                    HERO SECTION
=================================================== -->

<section class="contact-hero">

    <div class="container">

        <div class="hero-content">

            <h1>Contact Us</h1>

            <p>
                We'd love to hear from you. Reach out for hostel
                admissions, room availability or any enquiries.
            </p>

        </div>

    </div>

</section>



<!-- ==================================================
                CONTACT SECTION
=================================================== -->

<section class="contact-section">

    <div class="container">

        <div class="contact-wrapper">


            <!-- LEFT -->

            <div class="contact-form-card">

                <div class="card-title">

                    

                    <h2>Send us a Message</h2>

                </div>

                <form>

                    <div class="input-group">

                        <label>Full Name</label>

                        <input
                        type="text"
                        placeholder="Enter your full name">

                    </div>


                    <div class="input-row">

                        <div class="input-group">

                            <label>Email</label>

                            <input
                            type="email"
                            placeholder="Enter email">

                        </div>


                        <div class="input-group">

                            <label>Phone</label>

                            <input
                            type="tel"
                            placeholder="Phone Number">

                        </div>

                    </div>


                    <div class="input-group">

                        <label>Message</label>

                        <textarea
                        rows="4"
                        placeholder="Write your message..."></textarea>

                    </div>


                    <button type="submit">

                        <i class="fa-solid fa-paper-plane"></i>

                        Send Message

                    </button>

                </form>

            </div>




            <!-- RIGHT -->

            <div class="contact-info-card">

                <div class="card-title">

                   

                    <h2>Contact Information</h2>

                </div>


                <div class="info-box">

                    <i class="fa-solid fa-location-dot"></i>

                    <div>

                        <h4>Address</h4>

                        <p>

                            Prakruthi Boys & Girls Hostel

                            <br>

                            Vasavi Nagar,

                            <br>

                            Puttur,

                            Andhra Pradesh - 517583

                        </p>

                    </div>

                </div>



                <div class="info-box">

                    <i class="fa-solid fa-phone"></i>

                    <div>

                        <h4>Phone</h4>

                        <p>+91 97387 62411</p>

                    </div>

                </div>



                <div class="info-box">

                    <i class="fa-solid fa-envelope"></i>

                    <div>

                        <h4>Email</h4>

                        <p>info@prakruthihostel.com</p>

                    </div>

                </div>



                <div class="info-box">

                    <i class="fa-regular fa-clock"></i>

                    <div>

                        <h4>Office Hours</h4>

                        <p>

                            Monday - Sunday /

                            8:00 AM - 8:00 PM

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>




<!-- ==================================================
                    GOOGLE MAP
=================================================== -->

<<section class="map-section">

    <div class="container">

        <div class="map-title">

            <h2>Find Us on Google Maps</h2>

            <p>
                Visit Prakruthi Boys & Girls Hostel using the map below.
            </p>

        </div>

        <div class="map-card">

            <iframe
                src="https://www.google.com/maps?q=Prakruthi+Boys+and+Girls+Hostel+Puttur&output=embed"
                loading="lazy"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</section>




<?php include 'assets/components/footer.php'; ?>


<script src="assets/js/header.js"></script>

<script src="assets/js/contact.js"></script>

</body>
</html>