<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package make_future_it
 */
get_header();
?>

	<!--START HOME-->
	<section class="section bg-home home-half" id="home" data-image-src="<?php get_template_directory_uri().'/images/bg-home.jpg'; ?>">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-white text-center">
                        <h4 class="home-small-title">Awesome Design</h4>
                        <h1 class="home-title">We love make things amazing and simple</h1>
                        <p class="padding-t-15 home-desc mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p>
                        <p class="play-shadow margin-l-r-auto mb-4"><a href="http://vimeo.com/99025203" class="play-btn video-play-icon"><i class="mdi mdi-play text-center"></i></a></p> 
                    </div>
                </div>
            </div>
            <div class="wave-effect wave-anim">
                <div class="waves-shape shape-one">
                    <div class="wave wave-one" style="background-image: url('http://localhost/wazi/wp-content/themes/make_future_it/images/wave1.png')"></div>
                </div>
                <div class="waves-shape shape-two">
                    <div class="wave wave-two" style="background-image: url('http://localhost/wazi/wp-content/themes/make_future_it/images/wave2.png')"></div>
                </div>
                <div class="waves-shape shape-three">
                    <div class="wave wave-three" style="background-image: url('http://localhost/wazi/wp-content/themes/make_future_it/images/wave3.png')"></div>
                </div>
            </div>
        </section>
        <!--END HOME-->

        <section class="section-sm bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="client-images my-3 my-md-0">
                            <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="client-images my-3 my-md-0">
                            <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="client-images my-3 my-md-0">
                            <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="client-images my-3 my-md-0">
                            <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--START ABOUT US-->
        <section class="section" id="features">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="features-box mt-5 mt-lg-0">
                            <h3>A digital web design studio creating modern & engaging online</h3>
                            <p class="text-muted web-desc">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <ul class="text-muted list-unstyled margin-t-30 features-item-list">
                                <li class="">We put a lot of effort in design.</li>
                                <li class="">The most important ingredient of successful website.</li>
                                <li class="">Submit Your Orgnization.</li>
                            </ul>
                            <a href="#" class="btn btn-custom margin-t-30 waves-effect waves-light">Learn More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="features-img mx-auto mr-lg-0">
                            <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END ABOUT US-->

        <!--START SERVICES-->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">Our Services</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <p class="section-subtitle text-muted text-center padding-t-30 font-secondary">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value for our clients.</p>
                    </div>
                </div>
                <div class="row margin-t-30">
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-diamond text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Digital Design</h4>
                                    <p class="pt-2 text-muted">Some quick example text to build on the card title and make up the bulk of the card's content. Moltin gives you the platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-display2 text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Unlimited Colors</h4>
                                    <p class="pt-2 text-muted">Credibly brand standards compliant users without extensible services. Anibh euismod tincidunt ut laoreet Ipsum passage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-piggy text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Strategy Solutions</h4>
                                    <p class="pt-2 text-muted">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean necessary regelialia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-science text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Awesome Support</h4>
                                    <p class="pt-2 text-muted">It is a paradisematic country, in which roasted parts of sentences fly into your mouth leave for the far World.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-news-paper text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Truly Multipurpose</h4>
                                    <p class="pt-2 text-muted">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-plane text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Easy to customize</h4>
                                    <p class="pt-2 text-muted">Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-arc text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Pixel Perfect Design</h4>
                                    <p class="pt-2 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-tools text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Perfect Toolbox</h4>
                                    <p class="pt-2 text-muted">Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-t-20">
                        <div class="services-box">
                            <div class="media">
                                <i class="pe-7s-timer text-custom"></i>
                                <div class="media-body ml-4">
                                    <h4>Awesome Design</h4>
                                    <p class="pt-2 text-muted">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--START SERVICES-->

        <!--START WEBSITE-DESCRIPTION-->
        <section class="section bg-web-desc">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-white">Build your dream website today</h2>
                        <p class="padding-t-15 home-desc mx-auto">But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her.</p>
                        <a href="#" class="btn btn-bg-white margin-t-30 waves-effect waves-light">View Plan & Pricing</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--END WEBSITE-DESCRIPTION-->


        <!--START ABOUT-US-->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="about-title mx-auto text-center">
                            <h2 class="font-weight-light">A Digital web studio creating stunning  &amp; Engaging online Experiences </h2>
                            <p class="text-muted pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                        </div>
                    </div>
                </div>
                <div class="row margin-t-50">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="team-wrapper">
                                <div class="team-member">
                                    <img alt="" src="http://localhost/wazi/wp-content/themes/make_future_it/images/team1.jpg" class="img-fluid rounded">
                                </div>
                            </div>
                            <h4 class="team-name">Frank Johnson</h4>
                            <p class="text-uppercase team-designation">CEO</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="team-wrapper">
                                <div class="team-member">
                                    <img alt="" src="http://localhost/wazi/wp-content/themes/make_future_it/images/team2.jpg" class="img-fluid rounded">
                                </div>
                            </div>
                            <h4 class="team-name">Elaine Stclair</h4>
                            <p class="text-uppercase team-designation">Designer</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="team-wrapper">
                                <div class="team-member">
                                    <img alt="" src="http://localhost/wazi/wp-content/themes/make_future_it/images/team3.jpg" class="img-fluid rounded">
                                </div>
                            </div>
                            <h4 class="team-name">Wanda Arthur</h4>
                            <p class="text-uppercase team-designation">Developer</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="team-box text-center">
                            <div class="team-wrapper">
                                <div class="team-member">
                                    <img alt="" src="http://localhost/wazi/wp-content/themes/make_future_it/images/team4.jpg" class="img-fluid rounded">
                                </div>
                            </div>
                            <h4 class="team-name">Joshua Stemple</h4>
                            <p class="text-uppercase team-designation">Manager</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--END ABOUT-US-->

        <!--START PRICING-->
        <section class="section bg-light" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">Our Pricing</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <p class="section-subtitle font-secondary text-muted text-center padding-t-30">Call to action pricing table is really crucial to your for your business website. Make your bids stand-out with amazing options.</p>
                    </div>
                </div>
                <div class="row margin-t-50">
                    <div class="col-lg-4">
                        <div class="text-center pricing-box">
                            <h4 class="text-uppercase">Economy</h4>
                            <h1>$9.90</h1>
                            <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                            <div class="plan-features margin-t-50">
                                <p>Bandwidth: <b class="text-custom">1GB</b></p>
                                <p>Onlinespace: <b class="text-custom">50MB</b></p>
                                <p>Support: <b class="text-custom">No</b></p>
                                <p><b class="text-custom">1</b> Domain</p>
                                <p><b class="text-custom">No</b> Hidden Fees</p>
                            </div>
                            <a href="#" class="btn btn-custom waves-effect waves-light margin-t-30">Join Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center pricing-box bg-white price-active">
                            <div class="ribbon-box"><span>Popular</span></div>
                            <h4 class="text-uppercase">Deluxe</h4>
                            <h1>$19.90</h1>
                            <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                            <div class="plan-features margin-t-50">
                                <p>Bandwidth: <b class="text-custom">10GB</b></p>
                                <p>Onlinespace: <b class="text-custom">500MB</b></p>
                                <p>Support: <b class="text-custom">Yes</b></p>
                                <p><b class="text-custom">10</b> Domain</p>
                                <p><b class="text-custom">No</b> Hidden Fees</p>
                            </div>
                            <a href="#" class="btn btn-custom waves-effect waves-light margin-t-30">Join Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center pricing-box">
                            <h4 class="text-uppercase">Ultimate</h4>
                            <h1>$29.90</h1>
                            <h6 class="text-uppercase text-muted">Billing Per Month</h6>
                            <div class="plan-features margin-t-50">
                                <p>Bandwidth: <b class="text-custom">100GB</b></p>
                                <p>Onlinespace: <b class="text-custom">2 GB</b></p>
                                <p>Support: <b class="text-custom">Yes</b></p>
                                <p><b class="text-custom">Unlimited</b> Domain</p>
                                <p><b class="text-custom">No</b> Hidden Fees</p>
                            </div>
                            <a href="#" class="btn btn-custom waves-effect waves-light margin-t-30">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ENd PRICING-->


        <!--START TESTIMONIAL-->
        <section class="section" id="testi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">What they've said</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <p class="section-subtitle text-muted text-center font-secondary padding-t-30">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p>
                    </div>
                </div>
                <div class="row margin-t-50">
                    <div class="col-lg-4">
                        <div class="testimonial-box margin-t-30">
                            <div class="testimonial-decs p-4">
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                                <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/user-1.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                                <div class="p-1">
                                    <h5 class="text-center text-uppercase mb-3">Dennis Williams - <span class="text-muted text-capitalize">Charleston</span></h5>
                                    <p class="text-muted text-center mb-0">“I feel confident imposing change on myself. It's a lot more fun progressing than looking back. That's why I need to throw curve balls.” </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-box margin-t-30">
                            <div class="testimonial-decs p-4">
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                                <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/user-2.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                                <div class="p-1">
                                    <h5 class="text-center text-uppercase mb-3">Laurie Bell - <span class="text-muted text-capitalize">Worcester</span></h5>
                                    <p class="text-muted text-center mb-0">“Our task must be to free ourselves by widening our circle of compassion to embrace all living creatures and the whole of nature and its beauty.” </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-box margin-t-30">
                            <div class="testimonial-decs p-4">
                                <div class="testi-icon">
                                    <i class="mdi mdi-format-quote-open display-2"></i>
                                </div>
                                <img src="http://localhost/wazi/wp-content/themes/make_future_it/images/user-3.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                                <div class="p-1">
                                    <h5 class="text-center text-uppercase mb-3">Howard Kelley - <span class="text-muted text-capitalize">Lynchburg</span></h5>
                                    <p class="text-muted text-center mb-0">“I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.” </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END TESTIMONIAL-->

        <!--START GET STARTED-->
        <section class="section section-lg bg-get-start">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h1 class="get-started-title text-white">Let's Get Started</h1>
                        <div class="section-title-border margin-t-20 bg-white"></div>
                        <p class="section-subtitle font-secondary text-white text-center padding-t-30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <a href="#" class="btn btn-bg-white waves-effect margin-t-20">Get Started <i class="mdi mdi-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </section>
        <!--END GET STARTED-->

        <!-- START BLOG -->
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">Latest News</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <p class="section-subtitle text-muted text-center font-secondary padding-t-30">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean class at a euismod mus luctus quam.</p>
                    </div>
                </div>

                <div class="row margin-t-30">
					
				<?php get_template_part( 'template-parts/blog', 'content' );?>
				
                </div>

            </div>
        </section>
        <!-- END BLOG -->

        <!-- CONTACT FORM START-->
        <section class="section " id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1 class="section-title text-center">Get In Touch</h1>
                        <div class="section-title-border margin-t-20"></div>
                        <p class="section-subtitle text-muted text-center font-secondary padding-t-30">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with measurable results.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mt-4 pt-4">
                            <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                            <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span class="text-muted d-block mt-2">2467 Swick Hill Street <br/>New Orleans, LA 70171</span></p>
                            <p class="mt-4"><span class="h5">Working Hours:</span><br> <span class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="custom-form mt-4 pt-4">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name*" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mt-2">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email*" >
                                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" id="subject" placeholder="Your Subject.." />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </section> 
        <!-- CONTACT FORM END-->


        <!--START FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 margin-t-20">
                        <h4>HIRIC</h4>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 margin-t-20">
                        <h4>Information</h4>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Bookmarks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 margin-t-20">
                        <h4>Support</h4>
                        <div class="text-muted margin-t-20">
                            <ul class="list-unstyled footer-list">
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Contact</a></li>
                                <li><a href="">Disscusion</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 margin-t-20">
                        <h4>Subscribe</h4>
                        <div class="text-muted margin-t-20">
                            <p>In an ideal world this text wouldn’t exist, a client would acknowledge the importance of having web copy before the design starts.</p>
                        </div>
                        <form class="form subscribe">
                            <input placeholder="Email" class="form-control" required>
                            <a href="#" class="submit"><i class="pe-7s-paper-plane"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->

        <!--START FOOTER ALTER-->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="copy-rights text-muted mb-3 mb-sm-0">2019 © Hiric - Themesbrand</p>
                        </div>
                        <div class="float-right pull-none ">
                            <ul class="list-inline social m-0">
                                <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="" class="social-icon"><i class="mdi mdi-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--START FOOTER ALTER-->

<?php
get_footer();
