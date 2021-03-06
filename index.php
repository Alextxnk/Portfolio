<?php
// способы подключение файлов 
    /* require('data.php');
    require_once('data.php'); // можно использовать один раз для одного и того же файла
    include ('data.php');
    include_once ('data.php'); */
    // require отличается от include тем, что когда будет указано неправильное название файла при require будет фатальная ошибка, а при include будет предупреждение, но код все равно отработает 

    /* // для красивого вывода 
    echo "<pre>";
    var_dump(require_once "data.php");
    echo "</pre>"; */

    $data = require_once "data.php";
    $aboutData = $data['about']; // получает ключ about
    $educationData = $data['education']; // получает ключ education
    $languageNativeData = $data['languageNative']; // получает ключ languageNative
    $languageProfessionalData = $data['languageProfessional']; // получает ключ languageProfessional
    $interestsData = $data['interests']; // получает ключ interests
    $aboutCareerData = $data['aboutCareer']; // получает ключ aboutCareer
    $experiencesData = $data['experiences']; // получает ключ experiences
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Responsive Resume</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link
        href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="assets/images/profile.png" alt="" style="width: 180px; height: 180px;" />
                <h1 class="name"><?php echo $aboutData['name']; ?></h1>
                <h3 class="tagline"><?php echo $aboutData['post']; ?></h3>
            </div>
            <!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?php echo $aboutData['email']; ?>"><?php echo $aboutData['email']; ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $aboutData['phone']; ?>"><?php echo $aboutData['phone']; ?></a></li>
                    <li class="github"><i class="fa fa-github"></i><a href="<?php echo $aboutData['github']; ?>" target="_blank"><?php echo $aboutData['git']; ?></a></li>
                </ul>
            </div>
            <!--//contact-container-->

            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <?php foreach ($educationData as $education) { ?>
                <div class="item">
                    <h4 class="degree"><?php echo $education['faculty']; ?></h4>
                    <h5 class="meta"><?php echo $education['university']; ?></h5>
                    <div class="time"><?php echo $education['yearStartEdu']; ?> - <?php echo $education['yearEndEdu']; ?></div>
                </div>
                <!--//item-->
                <?php } ?>
            </div>
            <!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <?php foreach ($languageNativeData as $languageNative) { ?>
                    <li><?php echo $languageNative; ?><span class="lang-desc">(Native)</span></li>
                    <?php } ?>

                    <?php foreach ($languageProfessionalData as $languageProfessional) { ?>
                    <li><?php echo $languageProfessional; ?><span class="lang-desc">(Professional)</span></li>
                    <?php } ?>
                </ul>
            </div>
            <!--//languages-container-->

            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <?php foreach ($interestsData as $interests) { ?>
                    <li><?php echo $interests; ?></li>
                    <?php } ?>    
                </ul>
            </div>
            <!--//interests-container-->

        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Career Profile</h2>
                <div class="summary">
                    <!-- <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can <a href="http://themes.3rdwavemedia.com/website-templates/orbit-free-resume-cv-template-for-developers/" target="_blank">download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p> -->
                    <p><?php echo $aboutCareerData; ?></p>
                </div>
                <!--//summary-->
            </section>
            <!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

                <?php foreach ($experiencesData as $experiences) { ?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $experiences['post']; ?></h3>
                            <div class="time"><?php echo $experiences['yearStartWork']; ?> - <?php echo $experiences['yearEndWork']; ?></div>
                        </div>
                        <!--//upper-row-->
                        <div class="company"><?php echo $experiences['placeOfWork']; ?></div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p><?php echo $experiences['duty']; ?></p>
                        <p><?php echo $experiences['duty']; ?></p>
                    </div>
                    <!--//details-->
                </div>
                <?php } ?>
                <!--//item-->

            </section>
            <!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.
                    </p>
                </div>
                <!--//intro-->
                <div class="item">
                    <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A
                        responsive website template designed to help startups promote, market and sell their
                        products.</span>

                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/"
                            target="_blank">DevStudio</a></span> -
                    <span class="project-tagline">A responsive website template designed to help web
                        developers/designers market their services. </span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/"
                            target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website
                        template designed to help startups promote their products or services and to attract users &amp;
                        investors</span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/"
                            target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website
                        template solution for startups/developers to market their mobile apps. </span>
                </div>
                <!--//item-->
                <div class="item">
                    <span class="project-title"><a
                            href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/"
                            target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one
                        page theme designed to help app developers promote their mobile apps</span>
                </div>
                <!--//item-->
            </section>
            <!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">
                    <div class="item">
                        <h3 class="level-title">Python &amp; Django</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Angular</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="98%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5 &amp; CSS</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="95%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Ruby on Rails</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="85%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Sketch &amp; Photoshop</h3>
                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="60%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                </div>
            </section>
            <!--//skills-section-->

        </div>
        <!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a
                    href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>