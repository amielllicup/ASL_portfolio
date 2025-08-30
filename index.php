<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amiel Licup Portfolio</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" type="image/x-icon" href="favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary-gradient: linear-gradient(45deg, #fff, #ccc);
      --secondary-gradient: linear-gradient(135deg, #333, #666);
      --background-dark: #000;
      --background-secondary: #111;
      --text-light: #e7e7e7;
      --text-muted: #bbb;
      --text-accent: #888;
      --border-dark: #333;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background-color: var(--background-dark);
      color: var(--text-light);
      min-height: 100vh;
      line-height: 1.5;
      overflow-x: hidden;
    }

    .image-gradient {
      position: absolute;
      top: 0;
      right: 0;
      height: 100vh;
      object-fit: cover;
      opacity: 0.5;
      z-index: -1;
    }

    .layer-blur {
      width: 20vw;
      height: 0;
      position: absolute;
      top: 20%;
      right: 0;
      box-shadow: 0 0 500px 10px white;
      rotate: -30deg;
      z-index: -1;
    }

    /* Header Styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 1000;
      transition: all 0.3s ease;
    }

    .logo {
      font-size: clamp(1.5rem, 4vw, 2.5rem);
      font-weight: 300;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    .mobile-menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 4px;
      z-index: 1001;
    }

    .mobile-menu-toggle span {
      width: 25px;
      height: 3px;
      background: var(--text-light);
      transition: all 0.3s ease;
    }

    .mobile-menu-toggle.active span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
      opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
      transform: rotate(-45deg) translate(7px, -7px);
    }

    nav {
      display: flex;
      align-items: center;
      gap: clamp(1rem, 2vw, 2rem);
    }

    nav a {
      font-size: clamp(0.9rem, 2vw, 1.1rem);
      letter-spacing: 0.05rem;
      transition: all 0.3s ease;
      text-decoration: none;
      color: inherit;
      position: relative;
      padding: 0.5rem 0;
    }

    nav a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary-gradient);
      transition: width 0.3s ease;
    }

    nav a:hover::after,
    nav a:focus::after {
      width: 100%;
    }

    nav a:focus {
      outline: 2px solid var(--text-light);
      outline-offset: 2px;
    }

    /* Main Content */
    main {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      min-height: 100vh;
      padding: 0 2rem;
      margin-top: 80px;
    }

    .robot-3d {
      position: absolute;
      top: 10%;
      right: -30%;
      height: 100vh;
      z-index: 0;
    }

    .content {
      max-width: 100%;
      z-index: 10;
    }

    .tag-box {
      text-align: left;
      margin-left: 15rem;
    }

    .content h1 {
      font-size: clamp(2.5rem, 6vw, 4rem);
      font-weight: 600;
      letter-spacing: 0.05rem;
      margin: 1.5rem 0;
      line-height: 1.2;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
      text-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
    }

    .description {
      font-size: clamp(1rem, 2.5vw, 1.2rem);
      letter-spacing: 0.05em;
      color: var(--text-muted);
      margin-bottom: 2rem;
      line-height: 1.8;
    }

    .buttons {
      margin-top: 2rem;
    }

    .btn-get-started {
      display: inline-block;
      padding: 1rem 2rem;
      background: var(--secondary-gradient);
      color: var(--text-light);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-decoration: none;
      border: 2px solid transparent;
      border-radius: 50px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .btn-get-started::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #666, #999);
      transition: left 0.3s ease;
      z-index: -1;
    }

    .btn-get-started:hover::before,
    .btn-get-started:focus::before {
      left: 0;
    }

    .btn-get-started:hover,
    .btn-get-started:focus {
      transform: translateY(-2px);
      box-shadow: 0 12px 35px rgba(255, 255, 255, 0.2);
    }

    .btn-get-started:focus {
      outline: 2px solid var(--text-light);
      outline-offset: 2px;
    }

    /* About Section */
    .about {
      min-height: 100vh;
      padding: 6rem 2rem;
      background: linear-gradient(135deg, var(--background-dark) 0%, var(--background-secondary) 100%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .mainabout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 4rem;
      max-width: 1200px;
      width: 100%;
    }

    .about img {
      width: 100%;
      max-width: 400px;
      border: 3px solid var(--border-dark);
      box-shadow: 0 20px 40px rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      transition: all 0.4s ease;
      justify-self: center;
    }

    .about img:hover {
      transform: scale(1.05) rotate(2deg);
      box-shadow: 0 25px 50px rgba(255, 255, 255, 0.2);
    }

    .about-text {
      color: var(--text-light);
    }

    .about-text h1 {
      font-size: clamp(2rem, 4vw, 3rem);
      margin-bottom: 1rem;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    .about-text h5 {
      font-size: clamp(1.1rem, 2vw, 1.4rem);
      margin-bottom: 1.5rem;
      color: var(--text-muted);
    }

    .about-text h5 span {
      color: var(--text-accent);
    }

    .about-text p {
      font-size: clamp(1rem, 2vw, 1.1rem);
      line-height: 1.8;
      color: var(--text-muted);
    }

    /* Projects Section */
    .project {
      min-height: 100vh;
      padding: 6rem 2rem;
      background: var(--background-dark);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .project-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .project-header h2 {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 1rem;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    .project-header p {
      font-size: clamp(1rem, 2vw, 1.2rem);
      color: var(--text-accent);
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      width: 100%;
    }

    .project-card {
      background: linear-gradient(135deg, var(--background-secondary), #222);
      border-radius: 15px;
      border: 2px solid var(--border-dark);
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 30px rgba(255, 255, 255, 0.1);
      border-color: #555;
    }

    .project-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .project-content {
      padding: 1.5rem;
    }

    .project-card h3 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: var(--text-light);
    }

    .project-card p {
      color: var(--text-muted);
      line-height: 1.6;
      margin-bottom: 1.5rem;
      font-size: 1rem;
    }

    .project-tech {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
    }

    .tech-tag {
      background: var(--border-dark);
      color: var(--text-light);
      padding: 0.4rem 1rem;
      border-radius: 12px;
      font-size: 0.85rem;
    }

    /* Edit Section */
.edit {
  min-height: 100vh;
  padding: 6rem 2rem;
  background: var(--background-dark);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.edit-header {
  text-align: center;
  margin-bottom: 3rem;
}

.edit-header h2 {
  font-size: clamp(2.5rem, 5vw, 3.5rem);
  margin-bottom: 1rem;
  background: var(--primary-gradient);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  color: transparent;
}

.edit-header p {
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: var(--text-accent);
}

.edit-content {
  display: flex;
  justify-content: center;
  max-width: 1200px;
  width: 100%;
}

.carousel-container {
  width: 100%;
  max-width: 800px;
  position: relative;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.carousel {
  position: relative;
  width: 100%;
}

.carousel-inner {
  display: flex;
  transition: transform 0.5s ease;
  height: 500px; /* Fixed height for carousel */
}

.carousel-item {
  flex: 0 0 100%;
  max-width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  background-color: #000;
}

.carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.7);
  color: var(--text-light);
  border: none;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  cursor: pointer;
  transition: background 0.3s ease;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
}

.carousel-control:hover {
  background: rgba(0, 0, 0, 0.9);
}

.carousel-control.prev {
  left: 20px;
}

.carousel-control.next {
  right: 20px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .carousel-inner {
    height: 400px;
  }
  
  .carousel-control {
    width: 40px;
    height: 40px;
    font-size: 1.5rem;
  }
}

@media (max-width: 480px) {
  .carousel-inner {
    height: 300px;
  }
  
  .carousel-control {
    width: 35px;
    height: 35px;
    font-size: 1.2rem;
  }
}

    /* Contact Footer */
    .contact-footer {
      background: linear-gradient(135deg, var(--background-secondary), var(--background-dark));
      padding: 4rem 2rem 2rem;
      text-align: center;
    }

    .footer-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .footer-content h2 {
      font-size: clamp(2rem, 4vw, 3rem);
      margin-bottom: 1rem;
      background: var(--primary-gradient);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }

    .footer-content p {
      font-size: clamp(1rem, 2vw, 1.2rem);
      color: var(--text-accent);
      margin-bottom: 3rem;
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 3rem;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 60px;
      height: 60px;
      background: var(--secondary-gradient);
      color: var(--text-light);
      text-decoration: none;
      border-radius: 50%;
      font-size: 1.5rem;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .social-link:hover,
    .social-link:focus {
      transform: translateY(-5px) scale(1.1);
      box-shadow: 0 15px 35px rgba(255, 255, 255, 0.2);
    }

    .social-link:focus {
      outline: 2px solid var(--text-light);
      outline-offset: 2px;
    }

    .footer-bottom {
      border-top: 1px solid var(--border-dark);
      padding-top: 2rem;
      color: var(--text-accent);
      font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
      .carousel-image {
        width: 100%;
        height: auto;
        aspect-ratio: 1192 / 852;
      }

      .carousel-container {
        max-width: 100%;
      }
    }

    @media (max-width: 768px) {
      .mobile-menu-toggle {
        display: flex;
      }

      nav {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.95);
        flex-direction: column;
        padding: 2rem;
        gap: 1rem;
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
      }

      nav.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
      }

      nav a {
        font-size: 1.2rem;
        padding: 0.5rem;
      }

      .robot-3d {
        display: none;
      }

      main {
        padding: 2rem 1rem;
        text-align: center;
        justify-content: center;
      }

      .tag-box {
        text-align: center;
        margin-left: 0;
        max-width: 100%;
      }

      .mainabout {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 2rem;
      }

      .project {
        padding: 4rem 1rem;
      }

      .projects-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .project-card h3 {
        font-size: 1.6rem;
      }

      .project-card p {
        font-size: 0.95rem;
      }

      .project-image {
        height: 180px;
      }

      .edit-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }

      .carousel-image {
        width: 100%;
        height: auto;
        aspect-ratio: 1192 / 852;
      }

      .social-links {
        gap: 1rem;
      }

      .social-link {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
      }
    }

    @media (max-width: 480px) {
      header {
        padding: 1rem;
      }

      main {
        padding: 1rem;
      }

      .content h1 {
        font-size: clamp(2rem, 5vw, 3rem);
      }

      .about,
      .project,
      .edit,
      .contact-footer {
        padding: 4rem 1rem;
      }

      .project-header h2,
      .edit-header h2 {
        font-size: clamp(2rem, 4vw, 2.8rem);
      }

      .project-image {
        height: 150px;
      }

      .project-content {
        padding: 1rem;
      }

      .project-link {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
      }

      .tech-tag {
        font-size: 0.8rem;
        padding: 0.3rem 0.8rem;
      }

      .carousel-image {
        width: 100%;
        height: auto;
        aspect-ratio: 1192 / 852;
      }

      .carousel-control {
        font-size: 1.5rem;
        padding: 0.3rem 0.8rem;
      }

      .cv-card {
        max-width: 250px;
      }

      .cv-image-container {
        width: 120px;
        height: 120px;
      }

      .upload-button {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
      }
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in-up {
      animation: fadeInUp 0.6s ease forwards;
    }
  </style>
</head>

<body>
  <img class="image-gradient" src="gradient.png" alt="gradient">
  <div class="layer-blur"></div>

  <spline-viewer
    class="robot-3d"
    url="https://prod.spline.design/XcWku1NExXSeoQpD/scene.splinecode"
    data-aos="fade-zoom-in"
    data-aos-duration="2000">
  </spline-viewer>

  <header>
    <h1 class="logo" data-aos="fade-down" data-aos-duration="1500">MIEL DEV</h1>
    <div class="mobile-menu-toggle" onclick="toggleMobileMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav id="nav-menu">
      <a href="#home" data-aos="fade-down" data-aos-duration="1500">HOME</a>
      <a href="#about" data-aos="fade-down" data-aos-duration="2000">ABOUT</a>
      <a href="#project" data-aos="fade-down" data-aos-duration="2500">PROJECTS</a>
      <a href="#edit" data-aos="fade-down" data-aos-duration="3000">EDITS</a>
      <a href="#contact" data-aos="fade-down" data-aos-duration="3000">CONTACT</a>
    </nav>
  </header>

  <main id="home">
    <div class="content">
      <div class="tag-box">
        <h1 data-aos="fade-zoom-in" data-aos-duration="1500">
          I am Amiel Licup
        </h1>
        <p class="description" data-aos="fade-zoom-in" data-aos-duration="2000">
          A passionate student developer specializing in building innovative and responsive websites.<br>
          Currently pursuing a BS in Information Technology at Our Lady of Fatima University, Pampanga Campus.
        </p>
        <div class="buttons" data-aos="fade-zoom-in" data-aos-duration="2500">
  <a href="CV-ASL.pdf" class="btn-get-started" download="Amiel_Licup_CV.pdf">Download CV</a>
</div>
      </div>
    </div>
  </main>

  <section id="about" class="about" data-aos="fade-up" data-aos-duration="1500">
    <div class="mainabout">
      <img src="amiel.png" alt="Amiel Licup's picture" data-aos="fade-right" data-aos-duration="2000">
      <div class="about-text" data-aos="fade-left" data-aos-duration="2000">
        <h1>ABOUT ME</h1>
        <h5>Web Developer <span>- Full Stack Developer</span></h5>
        <p>
          I'm Amiel Licup, a fourth-year BS Information Technology student at Our Lady of Fatima University, Pampanga Campus.
          I specialize in backend web development, skilled in building robust databases, APIs, and server logic using various programming languages and frameworks.
          Passionate about creating efficient and scalable web solutions, I blend academic knowledge with hands-on expertise to deliver reliable, innovative applications.
        </p>
      </div>
    </div>
  </section>

  <section id="project" class="project">
    <div class="project-header" data-aos="fade-up" data-aos-duration="1500">
      <h2>My Projects</h2>
      <p>Explore some of the innovative projects I've built</p>
    </div>
    <div class="projects-grid">
      <div class="project-card" data-aos="fade-up" data-aos-duration="1500">
        <img src="binding.png" alt="Bin-Ding Machine" class="project-image">
        <div class="project-content">
          <h3>Bin-Ding Machine</h3>
          <p>A Recycling Incentive System (RVM) that encourages environmental consciousness through gamification and rewards for proper waste disposal.</p>
          <div class="project-tech">
            <span class="tech-tag">Arduino</span>
            <span class="tech-tag">IoT</span>
            <span class="tech-tag">Python</span>
          </div>
        </div>
      </div>
      <div class="project-card" data-aos="fade-up" data-aos-duration="1750">
        <img src="mpsis.png" alt="MIMS-CONNECT" class="project-image">
        <div class="project-content">
          <h3>MIMS-CONNECT</h3>
          <p>A comprehensive Web-based School Management System for Maimpis that streamlines administrative processes and enhances communication.</p>
          <div class="project-tech">
            <span class="tech-tag">HTML</span>
            <span class="tech-tag">CSS</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">BOOTSTRAP 5</span>
            <span class="tech-tag">PHP Mailer</span>
            <span class="tech-tag">Fpdf</span>
            <span class="tech-tag">X10 Hosting</span>
          </div>
        </div>
      </div>
      <div class="project-card" data-aos="fade-up" data-aos-duration="2000">
        <img src="dpn.png" alt="DPN KONEK" class="project-image">
        <div class="project-content">
          <h3>DPN KONEK</h3>
          <p>A Web-Based Barangay Services System for Public Assistance that digitalizes local government services and improves citizen engagement.</p>
          <div class="project-tech">
            <span class="tech-tag">HTML</span>
            <span class="tech-tag">CSS</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">BOOTSTRAP 5</span>
            <span class="tech-tag">PHP Mailer</span>
            <span class="tech-tag">Fpdf</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="edit" class="edit" data-aos="fade-up" data-aos-duration="1500">
  <div class="edit-header">
    <h2>My Edits</h2>
    <p>Showcasing my creative photo editing projects created with Canva, Adobe Photoshop, Adobe Illustrator, and other design tools.</p>
  </div>
  <div class="edit-content">
    <div class="carousel-container" data-aos="fade-left" data-aos-duration="1750">
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="A7.jpg" alt="Edit 1" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A2.png" alt="Edit 2" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A1.png" alt="Edit 6" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A3.png" alt="Edit 3" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A4.jpg" alt="Edit 4" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A5.jpg" alt="Edit 5" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A6.jpg" alt="Edit 6" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A8.png" alt="Edit SS" class="carousel-image">
          </div>
          <div class="carousel-item">
            <img src="A9.jpg" alt="Edit SS" class="carousel-image">
          </div>
        </div>
        <button class="carousel-control prev" aria-label="Previous slide">❮</button>
        <button class="carousel-control next" aria-label="Next slide">❯</button>
      </div>
    </div>
  </div>
</section>

  <footer id="contact" class="contact-footer">
    <div class="footer-content">
      <h2 data-aos="fade-up" data-aos-duration="1500">Let's Connect</h2>
      <p data-aos="fade-up" data-aos-duration="1750">
        Feel free to reach out for collaborations, opportunities, or just to say hello!
      </p>
      <div class="social-links" data-aos="fade-up" data-aos-duration="2000">
        <a href="mailto:amiellicup03@gmail.com" class="social-link" title="Email">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="https://www.facebook.com/as.licup21" class="social-link" title="Facebook" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/_aslicup/" class="social-link" title="Instagram" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
      <div class="footer-bottom" data-aos="fade-up" data-aos-duration="2250">
        <p>© 2025 Amiel Licup. All rights reserved. | Designed & Developed with Passion</p>
      </div>
    </div>
  </footer>
<script>
function downloadCV() {
  const link = document.createElement('a');
  link.href = 'CV.ASL.pdf';
  link.download = 'Amiel_Licup_CV.pdf';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
</script>
  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.10.4/build/spline-viewer.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });

    function toggleMobileMenu() {
      const nav = document.getElementById('nav-menu');
      nav.classList.toggle('active');
      const toggle = document.querySelector('.mobile-menu-toggle');
      toggle.classList.toggle('active');
    }

    document.querySelectorAll('nav a').forEach(link => {
      link.addEventListener('click', () => {
        document.getElementById('nav-menu').classList.remove('active');
        document.querySelector('.mobile-menu-toggle').classList.remove('active');
      });
    });


    window.addEventListener('scroll', () => {
      const header = document.querySelector('header');
      if (window.scrollY > 100) {
        header.style.background = 'rgba(0, 0, 0, 0.95)';
      } else {
        header.style.background = 'rgba(0, 0, 0, 0.9)';
      }
    });


    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });


    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in-up');
        }
      });
    }, observerOptions);


    document.querySelectorAll('.project-card, .cv-card, .carousel').forEach(element => {
      observer.observe(element);
    });


    document.addEventListener('DOMContentLoaded', () => {
      const carousel = document.querySelector('.carousel');
      const inner = carousel.querySelector('.carousel-inner');
      const items = carousel.querySelectorAll('.carousel-item');
      const prev = carousel.querySelector('.carousel-control.prev');
      const next = carousel.querySelector('.carousel-control.next');
      let currentIndex = 0;

      function updateCarousel() {
        inner.style.transform = `translateX(-${currentIndex * 100}%)`;
      }

      prev.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
        updateCarousel();
      });

      next.addEventListener('click', () => {
        currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
        updateCarousel();
      });

      let autoSlide = setInterval(() => {
        currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
        updateCarousel();
      }, 5000);

      carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
      carousel.addEventListener('mouseleave', () => {
        autoSlide = setInterval(() => {
          currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
          updateCarousel();
        }, 5000);
      });
    });
  </script>
</body>
</html>