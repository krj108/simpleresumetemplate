<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="shortcut icon" href="./favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        header {
            background: #000;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        header nav a {
            color: #fff;
            font-size: 18px;
            padding: 10px 15px;
            text-align: center;
            text-transform: uppercase;
        }

        header nav a:hover {
            color: #f8f9fa;
            background: #343a40;
        }

        main {
            padding: 20px;
            margin-top: 80px;
        }

        .profile img {
            border-radius: 50%;
            border: 5px solid #000;
            width: 150px;
            height: 150px;
        }

        .profile h1 {
            color: #000;
            font-size: 32px;
            margin: 10px 0 5px;
        }

        .profile h2 {
            color: #777;
            font-size: 20px;
            margin: 5px 0;
        }

        .profile-social a {
            font-size: 20px;
            margin: 0 10px;
            color: #000;
        }

        .profile-social a:hover {
            color: #343a40;
        }

        .profile-buttons a {
            background: #000;
            border: none;
            border-radius: 5px;
            color: #fff;
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-transform: uppercase;
            transition: background 0.3s;
        }

        .profile-buttons a:hover {
            background: #343a40;
        }

        .section {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .title {
            border-bottom: 2px solid #000;
            color: #000;
            font-size: 24px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            text-align: left;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .contact-info div {
            flex: 1 1 50%;
        }

        .services .service,
        .resume .experience,
        .resume .education {
            text-align: left;
        }

        .services .service i,
        .resume .experience i,
        .resume .education i {
            background: #000;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-size: 32px;
            height: 60px;
            line-height: 60px;
            margin-right: 20px;
            text-align: center;
            width: 60px;
        }

        .services .service h4,
        .resume .experience h4,
        .resume .education h4 {
            color: #000;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .services .service p,
        .resume .experience p,
        .resume .education p {
            font-size: 14px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            header nav {
                flex-direction: column;
            }

            .contact-info div {
                flex: 1 1 100%;
            }

        }

        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease-in;
        }

        .visible {
            opacity: 1;
        }

        .skills-section {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-bar-container {
            position: relative;
            background: #f0f0f0;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        .skill-bar {
            height: 10px;
            border-radius: 5px;
            background: #000;
            width: 0;
            transition: width 0.5s;
        }

        .skill-item:hover .skill-bar {
            width: 100%;
        }

        .skill-level {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Kamal Jamous</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="presentation" class="section text-center profile">
            <img src="{{url('/images/kamal jamous.jpg')}}" alt="Kamal Jamous" class="img-fluid">
            <h1>Kamal Jamous</h1>
            <h2>Web Developer</h2>
            <div class="profile-social">
                <a href="https://facebook.com/kamal.jamos.90/" class="fab fa-facebook"></a>
                <a href="https://gitlab.com/" class="fab fa-gitlab"></a>
            </div>
            <div class="profile-buttons">
                <a href="/file/cv_kamal_jamous.pdf" class="btn btn-dark" download>DOWNLOAD CV</a>
                <a href="#contact" class="btn btn-dark">CONTACT ME</a>
            </div>
        </section>
        <section id="about" class="section fade-in">
            <h3 class="title">About Me</h3>
            <div class="content">
                <p>I'm Kamal Jamous, a web developer from Tartus, Syria. I have extensive experience in programming and developing websites, and I love programming and everything related to it.</p>
                <div class="contact-info">
                    <div><strong>AGE:</strong> 25</div>
                    <div><strong>RESIDENCE:</strong> Syria</div>
                    <div><strong>FREELANCE:</strong> Available</div>
                    <div><strong>ADDRESS:</strong> Tartous, Syria</div>
                </div>
            </div>
        </section>
        <section id="services" class="section fade-in">
            <h3 class="title">My Services</h3>
            <div class="row">
                <div class="col-md-6 service">
                    <i class="fas fa-code"></i>
                    <h4>WEB DEVELOPMENT</h4>
                    <p>Modern and mobile-ready websites that will help you reach all of your marketing goals.</p>
                </div>
                <div class="col-md-6 service">
                    <i class="fas fa-chart-line"></i>
                    <h4>SEO</h4>
                    <p>Search engine optimization services to ensure your website ranks high in search results and increases organic traffic.</p>
                </div>
                <div class="col-md-6 service">
                    <i class="fas fa-edit"></i>
                    <h4>WEB DESIGN</h4>
                    <p>Creating visually appealing and user-friendly web designs tailored to your needs, enhancing the user experience.</p>
                </div>
                <div class="col-md-6 service">
                    <i class="fas fa-cogs"></i>
                    <h4>WEBSITE MANAGEMENT</h4>
                    <p>Providing comprehensive website management services, including updates, security, and performance monitoring to ensure your site runs smoothly and efficiently.</p>
                </div>
            </div>
        </section>
        <section id="resume" class="section fade-in">
            <h3 class="title">Resume</h3>
            <div class="row">
                <div class="col-md-6 experience">
                    <i class="fas fa-briefcase"></i>
                    <h4>Experience</h4>
                    <p><strong>2021 - 2024</strong> Freelance Web Developer</p>
                    <p>Worked on various training projects as a freelancer. Developed skills in web development, project management, and client communication.</p>

                </div>
                <div class="col-md-6 education">
                    <i class="fas fa-graduation-cap"></i>
                    <h4>Education</h4>
                    <p><strong>2019 - 2024</strong> Syrian Virtual University</p>
                    <p>Bachelor's Degree in Informatics Engineering - Software development.</p>
                </div>
            </div>
        </section>
        <section id="skills" class="section fade-in">
            <h3 class="title">Skills</h3>
            <div class="skills-section">
                <div class="col-md-4">
                    <h4>Front-End</h4>
                    <div class="skill-item">
                        <span>HTML</span>
                        <div class="skill-bar-container" data-skill-level="100%">
                            <div class="skill-bar" style="width: 100%;"></div>
                            <span class="skill-level">100%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>CSS</span>
                        <div class="skill-bar-container" data-skill-level="80%">
                            <div class="skill-bar" style="width: 80%;"></div>
                            <span class="skill-level">80%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>JS</span>
                        <div class="skill-bar-container" data-skill-level="75%">
                            <div class="skill-bar" style="width: 75%;"></div>
                            <span class="skill-level">75%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>Bootstrap</span>
                        <div class="skill-bar-container" data-skill-level="80%">
                            <div class="skill-bar" style="width: 80%;"></div>
                            <span class="skill-level">80%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Back-End</h4>
                    <div class="skill-item">
                        <span>PHP</span>
                        <div class="skill-bar-container" data-skill-level="98%">
                            <div class="skill-bar" style="width: 98%;"></div>
                            <span class="skill-level">98%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>Laravel</span>
                        <div class="skill-bar-container" data-skill-level="80%">
                            <div class="skill-bar" style="width: 80%;"></div>
                            <span class="skill-level">80%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>MySql</span>
                        <div class="skill-bar-container" data-skill-level="85%">
                            <div class="skill-bar" style="width: 85%;"></div>
                            <span class="skill-level">85%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>SEO</h4>
                    <div class="skill-item">
                        <span>On-Page SEO</span>
                        <div class="skill-bar-container" data-skill-level="100%">
                            <div class="skill-bar" style="width: 100%;"></div>
                            <span class="skill-level">100%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>Off-Page SEO</span>
                        <div class="skill-bar-container" data-skill-level="85%">
                            <div class="skill-bar" style="width: 85%;"></div>
                            <span class="skill-level">85%</span>
                        </div>
                    </div>
                    <div class="skill-item">
                        <span>Technical SEO</span>
                        <div class="skill-bar-container" data-skill-level="75%">
                            <div class="skill-bar" style="width: 75%;"></div>
                            <span class="skill-level">75%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="section fade-in">
            <h3 class="title">Contact</h3>
            <div class="content">
                <p><strong>Phone:</strong> +963939226508</p>
                <p><strong>Email:</strong> kamal.jamos.90@gmail.com</p>
                <p><strong>Address:</strong> tartous, Syria</p>
            </div>
        </section>
    </main>
    <footer>
        <p>© 2024 Kamal R Jamous - All rights reserved.</p>
    </footer>

    <script>
  $(document).ready(function () {
    $(window).on('scroll', function () {
        $('.fade-in').each(function () {
            var elementOffset = $(this).offset().top;
            var windowScrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (windowScrollTop > elementOffset - windowHeight + 100) {
                $(this).addClass('visible');
                $('.skill-bar').css('width', '0');
                $('.skill-level').css('color', 'black');
            }
        });
    });

    $('.skill-bar-container').hover(function () {
        var skillLevel = $(this).data('skill-level');
        $(this).find('.skill-bar').css('width', skillLevel);
        $(this).find('.skill-level').css('color', 'white');
    }, function () {
        $(this).find('.skill-bar').css('width', '0');
        $(this).find('.skill-level').css('color', 'black');
    });
});

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
