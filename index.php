<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bananouille</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav id="sidebar">
    <ul>
      <li><a href="?page=about">About</a></li>
      <li class="supmenu"><a href="?page=projects">Projects</a></li>
      <!-- <ul class="submenu"> -->
	<li class="submenu"><a href="?page=projectLEDClock">LED clock</a></li>
	<li class="submenu"><a href="http://diy.soylent.me/recipes/the-trougnouf-diet-117">Nutrition</a></li>
      <!-- </ul> -->
      <li><a href="/resource/BenoitBrummerCV.pdf">Résumé</a></li>
    </ul>
  </nav>
  <main>
  <?php
  switch($_GET["page"]) {
  case "about":
    include 'pages/about.htm';
    break;
  case "projects":
    include 'pages/projects.htm';
    break;
  case "projectLEDClock":
    include 'pages/projectLEDClock.php';
    break;
  case "cv":
    include 'pages/cv.php';
    break;
  default:
    include 'pages/about.htm';
  }
  ?>
  </main>
</body>
</html>
