<nav class="topnav">
  <a href="?page=projectLEDClock">Main</a> -
  <a href="resource/projects/LEDClock/main.c">Code</a> -
  <a href="?page=projectLEDClock&amp;sect=update">Update</a> -
  <a href="resource/projects/LEDClock">Resource</a>
</nav>

<article>

<?php
  switch($_GET["sect"]) {
  case "update":
    include 'resource/projects/LEDClock/update.htm';
    break;
  /*case "resource":
    include 'http://localhost/~trougnouf/resource/';
    break;*/
  default:
    include 'resource/projects/LEDClock/main.htm';
  }
?>


</article>