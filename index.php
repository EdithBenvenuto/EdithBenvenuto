<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Edith Benvenuto</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto+Condensed:wght@300;400;700&family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <header>
    <nav class="navbar">
      <a class="name" href="index.html">Edith Benvenuto</a>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
            <li><a href="#homeSection">Home</a></li>
            <li><a href="#aboutMeSection">About me</a></li>
            <li><a href="#projectsSection">Projects</a></li>
            <li><a href="#contactSection">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
    <div id="content">
        <div class="row" id="homeSection">
          <div class="col home">
            <img id="photo" src="images/edithbenvenuto.jpeg" alt="Edith Benvenuto">
          </div>
          <div class="col home homeInfo">
            <p id="title">Hi! I'm Edith</p>
            <p id="subtitle">I'm a Student of B.S. in Computer Science and Technology Engineering at Tecnológico de Monterrey</p>
            <div class="socialIcons">
              <a href="https://www.linkedin.com/in/edithbenvenuto/" class="linkedinIcon sIcon"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://github.com/EdithBenvenuto" class="githubIcon sIcon"><i class="fab fa-github"></i></a>
              <a href="https://www.instagram.com/edith_benvenuto/" class="instagramIcon sIcon"><i class="fab fa-instagram"></i></a>
              <a href="mailto:edithpau_benvenuto@hotmail.com?Subject=Hello!%20I'm%20" class="emailIcon sIcon"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <div id = "aboutMeSection">
          <h3>About me</h3>
          <div class="row">
            <div class="col aboutmeleft">
              <p>
                I am a Computer Science student <br>
                Born and raised in Veracruz, Mexico.
              </p>
              <a target="_blank" href="files/CV.pdf" title="Edith Benvenuto's CV" id="cv">Download CV <i class="fas fa-angle-down"></i></a>
            </div>
            <div class="col aboutmeright">
              <img id="aboutmephoto" src="images/code.jpg" alt="code">
            </div>
          </div>
        </div>
        <div id = "projectsSection">
          <h3>Projects</h3>
          <div class ="row" id="projects">
            <div class="col-4"><a class="projectImg" style="background-image:url('images/Fields.png');"" href='https://github.com/EdithBenvenuto/CemexWeb'></a><p>CemexWeb project</p></div>
            <div class="col-4"><a class="projectImg" style="background-image:url('images/macroCalculator.jpg');" href="#"></a><p>Macro Calculator</p></div>
            <div class="col-4"><a class="projectImg" style="background-image:url('images/healthyFood.jpg');" href="gallery/index.html"></a><p>Food Gallery</p></div>
          </div>
        </div>
        <div id ="contactSection">
          <div class="container">
            <div style="text-align:center">
              <h3>Contact Me</h3>
              <p>Swing by for a cup of coffee, or leave me a message:</p>
            </div>
            <div class="row">
              <div class="col-5 contactLeft">
                <img src="images/workplace.jpg" style="width:100%">
              </div>
              <div class="col-7 contactRight">
                <form method="post" action="contactMeForm.php">
                  <label for="fname">Name</label>
                  <input type="text" id="fname" name="name" placeholder="Your name...">
                  <label for="Email">Email</label>
                  <input type="email" id="email" name="email" placeholder="Your email...">
                  <label for="Comments">Comments</label>
                  <textarea id="Comments" name="comment" placeholder="Write something.." style="height:170px"></textarea>
                  <input id="contactSubmit" type="submit" value="Submit">
                </form>
              </div>
            </div>
            
          </div>
        </div>
    </div>
    <footer>
      <div class="row footerContent">
        <div class="col-4 copyDiv">
          <p class="copyright">Copyright © 2021 Edith Benvenuto. All rights reserved.</p>
        </div>
        <div class="col-4 footerNameDiv">
          <a class="footerName" href="index.html">Edith Benvenuto</a>
        </div>
        <div class="col-4 socialIconsFooter">
          <a href="https://www.linkedin.com/in/edithbenvenuto/" class="linkedinIcon sIconFooter"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://github.com/EdithBenvenuto" class="githubIcon sIconFooter"><i class="fab fa-github"></i></a>
          <a href="https://www.instagram.com/edith_benvenuto/" class="instagramIcon sIconFooter"><i class="fab fa-instagram"></i></a>
          <a href="mailto:edithpau_benvenuto@hotmail.com?Subject=Hello!%20I'm%20" class="emailIcon sIconFooter"><i class="far fa-envelope"></i></a>
        </div>
      </div>
    </footer>
  </body>
  <script src="js/script.js"></script>
</html>
