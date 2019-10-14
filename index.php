<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our IT development includes Web App (Java, Ruby on Rails, E-commerce website, PHP, HTML, CSS), Mobile App (iOS, Android, Windows) & we provide Business Intelligence, Business Consulting, Enterprise App Development.">
    <meta name="author" content="">
    <meta name="keywords" content="IT consulting, business intelligence, business consulting, enterprise app development, web app development, mobile app development, website development, website ui design, UI design, web development, web portal development, web application development, software development, web design, e-commerce development, learning management software, fleet management software, e-commerce solution, e-commerce, shopping cart, payment gateway integration, cloud based applications, web based business applications, social network integration, Search engine optimization, magento,  prestashop, seo, lamp, static website development, corporate website development, java, php, html, css, php5, css3, html 5, ruby on rails, hourly rate developers.web app development india, app development usa. iOS app development, iOS app development india, top ios developers, best iphone app development company, quality app development company, cheap ios app development, ipad applications, HD wallpaper development company, live wall paper development, HD wallpaper designers, live wallpaper designers, iOS7 apps, android app development, android app development company, best android app developers, google play app developers, ibeacon app developers, ibeacon app, ibeacon app development, mobile app development india, mobile app development usa. LMS development, scrom content developers, lms course designers, lms instructional designers, learnguild LMS, learning management system website, online learning system, GPS app development, vehicle tracking application, live tracking application, deemgps tracker, school bus tracking system, truck tracking system, bus tracking system, personal tracker, cab tracking system, shipment tracking system, courier management system,  logistic management system, watch tracker, mygps, gps based tracker, gps vehicle tracking system, gps mobile app, best vehicle tracking, easy vehicle tracking system, fleet management system, HER system, electronic health care system, health monitor system, lms mooc development, online course selling, sell my course, learn new courses through online.">

    <title>Deemsys Inc</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="page-top" class="index">

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-44428565-1', 'auto');
    ga('send', 'pageview');

    var error = "";

    function validate() {

        var error = "";
        document.getElementById("ferror").innerHTML = "";
        document.getElementById("lerror").innerHTML = "";
        document.getElementById("eiderror").innerHTML = "";
        document.getElementById("adderror").innerHTML = "";
        document.getElementById("msgerror").innerHTML = "";

        var fnameval = /^[a-zA-Z]/;

        if (document.getElementById("fname").value == "") {
            document.getElementById("ferror").innerHTML = "Required field should not be empty";
            error = "true";
        } else {
            if (document.getElementById("fname").value != "") {
                if (document.getElementById("fname").value.match(fnameval) == null) {
                    document.getElementById("ferror").innerHTML = "Intial space not allowed";
                    error = "true";
                }
            }
        }

        var lnameval = /^[a-zA-Z]/;
        if (document.getElementById("lname").value == "") {
            document.getElementById("lerror").innerHTML = "Required field should not be empty";

            error = "true";

        } else {
            if (document.getElementById("lname").value != "") {
                if (document.getElementById("lname").value.match(lnameval) == null) {
                    document.getElementById("lerror").innerHTML = "Initial space not allowed";

                    error = "true";
                }
            }
        }
        if (document.getElementById("address").value == "") {
            document.getElementById("adderror").innerHTML = "Required field should not be empty";

            error = "true";

        }

        if (document.getElementById("message").value == "") {
            document.getElementById("msgerror").innerHTML = "Required field should not be empty";

            error = "true";

        }

        var mail = /^[A-Za-z0-9._%+-]+@(?:[A-Za-z0-9-]+\.)+[A-Za-z]{2,3}$/;
        if (document.getElementById("email").value == "") {
            document.getElementById("eiderror").innerHTML = "Required field should not be empty";

            error = "true";
        } else {
            if (document.getElementById("email").value != "") {
                if (document.getElementById("email").value.match(mail) == null) {
                    document.getElementById("eiderror").innerHTML = "Enter valid email-ID";

                    error = "true";
                }
            }
        }

        if (error == "true") {
            return false;
        }
    }
</script>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="background: url(img/logo_deem.png) no-repeat;background-size:100% 100%;"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a class="navbar-brand page-scroll" href="#page-top">Deemsys Inc</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <!--<li>
                   <a class="page-scroll" href="#products">Products</a>
                   </li>-->
                <li>
                    <a class="page-scroll" href="#portfolio">Products</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="#career-modal-content" data-toggle="modal">Careers</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header id="gototop">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Welcome To Deemsys</div>
            <a href="#about" class="page-scroll btn btn-xl">Enter</a>
        </div>
    </div>
