<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/header.php'; ?>
</head>

<body>
    <?php include 'include/nav.php'; ?>


    <div class="h-100 p-5 mb-5 text-white bg-dark rounded-bottom text-center">
        <h2 class="display-4 fw-normal">Contact Us</h2>
        <p class="fs-5 fonts">You have a question? We'd love to help. Fill in this form and we will get back to you shortly.</p>
    </div>

    <div class="row align-items-center gap-y mb-5">
        <div class="col-md-6 px-3 mx-5">
            <div class="shadow bg-1 p-4 rounded mx-3">
                <form method="post" class="form form-contact" id="form-contact" name="form-contact">
                    <div class="form-group mb-3">
                        <label for="contact_email" class="mb-0 lead fonts">Email address</label>
                        <br>
                        <small id="emailHelp" class="form-text color-2 mt-0 mb-2 italic">We'll never share your email with anyone else.</small>
                        <input type="email" name="email" id="contact_email" class="form-control bg-1" placeholder="Email" required="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="contact_email" class="lead fonts">Subject</label>
                        <input type="text" name="subject" id="contact_subject" class="form-control bg-1" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="contact_email" class="lead fonts">Message</label>
                        <textarea name="message" id="contact_message" class="form-control bg-1" placeholder="What do you want to let us know?" rows="8" required="" style="margin-top: 0px; margin-bottom: 0px; height: 207px;"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <button id="contact-submit" name="submit" type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
                <div id="response-message" style="display: none;">
                    <div class="section-heading">
                        <i class="fas fa-check font-lg"></i>
                        <p class="font-md m-0">Thank you!</p>
                        <p class="response">Your message has been send, we will contact you as soon as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 ml-md-auto">
            <div class="section-heading">
                <h2>Office</h2>
            </div>
            <div class="media">
                <i class="fas fa-map-marker font-l color-3 mr-3"></i>
                <div class="media-body">SCET,
                    <span class="d-block">Surat, Gujarat</span>
                    <span class="d-block">India</span>
                </div>
            </div>
            <div class="media my-4">
                <i class="fas fa-phone font-l color-3 mr-3"></i>
                <div class="media-body">
                    <span class="d-block">
                        <a href="tel:+1-123-456-7890">(514) 532-0326</a>
                    </span>
                </div>
            </div>
            <div class="media">
                <i class="fas fa-envelope font-l color-3 mr-3"></i>
                <div class="media-body">
                    <a href="mailto:support@5studios.net">support@chatbot.io</a>
                </div>
            </div>
            <hr class="my-4">
            <nav class="nav justify-content-center justify-content-md-start">
                <a target="_blank" href="https://www.facebook.com" class="btn btn-circle brand-facebook mr-3">
                    <i class="fab fa-2x fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://twitter.com" class="btn btn-circle brand-twitter mr-3">
                    <i class="fab fa-2x fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com" class="btn btn-circle brand-instagram mr-3">
                    <i class="fab fa-2x fa-instagram"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com" class="btn btn-circle brand-linkedin">
                    <i class="fab fa-2x fa-linkedin-in"></i>
                </a>
            </nav>
        </div>
    </div>

    <!-- main section ends -->
    <?php include 'include/footer.php'; ?>
    <?php include 'include/script.php'; ?>
</body>

</html>