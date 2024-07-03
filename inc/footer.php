
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const readMoreBtn = document.getElementById('readMoreBtn');
        const text = document.getElementById('text');
        const body = document.body;

        // Add appropriate class based on screen size
        function updateBodyClass() {
            if (window.innerWidth >= 600) {
                body.classList.add('desktop');
                body.classList.remove('mobile');
            } else {
                body.classList.add('mobile');
                body.classList.remove('desktop');
            }
        }

        // Initial class update
        updateBodyClass();

        // Update class on window resize
        window.addEventListener('resize', updateBodyClass); 

        readMoreBtn.addEventListener('click', function() {
            text.classList.toggle('show-more');
            readMoreBtn.textContent = text.classList.contains('show-more') ? 'Read less' : 'Read more';
        });
    });
</script>

<footer class="bg -2 footer_section position-relative">
    <div class="footer_section_wrap sec_top_space_50 bg-2 text-dark">
        <div class="container">
            <div class="footer_bottom_content">
                <div class="footer_bottom_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 text-dark">
                                <div style="text-align: center">
                                    <img src="assets/images/squarelogo.png" alt="Ashwani Ayurveda Logo" style="
                            max-width: 150px;
                            background-color: #fff;
                            border-radius: 100%;
                          " />
                                    <br /><br />
                                    <p>
                                        Ashwani Ayurveda is dedicated to providing traditional
                                        Ayurvedic treatments for various health conditions,
                                        specializing in infertility and gynecological issues.
                                    </p>
                                </div>
                            </div>

                            <!-- Contact Details -->
                            <div class="col-md-4 text-dark">
                                <div style="text-align: center">
                                    <h4 class="text-light">Contact Us</h4>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i>
                                        Ashwani Ayurveda <br />
                                        Flat-169, DDA SFS Flat, <br />
                                        Plot-01, Sector-09, Dwarka,<br />
                                        New Delhi, 110075
                                    </p>
                                    <p>
                                        Phone Numbers:<br />
                                        <i class="fa-solid fa-phone"></i> +91-9650973887<br />
                                        <i class="fa-solid fa-phone"></i> +91-7310639804
                                    </p>
                                </div>
                            </div>

                            <!-- Subscription Form -->
                            <div class="col-md-4">
                                <div style="text-align: center">
                                    <h4 class="text-light">Subscribe</h4>
                                    <form id="appointmentForm" method="post" action="book_appointment.php">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name" style="color: white">Your Name
                                                        <span class="text-danger mt-3">*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone" class="mt-3" style="color: white">Phone Number
                                                        <span class="text-danger ">*</span></label>
                                                    <input type="text" class="form-control" id="phone" name="phone" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="mt-3" style="color: white">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message" class="mt-3" style="color: white">
                                                        Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="mt-5 btn custom_btn rounded-pill px-5 py-3 text-white" style="border: 1px solid white">
                                                    Book Appointment
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer Bottom -->
                            <div class="col-12">
                                <p class="text-center">
                                    Copyright © Ashwani Ayurveda 2024. All rights reserved.
                                </p>
                                <a href="" data-bs-toggle="modal">....</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- quick-view end -->
<div class="overlay"></div>
<div class="popup">
    <span class="close">&times;</span>
    <h3>Submit Your Information</h3>
    <form id="appointmentForm" method="post" action="book_appointment.php">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Your Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" />
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="mt-5 btn custom_btn rounded-pill px-5 py-3 text-white">
                    Submit
                    <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </div>
        </div>
    </form>
</div>