</header>
<!-- Services Section -->
<!-- Services Section -->
<!-- Portfolio Grid Section -->
<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="Web App & Mobile App">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Deemsys Overview</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted" align="justify">Deemsys Inc. is headquartered in Columbus, OH, USA with a global presence in US, India & Brazil. Deemsys is one of the leading IT application development company with a great team of proficient people. Build your Expectation over our Expertise. With a decade of experience, we have in-depth knowledge and skilled experts in web & mobile technologies! We completely understand the prominence of business commerce and perfectly blend the web art with this to squeeze out the desired result that ensures you a great profit.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/2.jpg" alt="Enterprise App development">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Why Deemsys?</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted" align="justify">Deemsys Inc offers the best-in-class application maintenance solutions that relieve the companies from the cumbersome and tedious task of managing their technology landscape. We bring to fore, our enormous experience built on the past successful technology engagements. We help you realize the potential of your mission critical applications via our custom built offerings:
                                </p>
                                <br>
                                <ul class="text-muted">
                                    <li align="left">Technology Driven</li>
                                    <li align="left">Quality Assurance</li>
                                    <li align="left">Service Oriented</li>
                                    <li align="left">Value For Money</li>
                                    <li align="left">Unlimited Support</li>
                                    <li align="left">Unique Design</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/3.jpg" alt="Business Intelligence, IT applications">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">What We Do?</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted" align="justify">We, at Deemsys Inc. spotlight mainly on Creative Web & UI designing, Web & Mobile Application development, SEO/SEM Services, Digital Marketing etc. We have marked our foot prints in technologies like Java/J2EE, Ruby On Rails, Php, Html/Css, Angular JS, mobile platforms like iOS application development (iPhone, iPad), Android application development, Windows application development in frameworks such as Native Apps, Cross platform Apps. Our signature products include Breast Cancer research project BC-research.net; Cyberhealths.com; online education magazine, Educationmonitor.com; our Learning Management Systems Portal Learnguild.com; Electronic Healthcare Records (EHR) software portal Chirovirtualoffice.com, our GPS vehicle tracking systems and medication monitoring systems.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/4.jpg" alt="IT development, consulting">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Other Services</h4>
                            </div>
                            <div class="timeline-body">
                                <uL class="text-muted">
                                    <li align="left">Content Management System
                                    <li align="left">Quality Management System
                                    <li align="left">Bug fixing & incident resolution
                                    <Li align="left">E-Commerce Solutions
                                    <li align="left">Responsive Design
                                    <li align="left">Product Life Cycle Management
                                    <li align="left">Project Management & User Training
                                    <li align="left">Application Maintenance & Support
                                    <li align="left">Database monitoring & maintenance
                                    <li align="left">Pre-production & production support
                                    <li align="left">Website Optimization & Third Party Testing
                                    <LI>Third party testing & quality assurance
                                    <li>User training
                                </uL>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image " id="about-us-modal-link ">
                            <h4><a href="#aboutus-modal-content" data-toggle="modal"><font color="#FFF">Be Part
                                        <br>Of Our
                                        <br>Story!</font></a>
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <!--<img src="img/team/1.jpg" class="img-responsive img-circle" alt="founder of deemsys inc">-->
                    <h4><B>FOUNDER & PRESIDENT</B></h4><br/>
                    <p class="text-muted" align="justify">The founders of Deemsys Inc. have decades of higher learning teaching experience in the US. <b>Jacob Benjamin</b>, the President of the company taught Allied Health for more than 20 years and also designed and developed numerous e-learning and online courses while teaching at the Central Ohio Technical College, Newark, OH which is being used even today at the college. He has also worked closely with researchers from the Washington State University and the Ohio State University and designed and developed medication monitor and breast cancer research projects.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <!--<img src="img/team/2.jpg" class="img-responsive img-circle" alt="Project Manager of deemsys inc">-->
                    <h4><B>CHAIRMAN</B></h4><br/>
                    <p class="text-muted" align="justify">The chairman of Deemsys Inc., <b>Mrs. V. Benjamin</b> also has more than 30 years of higher learning teaching experience. She taught Health Information Management Systems and communications at the Columbus State Community College. Mrs. Benjamin has the rich experience of designing and teaching online courses for more than 15 years.</p>
               </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <!--<img src="img/team/3.jpg" class="img-responsive img-circle" alt="marketing director of deemsys inc">-->
                    <h4>MARKETING DIRECTOR</h4><br/>
                    <p class="text-muted" align="justify"><b>Dexter Benjamin</b> - A source of endless energy is the Marketing Director of Deemsys Inc. Dexter Benjamin graduated from the Fisher’s College of Business, The Ohio State University with a Bachelor's degree in Business and a Master's degree from the University of Bradford, U.K. He has over Seven years of hands-on experience in all levels of Marketing and Sales arena.  He brings "passion" to our brand and adds value to our business.</p>
                </div>
            </div>
            <!-- <div class="col-lg-12">
               <div class="team-member">
                <p class="text-muted" align="justify">
                 We at Deemsys, with our team of highly trained and experienced software engineers who have experience in a wide range of IT applications, Business Intelligence, and experience in Enterprise data management can build your business a customized solution and
               </p>

               <ul class="text-muted">
                <li align="justify">Integrate information in various formats  using our Business Intelligence solutions </li>
                <li align="justify">Build a forecasting engine  give you various directions that your business can take</li>
                <li align="justify">Process any direction that you may define and forecast its consequences</li>
               </ul>
               <p class="text-muted" align="justify">
                We at Deemsys believe in our solutions and so will take responsibility for any inaccurate forecast that our solutions may put out. We are there with you every step of the journey to business success. Sound interesting? Then contact us at benjamin@deemsysinc.com               </p>
               </div>
               </div> -->
            <div align="right">
                <a href="#team-modal-contents" class="page-scroll btn btn-xl"data-toggle="modal">MORE</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <p class="large text-muted"></p>
        </div>
    </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-delicious fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">UI Design</h4>
                <p class="text-muted" align="justify">In UI Design we primarily focus for high-quality designs, graphics, mock-ups and layouts for both new and existing Web applications. The other major spotlights are towards creating intuitive interfaces and interaction layers, to augment the user experience. Best, unique & innovative UI designs will be designed by the most challenging team of Deemsys Inc. UI designing services includes, Logo designing, Web application designing, Mobile application designing, Responsive website designing, Brochure designing, Multimedia- HD, 2D and 3D designing etc.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Web Development</h4>
                <p class="text-muted" align="justify">The website we design for you is no longer merely a source of information where they find about you. We design website that are compliant with industrial standards. We build a sturdy foundation for your web design to maximize usability and consistency across different web and mobile browsers. Standards-compliant web designs make future updates to your web content quick and easy while ensuring your web design is at the forefront of developments in website technology. We provide the best website which will be an interactive way to be engaged with your clients.   </p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Mobile Development</h4>
                <p class="text-muted" align="justify">Apart from developing our own mobile products, we also develop top notch mobile applications for our customers. We'll ensure that you have a consistent user experience across ALL devices. Our highly experienced technologically driven team has explored their knowledge in iOS, Android, Windows Phone & Blackberry. We have vision to create hundreds of apps for small and mid-sized businesses. We have a dedicated team of experienced mobile technology programmers who can develop highly scalable and robust mobile applications for your business. We optimize the design of the application based on your requirement so that the user experience in the application is personalized and has a minimal learning curve.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-certificate fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Branding</h4>
                <p class="text-muted" align="justify">Deemsys Inc. recognizes that branding is of vital importance to the success of a business as it can help shine the spotlight on a good product and enable it to be showcased above the competition thus achieving real sales success. It can be the single most important factor in keeping a business robust and rejuvenated. Needless to say, one must take the time to analyze and consider all the various factors at play before establishing the branding for their business. Having a good brand that its target audience can readily relate to is vital to the success of any business. Good branding can also refresh and rejuvenate an existing business that has been slowly losing touch with its customers. Our experienced professionals will be with you every step of the way to position your brand image with just the right audience.</p>
            </div>
             <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-adjust fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Digital Marketing</h4>
                <p class="text-muted" align="justify">It has been said that pictures are worth a thousand words. Also, who doesn’t love a good video? Having a well-designed website with content and videos that have been aesthetically and thoughtfully crafted, catering to its target audience, can elevate a business from doing moderately well to doing extremely well and giving its competitors a run for their money. Videos & Photography just might be what your business requires to take it to the next level. Our experienced content and video editors will help develop just the right strategy for you to help create an online presence in social media sites. Feedback on services from customers can be readily obtained to drive improvements. Also, which media platforms work well can easily be determined.
            </p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-bar-chart-o fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Web Analytics</h4>
                <p class="text-muted" align="justify">The key to assessing and improving the effectiveness of a website is understanding and analyzing the web data that has been collected and measured. Measuring the traffic to the website enables understanding popularity trends. Success can be measured by tracking only clean and unbiased analytics data. Web pages that require technical attention must be identified and taken care of. Ranking for keywords and orienting of content towards your target audience must be done with great care so as to enable the website to be among the top results of a customer search. Deemsys Inc. will be with you every step of the way - whether it is content marketing, link marketing, technical SEO, fine-tuning meta tags or distributing high quality meta-data through social channels – to ensure that your business is well measured and well refreshed.
            </p>
            </div>
            
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shield fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Business Intelligence</h4>
                <p class="text-muted" align="justify">Companies thrive in the market because of the information they have. Information that has been derived from a vast ocean of Historical data. When data is churned constantly, new insights float up, to be consumed by the business to improve their Operational efficiencies, Financial Management, Customer service etc. Deemsys offers Business Intelligence (BI) services to empower companies with information that will make them informed decisions. We are a team domain, technical and business experts who put our heads together to see data with a new perspective.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">IT Consulting</h4>
                <p class="text-muted" align="justify">We are an End-to-end solutions provider who can solve the tricky technology investments. We endeavour to study your business to identify the right match of Hardware, Software, Database, Applications, Tools and Process that are necessary to guarantee reduced TCO and ROI. Our successful engagements have equipped us to implement these solutions with minimal interference to current business practices.<br>
                    With an intelligent concoction of advanced tools and technologies, we change our customer business into agile, lean platforms with reduced turn-around times and foster innovation.
                </p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-puzzle-piece fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Back Office Solution</h4>
                <p class="text-muted" align="justify">Managing the core competencies intelligently of the company makes certain that the business is capable of innovating faster and turning around to the needs of the market. However, running a company requires allotment of precious management bandwidth to non-core activities. Deemsys steps in to assist you stay focused to your business vision. We takeover all non-core activities that will divert your precious Employees' time and effort. We compliment your efforts in building a responsive organization that is focused on its mission to provide the best service to its customers.</p>
            </div>
            
        </div>
        
            <div class="col-md-offset-8 col-md-4">
            <div style="padding-top:50px;">
            <a href="#service-modal-content" class="page-scroll btn btn-xl  pull-right" data-toggle="modal">MORE</a>
            </div>
            </div>
    </div>
