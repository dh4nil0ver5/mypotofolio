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
            Test
        </div>
        <div class="Info">
            Test
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
