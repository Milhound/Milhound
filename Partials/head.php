<head>
  <title>
    <?php 
    if (isset($title)) {
      echo($title);
    } else {
      echo('Milhound\'s Website');
    }
    ?>
  </title>
  <!-- SET META DATA -->
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <meta name="author" content="Daniel Milholland"/>
  <meta name="copyright" content="&copy; 2016 Daniel Milholland" />
  <meta name="contact" content="Milhound@gmail.com">
  <link rel="icon" type="image/png" href="/Images/Favicon.png">
  <link rel="apple-touch-icon" type="image/png" href="/Images/apple-touch-icon.png">
  <!-- Set Search Engine Data -->
  <meta name="Description" content="Personal Website of Daniel Milholland (@Milhound), IT enthusiast and aspiring developer." />
  <meta name="Keywords" content="Daniel, Milholland, Milhound, Personal, Website, Programming, Programmer, Portfolio, Web, Design, Rails, Java, PHP, HTML, HTML5, CSS, CSS3, Ruby, Python, Django, Front end, Back End, Developer" />
  <!-- Font -->
  <?php
    if (isset($_SESSION["darkmode"])) {
      $dark = $_SESSION["darkmode"];
      if ($dark == true) echo '<link rel="stylesheet" href="/CSS/dark.min.css">'."\n";
    } else {
      $_SESSION["darkmode"] = true;
      echo '<link rel="stylesheet" href="/CSS/dark.min.css">'."\n";
    }
    
    if (isset($css)) {
      echo '<link rel="stylesheet" href="/CSS/'. $css. '">'."\n";
    }
    echo '  <link rel="stylesheet" href="/CSS/main.min.css">'."\n";
    echo '  <script async src="/JS/google.js"></script>'."\n";
  ?>
</head>