</section>
<!--<section id="products" class="bg-light-gray">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 text-center">
               <h2 class="section-heading">Our Products</h2>
               <h3 class="section-subheading text-muted"></h3>
           </div>
       </div>
       <div class="row text-center">
           <div class="col-md-4">
               <span class="fa-stack fa-4x">
                   <i class="fa fa-circle fa-stack-2x text-primary"></i>
                   <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
               </span>
               <img src="img/portfolio/gps_product.jpg" class="img-responsive" alt="school bus tracking system">
               <h4 class="service-heading">LearnGuild LMS</h4>
               <p class="text-muted" align="justify">LearnGuild creates customized LMS solutions for Schools, Colleges and Corporate around the globe. This has revolutionized the learning process far beyond the four walls of the classroom or training centre and into the world of online education. Learners can access courses wherever there is an internet connection via computers, laptops, tablets or mobiles.

   </p>
           </div>
           <div class="col-md-4">
               <span class="fa-stack fa-4x">
                   <i class="fa fa-circle fa-stack-2x text-primary"></i>
                   <i class="fa fa-car fa-stack-1x fa-inverse"></i>
               </span>
               <h4 class="service-heading">GPS Tracking System</h4>
               <p class="text-muted" align="justify">Travel safely with DeemGPS,  an advanced technology solution to track your vehicle. Track your vehicle with DeemGPS from web or smartphone and check the current location, speed and if your vehicle is parked or moving. Easy to manage your fleet with the tracking history report, live tracking report & get detouring alert, messages when the truck crosses particular destinations along with a over speed alert.</p>
           </div>
           <div class="col-md-4">
               <span class="fa-stack fa-4x">
                   <i class="fa fa-circle fa-stack-2x text-primary"></i>
                   <i class="fa fa-book fa-stack-1x fa-inverse"></i>
               </span>
               <h4 class="service-heading">LMS MOOC</h4>
               <p class="text-muted" align="justify">LMS range from systems for managing training and educational records to software for distributing online or blended/hybrid college courses over the internet with features for online collaboration. Colleges and universities use LMS to deliver online courses and augment on-campus courses. Corporate training departments use LMS to deliver online training.</p>
           </div>
       </div>
   </div>
   </section>-->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Products</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/ehr.jpg" class="img-responsive" alt="Electronics Healthcare Records">
                </a>
                <h4 class="service-heading text-center">Electronics Healthcare Records</h4>
                <p class="text-muted">Our electronics Healthcare Records (EHR) is software as a service (SaaS) portal.  Presently our Electronics Healthcare Records software focuses only the...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cyber.jpg" class="img-responsive" alt="act on">
                </a>
                <h4 class="service-heading text-center">Cyber Health</h4>
                <p class="text-muted">This is an online weight management and diabetes prevention program. Our online weight management and diabetes prevention is a collection...
                </p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/learguild.jpg" class="img-responsive" alt="learn guild">
                </a>
                <h4 class="service-heading text-center">LearnGuild LMS</h4>
                <p class="text-muted" align="justify">LearnGuild creates customized LMS solutions for Schools, Colleges and Corporate around the globe. This has revolutionized the learning process far...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/injury.jpg" class="img-responsive" alt="white seal">
                </a>
                <h4 class="service-heading text-center">Injury Referral Center</h4>
                <p class="text-muted">It is published every monthly online and appears as a supplement sample sample sample sample sample sample sample sample sample sample...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/edu_monitor.jpg" class="img-responsive" alt="education monitor">
                </a>
                <h4 class="service-heading text-center">Education Monitor</h4>
                <p class="text-muted">It is published every monthly online and appears as a supplement on higher education for the college magazines and students, health care, fitness...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/adherence.jpg" class="img-responsive" alt="adherence">
                </a>
                <h4 class="service-heading text-center">Adherence to Medication</h4>
                <p class="text-muted">Each year hundreds of thousands of women are diagnosed with breast cancer. Though the incidence rates have been declining over the last several...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/medication_monitor.jpg" class="img-responsive" alt="medication monitor">
                </a>
                <h4 class="service-heading text-center">Medication Monitor</h4>
                <p class="text-muted">Medicine is critical for treating and preventing diseases. Sometimes medicines cause side effects and actually make a patient feel worse...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/gps_product.jpg" class="img-responsive" alt="school bus tracking system">
                </a>
                <h4 class="service-heading text-center">GPS Tracking System</h4>
                <p class="text-muted">This GPS application is mainly developed for the safety of school/ college students, parents receive messages X minutes before the student reaches...</p>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/gps.jpg" class="img-responsive" alt="gps marketting">
                </a>
                <h4 class="service-heading text-center">GPS Marketing Website</h4>
                <p class="text-muted">GPS Marketing Website is manily developed for our promoting purpose, this site will provide you all the feature available in our product. If you looking for...</p>
            </div>
            <!--
               <div class="col-md-4 col-sm-6 portfolio-item">
                   <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                       <div class="portfolio-hover">
                           <div class="portfolio-hover-content">
                               <i class="fa fa-plus fa-3x"></i>
                           </div>
                       </div>
                       <img src="img/portfolio/qms_preview.jpg" class="img-responsive" alt="quality management system">
                   </a>
                   <div class="portfolio-caption">
                       <h4>Quality Management System</h4>
                       <p class="text-muted"></p>
                   </div>
               </div>
               -->
        </div>
    </div>
</section>
<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
            </div>
            <div class="col-md-3 col-sm-6">
            </div>
            <div class="col-md-3 col-sm-6">
            </div>
            <div class="col-md-3 col-sm-6">
            </div>
        </div>
    </div>
