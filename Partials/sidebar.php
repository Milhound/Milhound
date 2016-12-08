<!-- Sidebar -->
<div id="sidebar">
    <img src="/Images/Daniel.jpg" alt="Daniel Milholland">
    <h2>Contact</h2>
    <!-- Email -->
    <a href="mailto:Milhound@gmail.com?Subject=Milhound.com%20-%20(Contact)" class="contact-link">Email</a>
    <!-- GitHub -->
    <a href="https://github.com/Milhound" class="contact-link">GitHub</a>
    <a href="https://discord.me/Milhound">Discord</a>
    <!-- Twitter -->
    <a href="https://twitter.com/Milhound" class="contact-link">Twitter</a>
    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/milholland" class="contact-link">LinkedIn</a>
    <!-- Skype -->
    <a href="skype:milhound?call" class="contact-link">Skype</a>
    <!-- Facebook -->
    <a href="https://facebook.com/MilhoundPage" class="contact-link">Facebook</a>
    <!-- YouTube -->
    <a href="https://youtube.com/c/Milhoundz" class="contact-link">YouTube</a>
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
    <!-- Social Share -->
    <div class="social">
        <h3>Share</h3>
        <!-- Facebook -->
        <button>
            <span onclick="javascript:window.open('http://www.facebook.com/sharer.php?u=http://www.milhound.com/','popup','width=657,height=400');" class="socicon-facebook"></span>
        </button>
        <!-- Twitter -->
        <button>
            <span onclick="javascript:window.open('https://twitter.com/home?status=Check%20out%20www.milhound.com/%20-%20by%20%40Milhound', '_blank', 'toolbar=no,width=500, height=300, left=450, top=200');" class="socicon-twitter"></span>
        </button>
        <!-- Google Plus -->
        <button>
            <span onclick="javascript:window.open('https://plus.google.com/share?url=https://www.milhound.com/', '_blank', 'toolbar=no,width=500, height=300, left=450, top=200');" class="socicon-googleplus"></span>
        </button>
    </div>
</div>