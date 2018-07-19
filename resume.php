<?php session_start(); ?>
<!Doctype HTML>
<html lang="en">
<?php
    $title = 'Daniel Milholland - Resume';
    $css = 'resume.css';
    include('./Partials/head.php');
?>
<body>
    <?php include('./Partials/content.php'); ?>
    <section id="resume">
        <!-- Title -->
        <div class="title">
            <h2>Daniel Milholland</h2>
            <span><a href="mailto:dsmilholland@gmail.com">DSMilholland@gmail.com</a></span>
        </div>
        <hr style="width:95%">
        <!-- Goal -->
        <h3>Objective</h3>
        <p>
        Detail-oriented technical specialist seeking a career in information technology that will challenge and utilize my skills, as well as continue to further my knowledge
        </p>
        <!-- Education -->
        <h3>Education</h3>
        <p>
            Lone Star Community College <span>May 2017-Present</span><br>
            <br>
            University of Texas-San Antonio <span>December 2014-Present</span><br>
            Bachelor of Science in Computer Science<br>
        </p>
        <!-- Skills -->
        <h3>TECHNICAL SKILLS</h3>
        <table class="table-padding">
            <tr>
                <td>O/S:</td>
                <td>macOS, Windows 10, iOS, Android, Linux (Ubuntu, Fedora, Arch)</td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td>Java, JavaScript, Python, Ruby, PHP, HTML, CSS, Git</td>
            </tr>
            <tr>
                <td>SaaS Products:</td>
                <td>Salesforce, MaaS360, Storage (Box, Google Drive, Dropbox), Office365, BigFix, GSuite, Amazon Web Services (AWS)</td>
            </tr>
        </table>
        <!-- Employment History -->
        <h3>Employment History</h3>
        <div class="bold">IBM</div> - Austin, TX<span>April 14, 2018</span>
        <p><i>Technical Support Engineer II - MaaS360</i></p>
        <ul style="list-style-type: square;margin-left:1.5em;">
            <li>Provided service walkthroughs</li>
            <li>Informed Administrators of new product changes</li>
            <li>Troubleshooted customer environments and mobile devices</li>
        </ul>
        <div class="bold">GAIL WINDS LOGISTICS</div> – Houston, TX<span>July 1, 2013 – April 13, 2018</span>
        <p><i>Operations Supervisor</i></p>
        <ul style="list-style-type: square;margin-left:1.5em;">
            <li>Developed and maintained server database to allow for a file sharing system with remote access</li>
            <li>Administered repairs, updates and completed configuration of Windows and Mac systems</li>
            <li>Trained employees in Windows and Mac operating systems</li>
            <li>Assisted end-users having hardware, software and/or networking issues</li>
            <li>Managed troubleshooting international client’s issues regarding shipments departing/arriving in the United States</li>
        </ul>
        <div class="bold">HSS SECURITY</div> – San Antonio, TX<span>March 22, 2013 – July 1, 2013</span>
        <p><i>Security Officer</i></p>
        <ul style="list-style-type: square;margin-left:1.5em;">
            <li>Provided supervision for patients and staff in a hospital environment</li>
        </ul>
        <div class="bold">TEXAS DEPARTMENT OF CRIMINAL JUSTICE</div> – Huntsville, TX<span>January 4, 2012 – March 20, 2013</span>
        <p><i>Correctional Officer - III</i></p>
        <ul style="list-style-type: square;margin-left:1.5em;">
            <li>Supervised and assisted with rehabilitating offenders into society.</li>
        </ul>
    </section>
</div>
</div>
</body>
</html>