</aside>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Welcome, request your quote!
                    <?php
                    if(isset($_SESSION['thanks']))
                    {
                        echo '<div style="font-weight:bold;font-size:13px;color:#00FF00;">';
                        echo ' <br/><br/>'.$_SESSION['thanks'];
                        echo '</div>';
                    }


                    ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="services/contact.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" id="fname" name="firstname" maxlength="32" onkeypress="return onlyAlphabets(event,this);"/>
                                <font color="yellow"><span class="err" id="ferror"></span></font>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Last Name" id="lname" name="lastname" maxlength="32" onkeypress="return onlyAlphabets(event,this);">
                                <font color="yellow"><span class="err" id="lerror"></span></font>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="username" id="email" onkeypress="return onlyemail(event,this);">
                                <font color="yellow"><span class="err" id="eiderror"></span></font>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control"  style="height:100px" placeholder="Your Message" name="message" id="message" maxlength="500";></textarea>
                                <font color="yellow"><span class="err" id="msgerror"></span></font>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control"  style="height:110px" placeholder="Address" name="address" id="address" maxlength="150";></textarea>
                                <font color="yellow"><span class="err" id="adderror"></span></font>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <br>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input type="submit" class="btn btn-xl" value="Send Message" onclick="return validate()"/><br>
                            <br/><br/>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <h3 class="text-muted" style="color:#fff">Head Quarter</h3>
                                <p class="text-muted" style="color:#fff"><b>Deemsys Inc</b></p>
                                <p class="text-muted" style="color:#fff">800 Cross Pointe Road,</p>
                                <p class="text-muted" style="color:#fff">Suite A,</p>
                                <p class="text-muted" style="color:#fff">Gahanna,&nbsp;OH 43230,</p>
                                <p class="text-muted" style="color:#fff">U.S.A.</p>
                                <p class="text-muted" style="color:#fff">Email:&nbsp;<a href="mailto:rajan@deemsysinc.com" target="_blank"><img src="img/Capture1.png"></a></p>
                                <p class="text-muted" style="color:#fff">Phone:&nbsp;614-322-9928, 614-322-9945</p>
                            </div>
                            <br>
                            <div class="form-group">
                                <h3 class="text-muted" style="color:#fff">India Development Centre</h3>
                                <p class="text-muted" style="color:#fff"><b>Deemsys Inc</b></p>
                                <p class="text-muted" style="color:#fff">No.1/556, Mambakkam Main Road,
                                <p class="text-muted" style="color:#fff">Nehru Nagar, Vengaivasal,
                                <p class="text-muted" style="color:#fff">Medavakkam (Opposite to Ramco),</p>
                                <p class="text-muted" style="color:#fff">Chennai,&nbsp; 600100,</p>
                                <p class="text-muted" style="color:#fff">India.</p>
                                <p class="text-muted" style="color:#fff">Email:&nbsp;<a href="mailto:deemsyshr@deemsysinc.com" target="_blank"><img src="img/Capture2.png"></a></p>
                                <p class="text-muted" style="color:#fff">Phone:&nbsp;044-32006566,&nbsp;+91 98411 22989</p>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <h3 class="text-muted" style="color:#fff"></h3>
                                <iframe width="100%" height="500" frameborder="0"
                                        scrolling="no" marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?
                           f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;
                           q=Deemsys Inc+800 Cross Pointe Road,+Suite A+Gahanna+OH 43230+United States+43230&amp;
                           aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.87374,114.082031&amp;
                           ie=UTF8&amp;hq=&amp;hnear=Deemsys Inc+800 Cross Pointe Road,+Suite A+Gahanna+OH 43230+United States+43230&amp;
                           t=m&amp;z=14&amp;ll=3...10338.12329.0.13352.7.7.0.0.0.0.318.831.2-2j1.3.0....0...1c.1.52.serp..5.2.592.XSQQkCYGJps&amp;output=embed">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="footer" style="height:30px;padding:0px;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    &copy; 2016 <a href="http://www.deemsysinc.com" target="_blank" style="color:black">Deemsys Inc.</a>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/deemsys" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/pages/Deemsys-Software-Solution-Provider/222802487893459" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="http://in.linkedin.com/pub/deemsys-inc/85/637/61
                     " target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="https://plus.google.com/u/0/102509308678527962720/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- <ul class="list-inline quicklinks">
                       <li><a class="page-scroll" href="privacy-policy.php" style="color:black;text-decoration: none;">Privacy Policy</a>
                       </li><li>|</li>
                       <li><a class="page-scroll" href="terms-of-uses.php" style="color:black;text-decoration: none;">Terms of Use</a>
                       </li>


                       </ul> -->
                    <a class="page-scroll" href="#career-modal-content" data-toggle="modal" style="color:red;text-decoration: none;">Careers</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a class="page-scroll" href="privacy-policy.php" style="color:black;text-decoration: none;">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a class="page-scroll" href="terms-of-uses.php" style="color:black;text-decoration: none;">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->
<!-- secondary-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">LEAD .NET DEVELOPER / SOFTWARE ENGINEER</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Responsibilities:</b></p>
                        <p class="text-muted" align="justify">The .NET Programmer Analyst will review, analyze, develop, and modify enterprise application systems and web sites. The responsibilities will include coding, testing, debugging, and documenting programs for new or existing systems, working directly with the business users. An ability to rapidly learn new coding languages and environments and ensuring a superior level of customer service is a must. The ideal candidate will also need to be comfortable working in a fast-paced, quickly evolving environment<br>
                        <p class="text-muted" align="justify"><b>Required Qualifications:</b></p>
                        <ul class="text-muted">
                            <li class="left-align">5-7+ years of C# (or VB.NET) web development experience</li>
                            <li class="left-align">ASP.NET, .NET framework, HTML, CSS, JavaScript</li>
                            <li class="left-align">Relational Database Development (SQL Server or Oracle)</li>
                            <li class="left-align">Web site and application development experience</li>
                            <li class="left-align">Strong interpersonal and communication skills</li>
                            <li class="left-align">Strong dedication to quality customer service</li>
                            <li class="left-align">Excellent analytical and problem solving skills</li>
                            <li class="left-align">Must possess a personal sense of urgency</li>
                            <li class="left-align">Superior teamwork skills</li>
                            <li class="left-align">BS or BA degree in Business Systems or Computer Science</li>
                        </ul><br/>
                        <p class="text-muted" align="justify"><b>Desirable Qualifications: </b></p>
                        <ul class="text-muted">
                            <li class="left-align">Lead Experience</li>
                            <li class="left-align">SQL Server, Transact-SQL, Oracle, PL-SQL, XML, XSL, AJAX, JQuery, Telerik Controls</li>
                            <li class="left-align">Prior experience developing enterprise software solutions</li>
                            <li class="left-align">Experience updating content on marketing web sites or intranets.</li>
                        </ul>
                        <br/><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                       <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary" style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-footer-modal-content end here -->
<!-- secondary-two-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">JAVA PROGRAMMER / SOFTWARE ENGINEER</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Major Responsibilities</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Designs, develops, enhances, debugs, and implements interactive software.</li>
                            <li class="left-align">Researches, tests, builds, and coordinates the conversion and/or integration of new products based on client requirements.</li>
                            <li class="left-align">Consults with project teams and end users to identify application requirements.</li>
                            <li class="left-align">Performs feasibility analysis on potential future projects to management.</li>
                            <li class="left-align">Assists in the evaluation and recommendation of application software packages, application integration and testing tools.</li>
                            <li class="left-align">Resolves problems with software and responds to suggestions for improvements and enhancements.</li>
                            <li class="left-align">Effective senior-level communications, verbal and written, with the customer’s managers and others is required.</li>
                        </ul>
                        <br/>
                        <p class="text-muted" align="justify"><b>Required Skills</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Experience in innovative Java-centric scalable enterprise custom application design, development, integration, and delivery.</li>
                            <li class="left-align">Development experience using ORM tools such as Hibernate; Java EE; JAX, Spring, jQuery; HTML5.</li>
                            <li class="left-align">Experience working with enterprise relational database system (e.g., Oracle, MYSQL, etc.); programming experience in SQL and/or PL/SQL.</li>
                            <li class="left-align">Ability to work effectively both independently and as part of an integrated team.</li>
                            <li class="left-align">Highly analytical, possessing critical and creative thinking skills.</li>
                            <li class="left-align">Strong interpersonal skills to maintain effective working relationships with team and customers.</li>
                            <li class="left-align">The following skills are required.</li>
                            <ul class="text-muted">
                                <li class="left-align">5+ years Java programming experience</li>
                                <li class="left-align">2 years Oracle; SQL and PL/SQL programming experience a plus</li>
                                <li class="left-align">1-2 years Web Application and/or services development and deployment</li>
                            </ul>
                        </ul>
                        <br/><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                       <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary"style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;" >Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-two-footer-modal-content end here -->
<!-- secondary-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">MOBILE DEVELOPER / ENGINEER</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Duties and Responsibilities</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Gather and discuss requirements with internal clients and other team members.</li>
                            <li class="left-align">Design, develop, test, and deploy iOS and Android applications.</li>
                            <li class="left-align">Enhance existing mobile applications on an as-needed basis.</li>
                            <li class="left-align">Work collaboratively with team and clients in the implementation process, as well as provide technical support thereafter.</li>
                            <li class="left-align">Develop comprehensive documentation for future reference.</li>
                            <li class="left-align">Suggest methods to improve efficiency and to improve application development and performance.</li>
                        </ul>
                        <br>
                        <p class="text-muted" align="justify"><b>Required qualifications to be successful in this role</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Possess strong application development skills in an Agile environment, coupled with knowledge of current technologies and trends .</li>
                            <li class="left-align">Ability to work in a dynamic, collaborative software development environment.</li>
                            <li class="left-align">Demonstrate effective written and verbal communication skills.</li>
                            <li class="left-align">Strong desire to learn and grow.</li>
                            <li class="left-align">Excellent problem solving skills with a history of superb delivery against assigned tasks.</li>
                            <li class="left-align">Possess excellent UI/UX design skills.</li>
                            <li class="left-align">Self-starter who owns work to completion with minimal direct supervision.</li>
                            <li class="left-align">Minimum 2 years of experience developing native Android and iOS applications.</li>
                            <li class="left-align">Proficient in Android and iOS development tools and SDK – java, object c/swift, including Web Services/APIs/JSON. SQL is a plus.</li>
                            <li class="left-align">Experience with HTML, CSS, JavaScript, and Hybrid mobile app development are a plus.</li>
                            <li class="left-align">Understanding of enterprise-level software architecture and security.</li>
                            <li class="left-align">Prefer degree in computer science/information technology, but not required.</li>



                        </ul>
                        <br/><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                        <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary" style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-footer-modal-content end here -->
