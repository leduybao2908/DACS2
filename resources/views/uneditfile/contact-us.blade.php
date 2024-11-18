<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "5J8K-0qHhTOuFlMs4",
        });
    })();
    </script>
    <script>
        function sendMail() {
    let parms = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };

    emailjs
        .send("service_iq3bkja", "template_01iwr3k", parms)
        .then(
            () => {
                alert("Email sent successfully!");
            },
            (error) => {
                console.error("Failed to send email:", error);
                alert("Failed to send email. Please try again.");
            }
        );
}

  </script>
    </head>
<body class="inner-pages hd-white">
        <div id="wrapper">
        <!-- START SECTION HEADINGS -->
                <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="{{ route('home') }}">Home</a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
<h3>Our Location</h3>
                <div class="property-location mb-5">
                                        <div class="divider-fade"></div>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14656.026011044121!2d108.25202719472173!3d15.983466473872356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4sIMSQ4bqhaSBo4buNYyDEkMOgIE7hurVuZw!5e1!3m2!1svi!2s!4v1731776831747!5m2!1svi!2s" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
<style>
                    .property-location {
                        width: 100%;
                        height: 500px; /* Tăng chiều cao khung bản đồ */
                        position: relative;
                    }

                    .property-location iframe {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: 0;
                    }

                    .contact-us .row {
                        display: flex; /* Đảm bảo các cột nằm ngang */
                        flex-wrap: wrap; /* Để cột tự xuống hàng khi màn hình nhỏ */
                    }

                    .contact-us .col-lg-8,
                    .contact-us .col-lg-4 {
                        padding: 15px;
                    }
                </style>
                <div class="row">
<!-- Form liên hệ -->
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                                                        <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                                    @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="sendMail()">Send Message</button>
                            
                                
                                @if (session('success'))
                                    <p style="color: green;">{{ session('success') }}</p>
                                @endif
                                
                        </form>
                                            </div>

                    <!-- Thông tin liên hệ -->
                    <div class="col-lg-4 col-md-12 bgc">

                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">470 Trần Đại Nghĩa, Hòa Hải, Ngũ Hành Sơn, Đà Nẵng, Việt Nam</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">0373451576</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
</form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->
    </div>
    @include('layouts.footer')
</body>
</html>
