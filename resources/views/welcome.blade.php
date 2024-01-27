<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/style.css">
</head>
<body>
    <nav id="desktop_nav">
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
        <div class="logo"></div>
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
    <script src="script.js"></script>
</body>
</html>