<!-- secondary-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">THE SENIOR SOFTWARE QA TESTER</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Responsible for</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Testing SDK library across multiple platforms.</li>
                            <li class="left-align">Creating test documentation (test plans, test cases) and procedures.</li>
                            <li class="left-align">Running validation tests (performance, reliability) on releases.</li>
                            <li class="left-align">Reporting on test results and metrics.</li>
                            <li class="left-align">Determining time estimates and schedules for work efforts.</li>
                            <li class="left-align">Supporting multiple code branches, building and delivering releases.</li>
                            <li class="left-align">Acquiring and implementing automated testing tools.</li>
                            <li class="left-align">Identifying and tracking system defects. Performing root cause analysis of the defects and working with the development team to resolve them.</li>
                            <li class="left-align">Acting as lead of testing activities. Managing time and tasks to provide visibility.</li>
                            <li class="left-align">Performing light IT responsibilities.</li>
                        </ul>
                        <br>
                        <p class="text-muted" align="justify"><b>Required Experience</b></p>
                        <ul class="text-muted">
                            <li class="left-align">At least 3 years of experience in software QA testing.</li>
                            <li class="left-align">Building and Testing both native (C++/Java/.net) and Web (HTML5/Javascript) Software.</li>
                            <li class="left-align">Cross platform knowledge Windows/Linux(Ubuntu/RedHat)/OS X.</li>
                            <li class="left-align">Experience with scripting languages (PowerShell, Bash, Python, Perl, or PHP).</li>
                            <li class="left-align">Managing version control systems.</li>
                            <li class="left-align">Managing bug tracking systems.</li>
                            <li class="left-align">Managing continuous integration systems.</li>
                            <li class="left-align">Experience with test plan / test case creation.</li>
                            <li class="left-align">Experience with various automated test tools.</li>
                            <li class="left-align">History of shipping high-quality well designed software.</li>
                        </ul>
                        <br/><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                        <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary" style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-footer-modal-content end here -->
<!-- secondary-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">HELP DESK ANALYSTS</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Responsible for</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Understanding of Desktop Support and Software Licensing Services.</li>
                            <li class="left-align">Uses creativity and innovation to automate and streamline processes and procedures.</li>
                            <li class="left-align">Understands customer support, likes to work with people and can ensure that the customer is satisfied.</li>
                            <li class="left-align">Ability to troubleshoot in a high level systematic way.  Ability to identify issues and research cause.</li>
                            <li class="left-align">Working knowledge of Excel spreadsheets.</li>
                        </ul>
                        <br>
                        <p class="text-muted" align="justify"><b>Required Experience</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Strong communication/ leadership skills.</li>
                            <li class="left-align">Strong influence, collaboration and negotiation experience.</li>
                            <li class="left-align">Ability to collaborate with supporting resources across business and/or functional lines.</li>
                            <li class="left-align">Have excellent oral and written skills/possess strong meeting and work session facilitation skills.</li>
                            <li class="left-align">Act as the escalation point for high priority support issues.</li>
                            <li class="left-align">Ability to interpret end user license agreements.</li>
                            <li class="left-align">Have the ability to work independently and as part of a team, the ability to manage time and resources to meet assigned deadlines (Service Now Tickets).</li>
                            <li class="left-align">Have strong understanding of prioritization stemming from the elicitation of system and/or user requirements (Software installation requests).</li>
                            <li class="left-align">Have excellent organizational skills, proven analytical, planning, problem solving, and decision-making skills.</li>
                            <li class="left-align">Must be knowledgeable in the English language/speak clearly and understandably use the English language.</li>
                        </ul><br>
                        <p class="text-muted"><b><i>Local candidates preferred, but onsite interviews are REQUIRED.</i></b></p>   
                        <br><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                        <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary" style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-footer-modal-content end here -->
<!-- secondary-footer-modal-content comes here -->
<div class="portfolio-modal modal fade" id="job6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h4 class="text-muted" align="justify">ORACLE DBA</h4>
                        <br>
                        <p class="text-muted" align="justify"><b>Responsible for</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Oversees all aspects and day-to-day activities of the service delivery function and support staff.</li>
                            <li class="left-align">Overseeing the entire operations of the function and ensuring services are delivered to meet, if not exceed customer expectations.</li>
                            <li class="left-align">Should be able to Collaborate globally with the business, vendor consultants, support groups, IT Infrastructure departments and other UBS business units.</li>
                            <li class="left-align">Responsible for Incident, Problem & Change management and RFS in Database Environment with in the Bank.</li>
                            <li class="left-align">Solid understanding of Oracle 10g/11g, RAC, Oracle Dataguard, Goldengate ASM, RMAN, OEM, Exadata and OID preferably.</li>
                            <li class="left-align">Knowledge on performance tuning of database.</li>
                            <li class="left-align">Knowledge on Exports, Imports, Datapump, Rman.</li>
                            <li class="left-align">Hands on experience on cloning of databases.</li>
                            <li class="left-align">Hands on experience on databases restorations and recoveries.</li>
                            <li class="left-align">Knowledge on RAC installation and maintenance.</li>
                            <li class="left-align">Hands on experience on CPU patching and upgrades.</li>
                            <li class="left-align">To work under minimal supervision and should be self-driven.</li>
                            <li class="left-align">Familiar with working in a project environment including planning, deliverables, progress tracking and reporting.</li>
                            <li class="left-align">Manage Key Infrastructure Project coordination including Infrastructure weekends, Patching exercises, Power down activities, BCM Tests, CTB Projects (internal or external), Data Center Moves etc.</li>
                            <li class="left-align">Ability to articulate how business issues may impact overall IT services.</li>
                            <li class="left-align">Provides functional, technical and process leadership within the team.</li>
                            <li class="left-align">Escalations Point for high level service issues and resources.</li>
                            <li class="left-align">Periodic review of the Project Performance (Schedule, cost, quality) on a periodic basis.</li>
                            <li class="left-align">Experience in running Continuous Service Improvement Initiatives to bring efficiencies with in the team.</li>
                            <li class="left-align">Works with Service Manager on SLA Adherence analysis and actions items.</li>
                           
                        </ul>
                        <br>
                        <p class="text-muted" align="justify"><b>Required Skills: Oracle / MSSQL</b></p>
                        <ul class="text-muted">
                            <li class="left-align">Oracle: Administration Skills on all Versions of Oracle Database, Exadata.</li>
                            <li class="left-align">MSSQL: Database Administration tasks independently in MSSQL 2000, 2005, 2008, Analysis services and Reporting services.</li>
                            <li class="left-align">DB Performance Management & Troubleshooting.</li>
                            <li class="left-align">High Availability and Disaster Recovery solutions in DB Environment.</li>
                            <li class="left-align">Good understanding of ITIL V3 framework.</li>
                            <li class="left-align">Good working knowledge on Power point and Visio.</li>
                        </ul>
                        <br><br/><p class="text-muted" align="justify"><b>Send resumes to:</b> <a href="mailto:resume@deemsysinc.com" target="_blank"></br><img src="img/gmail-4.png"></a></p>
                        <a class="page-scroll" href="#career-modal-content" data-dismiss="modal" data-toggle="modal" class="btn btn-primary" style="background: #fed136;color:#fff;padding:10px;text-decoration:none;border-radius:5px;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- secondary-footer-modal-content end here -->
