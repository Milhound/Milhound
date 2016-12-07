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
  <link rel="icon" type="image/png" href="images/Favicon.png">
  <link rel="apple-touch-icon" type="image/png" href="images/apple-touch-icon.png">
  <!-- Set Search Engine Data -->
  <meta name="Description" content="Personal Website of Daniel Milholland (@Milhound), IT enthusiast and aspiring developer." />
  <meta name="Keywords" content="Daniel, Milholland, Milhound, Personal, Website, Programming, Programmer, Portfolio, Web, Design, Rails, Java, PHP, HTML, HTML5, CSS, CSS3, Ruby, Python, Django, Front end, Back End, Developer" />
  <!-- Font -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300' rel='stylesheet' type='text/css'>
  <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="CSS/main.css">
  <?php 
    if (isset($css)) {
      echo("<link rel=\"stylesheet\" href=\"CSS/{$css}\">");
    }
  ?>
  <!-- Google Analytics -->
  <script async src="JS/google.js"></script>
</head>