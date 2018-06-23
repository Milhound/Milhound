<!-- Sidebar -->
<div id="sidebar">
    <img src="/Images/Daniel.jpg" alt="Daniel Milholland">
    <h2>Contact</h2>
    <!-- Email -->
    <a href="mailto:Milhound@gmail.com?Subject=Milhound.com%20-%20(Contact)" class="contact-link">Email</a>
    <!-- GitHub -->
    <a href="https://github.com/Milhound" class="contact-link">GitHub</a>
    <!-- Twitter -->
    <a href="https://twitter.com/Milhound" class="contact-link">Twitter</a>
    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/milholland" class="contact-link">LinkedIn</a>
    <!-- Skype -->
    <a href="skype:milhound?call" class="contact-link">Skype</a>
    <!-- YouTube -->
    <a href="https://www.youtube.com/channel/UCiwdKkmaeqMiMjsda13mzvg" class="contact-link">YouTube</a>
    <!-- Google Plus -->
    <a href="https://google.com/+DanielMilholland-Milhound" class="contact-link">Google +</a>               
    <div class="modeToggle">
    <?php 
        if($_SESSION["darkmode"] == false){
            echo '<a href="javascript:darkmode()">Dark Version</a>';
        } else {
            echo '<a href="javascript:darkmode()">Light Version</a>';
        }
    ?>
    </div>
</div>