<!-- career content comes here -->
<div class="portfolio-modal modal fade" id="career-modal-content" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-left">job opening</h2>
                        <br>
                        <a href="#job1" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">LEAD .NET DEVELOPER / SOFTWARE ENGINEER</a> <br/><br/>
                        <a href="#job2" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">JAVA PROGRAMMER / SOFTWARE ENGINEER</a> <br/><br/>
                         <a href="#job3" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">MOBILE DEVELOPER / ENGINEER</a><br/><br/>
                         <a href="#job4" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">THE SENIOR SOFTWARE QA TESTER</a> <br/><br/>
                        <a href="#job5" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">HELP DESK ANALYSTS</a> <br/><br/>
                        <a href="#job6" data-dismiss="modal" data-toggle="modal" style="color:red;text-decoration:underline;">ORACLE DBA</a> <br/><br/>
                        <p class="text-muted" align="justify"><b>For any clarifications or information regarding job openings, contact us at:</b><br/><br/>
                            HR, DEEMSYS INC.,<br/>
                            800 Cross Pointe Road,<br/>
                            Suite 800A, Gahanna OH 43230.<br/><br/>
                            <b>E-Mail:</b>&nbsp;<a href="mailto:hr@deemsysinc.com" target="_blank"><br><img src="img/gmail-3.png"></a>
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- carrer content ends here -->
<!-- Services modal contents starts here -->
<div class="portfolio-modal modal fade" id="service-modal-content" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-muted">value added services</h2>
                        <br>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Data Warehousing</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Building a credible data warehouse requires expertise, eye-for-detail and a complete understanding of the domain in which the company operates. It is important to have actionable data that will empower the users to make informed decisions.<br>
                            Deemsys offers data warehousing services to client who need insights and perspectives into their current and past data.  We have a team of experienced and qualified technocrats and experts who can create new dimensions that provide new perspectives. Regardless of location, format or volume of the data, we can create Warehousing solutions that can provide major benefits to our customers.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-share-square-o fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Data Conversion</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Data conversion is a necessity in the current world of automation and paperless offices. Storing of data pertaining to every business activity ensures its streamlining and ultimately its success. Data conversion can be a cumbersome and tedious process requiring precious time and effort of the valuable resources of the company.<br>
                            Deemsys is a leading provider of Data Conversion services. We have used the geographical distribution of our company’s branches to leverage human resources to perform the most complex of Data conversions.  We bring the best professionals; the right methodology and the state-of-the-art equipment, to provide the most cost efficient solutions to the customers.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-th fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Application Development Solutions</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">The frequent changes in the business and economic scenarios throw up new challenges to the companies. Those equipped with energy, resources and resolve are able to face these challenges through innovative business practices. They understand automation of business process is the starting point to add the dimension of efficiency. Changing customer expectations are met via a responsive and speedy turnaround.<br>
                            Deemsys is leader in offering Application development solutions through efficiently combining the experience in business domains with expertise in contemporary technologies. They are able to deliver technology solutions that increase the bottom lines of the customers. Their experienced Project managers, System Architects, Domain Consultants and Quality assurance personnel combine to deliver best-in-class software applications.
                        </p>
                        <br>
                        <h2 class="text-muted">Educational services</h2>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Digital text book</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Deemsys Inc is developing Digital textbooks for the healthcare professionals. Digital text books are nothing but the electronic versions of traditional print textbooks. Digital Text books are used in schools and colleges. Digital textbook being developed by Deemsys Inc provides audio and video resources to help the reader assimilate the information contained in the text. Deemsys Inc believes that with the birth of ipad and electronic book reader, the demand for digital textbook is going to increase.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Learning Management Systems</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Deemsys Inc offers simple, scalable Learning Management Systems to their clients. Deemsys Inc’s LMS is designed to fit small, medium and large organizations. Our clients can enjoy the flexibility, simplicity and customization of a learning management system that will be economical, reliable and easily affordable to organizations of any size.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td>
                           <span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-bars fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted"  align="left">Cisco Certifications</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Cisco offers the Cisco Certified Network Associate (CCNA) designation to professionals passing exams covering the installation, configuration, and operation of simple-routed LAN, routed WAN and switched LAN networks. Additionally, Cisco offers the Cisco Certified Network Professional (CCNP) designation to professionals passing exams covering installation, configuration, and operation of LANs and WANs with networks of 100 or more nodes. Deemsys offers courses to help you prepare for these certification exams. Complete certification requirements are located at the Cisco Web site at&nbsp; <a href="http://www.cisco.com" target="_blank&nbsp;">www.cisco.com.</a></p>
                        <br>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services modal contents ends here -->
<!-- About US Contents starts here -->
<div class="portfolio-modal modal fade" id="aboutus-modal-content" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Success Story</h2>
                        <p class="text-muted" align="justify">Deemsys Inc’s success lies by exhibiting our information, knowledge and skills in all possible fields and forms to our valuable clients, using relevant technology in an entertaining way, through ingenious enterprises that make them erudite, wise, and creative and compel them to participate intensively in human pursuits to user in an era of maximized living experience. .<br><br>
                            In the world of increased competition, one misstep can leave a business far behind the others and even end in total failure. Decisions that are a shot in the dark can leave a business falling down an abyss of lost customers, disgruntled employees and botched finances.<br><br>
                            Knowing the outcome of each path past a decision point is critical to stay ahead of the competition. For accurate prediction of outcomes, human forecasters are subjective, expensive and can be way off the mark with accuracy. An automated forecaster is the obvious choice.
                        </p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About US Contents ends here -->
<!-- team Contents starts here -->
<div class="portfolio-modal modal fade" id="team-modal-contents" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Corporate</h2>
                        <table>
                            <tr>
                                <td><span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted" align="left">HISTORY</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">The founders of Deemsys Inc have decades of teaching experience in higher learning and business. The President of Deemsys Inc is a visionary and has decades of experience in Engineering, teaching and business.<br>
                            The pillars of Deemsys Inc always desired to create a different kind of IT firm. At Deemsys Inc, we are a top IT consulting and e-learning company that has assisted many of their clients/customers throughout U.S. A. with a wide range of Information Technology and e-learning needs. Deemsys Inc uses a client-led approach. Deemsys Inc carefully selects highly experienced software engineers to meet their clients’ need and to develop quality e-learning courses.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td><span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-male fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted" align="left">OUR VALUES</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">At Deemsys Inc we encourage and support networking and relationship management which defines the success of a company. We thrive to create value for customers and employees by providing services and making products that customers find consistently useful and a value addition to their business.<br>
                            Deemsys is proud to be called as a relationship building company. Our relationship with our customers has been built over a period of time since their introduction to us. We go that extra mile to ensure the satisfaction of the customers. We extend the same professionalism, energy and dedication to all our relationship management solutions.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td><span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted" align="left">LEADERSHIP TEAM</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">The ever-evolving business scenarios require companies to develop new strategies to stay competitive or retain leadership positions. Our projects bring in curious dimensions of challenges in resource management, deliverables and timelines. Planning and forecasting are more challenging than ever before. The watertight process framework that we follow assured quality of the highest echelons.<br>
                            Deemsys throws in its weight through its decades of experiences in managing complex projects. The certified and highly qualified project managers have been supported by domain and technology experts with decades of experience and technology personnel with high proficiency. Together, they have been able to add value to customer’s business by delivering within budgeted time and cost.
                        </p>
                        <br>
                        <table>
                            <tr>
                                <td><span class="fa-stack fa-2x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-history fa-stack-1x fa-inverse"></i>
                           </span>
                                </td>
                                <td>
                                    <h5 class="text-muted" align="left">FACTS</h5>
                                </td>
                            </tr>
                        </table>
                        <p class="text-muted" align="justify">Successful organizations are able to maintain the tag of "Success" because of its capabilities to utilize its valuable Management and Domain Bandwidth to take the timely decisions. Such decisions need to be supported by a robust technology infrastructure.
                            Deemsys offers the best-in-class Application maintenance solutions that relieve the companies from the cumbersome and tedious task of managing their technology landscape.<br> We bring to fore, our enormous experience built on the past successful technology engagements. We have constantly strived to improve our service levels and have refined the delivery mechanism. We offer Application Maintenance services that boost uptime and reduce cost of maintenance.
                        </p>
                        <br>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team Contents ends here -->
