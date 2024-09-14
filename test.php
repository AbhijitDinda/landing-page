<?php
include 'config/base.php';
if (isset($_SESSION['mobile_verify'])) {
    unset($_SESSION['mobile_verify']);
}

// $_SESSION['enquiry_data_submit'] = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?= HOME ?>/images/Favicon logo.png">
    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/d0ab50ccf9.js" crossorigin="anonymous"></script>
    <title>ePost Graduate Diploma in Advanced Business Analytics by IIM Ahmedabad</title>
    <meta name="title" content="ePost Graduate Diploma in Advanced Business Analytics | IIM Ahmedabad">
    <meta name="description" content="Enhance your career with IIM Ahmedabad's ePost Graduate Diploma in Advanced Business Analytics. This 16-month programme offers a blend of online and on-campus learning, equipping professionals with the skills to leverage data for impactful decision-making.">
    <meta name="keywords" content="ePost Graduate Diploma Advanced Business Analytics, IIM Ahmedabad Advanced Business Analytics, Advanced business analytics IIM Ahmedabad, IIM Ahmedabad ePGD-ABA
    , Online and on-campus analytics diploma, IIM data analytics diploma">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="<?= HOME ?>/css/glider.min.css">
    <link rel="stylesheet" href="<?= HOME ?>/css/style.css?ver=<?= time() ?>">
    <!-- <link rel="stylesheet" href="<?= HOME ?>/css/progrsss-bar.css?ver=<? //= time() 
                                                                            ?>"> -->
    <link rel="stylesheet" href="<?= HOME ?>/css/responsive.css?ver=1.2">


</head>

