<style>
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 500px;
        padding: 45px;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        border-radius: 15px;
    }

    .popup .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 999;
    }
</style>

<style>
    .largeContent { 
        max-width: 600px;
        margin: 0 auto;
    }

    #text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }
    #text1{
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }

    #text2{
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }



    .mobile #text {
        -webkit-line-clamp: 5;
        /* Number of lines to show on mobile */
    }

    .mobile #text1 {
        -webkit-line-clamp: 5;
        /* Number of lines to show on mobile */
    }
    .mobile #text2 {
        -webkit-line-clamp: 5;
        /* Number of lines to show on mobile */
    }
    .show-more {
        -webkit-line-clamp:100;
        height: 400px;
    }

    /* Media queries for applying classes based on screen size */
    @media (min-width: 600px) {
        body.desktop 


         #readMoreBtn,
         #readMoreBtn1,
         #readMoreBtn2 {
        display:none !important;
    }
   
    }

    @media (max-width: 599px) {
        body.mobile {
            /* Add styles if needed */
        }
    }
</style>


<header class="header_section header_1">
    <div class="top_header_main d-none d-sm-block">
        <div class="container">
            <div class="header_top d-flex align-items-center justify-content-between">
                <div class="header_top_content d-flex pt-2">
                    <div class="mail_text_content d-flex">
                        <p class="mail_icon">
                            <span><i class="far fa-envelope text-white pe-2"></i></span>
                        </p>
                        <p class="mail_text">
                            <a class="text-light" href="mailto:info@ashwiniayurvedaclinic.com">
                                info@ashwiniayurvedaclinic.com
                            </a>
                        </p>
                    </div>
                    <div class="address_text_content d-flex">
                        <p class="mail_icon">
                            <span><i class="fas fa-phone text-white pe-2"></i></span>
                        </p>
                        <p class="address_text">
                            <a href="tel:+919650973887" style="color: white">+91-9650973887</a>,
                            <a href="tel:+91-7310639804" style="color: white">+91-7310639804</a>
                        </p>
                    </div>
                </div>
                <div class="header_top_socials pt-2">
                    <ul class="list-unstyled d-flex">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61557223979191&sk=reels_tab"><i class="fab fa-facebook-f text-white pe-3"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ashwani_ayurveda/" target="_blank"><i class="fab fa-instagram text-white pe-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom_main">
        <div class="container">
            <div class="webMenu d-none d-lg-block position-relative">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand position-relative" href="index.php"><img src="assets/images/logo.png" class="logo" alt="logo" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main_menu_list m-auto after_navbar">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">About Us</a>
                            </li>

                            <li class="nav-item px-2">
                                <a class="nav-link" href="contact-us.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar_user me-2">
                        <div class="navbar_user_icon">
                            <ul class="list-unstyled d-flex mb-0">
                                <li>
                                    <a href="tel:+919650973887">
                                        <i class="fas fa-phone position-relative book-appointment" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="mobileMenu d-block d-lg-none">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" class="logo" alt="logo" /></a>
                    <button style="position: relative; top: 20px" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close mobile_menu_close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav main_menu_list m-auto">
                                <li class="nav-item pe-4 dropdown">
                                    <a class="nav-link active" href="index.php" id="home_submenu">Home</a>
                                </li>
                                <li class="nav-item pe-4 dropdown">
                                    <a class="nav-link" href="about-us.php">About Us</a>
                                </li>

                                <li class="nav-item pe-4 dropdown">
                                    <a class="nav-link" href="contact-us.php">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar_user me-2"></div>
                </nav>
            </div>
        </div>
    </div>
</header>