<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>School Bus Tracking System with GPS Application</h2>
                        <p class="text-muted" align="justify">This GPS application is mainly developed for the safety of school/ college students,
                            parents receive messages X minutes before the student reaches the destination and this reduces the waiting time of the parents. The school can monitor the speed of the bus and they can also track the location of the bus.
                        </p>
                        <img class="img-responsive img-centered" src="img/portfolio/gps_product.jpg" alt="school bus tracking system">
                        <h5 align="left">Technologies-web:</h5>
                        <p class="text-muted" align="justify">Java/J2EE,  Spring MVC,  Spring Annotations,  Apache Tomcat Server,  MySQL Database,  JSP.
                        </p>
                        <h5 align="left">url:</h5>
                        <p align="left"><a href="http://www.deemgpstracker.com" target="_blank">www.deemsysgpstracker.com</a></p>
                        <h5 align="left">Technologies-Mobile App:</h5>
                        <p class="text-muted" align="justify">IDE Xcode, iOS SDK, eclipse, android SDK.</p>
                        <h5 align="left">Android-url:</h5>
                        <p align="left"><a href="https://play.google.com/store/apps/details?id=com.deemsysinc.gpsmobiletracking" target="_blank">https://play.google.com/store/apps/details?id=com.deemsysinc.gpsmobiletracking</a></p>
                        <h5 align="left">ios-url:</h5>
                        <p align="left"><a href="https://itunes.apple.com/us/app/deemgps-vehicle-tracking-system/id906588887?ls=1&mt=8" target="_blank">https://itunes.apple.com/us/app/deemgps-vehicle-tracking-system/id906588887?ls=1&mt=8</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Medication Monitor</h2>
                        <p class="text-muted" align="justify">Medicine is critical for treating and preventing diseases. Sometimes medicines cause side effects and actually make a patient feel worse. In elderly population, it may be difficult to differentiate between side effects and symptoms of disease, especially for those with different diseases. A patient feeling dizzy may think it is a symptom of their heart disease, rather than a side effect from a new medication. Some of the common side effects from medicines are dizziness, fatigue, dry mouth, constipation and headache, and in older men, difficulty urinating. Changes in the body that occur with age can affect how medicines are removed from the body. When medicine is swallowed, it is absorbed through the wall of the stomach or intestines and goes into the bloodstream. After the blood carries the medicine to the tissues, the medicine is eventually removed from the body by the kidneys and liver. It is critical the patient take the prescribed medicine regularly. Using our medication monitor applications, practitioners can monitor the adherence to medication and ensure a balance between achieving treatment goals and minimizing possible side effects.</p>
                        <br>
                        <img class="img-responsive img-centered" src="img/portfolio/medication_monitor.jpg" alt="medication monitor">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">PHP,  Apache Tomcat Server,  MySQL Database.</p>
                        <h5 align="left">URL:</h5>
                        <p align="left"><a href="http://www.medsmonit.com" target="_blank">www.medsmonit.com</a></p>
                        <h5 align="left">Technologies- Mobile App  iOS(iPad):
                        </h5>
                        <p class="text-muted" align="justify">XIB (nib file) Front End, Xcode IDE, Objective C with cocoa touch framework.</p>
                        <h5 align="left">ios-URL:</h5>
                        <p align="left"><a href="https://itunes.apple.com/us/app/medication-monitor/id579288966?ls=1&mt=8" target="_blank">https://itunes.apple.com/us/app/medication-monitor/id579288966?ls=1&mt=8</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Electronics Healthcare Records</h2>
                        <p class="text-muted" align="justify">Our electronics Healthcare Records (EHR) is software as a service (SaaS) portal.  Presently our Electronics Healthcare Records software focuses only the Chiropractic specialty. Our software is allows the doctor to move from a paper-based office to a digital system. Converting to our EHR system cuts down on the cost of paper folders and storage space and eliminates the need for staff to constantly retrieve and replace patient folders. Our EHR system allows the medical practitioner to focus on more important office duties. Our system is capable of producing automated reports, Electronic Data Transfer, and Enhanced online Patient Scheduling. Our signature Patient billing software alone can save thousands of dollars per year in billing and collection fees.</p>
                        <br>
                        <img class="img-responsive img-centered" src="img/portfolio/ehr.jpg" alt="Electronics Healthcare Records">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Java/J2EE, Spring MVC, Spring Annotations, Apache Tomcat Server, MySQL Database.</p>
                        <h5 align="left">url:</h5>
                        <p align="justify"><a href="http://www.chirovirtualoffice.com" target="_blank">www.chirovirtualoffice.com</a></p>
                        <h5 align="left">Technologies- Mobile App iOS(iPad):</h5>
                        <p class="text-muted" align="justify">XIB (nib file) Front End, Xcode IDE, Objective C with cocoa touch framework.</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"> back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Quality Management System</h2>
                        <p class="text-muted" align="justify">A quality management system (QMS) is a collection of business processes focused on achieving your quality policy and quality objectives  i.e. what your customer wants and needs. It is expressed as the organizational structure, policies, procedures, processes and resources needed to implement quality management.
                        </p>
                        <img class="img-responsive img-centered" src="img/portfolio/qms.jpg" alt="quality management system">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Java/J2EE, Spring MVC, Spring Annotations, Apache Tomcat Server, MySQL Database, JSP.</p>
                        <h5 align="left">url:</h5>
                        <p align="justify"><a href="http://www.qms.services" target="_blank">www.qms.services</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Learn Guild </h2>
                        <p class="text-muted" align="justify">LearnGuild creates customized LMS solutions for Schools, Colleges and Corporate around the globe. This has revolutionized the learning process far beyond the four walls of the classroom or training centre and into the world of online education. Learners can access courses wherever there is an internet connection via computers, laptops, tablets or mobiles.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/learguild.jpg" alt="learn guild">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Java/J2EE,  Ruby on Rails,  AWS Cloud,  JSF,  Velocity,  Spring,  Hibernate, Apache Tomcat, MySQL.</p>
                        <h5 align="left">URL:</h5>
                        <p align="left"><a href="http://www.learnguild.com" target="_blank">www.learnguild.com</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Cyber Health</h2>
                        <p class="text-muted" align="justify">
                            This is an online weight management and diabetes prevention program. Our online weight management and diabetes prevention is a collection of digital assets and tools that facilitate online delivery and administration of the intensive lifestyle intervention. External system also will be embedded with the online diabetes prevention program. (ie. WiFi Body Scale).
                            <br/><br/>
                            These tools will help with self-monitoring and self-management by using underlying principles from psychology and persuasive technology. In addition to behavior modification, the success of the diabetes prevention depends in part on the strong bond between the health care provider and the patient, which is developed through ongoing in-person interactions.
                        </p>
                        <img class="img-responsive img-centered" src="img/portfolio/cyber.jpg" alt="act on">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Angular JS, jQuery, HTML 5, CSS 3.
                        </p>
                        <h5 align="left">URL:</h5>
                        <p align="justify"><a href="http://www.cyberhealths.com" target="_blank">http://www.cyberhealths.com</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Adherence to Medication </h2>
                        <p class="text-muted" align="justify">Each year hundreds of thousands of women are diagnosed with breast cancer. Though the incidence rates have been declining over the last several years, mortality rates have remained fairly stable according to many researchers. For these patients, hormonal therapy shown to have improved survival rate when combined with surgery, radiation, therapy and/or chemotherapy etc., However, many patients do not take the prescribed drugs regularly and discontinue after a while. Discontinuation, and non-adherence behaviors among women with breast cancer is a substantial problem and is directly linked to poor survival. Improving adherence to medical regimens has been the focus of many behavioral researchers and clinicians. Deemsys Inc. has developed a tailored intervention program in collaboration with a group of researchers using 2 way communication via text messaging to increase initiation, decrease discontinuation, and improve adherence to AHT among women with breast cancer. This program is currently used only by selective researchers. Please contact us to use our application.
                        </p>
                        <img class="img-responsive img-centered" src="img/portfolio/adherence.jpg" alt="adherence to medication">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Java/J2EE, Spring MVC, Spring Annotations, Apache Tomcat Server, MySQL Database.
                        </p>
                        <h5 align="left">URL:</h5>
                        <p align="left"><a href="http://www.bcresearch.net" target="_blank">www.bcreasearch.net</a></p>
                        <h5 align="left">Technologies- Mobile App,iOS(iPad):</h5>
                        <p class="text-muted" align="justify">XIB (nib file) Front End, Xcode IDE, Objective C with cocoa touch framework.
                        </p>
                        <h5 align="left">android-url:</h5>
                        <p align="justify"><a href="https://play.google.com/store/apps/details?id=com.deemsysinc.sms" target="_blank">https://play.google.com/store/apps/details?id=com.deemsysinc.sms</a></p>
                        <h5 align="left">ios-url:</h5>
                        <p align="justify"><a href="https://itunes.apple.com/us/app/adherence-project/id865487268?ls=1&mt=8" target="_blank">https://itunes.apple.com/us/app/adherence-project/id865487268?ls=1&mt=8</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 9 -->
