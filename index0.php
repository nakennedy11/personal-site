<html lang="en">
<!DOCTYPE html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="./style.css"/>
  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>

  <title>Noah Kennedy</title>
</head>

<body>
  <nav class="uk-navbar-container tm-navbar-container" uk-navbar uk-sticky uk-active>
    <div class="uk-navbar-left">
      <ul class="uk-navbar-nav">
        <li><a href="" uk-totop uk-scroll style="color: rgb(0, 0, 0)""></a></li>
        <li><a href="#aboutme" uk-scroll><span class="uk-text-secondary">About Me</span></a></li>
        <li><a href="#experience" uk-scroll><span class="uk-text-secondary">Work Experience</span></a></li>
        <li><a href="#classes" uk-scroll><span class="uk-text-secondary">Classes</span></a></li>
      </ul>
    </div>
    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        <li><a class="uk-button uk-button-text" href="./assets/NoahKennedyResume.pdf" target="_blank" style="color: rgb(0, 0, 0)">Résumé</a></li>
        <li><a href="mailto:nakennedy11@gmail.com" target="_blank" uk-icon="icon: mail" style="color: rgb(0, 0, 0)"></a></li>
        <li><a href="https://github.com/nakennedy11" target="_blank" uk-icon="icon: github" style="color: rgb(0, 0, 0)""></a></li>
        <li><a href="https://www.linkedin.com/in/noahakennedy/" target="_blank" uk-icon="icon: linkedin" style="color: rgb(0, 0, 0)""></a></li>
      </ul>
    </div>
  </nav>

  <div class="uk-container">
    <p class="uk-text-center uk-text-large"><span>Website Progress</span></p>
    <progress class="uk-progress" value="65" max="100"></progress>
  </div>

  <a class="anchor" id="aboutme"></a>
  <div class="uk-container">
    <h2>About Me</h2>
    <img class="uk-align-right uk-margin-remove-adjacent" src="./assets/me.jpg" width="250" height="250"/>
    <p>
      <?php echo file_get_contents("./assets/textfiles/aboutme.txt"); ?>
    </p>
  </div>

  <hr class="uk-divider-icon" id="test1">

  <a class="anchor" id="experience"></a>
  <div class="uk-container">
    <h2>Work Experience</h2>
    <ul uk-accordion="multiple: true">
      <li>
        <a class="uk-accordion-title" href="#">Your Company Here</a>
        <div class="uk-accordion-content">
          <p>For a reasonable offer, your company could be at the top of this list!</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Imprivata Software Engineering Co-op</a>
        <div class="uk-accordion-content">
          <p>
            <?php echo file_get_contents("./assets/textfiles/imprivata.txt"); ?>
          </p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Bain Capital Helpdesk Co-op</a>
        <div class="uk-accordion-content">
          <p><?php echo file_get_contents("./assets/textfiles/bain.txt"); ?></p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">D'Amore McKim Computer Operations</a>
        <div class="uk-accordion-content">
          <p>
            <?php echo file_get_contents("./assets/textfiles/computeroperations.txt"); ?>
          </p>
        </div>
      </li>
    </ul>
  </ul>
  </div>

  <hr class="uk-divider-icon">

  <a class="anchor" id="classes"></a>
  <div class="uk-container">
    <h2>Classes</h2>
    <ul uk-accordion="multiple: true">
      <li>
        <a class="uk-accordion-title" href="#">Software Development</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Programming Languages</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Database Design</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Theory of Computation</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Algorithms and Data Structures</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Web Development</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Computer Systems</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Logic and Computation</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Discrete Structures</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Object Oriented Design</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
      <li>
        <a class="uk-accordion-title" href="#">Fundamentals of Computer Science 1 & 2</a>
        <div class="uk-accordion-content">
          <p>Lorem ipsum dolor sit amet</p>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>
