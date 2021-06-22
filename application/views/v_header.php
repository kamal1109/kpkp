<style>
    #fh5co-page {
        position: relative;
        z-index: 2;


    }

    #fh5co-offcanvas,
    .fh5co-nav-toggle,
    #fh5co-page {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    #fh5co-offcanvas,
    .fh5co-nav-toggle,
    #fh5co-page {
        position: relative;
    }

    #fh5co-page {
        z-index: 2;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .offcanvas-visible #fh5co-page {
        -moz-transform: translateX(-275px);
        -webkit-transform: translateX(-275px);
        -ms-transform: translateX(-275px);
        -o-transform: translateX(-275px);
        transform: translateX(-275px);
    }

    #fh5co-offcanvas {
        display: none;
        height: 100%;
        right: 0;
        overflow-y: auto;
        position: fixed;
        z-index: 1;
        top: 0;
        width: 275px;
        background: black;
        padding: 30px;
    }

    @media screen and (max-width: 768px) {
        #fh5co-offcanvas {
            display: block;
        }
    }

    #fh5co-offcanvas ul {
        padding: 0;
        margin: 0;
    }

    #fh5co-offcanvas ul li {
        padding: 0;
        margin: 0 0 10px 0;
        list-style: none;
        line-height: 28px;
    }

    #fh5co-offcanvas ul li a {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none !important;
    }

    #fh5co-offcanvas ul li a:hover {
        color: #00B906;
    }

    #fh5co-offcanvas ul li.active a {
        color: #00B906;
    }

    #fh5co-offcanvas ul li.cta {
        margin-left: 0;
        margin-top: 20px;
        display: block;
        float: left;
    }

    #fh5co-offcanvas ul li.cta a {
        padding-left: 16px !important;
        padding-right: 16px !important;
        padding-top: 7px !important;
        padding-bottom: 7px !important;
        border: 2px solid rgba(255, 255, 255, 0.7);
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px;
    }

    #fh5co-offcanvas ul li.cta a:hover {
        background: #fff;
        text-decoration: none;
    }

    #fh5co-offcanvas ul li.cta a:hover:after {
        display: none;
    }

    .fh5co-nav-toggle {
        cursor: pointer;
        text-decoration: none;
    }

    .fh5co-nav-toggle.active i::before,
    .fh5co-nav-toggle.active i::after {
        background: #fff;
    }

    .fh5co-nav-toggle.dark.active i::before,
    .fh5co-nav-toggle.dark.active i::after {
        background: #fff;
    }

    .fh5co-nav-toggle:hover,
    .fh5co-nav-toggle:focus,
    .fh5co-nav-toggle:active {
        outline: none;
        border-bottom: none !important;
    }

    .fh5co-nav-toggle i {
        position: relative;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        width: 30px;
        height: 2px;
        color: #fff;
        font: bold 14px/.4 Helvetica;
        text-transform: uppercase;
        text-indent: -55px;
        background: #fff;
        transition: all .2s ease-out;
    }

    .fh5co-nav-toggle i::before,
    .fh5co-nav-toggle i::after {
        content: '';
        width: 30px;
        height: 2px;
        background: #fff;
        position: absolute;
        left: 0;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    .fh5co-nav-toggle.dark i {
        position: relative;
        color: #000;
        background: #000;
        transition: all .2s ease-out;
    }

    .fh5co-nav-toggle.dark i::before,
    .fh5co-nav-toggle.dark i::after {
        background: #000;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    .fh5co-nav-toggle i::before {
        top: -7px;
    }

    .fh5co-nav-toggle i::after {
        bottom: -7px;
    }

    .fh5co-nav-toggle:hover i::before {
        top: -10px;
    }

    .fh5co-nav-toggle:hover i::after {
        bottom: -10px;
    }

    .fh5co-nav-toggle.active i {
        background: transparent;
    }

    .fh5co-nav-toggle.active i::before {
        top: 0;
        -webkit-transform: rotateZ(45deg);
        -moz-transform: rotateZ(45deg);
        -ms-transform: rotateZ(45deg);
        -o-transform: rotateZ(45deg);
        transform: rotateZ(45deg);
    }

    .fh5co-nav-toggle.active i::after {
        bottom: 0;
        -webkit-transform: rotateZ(-45deg);
        -moz-transform: rotateZ(-45deg);
        -ms-transform: rotateZ(-45deg);
        -o-transform: rotateZ(-45deg);
        transform: rotateZ(-45deg);
    }

    .fh5co-nav-toggle {
        position: fixed;
        top: 40px;
        right: 20px;
        z-index: 9999;
        display: block;
        margin: 0 auto;
        display: none;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .fh5co-nav-toggle {
            display: block;
            top: 20px;
        }
    }

    .fh5co-pricing {
        padding: 7em 0;
        background: #f7f7f7;
    }

    @media screen and (max-width: 768px) {
        .fh5co-pricing {
            padding: 3em 0;
        }
    }

    .fh5co-pricing .pricing {
        display: block;
        float: left;
        margin-bottom: 30px;
    }

    .fh5co-pricing .price-box {
        text-align: center;
        padding: 30px;
        background: #fff;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        border-radius: 5px;
        margin-bottom: 40px;
        position: relative;
    }

    .fh5co-pricing .price-box.popular .btn-select-plan {
        background: #00B906;
    }

    .fh5co-pricing .price-box.popular .price {
        color: #00B906;
    }

    .fh5co-pricing .price-box .btn-select-plan {
        padding: 10px 20px;
        background: #5bc0de;
        color: #fff;
    }

    .fh5co-pricing .pricing-plan {
        margin: 0 0 50px 0;
        padding: 0;
        font-size: 13px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 700;
        color: #888f94;
    }

    .fh5co-pricing .pricing-plan.pricing-plan-offer {
        margin-bottom: 24px;
    }

    .fh5co-pricing .pricing-plan span {
        display: block;
        margin-top: 10px;
        margin-bottom: 0;
        color: #d5d8db;
    }

    .fh5co-pricing .price {
        font-size: 80px;
        color: #6d6d6d;
        line-height: 50px;
    }

    .fh5co-pricing .price .currency {
        font-size: 30px;
        top: -0.9em;
        padding-right: 10px;
    }

    .fh5co-pricing .price small {
        font-size: 13px;
        display: block;
        text-transform: uppercase;
        color: #888f94;
    }

    .js .animate-box {
        opacity: 0;
    }

    .header img {
        position: relative;
        float: left;
        width: 110px;
        height: 70px;
        margin-top: 5px;
        background: #555;
    }

    .header h1 {

        position: relative;
        top: 4px;
        left: 10px;

    }
</style>

<header id="fh5co-header" role="banner" style="background-color:black">
    <div class="container">
        <div class="header-inner">

            <div class="header">
                <a href="<?php echo base_url() . '' ?>"> <img src="theme/images/pp.jpg" alt="logo" />
            </div>
            <nav role="navigation">
                <ul>
                    <li><a href="<?php echo base_url() . '' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'about' ?>">About</a></li>

                    <li><a href="<?php echo base_url() . 'gallery' ?>">Portofolio</a></li>
                    <li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
                    <li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>

                </ul>
            </nav>
        </div>
    </div>
</header>