<div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>HD Live Wallpaper  </h2>
                        <p class="text-muted" align="justify">Set of Creative wallpapers.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/hd.jpg" alt="hd wallpaper">
                        <h5 align="left">Technologies-Mobile App:</h5>
                        <ul>
                            <li align="left" class="text-muted">Adobe Photoshop CS</li>
                            <li align="left" class="text-muted">Xcode IDE, Front end- storyboard, back end- objective C class file, Cocoa touch => iOS</li>
                            <li align="left" class="text-muted">Eclipse IDE, XML file, Java, Graphics Framework, motionevent => Android</li>
                            <li align="left" class="text-muted">Visual Studio Express 2012, Windows phone SDK 8.0, Front End- XAML, Back End- C# =>   Windows</li>
                        </ul>
                        <h5 align="left">Target Device:(iPad):</h5>
                        <p class="text-muted" align="justify">iOS, Android, Windows Phone, LG
                            .
                        </p>
                        <h5 align="left">android-url:</h5>
                        <p align="justify"><a href="https://play.google.com/store/search?q=srashtaa&c=apps" target="_blank">https://play.google.com/store/search?q=srashtaa&c=apps</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 10 -->
<div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>3D/ Live Wallpaper App for Android</h2>
                        <ul>
                            <li align="left" class="text-muted">The application works as a wallpaper  providing the background image for the home screen but also works as a conventional application since it can provide user-interaction with the touch screen.
                            </li>
                            <li align="left" class="text-muted">It is usually the background for the 'home' or 'idle' screen and we have come up with both 3D/ Live wallpaper and HD wallpapers.
                            </li>
                            <li align="left" class="text-muted">3D/ Live Wallpaper has a settings option where the user can control some features in it according to the user preference.
                            </li>
                        </ul>
                        <img class="img-responsive img-centered" src="img/portfolio/live.jpg" alt="live wallpaper">
                        <h5 align="left">Technologies-Mobile App:</h5>
                        <ul>
                            <li align="left" class="text-muted">XML file, Eclipse IDE, Java, Graphics Framework, MotionEvent.</li>
                            <li align="left" class="text-muted">Adobe Photoshop CS.</li>
                        </ul>
                        <h5 align="left">Technologies- Mobile App,iOS(iPad):</h5>
                        <p class="text-muted" align="justify">Mobile Website.
                        </p>
                        <h5 align="left">android-url:</h5>
                        <p align="justify"><a href="https://play.google.com/store/search?q=srashtaa&c=apps" target="_blank">https://play.google.com/store/search?q=srashtaa&c=apps</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal11 -->
<div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Education Monitor </h2>
                        <p class="text-muted" align="justify">It is published every monthly online and appears  as a supplement on higher education for the college magazines and students, health care, fitness, editorials.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/edu_monitor.jpg" alt="">
                        <h5 align="left">Technologies-web:</h5>
                        <p class="text-muted" align="justify">Adobe photoshop, PDF content writer.</p>
                        <h5 align="left">url:</h5>
                        <p align="justify"><a href="http://www.educationmonitor.com/" target="_blank">www.educationmonitor.com</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 12 -->
<div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>GPS Marketing Website </h2>
                        <p class="text-muted" align="justify">GPS Marketing Website is manily developed for our promoting purpose, this site will provide you all the feature available in our product, If you looking for more information about GPS product make use of this marketing site.</p>
                        <img class="img-responsive img-centered" src="img/portfolio/gps.jpg" alt="">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Apache Server, php5, MySql, jQuery.
                        </p>
                        <h5 align="left">url:</h5>
                        <p align="justify"><a href="http://www.deemgpstracker.com" target="_blank">www.deemgpstracker.com</a></p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Injury Referral Center</h2>
                        <p class="text-muted">It is a product website developed for indoor-outdoor multipurpose sealant. </p>
                        <img class="img-responsive img-centered" src="img/portfolio/injury.jpg" alt="">
                        <h5 align="left">Technologies - Web:</h5>
                        <p class="text-muted" align="justify">Java / J2EE, Spring MVC, Apache Tomcat Server, MySQL, Angular JS.
                        </p>
                        <h5 align="left">URL:</h5>
                        <p align="left">Under developement</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script type="text/javascript" src="js/page-top.js"></script>
   
<!-- Contact Form JavaScript -->
<!--<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<script type="text/javascript">
    $(function() {
        $("#fname").on("keypress", function(e) {
            if (e.which === 32 && !this.value.length)
                e.preventDefault();
        });
    });
    $(function() {
        $("#lname").on("keypress", function(e) {
            if (e.which === 32 && !this.value.length)
                e.preventDefault();
        });
    });
    $(function() {
        $("#email").on("keypress", function(e) {
            if (e.which === 32)
                e.preventDefault();
        });
    });
    $(function() {
        $("#message").on("keypress", function(e) {
            if (e.which === 32 && !this.value.length)
                e.preventDefault();
        });
    });
    $(function() {
        $("#address").on("keypress", function(e) {
            if (e.which === 32 && !this.value.length)
                e.preventDefault();
        });
    });
</script>

<script type="text/javascript">
    function onlyemail(e, t) {

        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode == 46) || (charCode == 95) || (charCode == 38) || (charCode > 96 && charCode < 123) || (charCode == 64) || (charCode > 47 && charCode < 58) || (charCode == 9) || (charCode == 0) || (charCode == 8))
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }

    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32) || (charCode == 8) || (charCode == 9))
                return true;
            else
                return false;
        } catch (err) {
            alert(err.Description);
        }
    }
</script>

<?php
unset($_SESSION['thanks']);
?>

</body>

</html>