<body>
    <div class="float-top-arrow">
        <!-- <i class="fa-solid fa-chevron-up"></i> -->
        <i class="fa-solid fa-angle-up"></i>
    </div>

    <header>
        <div class="header-content">
            <img src="<?= HOME ?>/images/IIM A top Logo.png" loading="lazy" alt="IIM–Visakhapatnam" class="logo">
            <!-- <img src="<?= HOME ?>/images/jaroeducation.png" alt="text" class="text-img"> -->
        </div>
    </header>
    <div class="top-strip">
        <div class="top-strip-wrapper">
            <div class="top-icon-text">
                <img src="<?= HOME ?>/images/top-strip-icon-1.png" alt="icon">
                <div class="text-area">
                    <span class="heading-text">Duration</span>
                    <span class="small-text">16 Months</span>
                </div>
            </div>
            <div class="top-icon-text">
                <img src="<?= HOME ?>/images/top-strip-icon-2.png" alt="icon">
                <div class="text-area">
                    <span class="heading-text">Programme Fees</span>
                    <span class="small-text">INR 12,00,000/- <span style="font-size: 1.0rem">+ GST</span></span>
                </div>
            </div>
            <div class="top-icon-text">
                <img src="<?= HOME ?>/images/top-strip-icon-3.png" alt="icon">
                <div class="text-area">
                    <span class="heading-text">Eligibility</span>
                    <span class="small-text">Any Graduate with Min. 2 Years of Experience</span>
                </div>
            </div>
            <div class="top-icon-text">
                <a href="#main-form" class="btn white-btn">Apply Now</a>
            </div>
        </div>
    </div>
    <section class="banner-section">
        <div class="wrapper">
            <div class="child-1">
                <h1 class="hero-text">ePost Graduate Diploma in Advanced Business Analytics<br>
                    <span> - IIM Ahmedabad</span>
                </h1>
                <h4 class="batch_number">Academic Year - 2025-26</h4>
            </div>
            <div class="child-2" id="main-form">
                <div class="form-wrapper" id="main-form-wrapper" style="display: block;">
                    <div class="loader-wrapper">
                        <div class="loader"></div>
                    </div>
                    <h3 class="heading">Apply Now</h3>
                    <!-- <p class="sub-heading">Submit your details below to learn more about the course fee, curriculum, benefits, etc</p> -->
                    <?php if (isset($_SESSION['message_type'])) : ?>
                        <?= displayResponseMessage(); ?>
                    <?php endif; ?>
                    <form id="main-form-body">
                        <?= csrf(); ?>
                        <div class="form-message"></div>
                        <div class="same-row">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" onkeypress="return alphaOnly(event)" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control" onkeypress="return alphaOnly(event)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone" placeholder="Mobile Number" class="form-control" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        </div>
                        <div class="same-row">
                            <div class="form-group">
                                <select name="work-experience" id="work-experience" class="form-control" required>
                                    <option value="">Select Your Work Exp.</option>
                                    <option value="Min. 2 Years of Experience">Min. 2 Years of Experience</option>
                                    <option value="3 - 5 Years">3 - 5 Years</option>
                                    <option value="10+ Years">10+ Years</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="location" id="location" placeholder="Location (City)" class="form-control" required>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <select name="message" id="message" class="form-control" required>
                                <option class="service-small" value="">Select Message</option>
                                <option class="service-small" value="a. I would like to know more about the course">a. I would like to know more about the course</option>
                                <option class="service-small" value="b. I am interested in the course, please call me.">b. I am interested in the course, please call me.</option>
                                <option class="service-small" value="c. I want more information about the course">c. I want more information about the course</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alt-phone" id="alt-phone" placeholder="Alternate Phone Number" class="form-control" onkeypress="return isNumberKey(event)">
                        </div> -->

                        <div class="form-group d-flex check-box-row">
                            <input type="checkbox" name="graduate" id="graduate" value="yes">
                            <label class="ml-2" for="graduate">I am a graduate with min. 50% marks and 2 Years Work Experience*</label>
                        </div>

                        <div class="form-group d-flex check-box-row">
                            <input type="checkbox" name="terms" id="terms" value="yes" required checked>
                            <label class="ml-2" for="graduate">I agree to the <a href="https://www.jaroeducation.com/terms-of-use/">Terms and Conditions</a> of this website.</label>
                        </div>

                        <input type="hidden" name="university" value="IIM Ahmedabad">
                        <input type="hidden" name="program" value="Financial Reporting and Corporate Governance">

                        <input type="hidden" name="utm_source" value="<?php if (isset($_GET['utm_source'])) {
                                                                            print $_GET['utm_source'];
                                                                        } else {
                                                                            if (isset($_GET['fbclid'])) {
                                                                                print 'Facebook';
                                                                            } else if (isset($_GET['gclid'])) {
                                                                                print 'Google';
                                                                            } else {
                                                                                print 'Website';
                                                                            }
                                                                        } ?>">

                        <input type="hidden" name="utm_medium" value="<?php if (isset($_GET['utm_medium'])) {
                                                                            print $_GET['utm_medium'];
                                                                        } ?>">

                        <input type="hidden" name="utm_content" value="<?php if (isset($_GET['utm_content'])) {
                                                                            print $_GET['utm_content'];
                                                                        } ?>">

                        <input type="hidden" name="utm_campaign" value="<?php if (isset($_GET['utm_campaign'])) {
                                                                            print $_GET['utm_campaign'];
                                                                        } ?>">

                        <input type="hidden" name="utm_keyword" value="<?php if (isset($_GET['utm_keyword'])) {
                                                                            print $_GET['utm_keyword'];
                                                                        } ?>">

                        <input type="hidden" name="utm_term" value="<?php if (isset($_GET['utm_term'])) {
                                                                        print $_GET['utm_term'];
                                                                    } ?>">

                        <input type="hidden" name="utm_adgroup" value="<?php if (isset($_GET['utm_adgroup'])) {
                                                                            print $_GET['utm_adgroup'];
                                                                        } ?>">

                        <input type="hidden" name="gclid" value="<?php if (isset($_GET['gclid'])) {
                                                                        print $_GET['gclid'];
                                                                    } ?>">

                        <input type="hidden" name="page_url" value="<?= curPageURL(); ?>">

                        <button type="submit" class="btn main-form-submit">Submit</button>
                    </form>
                </div>
                <div class="form-wrapper" id="otp-form-wrapper" style="display: none;">
                    <div class="loader-wrapper-otp">
                        <div class="loader"></div>
                    </div>
                    <h3 class="heading">OTP Verification</h3>
                    <p class="sub-heading">You Are a Step Closer to Get The Program Details</p>
                    <?php if (isset($_SESSION['message_type'])) : ?>
                        <?= displayResponseMessage(); ?>
                    <?php endif; ?>
                    <form>
                        <div class="form-message-otp-error"></div>
                        <div class="form-group" style="margin-top: 50px; margin-bottom: 50px;">
                            <input type="text" name="otp" id="otp" placeholder="OTP" class="form-control" onkeypress="return isNumberKey(event)">
                            <div class="form-message-otp"></div>
                        </div>
                        <button type="submit" class="btn verify-otp-submit" style="margin: auto; width: max-content; display: block;">Verify OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="stcicky_area">
        <div class="sticky_section">
            <div class="batch_duration">
                <p class="label_heading">Duration</p>
                <p class="label_sub_heading small">16 Months </small></p>
            </div>

            <div class="batch_duration">
                <p class="label_heading">Round -1</p>
                <p class="label_sub_heading small">Application Deadline - September 30, 2024</p>
            </div>

            <div class="batch_critarya">
                <p class="label_heading">#1 Rank</p>
                <p class="label_sub_heading small"> - NIRF India Rankings 2024</p>
            </div>

            <div class="batch_critarya">
                <p class="label_heading">Mode</p>
                <p class="label_sub_heading small">Blended Learning (Live Online + Campus Immersion)</p>
            </div>

            <div class="batch_duration content-center">
                <p class="label_heading">
                    <img src="<?= HOME ?>/images/equis-live.png" alt="amba" style="max-width: 100px;">
                </p>
            </div>


            <!-- <div class="batch_duration">
                <p class="label_heading">Mode</p>
                <p class="label_sub_heading small">Blended Learning</p>
            </div> -->
            <!-- <div class="batch_duration">
                <p class="label_heading">Download Brochure:</p>
                <p class="label_sub_heading"><a href="#"></a></p>
            </div> -->
        </div>
        <!-- <div class="navigation-buttons">
            <div class="nav-links">
                <a href="#overview">Overview</a>
            </div>
            <div class="nav-links">
                <a href="#syllabus">Syllabus</a>
            </div>
            <div class="nav-links">
                <a href="#fees">Fees</a>
            </div>
            <div class="nav-links">
                <a href="#eligibility">Eligibility</a>
            </div>
            <div class="mobile-right-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div> -->
    </div>
    <article class="article-1">
        <div class="wrapper">
            <section id="overview">
                <h2 class="section-heading">Programme Overview </h2>
                <p class="section-description">With the rise in data analytics in management, there's an acute demand for skilled professionals who can deliver actionable solutions. Set a new benchmark of excellence with IIM Ahmedabad's ePGD-ABA programme, designed to equip professionals with the skills to leverage data for impactful decision-making. The 16-month diploma programme blends online and on-campus sessions, offering a dynamic mix of tools, techniques, and domain-specific applications in marketing, HR, finance, operations, and public policy. Participants gain hands-on experience in data visualization, modeling, machine learning, and cloud computing. Designed for working professionals, the programme's flexible schedule and expert-led curriculum ensure participants can seamlessly integrate learning into their careers. Join the prestigious IIMA alumni network, positioning for leadership roles in their organizations.</p>
                <br>
                <div class="overview-tabs">
                    <div class="tab-btns">
                        <div class="tab-btn current" data-id="over-tab-1">Programme Highlights</div>
                        <div class="tab-btn" data-id="over-tab-2">Learning Outcomes</div>
                        <div class="tab-btn" data-id="over-tab-3">Pedagogical Methodology</div>
                    </div>
                    <div class="work-tab-conten tab-content-wrapper">
                        <div class="tab-content current" id="over-tab-1">
                            <div class="icon_text_grid">

                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-1">
                                        <img src="<?= HOME ?>/images/Certificate of Participation from IIMA.png" alt="Certificate of Participation from IIMA" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Highly recognized PG Diploma Programme</p>
                                </div>

                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-2">
                                        <img src="<?= HOME ?>/images/IIMA Alumni Status.png" alt="IIMA alumni status" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">IIMA alumni status</p>
                                </div>
                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-3">
                                        <img src="<?= HOME ?>/images/4 Days In-Campus Immersion at IIMA.png" alt="5-6 on-campus immersion modules " loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">5-6 on-campus immersion modules </p>
                                </div>

                            </div>
                            <div class="icon_text_grid">

                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-1">
                                        <img src="<?= HOME ?>/images/Pedagogy-based-on-case-study-and-projects.png" alt="Certificate of Participation from IIMA" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Case-based pedagogy by IIMA faculty</p>
                                </div>

                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-2">
                                        <img src="<?= HOME ?>/images/Guest Lectures.png" alt="IIMA alumni status" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Guest speaker sessions on analytics</p>
                                </div>
                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-3">
                                        <img src="<?= HOME ?>/images/Peer-learning & networking opportunities with industry experts.png" alt="5-6 on-campus immersion modules " loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Networking with peers and experts</p>
                                </div>

                            </div>
                            <div class="icon_text_grid grid-2">
                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-1">
                                        <img src="<?= HOME ?>/images/Domain-specific elective choices.png" alt="Campus Immersion" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Domain-specific elective choices</p>
                                </div>
                                <div class="icon_text_wrapper">
                                    <div class="icon-background-circle circle-color-3">
                                        <img src="<?= HOME ?>/images/Hands-on Experience.png" alt="Campus Immersion" loading="lazy">
                                    </div>
                                    <p class="text-center icon_text">Hands-on experience in analytical tools</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="over-tab-2">
                            <div class="icons-grid">
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Gain exposure to in-demand tools like R and Python through hands-on experience.png" alt="Gain exposure to in-demand tools like R and Python through hands-on experience.">
                                    <span class="text-for-icon">Gain exposure to in-demand tools like R and Python through hands-on experience.</span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Dive into the future of business analytics with cutting-edge Machine Learning techniques.png" alt="Dive into the future of business analytics with cutting-edge Machine Learning techniques.">
                                    <span class="text-for-icon">Dive into the future of business analytics with cutting-edge Machine Learning techniques.</span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Advance your prowess in Big Data Visualization, Predictive Modelling, and Data Forecasting.png" alt="Advance your prowess in Big Data Visualization, Predictive Modelling, and Data Forecasting.">
                                    <span class="text-for-icon">Advance your prowess in Big Data Visualization, Predictive Modelling, and Data Forecasting.</span>
                                </div>
                                <br>
                            </div>
                            <div class="icons-grid grid-2">
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Apply analytics across key domains such as Marketing, Finance, Operations, and HR.png" alt="Apply analytics across key domains such as Marketing, Finance, Operations, and HR.">
                                    <span class="text-for-icon">Apply analytics across key domains such as Marketing, Finance, Operations, and HR.</span>
                                </div>

                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Solve real-world case studies and complete a project tailored to your expertise for practical insights.png" alt="Solve real-world case studies and complete a project tailored to your expertise for practical insights.">
                                    <span class="text-for-icon">Solve real-world case studies and complete a project tailored to your expertise for practical insights.</span>
                                </div>


                            </div>
                        </div>

                        <div class="tab-content" id="over-tab-3">
                            <div class="icons-grid">
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Concepts and analytics practices during sessions.png" alt="Lectures">
                                    <span class="text-for-icon">Concepts and analytics practices during sessions
                                    </span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Business cases for data-driven decisions.png" alt="Group Exercises">
                                    <span class="text-for-icon">Business cases for data-driven decisions</span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Hands-on data handling.png" alt="Group Projects">
                                    <span class="text-for-icon">Hands-on data handling

                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="icons-grid">

                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Data-driven simulations.png" alt="Group Projects">
                                    <span class="text-for-icon">Data-driven simulations

                                    </span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Model development.png" alt="Group Projects">
                                    <span class="text-for-icon">Model development experiences

                                    </span>
                                </div>
                                <div class="icon-text">
                                    <img style="opacity: 0;" src="<?= HOME ?>/images/Problem Solving and Algorithmic Thinking.png" alt="Case Based Discussions">
                                    <span class="text-for-icon">Solving problems across business domains</span>
                                </div>
                            </div>
                            <br>
                            <div class="icons-grid grid-2">
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Rigorous capstone project execution.png" alt="Case Based Discussions">
                                    <span class="text-for-icon">Rigorous capstone project execution</span>
                                </div>
                                <div class="icon-text">
                                    <img src="<?= HOME ?>/images/Effective communication of data insights.png" alt="Case Based Discussions">
                                    <span class="text-for-icon">Effective communication of data insights</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        <a href="#main-form" class="btn download-btn btn-plr-20 mb-30">Learn More</a>
        </section>

        <section id="testimonials">
            <h2 class="section-heading">Hear from our Alumni </h2>
            <div class="testimonial-grid">

                <div class="testimonial glider-slide" style="padding-top: 20px; border-radius: 20px;">
                    <div class="testimonail-image">
                        <!-- <img src="<?= HOME ?>/images/Jamshi-K-J.jpg" alt="Jamshi.K.J"> -->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/q74pmaIroJM?si=pZrOjt9WkOK1ogoh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- <p class="testimonail-name">Amrito Bhattacharya</p>
                        <p class="testimonail-designation">Senior Manager</p>
                        <p class="testimonail-body">Risk and Control - HSBC Bank, Hong Kong</p> -->
                </div>

                <div class="testimonial glider-slide" style="padding-top: 20px; border-radius: 20px;">
                    <div class="testimonail-image">
                        <!-- <img src="<?= HOME ?>/images/Jamshi-K-J.jpg" alt="Jamshi.K.J"> -->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/aOUlw3Ph9sQ?si=tsZXK0LEpPdswbnd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <!-- <p class="testimonail-name">Amrito Bhattacharya</p>
                        <p class="testimonail-designation">Senior Manager</p>
                        <p class="testimonail-body">Risk and Control - HSBC Bank, Hong Kong</p> -->
                </div>


            </div>
            <button class="testimonial-grid-prev glider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="testimonial-grid-next glider-next"><i class="fa-solid fa-angle-right"></i></button>
        </section>


        <!-- <section id="working-with">
                <h2 class="section-heading">Previous Cohort of Stellar Professionals</h2>
                <div class="work-tabs">
                    <div class="tab-btns">
                        <div class="tab-btn current" data-id="work-tab-1"> Years of Experience </div>
                        <div class="tab-btn" data-id="work-tab-3">Industry Representation</div>
                        <div class="tab-btn" data-id="work-tab-2">Companies</div>
                    </div>
                    <div class="work-tab-conten tab-content-wrapper">
                        <div class="tab-content current" id="work-tab-1">
                            <div class="charts-content">
                                <img src="<?= HOME ?>/images/(IIMA) EPBF Work Experience.jpg" alt="image" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                        <div class="tab-content" id="work-tab-2">
                            <div class="charts-content">
                                <img src="<?= HOME ?>/images/(IIMA) EPBF Profile and companies.jpg" alt="image" class="img-fluid" loading="lazy">
                                <br>
                                <p><small>Note: All products and company names are trademarks or registered trademarks of their respective holders. Use of them does not imply any affiliation with or endorsement by them.</small></p>
                            </div>
                        </div>
                        <div class="tab-content" id="work-tab-3">
                            <div class="charts-content">
                                <img src="<?= HOME ?>/images/(IIMA) EPBF Industry Representation.jpg" alt="image" class="img-fluid" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- <section id="certificate">
                <h2 class="section-heading">
                    IIMA Alumni Status
                </h2>
                <div class="charts-grid">
                    <div class="col-1 mob-text-center">
                        <ul>
                            <li>IIMA Alumni Association participants who are attending short-duration Executive Education for the first time, on or after April 1 2023, will have to attend a total of 21 days in one or more programmes in order to be eligible for alumni identity card, both of which will be awarded on the payment if a one-time alumni fee of INR 10,000/- + GST.</li>
                        </ul>
                    </div>
                </div>

            </section> -->


        <!-- <section id="certificate">
                <h2 class="section-heading">
                    Library Access
                </h2>
                <div class="charts-grid">
                    <div class="col-1 mob-text-center">
                        <ul>
                            <li>Restricted remote access to the library resources will be provided for the programme duration.</li>
                        </ul>
                    </div>
                </div>

            </section> -->


        <section id="program-content">
            <h2 class="section-heading">Programme Curriculum</h2>
            <br>
            <h4 class="accordian-tab" data-id="tab-1">Module I: Pre-Term
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-1">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Basic Linear Algebra</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Basic Statistics and Probability</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Introduction to Python</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Introduction to R</div>
                    </div>
                </div>
                <br>
            </div>

            <h4 class="accordian-tab" data-id="tab-2">Module II: Data: Management, Exploration and Analysis
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-2">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Big Data Management</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Business Analytics in the Real World, Problems and Data</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Data Visualization for Analysis and Communication</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Probability and Statistics using R and Python</div>
                    </div>
                </div>
                <br>
            </div>

            <h4 class="accordian-tab" data-id="tab-3">Module III: Data Analysis: Methods and Models
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-3">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Applied Causality and Experiments for Business</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Bayesian Analysis</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Big Data Analytics: Analysis of Text and Social Media Data</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Business Simulation</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Categorical Data Analysis</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Machine Learning with Big Data</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Model Thinking</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Network Analysis</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Nonlinear Optimization</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Optimization Problems in Business</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Panel Data Analysis</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Regression Analysis</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Time Series Analysis</div>
                    </div>
                </div>
                <br>
            </div>

            <h4 class="accordian-tab" data-id="tab-4">Module IV: Analytics: Communication, Ethics and Organizational Value
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-4">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Analytics Communication</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Ethics, Privacy and Data Security</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Organizational Sciences: Driving Organizational Value with Analytics</div>
                    </div>
                </div>
                <br>
            </div>

            <h4 class="accordian-tab" data-id="tab-5">Module V: Analytics in Business and Management (Electives)
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-5">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Finance Analytics</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Marketing Analytics</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Operations Analytics</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">People Analytics</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Public Policy Analytics</div>
                    </div>
                    <div class="program-content-tab">
                        <div class="program-tab-title">Strategy Analytics</div>
                    </div>
                </div>
                <br>
            </div>

            <h4 class="accordian-tab" data-id="tab-6">Module VI: Capstone Project
                <div>
                    <i class="fa-solid fa-plus plus-icon"></i>
                    <i class="fa-solid fa-minus minus-icon"></i>
                </div>
            </h4>
            <br>
            <div class="accordian-content" data-content="tab-6">
                <div class="program-content-tabs">
                    <div class="program-content-tab">
                        <div class="program-tab-title">Capstone Project</div>
                    </div>
                </div>
                <br>
            </div>


            <br>
            <p><small>Note: The above list of modules is subject to change as per IIMA’s discretion. </small></p>
            <div class="mt-100">
                <?php if (isset($_SESSION['enquiry_data_submit'])) : ?>
                    <?php if (!$_SESSION['enquiry_data_submit']) : ?>
                        <a href="javascript:void(0)" class="btn download-btn brocher-download blue-btn btn-plr-20">Download Brochure</a>
                    <?php else : ?>
                        <a href="<?= HOME ?>/upload/ePGD-ABA Brochure - Round 1.pdf" download class="btn download-btn blue-btn btn-plr-20">Download Brochure</a>
                        <!-- <a href="javascipt:void(0)" class="btn download-btn blue-btn btn-plr-20">Download Brochure</a> -->
                    <?php endif; ?>
                <?php else : ?>
                    <a href="javascript:void(0)" class="btn download-btn brocher-download blue-btn btn-plr-20">Download Brochure</a>
                <?php endif; ?>
            </div>
        </section>


        <section id="working-with">
            <h2 class="section-heading">Delve into the Libraries of Latest Tools and Techniques: </h2>
            <br>

            <div class="tools-wrap">
                <div class="images"><img src="<?= HOME ?>/images/R-Programming.jpg" alt="Network18 logo" loading="lazy"></div>
                <div class="images"><img src="<?= HOME ?>/images/Python-Programming.jpg" alt="Tech Mahindra" loading="lazy"></div>
                <div class="images"><img src="<?= HOME ?>/images/Machine-Learning.jpg" alt="Dell_Logo" loading="lazy"></div>
                <div class="images"><img src="<?= HOME ?>/images/Big-Data.jpg" alt="IBM" loading="lazy"></div>
                <div class="images"><img src="<?= HOME ?>/images/Data-Visualization.jpg" alt="TATA Consultancy Services" loading="lazy"></div>

            </div>

        </section>











        <section id="fees">
            <h2 class="section-heading">Admission Fee & Financing</h2>
            <div class="no-cost-emi-sec">
                <h3 class="inside-sec-heading">Easy EMI Options Available </h3>
                <p class="description">Pay in easy monthly instalments with our EMI options. No more worrying about finances; start your learning journey today!</p>
                <!-- <p class="description" style="font-weight: 700;"></p> -->
                <div class="icon-row-btn">
                    <div class="icon-row-btn">
                        <img src="<?= HOME ?>/images/Grayquest.png" width="150" alt="fees-icon" class="fess-icon">
                        <img src="<?= HOME ?>/images/Eduvanz.png" width="150" alt="fees-icon" class="fess-icon">
                        <img src="<?= HOME ?>/images/Liquiloans.png" width="150" alt="fees-icon" class="fess-icon">
                        <!-- <img src="<?= HOME ?>/images/visa-master.png" width="100" alt="fees-icon" class="fess-icon"> -->
                    </div>
                    <!-- <div>
                            <a class="white-btn btn-size fees-btn" href="javascript:void(0)">Starting <br> <small class="text-center">₹8,500/- per month*</small></a>
                        </div> -->
                </div>
            </div>
            <div class="full-payment-sec">
                <h3 class="inside-sec-heading">Complete Payment</h3>
                <p class="description" style="color: #000">Participants can make one-time payment easily using options such as:</p>
                <div class="icon-row-btn">
                    <div>
                        <img src="<?= HOME ?>/images/Internet Banking.png" alt="fees-icon" class="fess-icon">
                        <span class="fess-icon-text">Internet Banking</span>
                    </div>
                    <!-- <div>
                            <img src="<?= HOME ?>/images/Standard EMI.png" alt="fees-icon" class="fess-icon">
                            <span class="fess-icon-text">Standard EMI</span>
                        </div> -->
                    <div>
                        <img src="<?= HOME ?>/images/Credit Debit Card.png" alt="fees-icon" class="fess-icon">
                        <span class="fess-icon-text">Credit/Debit Card</span>
                    </div>
                    <div>
                        <a class="white-btn orange-btn btn-size fees-btn" href="javascript:void(0)">INR 12,00,000/- <small style="font-size: 0.9rem">+GST</small></a>
                    </div>
                </div>


                <li style="color: #000;padding-top: 5px;font-size: 12px;">GST will be charged extra on these components; at present it is @18%.</li>


            </div>
        </section>
        <section id="eligibility">
            <div class="wrapper">
                <h2 class="section-heading">
                    Eligibility
                </h2>
                <div class="eligibility-wrapper">
                    <div class="tab-btns">
                        <div class="tab-btn current" data-id="tab-1">Admission Criteria</div>
                        <!-- <div class="tab-btn" data-id="tab-2">Who Can Attend?</div>
                            <div class="tab-btn" data-id="tab-3">Assessment Methodology</div>
                            <div class="tab-btn" data-id="tab-4">Selection Criteria </div> -->
                    </div>

                    <div class="tab-content-wrapper">
                        <div id="tab-1" class="tab-content current">
                            <ul>
                                <li>Bachelor's degree holders with strong quantitative and analytical problem-solving skills. </li>
                                <li>Minimum of 2 years of work experience (preferably in the domain of business analytics); the experience criterion may be relaxed for candidates with exceptional academic/professional qualifications in a relevant field.
                                </li>
                                <li>A valid test score (GMAT/GRE/CAT/GATE or the ePGDABA) qualifying-cum-aptitude test. </li>
                            </ul>
                            <br>
                            <!-- <p><small>Note: Reservations will be provided to the eligible candidates as per Government of India norms. </small></p> -->
                        </div>

                        <!-- <div id="tab-2" class="tab-content">
                                <ul>
                                    <li>Executives in Junior Level Management </li>
                                    <li>Executives in Mid-Level Management</li>
                                    <li>Entrepreneurs</li>
                                </ul>
                            </div> -->

                        <!-- <div id="tab-3" class="tab-content">
                                <ul>
                                    <li>Participants are assessed on the basis of Online Interaction and attendance criteria fulfilment. </li>
                                    <li>Learners will be awarded a ‘Certificate of Participation’ at the end of the Programme.</li>
                                </ul>
                            </div> -->
                        <!-- <div id="tab-4" class="tab-content">
                                <ul>
                                    <li>Selections will be based on a detailed profile of a candidate in her/his own words elaborating her/his Academic record, Profile, Designation, Salary, Roles, Responsibilities, Job Description, and a write-up on “Expectations from the Programme”.</li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            </div>
        </section>

        <section id="faculty">
            <h2 class="section-heading">Chairperson's Message
            </h2>
            <div class="faculty-grid " style="max-width: 600px; margin-left: auto; margin-right: auto;">

                <div class="faculty glider-slide">
                    <div class="faculty-image">
                        <img src="<?= HOME ?>/images/Prof. Arnab Kumar Laha.jpg" alt="Prof. Sanjay Verma">
                    </div>
                    <p class="faculty-name">Prof. Arnab Kumar Laha</p>
                    <p class="faculty-designation">“We welcome strongly committed, high-caliber, aspiring individuals to be part of this new-age programme and experience a life-changing journey of personal transformation and professional growth with the ePGD-ABA at IIMA.”
                    </p>
                </div>
            </div>

            <br>
            <!-- <p style="padding-left:0.8rem">Note: The above list of faculty is partial.</p> -->
            <button class="faculty-grid-prev glider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="faculty-grid-next glider-next"><i class="fa-solid fa-angle-right"></i></button>

        </section>




        <section id="LearnersSpeak">
            <h2 class="section-heading">Learners Speak
            </h2>
            <div class="LearnersSpeak-grid " style="max-width: 900px; margin-left: auto; margin-right: auto;">


                <div class="LearnersSpeak glider-slide">

                    <div class="LearnersSpeak-image">
                        <img src="<?= HOME ?>/images/Jiten Jain.jpg" alt="Prof. Sanjay Verma">
                    </div>
                    <p class="faculty-name">Jiten Jain</p>
                    <p class="faculty-designation" style="font-weight: 500;">Senior Manager - Consulting Cognizant
                        ePGD-ABA Class of 2021</p>

                    <div class="faculty-designation">
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                    </div>

                    <p class="faculty-designation">“I always knew that this was going to be a rigorous course and it really lived up to the expectation. Even with all external challenges and so much uncertainty, IIMA made sure that the quality of course content, delivery and rigour lives up to IIMA brand. I never felt missing the classroom experience, even though classes were running in D2D (Direct to Devive) mode. This course is an amalgamation of foundational statistics, data analytics techniques and business applications. I really learned ‘WHY’ and ‘HOW’ part of business analytics rather than just knowing ‘WHAT’ technique to apply. This course has all the elements to make a great business professional out of you, who knows how to employ data to make right decisions.”
                    </p>
                </div>
                <div class="LearnersSpeak glider-slide">

                    <div class="LearnersSpeak-image">
                        <img src="<?= HOME ?>/images/Sayantan Chaudhuri.jpg" alt="Prof. Sanjay Verma">
                    </div>
                    <p class="faculty-name">Sayantan Chaudhuri</p>
                    <p class="faculty-designation" style="font-weight: 500;">Data Scientist, UnitedHealth Group Gurgoan
                        ePGD-ABA Class of 2021</p>

                    <div class="faculty-designation">
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                    </div>

                    <p class="faculty-designation">“Like other long-duration academic programmes of IIMA, the ePGD-ABA unequivocally stands out for its rigour, quality, and closely monitored by the in-house faculty of the institute has elevated the quality of the programme to a truly world-class level. In every course, besides hands-on application/implementation, a very strong emphasis was laid on an in-depth understanding of the theoretical/mathematical subtleties underpinning the models & algorithms. This was further supplemented by rich in-class discussion & presentation. In nutshell, the last 16 months for me, had been a transformational academic experience, which I believe, not only will give a strong impetus to my future career progressions but also will shape my contributions in this field.”
                    </p>
                </div>
                <div class="LearnersSpeak glider-slide">

                    <div class="LearnersSpeak-image">
                        <img src="<?= HOME ?>/images/Aiswarya Anand S..jpg" alt="Prof. Sanjay Verma">
                    </div>
                    <p class="faculty-name">Aiswarya Anand S.</p>
                    <p class="faculty-designation" style="font-weight: 500;">Business Analyst, Cisco Systems
                        ePGD-ABA Class of 2021</p>

                    <div class="faculty-designation">
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                    </div>

                    <p class="faculty-designation">“I chose to do the ePGD-ABA programme at that point in my career when I needed to develop the right mind set and skills to be an exceptional Analytics Professionals, and the programme precisely helped me achieve that. The course design makes it much easier to connect the dots as the programme progresses. It has helped me in gradually applying these ideas at work alongside the programme. My biggest takeaway is developing a business problem-solving acumen through courses that discuss analytics use cases under various domains like finance, operations, marketing, strategy, and HR. It gave me the confidence that I can build solutions and products that tackle any real-life business problem.”
                    </p>
                </div>
                <div class="LearnersSpeak glider-slide">

                    <div class="LearnersSpeak-image">
                        <img src="<?= HOME ?>/images/Kanika Gupta.jpg" alt="Prof. Sanjay Verma">
                    </div>
                    <p class="faculty-name">Kanika Gupta</p>
                    <p class="faculty-designation" style="font-weight: 500;">Piping Stress Engineer, McDermott International Inc. ePGD-ABA Class of 2021</p>

                    <div class="faculty-designation">
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                        <span style="color: #f0ad4e; font-size:25px;">&#9733;</span>
                    </div>

                    <p class="faculty-designation">“The ePGD-ABA programme has helped me build a broad perspective. The course content was quite exhaustive, covering all the aspects of business analytics. The programme instructors were superb, and they were very sensitive to the batch’s learning needs, given their diverse backgrounds, The live sessions were very interactive where queries were also answered. The assessments and assignments with midnight deadlines made the journey both challenging and exciting. I consider myself extremely fortunate to have been a part of IIM Ahmedabad’s pioneer batch of the Advanced Business Analytics programme.”
                    </p>
                </div>
            </div>

            <br>
            <!-- <p style="padding-left:0.8rem">Note: The above list of faculty is partial.</p> -->
            <button class="LearnersSpeak-grid-prev glider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="LearnersSpeak-grid-next glider-next"><i class="fa-solid fa-angle-right"></i></button>

        </section>

        <!-- <section id="certificate">
                <h2 class="section-heading">
                    Certification
                </h2>
                <p>At the end of the course, eligible participants will receive a ‘Certificate of Completion’ of the programme from IIM Ahmedabad subject to fulfilment of attaining overall 80% attendance.
                </p>
            </section> -->
        <?php
        /*
            <section id="certificate">
                <h2 class="section-heading">
                    Certification
                </h2>
                <div class="charts-grid">
                    <div class="col-1 mob-text-center">

                        <ul>
                            <li>At the end of the course, eligible participants will receive a ‘Certificate of Participation’ of the programme from IIM Ahmedabad subject to fulfilment of attaining an overall 80% attendance. </li>
                        </ul>
                        <!-- <li>Participants who are unable to clear the evaluation criteria but have requisite attendance will be awarded a 'Participation Certificate.’ </li>
                            <li>“Professional Certificate Programme in Advanced Analytics & Business Intelligence” Certificate will be provided by IIM Kozhikode.</li> -->

                    </div>
                    <div class="col-1">
                        <img style="opacity:0" src="<?= HOME ?>/images/Certificate 1.jpg" alt="Succesfully Completed" class="img-fluid" loading="lazy">
                        <!-- <img src="<?= HOME ?>/images/Participation-Certificate-IIM-K-BI-page-0001-1024x725.jpg" alt="Participation Certificate" class="img-fluid" loading="lazy"> -->
                    </div>
                </div>
                <br>
            </section>
            <!-- <section>
                <h2 class="section-heading">
                    Marketing Partner
                </h2>

                <div class="partner-image" style="width: max-content; margin: 0 auto 20px auto;">
                    <img src="<?= HOME ?>/images/jaroeducation.png" alt="text" class="text-img">
                </div>

                <p class="text-center" style="font-size: 0.75rem">IIM Trichy has empanelled with Jaro Education as its marketing partner for promoting the Post Graduate Certificate Program In Executive General Management.</p>
            </section> -->
            */
        ?>
        <section class="section-imgs full-width desk-pb-6" style="margin-top: 20px;">
            <div class="wrapper">
                <h2 class="text-center section-heading" style="color: #fff">ePost Graduate Diploma in Advanced Business Analytics <br>-IIM Ahmedabad </h2>
                <p class="text-center" style="color: #fff">Lead with data to drive digital transformation by pursuing this diploma programme that blends online flexibility with on-campus learning, offering hands-on experience in data analytics. Learn from IIMA's top faculty and gain the skills to make data-driven decisions. </p>
                <a href="#main-form" class="btn download-btn" style="margin-bottom: 0; border-radius: 20px;">Apply Now</a>
            </div>
        </section>
        </div>
    </article>
    <div class="bottom-strip">
        <div class="bottom-strp-text">
            <!-- <span>Early Bird Discount Ending SOON | Get FLAT 10,000/- OFF</span> -->
            <!-- <div class="progress-circle over50 p66">
                <span>66%</span>
                <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                </div>
            </div> -->
            <a href="javascript:void(0)" class="white-btn request-call">Request a Callback</a>
        </div>
    </div>

    <div class="popup-overlay"></div>

    <div class="custom-popup">
        <div class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="popup-content">
            <iframe src="https://www.youtube.com/embed/zxnbWHvFd3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <div class="form-popup">
        <div class="form-close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <img src="<?= HOME ?>/images/IIM A top Logo-pop.png" alt="popup-logo" class="popup-logo">
        <h3 class="heading">Few Seats Remaining - Apply Now</h3>
        <p class="sub-heading">Submit your details below to learn more about the course fee, curriculum, benefits, etc.</p>
        <div class="response-message-area"></div>
        <form action="" id="popup_form">
            <?= popupCsrf() ?>
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" onkeypress="return alphaOnly(event)" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="form-group">
                <!-- <input type="tel" name="phone" id="phone" placeholder="Mobile Number" class="form-control" onkeypress="return isNumberKey(event)" required> -->
                <div class="mobile-otp-row">
                    <input type="tel" name="phone" id="phone_pop" placeholder="Mobile Number" class="form-control" onkeypress="return isNumberKey(event)" required>
                    <div class="otp-check-btn otp-send-pop">Send OTP</div>
                </div>
                <div class="otp-response-text otp-response-text-pop"></div>
                <div class="mobile-otp-row otp-check-row otp-check-row-pop">
                    <input type="text" name="otp" id="otp_pop" placeholder="OTP" class="form-control" onkeypress="return isNumberKey(event)">
                    <div class="otp-check-btn otp-check-pop">Verify OTP</div>
                </div>
            </div>

            <div class="same-row">
                <div class="form-group">
                    <select name="work-experience" id="work-experience" class="form-control" required>
                        <option value="">Select Your Work Exp.</option>
                        <option value="Min. 2 Years of Experience">Min. 2 Years of Experience</option>
                        <option value="3 - 5 Years">3 - 5 Years</option>
                        <option value="10+ Years">10+ Years</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="location" id="location" placeholder="Location (City)" class="form-control" required>
                </div>
            </div>
            <!-- <div class="form-group">
                            <select name="message" id="message" class="form-control" required>
                                <option class="service-small" value="">Select Message</option>
                                <option class="service-small" value="a. I would like to know more about the course">a. I would like to know more about the course</option>
                                <option class="service-small" value="b. I am interested in the course, please call me.">b. I am interested in the course, please call me.</option>
                                <option class="service-small" value="c. I want more information about the course">c. I want more information about the course</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alt-phone" id="alt-phone" placeholder="Alternate Phone Number" class="form-control" onkeypress="return isNumberKey(event)">
                        </div> -->

            <div class="form-group d-flex check-box-row">
                <input type="checkbox" name="graduate" id="graduate" value="yes">
                <label class="ml-2" for="graduate">I am a graduate with min. 50% marks and 2-3 Years Work Experience*</label>
            </div>


            <div class="form-group d-flex check-box-row">
                <input type="checkbox" name="terms" id="terms" value="yes" required checked>
                <label class="ml-2" for="graduate">By continuing you agree to our <a href="https://www.jaroeducation.com/terms-of-use/">Terms and Conditions</a> and <a href="https://www.jaroeducation.com/terms-of-use/">Privacy Policy</a> and you consent to receive offers and opportunities form Jaro Education by telephone, text message, and email.</label>
            </div>

            <input type="hidden" name="university" id="university" value="IIM Ahmedabad">

            <input type="hidden" name="program" id="program" value="Financial Reporting and Corporate Governance">

            <input type="hidden" name="utm_source" id="utm_source" value="<?php if (isset($_GET['utm_source'])) {
                                                                                print $_GET['utm_source'];
                                                                            } else {
                                                                                if (isset($_GET['fbclid'])) {
                                                                                    print 'Facebook';
                                                                                } else if (isset($_GET['gclid'])) {
                                                                                    print 'Google';
                                                                                } else {
                                                                                    print 'Website';
                                                                                }
                                                                            } ?>">

            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php if (isset($_GET['utm_medium'])) {
                                                                                print $_GET['utm_medium'];
                                                                            } ?>">

            <input type="hidden" name="utm_content" id="utm_content" value="<?php if (isset($_GET['utm_content'])) {
                                                                                print $_GET['utm_content'];
                                                                            } ?>">

            <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php if (isset($_GET['utm_campaign'])) {
                                                                                    print $_GET['utm_campaign'];
                                                                                } ?>">

            <input type="hidden" name="utm_keyword" id="utm_keyword" value="<?php if (isset($_GET['utm_keyword'])) {
                                                                                print $_GET['utm_keyword'];
                                                                            } ?>">

            <input type="hidden" name="utm_term" id="utm_term" value="<?php if (isset($_GET['utm_term'])) {
                                                                            print $_GET['utm_term'];
                                                                        } ?>">

            <input type="hidden" name="utm_adgroup" id="utm_adgroup" value="<?php if (isset($_GET['utm_adgroup'])) {
                                                                                print $_GET['utm_adgroup'];
                                                                            } ?>">

            <input type="hidden" name="gclid" id="gclid" value="<?php if (isset($_GET['gclid'])) {
                                                                    print $_GET['gclid'];
                                                                } ?>">

            <input type="hidden" name="page_url" id="page_url" value="<?= curPageURL(); ?>">

            <button type="submit" class="btn disabled popup-btn" style="margin-top: 20px; margin-left: auto; margin-right: auto; display: block;">Enroll Now</button>
        </form>
    </div>

    <div class="response-message-pop">
        <p></p>
        <div class="response-pop-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>

    <a href="<?= HOME ?>/upload/ePGD-ABA Brochure - Round 1.pdf" download class="pdf-download" style="display: none"></a>
    <!-- <a href="javascript:void(0)" class="pdf-download" style="display: none"></a> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="<?= HOME ?>/js/glider.min.js"></script>
    <script src="<?= HOME ?>/js/app.js?ver=1.2"></script>
    <?php include 'js/page-script.php' ?>

    <script>
        // Disable right-click
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        function ctrlShiftKey(e, keyCode) {
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown = (e) => {
            // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
            if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            )
                return false;
        };
    </script>
</body>

</html>