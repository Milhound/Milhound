<?php //Closing of content.php ?>
</div>
</div>
<!-- Footer -->
  <footer>
    <div class="copy">&copy; 2016 Daniel Milholland</div>
    <div class="footer-link"><a href="/resume">Resume</a> - <a href="javascript:darkmode()">
    <?php
        if($_SESSION["darkmode"] == false) {
          echo 'Dark Version';
        } else {
          echo 'Light Version';
        }
    ?>
    </a></div>
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
  </footer>