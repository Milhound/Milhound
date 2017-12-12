<?php session_start(); ?>
<!Doctype HTML>
<html lang="en">
<?php
    $title = 'Daniel Milholland - Resume';
    $css = 'resume.min.css';
    include('./Partials/head.php');
?>
<body>
    <?php include('./Partials/content.php'); ?>
    <section id="resume">
        <!-- Title -->
        <div class="title">
            <h2>Daniel Milholland</h2>
            <span>1415 Deodara | Cedar Park, TX 78613</span><br>
            <span>(512) 763-0875 | <a href="mailto:dsmilholland@gmail.com">DSMilholland@gmail.com</a></span>
        </div>
        <hr style="width:95%">
        <!-- Goal -->
        <h3>Objective</h3>
        <p>
            Detail-oriented programmer seeking a professional career in software development.
            My desired career is one that will challenge and utilize my skills, as well as
            continuing to further my knowledge in programming.
        </p>
        <!-- Education -->
        <h3>Education</h3>
        <p>
            University of Texas-San Antonio <span>December 2012-Present</span><br>
            Bachelor of Science in Computer Science<br>
        <br>
        Oak Ridge High School<span>Graduated May 2011</span><br>
        Conroe, TX<br>
        </p>
        <!-- Skills -->
        <h3>DEVELOPMENT SKILLS</h3>
        <table class="table-padding">
            <tr>
                <td>Languages:</td>
                <td>Python, Ruby, Rust, HTML, CSS, XML, JavaScript, Git, Swift</td>
            </tr>
            <tr>
                <td>Preprocessors:</td>
                <td>Coffee Script, SASS, HAML, ERB</td>
            </tr>
            <tr>
                <td>Libraries:</td>
                <td>Ruby on Rails, RSpec, jQuery, Express, Node.js, Django</td>
            </tr>
            <tr>
                <td>O/S:</td>
                <td>UNIX/BSD, Linux, Windows, Mac</tr>
            </tr>
            <tr>
                <td>Tools:</td>
                <td>Gulp, NPM, PIP, VIM, Atom, Visual Studio, Github/Bit Bucket</td>
            </tr>
            <tr>
                <td>Database:</td>
                <td>MySQL, Postgres, SQLite 3</td>
            </tr>
        </table>
        <!-- Employment History -->
        <h3>Employment History</h3>
        <div class="bold">GAIL WINDS LOGISTICS</div> – Houston, TX<span>July 1, 2013 – Present</span>
        <p><i>Operations Supervisor
        </i></p>
        <div class="bold">HSS SECURITY</div> – San Antonio, TX<span>March 22, 2013 – July 1, 2013</span>
        <p><i>Security Officer
        </i></p>
        <div class="bold">TEXAS DEPARTMENT OF CRIMINAL JUSTICE</div> – Huntsville, TX<span>January 4, 2012 – March 20, 2013</span>
        <p><i>Correctional Officer - III
        </i></p>
        <div class="bold">TARGET CORPORATION</div> – Spring, TX<span>June 2011 – November 2011</span>
        <p><i>Flow Team Member/Back stock
        </i></p>
    </section>
</div>
</div>
</body>
</html>
