<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/style.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/mediaqueries.css" />
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Nur Chamdani</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experince">Experience</a></li>
                <!-- <li><a href="#project">Project</a></li> -->
                <li><a href="#contact">Content</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Nur Chamdani</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()"> 
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about_mob" onclick="toggleMenu()">About</a></li>
                <li><a href="#experience_mob" onclick="toggleMenu()">Experience</a></li>
                <!-- <li><a href="#project_mob" onclick="toggleMenu()">Project</a></li> -->
                <li><a href="#contact_mob" onclick="toggleMenu()">Contact</a></li>
            </div>
        </div>
    </nav>
    <!-- Desktop -->
    <div id="pages">
        <section id="profile">
            <div class="section__pic-container"> 
                <img src="{{ URL::to('/') }}/pic/circle_photo.png" alt="Nur Chamdani" >
            </div>  
            <div class="section__text">
                <p class="section__text__p1" background="red">Hello, I'm</p>
                <h1 class="title">Nur Chamdani </h1>
                <p class="setion__text__p2">Fullstack Developer</p>
                <div class="btn-container">
                    <button class="btn btn-color-2" onclick="location.href='https://drive.google.com/file/d/1tXbGzo03PgxgN61fMK69inNwjusf24jO/view?usp=sharing'" >Download CV</button>
                    <button class="btn btn-color-1" onclick="location.href='https://wa.me/08979452329'" >Contact Person</button>
                </div>
                <div id="social-container">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/linkedin.png" alt="LinkedIn" onclick="location.href='https://www.linkedin.com/in/nur-chamdani-b38017126/'">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/github.png" alt="Github" onclick="location.href=''">
                </div>
            </div> 
        </section>
        <section id="about">
            <div class="pic_container">
                <h4>About</h4>
            </div>
            <div class="about_detail">
                <div class="pic_about">
                    <img src="{{ URL::to('/') }}/pic/circle_photo.png" alt="Nur Chamdani" >
                </div>
                <div class="about_myself">
                    <p>
                    I am a full stack developer. Experienced in the field of Backend and Frontend development as a freelancer. 
                    Has worked as a contract employee at PT Sinergi Informatika Semen Indonesia Tbk with work assignments to assist 
                    with development in Frontend using Codeigniter and Backend using Oracle. 
                    Has been a teacher for 3 years, namely a software educator Teacher at Dharma Wanita High Vocanary School Gresik. 
                    Has worked as a Running Support User for fixing data using AWS Redshift, 
                    Troubleshooting PowerBi and monitoring jobs at a vendor company with the client company 
                    PT Inovasi Optima Visitama by Vendor of PT Sampoerna Tbk (Phillip Morris International). 
                    </p>
                </div>
            </div> 
        </section>
        <section id="experince"> 
            <div class="head_box_experience">
                <h3>Experience</h3>
            </div>
            <div class="body_box_experience">
                <div class="box_skill">
                    <div class="head_title_skill">
                        <h3>Beckend</h3>
                    </div>
                    <div class="bod_container"> 
                        <div class="box_grid">
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>HTML</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>PHP</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>MYSQL</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>Oracle</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                        </div> 
                        <div class="box_grid">
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>CSS</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>JS</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>Postgre</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_skill">
                    <div class="head_title_skill">
                        <h3>Frontend</h3>
                    </div>
                    <div class="bod_container"> 
                        <div class="box_grid">
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>Flutter</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>React Native</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                        </div> 
                        <div class="box_grid">
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>Android Native</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="box_detail">
                                <div class="icon">
                                    <img src="{{ URL::to('/') }}/pic/verify20x20.png" alt="icon">
                                </div>
                                <div class="detail_skill">
                                    <h5>Kotlin</h5>
                                    <p>Experience</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 
        </section>
        <!-- <section id="project">
            <div class="head_title">
                <h3>Project</h3>
            </div>
            <div class="box_apps">
                <div class="box-project">
                    <div class="image_ss">
                        <img src="" alt="" class="ss_apps" />
                    </div>
                    <div class="box_button">
                        <button class="btn btn_show"></button>
                    </div>
                </div>
                <div class="box-project"></div>
            </div>
        </section> -->
        <section id="contact">
            <div class="head_contact">
                <h2>Contact</h2>
            </div>
            <div class="body_contact">
                <div class="icon_wa">
                    <img src="{{ URL::to('/') }}/pic/wa.png" alt="wa" width=25 height=25 />
                </div>
                <div class="numbr_wa">08979452329</div>
            </div>
        </section>
    </div>
    <div id="pages_mobile"> 
        <section id="profile_mob">
            <div class="pic_container">
                <img src="{{ URL::to('/') }}/pic/circle_photo.png" alt="Nur Chamdani" >
            </div>
            <div class="Info">
                <p class="section__text__p1" background="red">Hello, I'm</p>
                <h1 class="title">Nur Chamdani </h1>
                <p class="setion__text__p2">Fullstack Developer</p>
                <div class="btn-container">
                    <button class="btn btn-color-2" onclick="" >Download CV</button>
                    <button class="btn btn-color-1" onclick="" >Contact Person</button>
                </div>
                <div id="social-container">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/linkedin.png" alt="LinkedIn" onclick="location.href=''">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/github.png" alt="Github" onclick="location.href=''">
                </div>
            </div>
        </section>
        <section id="about_mob"> 
            <div class="pic_container">
                <h4>About</h4>
            </div>
            <div class="about_detail">
                <div class="pic_about">
                    <img src="{{ URL::to('/') }}/pic/circle_photo.png" alt="Nur Chamdani" >
                </div>
                <div class="about_myself">
                    <p>
                    I am a full stack developer. Experienced in the field of Backend and Frontend development as a freelancer. 
                    Has worked as a contract employee at PT Sinergi Informatika Semen Indonesia Tbk with work assignments to assist 
                    with development in Frontend using Codeigniter and Backend using Oracle. 
                    Has been a teacher for 3 years, namely a software educator Teacher at Dharma Wanita High Vocanary School Gresik. 
                    Has worked as a Running Support User for fixing data using AWS Redshift, 
                    Troubleshooting PowerBi and monitoring jobs at a vendor company with the client company 
                    PT Inovasi Optima Visitama by Vendor of PT Sampoerna Tbk (Phillip Morris International). 
                    </p>
                </div>
            </div> 
        </section>
        <section id="experience_mob"> 
            <div class="pic_container">
                <h4>Experience</h4>
            </div>
            <div class="experience">
                <div class="list">
                  <div class="head_list">
                    <h6>Beckend</h6>
                  </div>
                  <div class="detail_list">
                    <div class="row_list_2">
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">MYSQL</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">Oracle</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                    </div>
                    <div class="row_list_2">
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">HTML</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">Javascript</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                    </div> 
                    <div class="row_list_2">
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">PHP</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">CSS</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="list">
                    <div class="head_list">
                        <h5>Frontend</h5>
                    </div>  
                  <div class="detail_list">
                    <div class="row_list_2">
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">Android Native</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">Flutter</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div>
                    </div> 
                    <div class="row_list_2">
                        <div class="field_list">
                            <div class="icon_veryfied">
                                <img src="{{ URL::to('/') }}/pic/verify.png" alt="icons" width=20 height=20 />
                            </div>
                            <div class="box_skill_detail">
                                <h3 class="name_skill">React Native</h3>
                                <p class="exp_year">Experienced</p>
                            </div>
                        </div> 
                    </div> 
                  </div>
                </div>
            </div> 
        </section>
        <!-- <section id="project_mob"> 
            <div class="pic_container">
                <h4>Project</h4>
            </div>
            <div class="project">
            </div> 
        </section> -->
        <section id="contact_mob"> 
            <div class="pic_container">
                <h4>Contact</h4>
            </div>
            <div class="contact">
                <div class="container_contact">
                    <div class="whatsapp">
                        <div class="ico_wa"></div>
                        <div class="nmr_wa">08979452329</div>
                    </div>
                </div>
            </div> 
        </section>
    </div>
    <footer> 
        <nav id="hamburger-nav-footer">
            <div class="logo">Nur Chamdani</div>
        </nav>
    </footer>
    <div id="arrows">
        <div class="feedback">v</div> 
    </div>
    <script src="script.js"></script>
</body>
</html>
