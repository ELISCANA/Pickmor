<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pickmor: Shop, Earn, and Save with Top Vendors and Seamless Service</title>
    <!-- bootstrap 5 minified css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <!-- font awesome 5 icons minified css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <!-- jquery nice select css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/nice-select.css')}}">
    <!-- magnific popup-1.1.0 css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <!-- owl carousel-2.3.4 minified css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <!-- owl carousel-2.3.4 theme default minified css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
    <!-- animate-4.1.1 minified css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}">
    <!-- custom css source -->
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
    <link rel="icon" href="{{asset('/favicon.ico')}}">
    <link rel="manifest" href="{{asset('/site.webmanifest')}}">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('/assets/images/logo.png')}}" alt="Logo" class="logo">
                </a>
                <div class="d-flex flex-row align-items-center order-2 order-lg-3">
                    <select class="language-select">
                        <option value="english">En</option>
                        <option value="australia">Aus</option>
                        <option value="brazil">Bra</option>
                        <option value="argentina">Arg</option>
                    </select>
                    <a class="d-none d-md-block download button" href="#appStore">Download Now</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse align-items-center justify-content-end order-3 order-lg-2" id="primaryNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#whyPickmor">Why Pickmor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#virtual">Virtual Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plan">Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonials</a>
                        </li>
                        <li class="nav-item d-block d-md-none">
                            <a class="nav-link download" href="#appStore">Download Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero bg-img" data-background="{{asset('/assets/images/hero-bg.png')}}">
        <div class="container">
            <div class="hero__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7">
                        <div class="hero__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Security - Privacy - User friendly</h6>
                            <h1 class="wow animate__animated animate__fadeInUp">One App, All Things Money</h1>
                            <p class="large wow animate__animated animate__fadeInUp">
                                From easy money management,crypto investments and trade. Open your Pickmor account.
                            </p>
                            <div class="hero__content__link wow animate__animated animate__fadeInUp">
                                <a href="#">
                                    <img src="{{asset('/assets/images/app-store.png')}}" alt="Apple Store">
                                </a>
                                <a href="#">
                                    <img src="{{asset('/assets/images/play-store.png')}}" alt="Google Play Store">
                                </a>
                            </div>
                            <div class="hero__ratings">
                                <div class="hero__ratings__store wow animate__animated animate__fadeInUp">
                                    <h2>4.5/5</h2>
                                    <div class="hero__ratings__star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>On the iOS App Store</p>
                                </div>
                                <div class="hero__ratings__store wow animate__animated animate__fadeInUp" data-wow-delay="0.s">
                                    <h2>4.5/5</h2>
                                    <div class="hero__ratings__star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>On the iOS App Store</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__img wow animate__animated animate__fadeInTopRight">
            <img src="{{asset('/assets/images/circle.png')}}" alt="circle" class="hero__circle">
            <img src="{{asset('/assets/images/wallet.png')}}" alt="Wallet" class="hero__wallet">
            <img src="{{asset('/assets/images/mockup.png')}}" alt="mockup" class="hero__mock">
        </div>
    </section>

    <div class="client">
        <div class="container">
            <div class="client__wrapper wow animate__animated animate__fadeInUp">
                <h3 class="text-center wow animate__animated animate__fadeInUp">More than 1,200,000 creative people use
                    it</h3>
                <div class="client__logo__wrapper owl-carousel owl-theme wow animate__animated animate__fadeInUp">
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/one.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/two.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/three.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/four.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/five.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/one.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/two.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/three.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/four.png')}}" alt="Client">
                    </div>
                    <div class="client__logo">
                        <img src="{{asset('/assets/images/five.png')}}" alt="Client">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="invest" id="features">
        <div class="container">
            <div class="invest__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="invest__thumb wow animate__animated animate__fadeInLeft">
                            <img src="{{asset('/assets/images/invest-illustration.png')}}" alt="Invest">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="invest__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Payments app for Everyday essentials
                            </h6>
                            <h2 class="wow animate__animated animate__fadeInUp">Send, receive and invest money right
                                from your phone</h2>
                            <p class="wow animate__animated animate__fadeInUp">Make day-to-day spending a breeze with
                                all things money in one place</p>
                            <div class="invest__feature__wrapper">
                                <div class="invest__feature__item wow animate__animated animate__fadeInUp">
                                    <div class="invest__feature__item__img">
                                        <img src="{{asset('/assets/images/built.png')}}" alt="Digigtal Wallet">
                                    </div>
                                    <div class="invest__feature__item__content">
                                        <h6>Built-in digital wallet</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="invest__feature__item wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                                    <div class="invest__feature__item__img">
                                        <img src="{{asset('/assets/images/payments.png')}}" alt="Payments">
                                    </div>
                                    <div class="invest__feature__item__content">
                                        <h6>Send &amp; Receive payments</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="invest__feature__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                    <div class="invest__feature__item__img">
                                        <img src="{{asset('/assets/images/reports.png')}}" alt="Digigtal Wallet">
                                    </div>
                                    <div class="invest__feature__item__content">
                                        <h6>Monthly &amp; weekly reports</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="invest__feature__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                                    <div class="invest__feature__item__img">
                                        <img src="{{asset('/assets/images/cards.png')}}" alt="Digigtal Wallet">
                                    </div>
                                    <div class="invest__feature__item__content">
                                        <h6>Virtual credit cards</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wallet bg-img" data-background="{{asset('/assets/images/wallet-bg.png')}}">
        <div class="container">
            <div class="wallet__area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wallet__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Buy growing crypto right from your phone
                            </h6>
                            <h2 class="wow animate__animated animate__fadeInUp">A crypto wallet from the future</h2>
                            <p class="wow animate__animated animate__fadeInUp">Dictum fusce ut placerat orci nulla
                                pellentesque nulla facilisi nullam vehicula ipsum eu
                                volutpat odio facilisis.</p>
                            <ul class="wow animate__animated animate__fadeInUp">
                                <li class="large"><i class="fas fa-check"></i> Lowest fees in market</li>
                                <li class="large"><i class="fas fa-check"></i> Fast and secure transactions</li>
                                <li class="large"><i class="fas fa-check"></i> Fast and secure transactions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="wallet__thumb">
                            <img src="{{asset('/assets/images/wallet_1.png')}}" alt="Future Wallet">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="design">
        <div class="container">
            <div class="design__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="design__thumb wow animate__animated animate__fadeInLeft">
                            <img src="{{asset('/assets/images/design-illustration.png')}}" alt="Design">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="design__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Security that’s strong as oak</h6>
                            <h2 class="wow animate__animated animate__fadeInUp">Bulletproof security by design</h2>
                            <p class="wow animate__animated animate__fadeInUp">We use bank-level security, 256-bit
                                encryption, and allow two-factor authentication for
                                added security.</p>
                            <div class="design__content__security">
                                <div class="design__content__cards">
                                    <div class="design__content__cards__item wow animate__animated animate__fadeInUp">
                                        <h6>0</h6>
                                        <p>Security incidents</p>
                                    </div>
                                    <div class="design__content__cards__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                        <h6>256 bits</h6>
                                        <p>AES encryption</p>
                                    </div>
                                </div>
                                <div class="design__content__cards">
                                    <div class="design__content__cards__item third--item wow animate__animated animate__fadeInUp">
                                        <h6>CISA+</h6>
                                        <p>Security certification</p>
                                    </div>
                                    <div class="design__content__cards__item fourth--item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                        <h6>100%</h6>
                                        <p>Encrypted data</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="choice bg-img" id="whyPickmor" data-background="{{asset('/assets/images/choice-bg.png')}}">
        <div class="choice__area">
            <div class="choice__title">
                <h6 class="text-center wow animate__animated animate__fadeInUp">Why Pickmor</h6>
                <h2 class="text-center wow animate__animated animate__fadeInUp">Learn Why Pickmor is the Right Choice for
                    you</h2>
                <p class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Join 16+ mil people
                    who already trust us with their money </p>
            </div>
            <div class="choice__slider owl-carousel owl-theme wow animate__animated animate__fadeInUp">
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/payments_1.png')}}" alt="Secure Payments">
                    <h6>Secure payments</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/withdrawal.png')}}" alt="Secure withdrawals">
                    <h6>Free cash withdrawals</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/investing.png')}}" alt="Secure Invest">
                    <h6>Investing features</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/crypto.png')}}" alt="Crypto support">
                    <h6>Crypto support</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/hidden.png')}}" alt="No hidden fees">
                    <h6>No hidden fees</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/support.png')}}" alt="World class support">
                    <h6>World class support</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/payments_1.png')}}" alt="Secure Payments">
                    <h6>Secure payments</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/withdrawal.png')}}" alt="Secure withdrawals">
                    <h6>Free cash withdrawals</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/investing.png')}}" alt="Secure Invest">
                    <h6>Investing features</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/crypto.png')}}" alt="Crypto support">
                    <h6>Crypto support</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/hidden.png')}}" alt="No hidden fees">
                    <h6>No hidden fees</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="choice__slider__item">
                    <img src="{{asset('/assets/images/support.png')}}" alt="World class support">
                    <h6>World class support</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
    </section>


    <section class="payment" id="virtual">
        <div class="container">
            <div class="payment__area">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="payment__thumb wow animate__animated animate__fadeInLeft">
                            <img src="{{asset('/assets/images/card-bg.png')}}" alt="Payments">
                            <img src="{{asset('/assets/images/card-one.png')}}" alt="Crad" class="card-one">
                            <img src="{{asset('/assets/images/card-two.png')}}" alt="Card" class="card-two">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Get Your Card</h6>
                            <h2 class="wow animate__animated animate__fadeInUp">One card for all your onlne payments
                            </h2>
                            <p class="wow animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Quisque tristique tincidunt
                                arcu.</p>
                            <ul class="wow animate__animated animate__fadeInUp">
                                <li class="large"><i class="fas fa-check"></i> Lowest fees in market</li>
                                <li class="large"><i class="fas fa-check"></i> Fast and secure transactions</li>
                                <li class="large"><i class="fas fa-check"></i> Fast and secure transactions</li>
                            </ul>
                            <div class="hero__content__link wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                                <a href="#" class="button">Get Virtual Card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="work bg-img" data-background="{{asset('/assets/images/choice-bg.png')}}">
        <div class="container">
            <div class="work__area">
                <div class="choice__title">
                    <h6 class="text-center wow animate__animated animate__fadeInUp">How Does It Works</h6>
                    <h2 class="text-center wow animate__animated animate__fadeInUp">Follow Some Simple Steps For Using
                        Pickmor</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="work__item text-center work__item--primary wow animate__animated animate__fadeInUp">
                            <img src="{{asset('/assets/images/withdrawal.png')}}" alt="Install">
                            <h6 class="text-center">Install Our App</h6>
                            <p class="text-center">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="work__item text-center work__item--secondary wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('/assets/images/account.png')}}" alt="Account">
                            <h6 class="text-center">Set Up Your Account</h6>
                            <p class="text-center">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="work__item text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('/assets/images/secure.png')}}" alt="Secure">
                            <h6 class="text-center">Secure Payments</h6>
                            <p class="text-center">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shot">
        <div class="container">
            <div class="shot__area">
                <div class="choice__title">
                    <h6 class="text-center wow animate__animated animate__fadeInUp">A beautiful way to present</h6>
                    <h2 class="text-center wow animate__animated animate__fadeInUp">App screenshots</h2>
                    <p class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">The simple,
                        intuitive and powerful app to manage your work.The only app
                        you’ll need to power your life.Learn how:</p>
                </div>
            </div>
        </div>
        <div class="shot__slider__wrapper wow animate__animated animate__fadeInUp">
            <div class="shot__slider owl-carousel owl-theme">
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-one.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-two.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-one.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-four.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-five.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-one.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-two.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-one.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-four.png')}}" alt="Screenshot">
                </div>
                <div class="shot__item">
                    <img src="{{asset('/assets/images/shot-five.png')}}" alt="Screenshot">
                </div>
            </div>
            <div class="slide__button">
                <a href="javascript:void(0)" class="prev">
                    <img src="{{asset('/assets/images/arrow.png')}}" alt="Previous">
                </a>
                <a href="javascript:void(0)" class="next">
                    <img src="{{asset('/assets/images/arrow.png')}}" alt="Next">
                </a>
            </div>
            <img src="{{asset('/assets/images/dev.png')}}" alt="Device" class="device">
        </div>
    </section>

    <div class="pricing bg-img" id="plan" data-background="{{asset('/assets/images/pricing-bg.png')}}">
        <div class="container">
            <div class="pricing__area">
                <div class="choice__title">
                    <h6 class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">Our Plans</h6>
                    <h2 class="text-center wow animate__animated animate__fadeInUp">Pickmor Plans for Everyone</h2>
                    <p class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque tristique
                        tincidunt arcu.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="pricing__item wow animate__animated animate__fadeInUp">
                            <img src="{{asset('/assets/images/basic.png')}}" alt="Basic">
                            <h6>Basic</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h2>$ 5.00 USD</h2>
                            <p>/monthly</p>
                            <a href="#" class="button">Learn More</a>
                            <ul>
                                <li><i class="fas fa-check"></i> Up to 3 credit cards</li>
                                <li><i class="fas fa-check"></i> Invest in stocks and ETFs</li>
                                <li><i class="fas fa-check"></i> Personal profile only</li>
                                <li><i class="fas fa-check"></i> Normal customer support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="pricing__item pricing__item--standard wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <div class="standard__inner">
                                <img src="{{asset('/assets/images/standard.png')}}" alt="Standard">
                                <h6>Standard</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <h2>$ 9.00 USD</h2>
                                <p>/monthly</p>
                                <a href="#" class="button">Learn More</a>
                                <ul>
                                    <li><i class="fas fa-check"></i> All in Basic, plus</li>
                                    <li><i class="fas fa-check"></i> Up to 10 credit cards</li>
                                    <li><i class="fas fa-check"></i> Invest in stocks and cryptos</li>
                                    <li><i class="fas fa-check"></i> Premium customer support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="pricing__item pricing--three wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('/assets/images/pro.png')}}" alt="Pro">
                            <h6>Pro</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h2>$ 19.00 USD</h2>
                            <p>/monthly</p>
                            <a href="#" class="button">Learn More</a>
                            <ul>
                                <li><i class="fas fa-check"></i> All in Standard, plus</li>
                                <li><i class="fas fa-check"></i> Unlimited credit cards</li>
                                <li><i class="fas fa-check"></i> AI-powered investing system</li>
                                <li><i class="fas fa-check"></i> Dedicated customer support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="testimonial__area">
                <div class="row d-flex align-items-start">
                    <div class="col-lg-6">
                        <div class="testimonial__left">
                            <div class="testimonial__item bg-img wow animate__animated animate__fadeInUp" data-background="{{asset('/assets/images/quote.png')}}">
                                <h6><q>The best fintech app</q></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since.</p>
                                <div class="testimonial__author">
                                    <img src="{{asset('/assets/images/john.png')}}" alt="Avatar">
                                    <div class="testimonial__author__info">
                                        <h6>John Carter</h6>
                                        <p>Japan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__content">
                            <h6 class="wow animate__animated animate__fadeInUp">Testimonials</h6>
                            <h2 class="wow animate__animated animate__fadeInUp">Don't take our word for it, take theirs
                            </h2>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit adipiscing mattis ultrices
                                pellentesque sagittis quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center testimonial__down">
                    <div class="col-lg-6">
                        <div class="testimonial__item wow animate__animated animate__fadeInUp bg-img" data-background="{{asset('/assets/images/quote.png')}}">
                            <h6><q>Got my card in less than 24 hours</q></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since.</p>
                            <div class="testimonial__author">
                                <img src="{{asset('/assets/images/morgan.png')}}" alt="Avatar">
                                <div class="testimonial__author__info">
                                    <h6>Morgan Woods</h6>
                                    <p>Belgium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item  testimonial__item__secondary bg-img wow animate__animated animate__fadeInUp" data-wow-delay="0.2s" data-background="{{asset('/assets/images/quote.png')}}">
                            <h6><q>Best online bank ever</q></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since.</p>
                            <div class="testimonial__author">
                                <img src="{{asset('/assets/images/sophie.png')}}" alt="Avatar">
                                <div class="testimonial__author__info">
                                    <h6>Sophie Moore</h6>
                                    <p>Canada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="app" id="appStore">
        <div class="container">
            <div class="app__area">
                <div class="app__area__content">
                    <h2 class="wow animate__animated animate__fadeInUp">Take control of your personal finances today
                    </h2>
                    <div class="hero__content__link wow animate__animated animate__fadeInUp">
                        <a href="#">
                            <img src="{{asset('/assets/images/app-store.png')}}" alt="Apple Store">
                        </a>
                        <a href="#">
                            <img src="{{asset('/assets/images/play-store.png')}}" alt="Google Play Store">
                        </a>
                    </div>
                </div>
                <img src="{{asset('/assets/images/android.png')}}" class="android d-none d-xl-block wow animate__animated animate__fadeInUp" alt="Download App">
            </div>
        </div>
    </section>


    <footer class="bg-img" data-background="{{asset('/assets/images/footer-bg.png')}}">
        <div class="container">
            <div class="footer__area">
                <div class="footer__cta wow animate__animated animate__fadeInUp">
                    <a href="/">
                        <img src="{{asset('/assets/images/logo.png')}}" alt="Logo" class="logo">
                    </a>
                    <form action="#" method="post" class="wow animate__animated animate__fadeInUp">
                        <div class="input__group">
                            <input type="email" name="subscribe" id="subscribe" required="required" placeholder="Your Email Address">
                            <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                        </div>
                    </form>
                    <div class="footer__social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="footer__links wow animate__animated animate__fadeInUp">
                    <a href="#">About</a>
                    <a href="#">FAQs</a>
                    <a href="#">Contact</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy</a>
                </div>
                <div class="footer__credit wow animate__animated animate__fadeInUp">
                    <p class="text-center">Copyright © <span class="currentYear"></span>.All Rights Reserved By <a href="pickmor.co">Pickmor</a></p>
                </div>
            </div>
        </div>
    </footer>

    <a href="javascript:void(0)" class="scrollToTop">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- jquery-3.6.0 minified source -->
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <!-- bootstrap 5 minified bundle js source -->
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- nice select minified js source -->
    <script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- owl carousel-2.3.4 minified js source -->
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup-1.1.0 js source -->
    <script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- wow-1.1.3 minified js source -->
    <script src="{{asset('/assets/js/wow.min.js')}}"></script>
    <!-- custom js source -->
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>

</html>
