<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Abegail Isidro</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('portfolio/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('portfolio/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="index-page">
    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="{{ asset('portfolio/assets/img/my-profile-img.jpg') }}" alt=""
                class="img-fluid rounded-circle">
        </div>

        <a href="#" class="logo text-center d-flex align-items-center justify-content-center">
            <h1 class="sitename py-4">Abegail Isidro</h1>
        </a>

        <div class="text-center social-links">
            <a href="https://x.com/chabbyabe" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/chabbyabe" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/chabbyabe" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/abegail-isidro-816027112/" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#home" class="active"><i class="bi bi-house-door navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#cv"><i class="bi bi-file-text navicon"></i> Curriculum Vitae</a></li>
                <li><a href="#portfolio"><i class="bi bi-display navicon"></i> Portfolio</a></li>
                {{-- <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li> --}}
            </ul>
        </nav>

    </header>

    <main>

        <section id="home" class="home section dark-background">

            <img src="{{ asset('portfolio/assets/img/home-bg.png') }}" alt="" data-aos="fade-in" class="">

            <div class="container px-5" data-aos="fade-up" data-aos-delay="100">
                <h2>Abegail Isidro</h2>
                <p>I'm a <span class="typed" data-typed-items="Full-Stack Software Engineer">Full-Stack</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                <p>Based in the Netherlands</p>
            </div>

        </section>

        <section id="about" class="about section">

            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p> I’m a Software Engineer with experience working in the Philippines and Japan.
                    After getting married, I relocated to the Netherlands, where I’m currently seeking new
                    opportunities in the Tech Industry.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        {{-- <img src="{{ asset('portfolio/assets/img/my-profile-img.jpg') }}" class="img-fluid" alt=""> --}}
                    </div>
                    <div class="col-lg-8 content">
                        <h2> Full-Stack Software Engineer </h2>
                        <p class="py-3 fst-italic">

                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong> <span>Utrecht,
                                            the Netherlands</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>chabbyabe@gmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="skills" class="skills section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Throughout the years, I have developed professional experience using the following tools:</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="flex row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4 flex-wrap">

                    <div class="col">
                        <div class="grid-item"><i class="bi bi-file-earmark-code tech-icon js"></i>
                            <div>JavaScript</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-terminal tech-icon python"></i>
                            <div>Python</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-code-slash tech-icon php"></i>
                            <div>PHP</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-phone tech-icon flutter"></i>
                            <div>Flutter</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-layers tech-icon laravel"></i>
                            <div>Laravel</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-phone-landscape tech-icon react"></i>
                            <div>React Native</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-diagram-3 tech-icon django"></i>
                            <div>Django</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-diagram-3-fill tech-icon drf"></i>
                            <div>Django REST</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-display tech-icon react"></i>
                            <div>React.js</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-filetype-tsx tech-icon ts"></i>
                            <div>TypeScript</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-palette tech-icon tailwind"></i>
                            <div>Tailwind</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-bootstrap tech-icon bootstrap"></i>
                            <div>Bootstrap</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-lightning-charge tech-icon livewire"></i>
                            <div>Livewire</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-box tech-icon alpine"></i>
                            <div>Alpine JS</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-git tech-icon git"></i>
                            <div>GIT</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-graph-up tech-icon chartjs"></i>
                            <div>Chart JS</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-filetype-js tech-icon jquery"></i>
                            <div>JQuery</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-database tech-icon sql"></i>
                            <div>SQL</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-vector-pen tech-icon figma"></i>
                            <div>Figma</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="grid-item"><i class="bi bi-hash tech-icon csharp"></i>
                            <div>C#</div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="cv" class="cv section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Curriculum Vitae</h2>
                <p></p>
            </div>

            <div class="container break-word">
                <div class="flex row row-cols-1 row-cols-md-2 cv-row">
                    <div class="col w-200" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="cv-title">Sumary</h3>

                        <div class="pb-0 cv-item">
                            <h4 class="font-bold">Abegail Isidro</h4>
                            <p>
                            <div class="break-text">With over five years in software
                                development, I specialize in
                                creating advanced web and mobile
                                applications. My expertise is in
                                developing automated, user-friendly
                                systems that enhance business
                                efficiency. A key achievement
                                includes the design and implementation of a comprehensive Human
                                Resource Management System,
                                highlighting my capacity to deliver
                                tailored, high-impact solutions.</div>
                            </p>
                            <ul>
                                <li>Utrecht, The Netherlands</li>
                                <li>chabbyabe@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="cv-title">Education</h3>
                        <div class="cv-item">
                            <h4>Japanese Proficiency School</h4>
                            <h5>2018 - 2019</h5>
                            <p>
                            <div class="font-bold">Toyokuni Japanese Language Skills and Training Center</div>
                            </p>
                            <p>
                                N3 (License: N3A257280J Result: 121/180 Test Taken: Japan) <br>
                                • The ability to understand Japanese that is used in everyday situations to a certain
                                degree.<br>
                                N4 (License: N4A093267J Result: 129/180 Test Taken: Japan)<br>
                                • The ability to understand basic Japanese

                            </p>
                        </div>

                        <div class="cv-item">
                            <h4>Bachelor of Science in Computer Science</h4>
                            <h5>2014 - 2018</h5>
                            <p>
                            <div class="font-bold">St. Mary’s College of Tagum Inc.</div>
                            </p>
                            <p>• Relevant skills: JavaScript, PHP, C#, VB.net, SQL, Networking,
                                System Analysis and Design <br>
                                • Thesis topic: “Integrating Moral Values Learning in a Design
                                and Development of a Computer Game for School Age Children” <br>
                                Average grade: 9.3/10</p>
                        </div>

                    </div>

                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="cv-title">Professional Experience</h3>
                        <div class="cv-item">
                            <h4>Software Engineer</h4>
                            <h5>Nov 2019 - May 2025</h5>
                            <p>
                            <div class="font-bold">System Advance Co. LTD., Gifu, Japan </div>
                            </p>
                            <ul>
                                <li>• Developing a web application for recruiting and managing
                                    part-time workers for Japan.</li>
                                <li>• Developed a Human Resource Management System (HRMS)
                                    using Face Recognition with thermal camera.</li>
                                <li>• Developed a mobile application for managing international
                                    products.</li>
                                <li>• Developed an application that represents statistical data/
                                    charts based on machine efficiency.</li>
                                <li>• Developed a mobile application that monitors mold part defects.</li>
                                <li>• Creating mobile and website UI/UX .</li>

                            </ul>
                            <div>
                                <span class="font-bold">Skills: </span> Laravel · TypeScript · PHP · React.js · Django
                                · Python ·
                                JavaScript · Flutter · TailwindCSS · ChartJS
                            </div>
                        </div>

                        <div class="cv-item">
                            <h4>Junior Software Developer (Mobile Developer)</h4>
                            <h5> Aug 2018 - Jun 2019</h5>
                            <p>
                            <div class="font-bold">TraXion Tech Inc., Davao, Philippines </div>
                            </p>
                            <ul>
                                <li>• Developed an online payment platform.</li>
                                <li>• Developed a points rewards system for one of the biggest
                                    Supermarkets in Mindanao, PH.</li>
                            </ul>
                            <div>
                                <span class="font-bold">Skills: </span> Python · Django · React Native · JavaScript
                            </div>
                        </div>

                        <div class="cv-item">
                            <h4>Software Developer</h4>
                            <h5> Jun 2018 - Aug 2018</h5>
                            <p>
                            <div class="font-bold">Mapletech IT Solutions (Acquired by TraXion Tech Inc), Tagum,
                                Philippines </div>
                            </p>
                            <ul>
                                <li>• Developed a mobile and web application for assessing
                                    health-related hereditary diseases in the family history</li>
                            </ul>
                            <div>
                                <span class="font-bold">Skills: </span> Python · Django · React Native · JavaScript
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="portfolio" class="portfolio section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>My GitHub Projects</h2>
                <p>
                <ul id="github-projects"></ul>
                </p>
            </div>

        </section>
    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="text-center copyright ">
                <p>© 2025 <span>abegailisidro.nl</span> <strong class="px-1 sitename">|</strong> <span>All Rights
                        Reserved</span></p>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top"
        class="scroll-top fixed bottom-4 right-4 z-50 w-14 h-14 bg-gray-600 text-white rounded-full shadow-lg hover:bg-gray-800 transition duration-300 ease-in-out flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="text-white text-xl" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 12a.5.5 0 0 1-.5-.5V5.707L4.354 9.854a.5.5 0 1 1-.708-.708l4.147-4.147a.5.5 0 0 1 .708 0l4.147 4.147a.5.5 0 0 1-.708.708L8.5 5.707V11.5a.5.5 0 0 1-.5.5z" />
        </svg>
    </a>
    <div id="preloader"></div>
</body>

</html>
