<!Doctype HTML>
<html lang="en">
<?php
    $title = 'Daniel Milholland - Developer\'s Portfolio';
    $css = 'welcome.css';
    include('./Partials/head.php');
?>
<body>
    <?php include('./Partials/content.php'); ?>
    <section id="bio">
        <h2>Biography</h2>
        <p>
            My name is Daniel Milholland (<a href="https://twitter.com/Milhound" class="contact-link">@Milhound</a>). I am employed in <a href="http://www.gailwindslog.com/">Gail Winds Logistics</a> as the Operations Supervisor. However, I aspire to work in the information technology field, as a software developer or information security analyst. I am a quick learner and am highly dedicated to my studies. I am a coding hobbyist who is always striving to learn more, and create more complex applications.<br>           
        <br>
            My studies are currently focused on JavaScript, and making extensive use of Node.js. I enjoy the flexibility that comes with JavaScript, and its vast assortment of frameworks/libraries. To further my knowledge in information security, I am practicing with penetration testing operating systems (Kali/Parrot).<br>
        <br>
            As for emerging technologies, I'm quite interested in the <a href="https://www.rust-lang.org/">Rust Programming Language</a>. It appears to have worked out the pitfalls, of traditional the C/C++ language and promotes itself as the complete memory safe option for writing C-level applications. The language looks different than that of C/C++, and honestly, I love most of the syntax. 
        </p>
        <h2>Experience</h2>
        <p>
            I am fully self-taught and have used many great resources to obtain the level of knowledge I have now. <a href="https://teamtreehouse.com">Team Treehouse</a> taught me the basics of software development and the overall principles of programming design. <a href="https://www.thenewboston.com">Thenewboston</a> was a great resource to learn about, and practice with new technologies. However, I feel like most of my growth has come from communities on Discord/Slack, and other servers where I am able to communicate with other developers. I am always looking for new opportunities to learn more about programming. I currently have experience creating and making API requests, socket connections, and REST services.
        </p>
        <h4 class="subCategory">Languages</h4>
        <ul class="subList">
            <li><a href="#">JavaScript</a> (ES 2016)</li>
            <li><a href="#">Rust</a></li>
            <li><a href="#">Ruby</a></li>
            <li><a href="#">Python</a></li>
            <li><a href="#">PHP</a></li>
        </ul>
        <h4 class="subCategory">Tools</h4>
        <ul class="subList">
            <li><a href="#">NPM</a> - Node package manager</li>
            <li><a href="#">Git</a> - Version control</li>
            <li><a href="#">PIP</a> - Python package manager</li>
            <li><a href="#">Gulp</a> - Script automation</li>
            <li><a href="#">PM2</a> - Process manager for Linux</li>
            <li><a href="#">RVM</a> - Ruby version manager</li>
        </ul>
        <h2>Community</h2>
        <h3 class="subCategory">Organizations</h3>
        <p class="subParagraph">Currently a part of the following communities:</p>
        <ul class="subList">
            <li><a href="https://discord.gg/0posucgIpaWTdKjp">The Geek Corner</a> - Discord community of aspiring developers.</li>
            <li><a href="https://www.discordapp.com/">Discord</a> - Communication applicaiton</li>
        </ul>
        <h3 class="subCategory">Projects</h3>
        <p class="subParagraph">Currently I am working on the following projects:</p>
        <ul class="subList">
            <li><a href="https://github.com/Milhound/Hound-Bot">Hound Bot</a> - Advanced Discord chat bot for server moderation, and improving user experience.</li>
            <li><a href="https://wowstats.xyz">Wow Stats</a> - Website created using Node.js technologies and the Battle.net API to create relavent statistics pages.</li>
            <li><a href="https://github.com/Milhound/Rust-Bot">Rust Bot</a> - Discord Bot written in the Rust Programming Language - Based of an earlier version of Hound Bot</li>
        </ul>             
    </section>
    <?php 
        include('./Partials/portfolio.php');
        include('./Partials/footer.php');
    ?>
</body>
</html>


