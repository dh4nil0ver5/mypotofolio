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
                <li><a href="#about">Experience</a></li>
                <li><a href="#about">Project</a></li>
                <li><a href="#about">Content</a></li>
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
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#about" onclick="toggleMenu()">Experience</a></li>
                <li><a href="#about" onclick="toggleMenu()">Project</a></li>
                <li><a href="#about" onclick="toggleMenu()">Content</a></li>
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
                    <button class="btn btn-color-2" onclick="" >Download CV</button>
                    <button class="btn btn-color-1" onclick="" >Contact Person</button>
                </div>
                <div id="social-container">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/linkedin.png" alt="LinkedIn" onclick="location.href=''">
                    <img class="pass-img" src="{{ URL::to('/') }}/pic/github.png" alt="Github" onclick="location.href=''">
                </div>
            </div> 
        </section>
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
                                <h3 class="name_skill">SASS / CSS</h3>
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
                  </div>
                </div>
            </div> 
        </section>
        <section id="project_mob"> 
            <div class="pic_container">
                <h4>Project</h4>
            </div>
            <div class="experience">
            </div> 
        </section>
    </div>
    <div id="arrows">
        <div class="feedback">v</div> 
    </div>
    <script src="script.js"></script>
</body>
</html>
