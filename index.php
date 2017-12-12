<?php session_start(); ?>
<!Doctype HTML>
<html lang="en">
<?php
    $title = 'Daniel Milholland - Developer\'s Portfolio';
    $css = 'welcome.min.css';
    include('./Partials/head.php');
?>
<body>
    <?php include('./Partials/content.php'); ?>
    <section id="bio">
        <h2>Biography</h2>
        <div class="menu-button change" onclick="change(this, 1)">
            <div class="bar1"></div>
            <div class="bar2"></div>
        </div>
        <div id="bio-paragraph" class="active">
            <p>
                My name is Daniel Milholland (<a href="https://twitter.com/Milhound" class="contact-link">@Milhound</a>). I am employed in <a href="http://www.gailwindslog.com/">Gail Winds Logistics</a> as the Operations Supervisor. However, I aspire to work in the information technology field, as a software developer or information security analyst. I am a quick learner and am highly dedicated to my studies. I am a coding hobbyist who is always striving to learn more, and create more complex applications.<br>           
            <br>
                My studies are currently focused on JavaScript, and making extensive use of Node.js. I enjoy the flexibility that comes with JavaScript, and its vast assortment of frameworks/libraries. To further my knowledge in information security, I am practicing with penetration testing operating systems (Kali/Parrot).<br>
            <br>
                As for emerging technologies, I'm quite interested in the <a href="https://www.rust-lang.org/">Rust Programming Language</a>. It appears to have worked out the pitfalls, of traditional the C/C++ language and promotes itself as the complete memory safe option for writing C-level applications. The language looks different than that of C/C++, and honestly, I love most of the syntax. 
            </p>
        </div>       
        <h2>Experience</h2>
        <div class="menu-button change" onclick="change(this, 2)">
            <div class="bar1"></div>
            <div class="bar2"></div>
        </div>
        <div id="experience" class="active">
            <p>
                I am fully self-taught and have used many great resources to obtain the level of knowledge I have now. <a href="https://teamtreehouse.com">Team Treehouse</a> taught me the basics of software development and the overall principles of programming design. <a href="https://www.thenewboston.com">Thenewboston</a> was a great resource to learn about, and practice with new technologies. However, I feel like most of my growth has come from communities on Discord/Slack, and other servers where I am able to communicate with other developers. I am always looking for new opportunities to learn more about programming. I currently have experience creating and making API requests, socket connections, and REST services.
            </p>
            <div class="row">
                <div class="item">
                    <h4 class="subCategory">Languages</h4>
                    <ul class="subList">
                        <li>JavaScript - (ES 2016)</li>
                        <li>Rust</li>
                        <li>Ruby</li>
                        <li>Python</li>
                        <li>PHP</li>
                    </ul>
                </div>
                <div class="item">
                    <h4 class="subCategory">Tools</h4>
                    <ul class="subList">
                        <li><a href="https://www.npmjs.com/">NPM</a> - Node package manager</li>
                        <li><a href="https://git-scm.com/">Git</a> - Version control</li>
                        <li><a href="https://pypi.python.org/pypi/pip">PIP</a> - Python package manager</li>
                        <li><a href="http://gulpjs.com/">Gulp</a> - Script automation</li>
                        <li><a href="http://pm2.keymetrics.io/">PM2</a> - Node.js process manager for Linux</li>
                        <li><a href="https://rvm.io/">RVM</a> - Ruby version manager</li>
                    </ul>
                </div>
                <div class="item">
                    <h4 class="subCategory">Operating Systems</h4>
                    <ul class="subList">
                        <li>Windows</li>
                        <li>Mac OSX</li>
                        <li>Arch Linux</li>
                        <li>Ubuntu</li>
                        <li>Debian - Kali/Parrot</li>
                        <li>Fedora</li>
                    </ul>
                </div>
            </div>
        </div>
        <h2>Community</h2>
        <div class="menu-button change" onclick="change(this, 3)">
            <div class="bar1"></div>
            <div class="bar2"></div>
        </div>
        <div id="community" class="active">
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
        </div>     
    </section>
    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="menu-button change" onclick="change(this, 4)">
            <div class="bar1"></div>
            <div class="bar2"></div>
        </div>
        <div id="examples" class="active">
            <h4>JavaScript</h4>
            <div class="javascript">
                <ul>
                <li class="item">
                    <a href="https://bitbucket.org/Milhound/wowstats">Wowstats.xyz</a>
                    <img src="/Images/wowstats.png" alt="Wowstats">
                </li>
                <li class="item">
                    <a href="https://github.com/Milhound/Hound-Bot.git">Hound Bot</a>
                    <img src="/Images/Milhound-Icon-Blue.jpg" alt="Milhound">
                </li>
                </ul>
            </div>
            <!-- Rails -->
            <h4>Rails</h4>
            <div class="rails">
                <ul>
                <li class="item">
                    <a href="http://rails.milhound.com/">Milhound.com (Previous Version)</a>
                    <img src="/Images/Milhound-Screenshot.jpg" alt="Milhound.com (Old)">
                </li>
                <li class="item">
                    <a href="https://github.com/Milhound/Rails-Test-1.git">Rails Flexbox</a>
                    <img src="/Images/Bear.jpg" alt="Blog">
                </li>
                <li class="item">
                    <a href="https://github.com/Milhound/Website.git">Blog</a>
                    <img src="/Images/Rails.jpg" alt="Rails">
                </li>
                </ul>
            </div>
            <!-- PHP -->
            <h4>PHP</h4>
            <div class="php">
                <ul>
                <li class="item">
                    <a href="https://www.milhound.com">Milhound</a>
                    <img src="/Images/Milhound.png" alt="Milhound.com">
                </li>
                <li class="item">
                    <a href="http://www.gailwindslog.com">Gail Winds Logistics</a>
                    <img src="/Images/Gailwindslog.png" alt="Gail Winds Log">
                </li>
                </ul>
            </div>
            <!-- Rust -->
            <h4>Rust</h4>
            <div class="rust">
                <ul>
                <li class="item">
                    <a href="https://github.com/Milhound/Rust-Bot.git">Rust Bot</a>
                    <img src="/Images/Rust.jpg" alt="Rust Bot">
                </li>
                </ul>
            </div>
            <!-- Python -->
            <h4>Python</h4>
            <div class="python">
                <uL>
                <li class="item">
                    <a href="https://github.com/Milhound/yodle-challenge.git">Yodle Challenge</a>
                    <img src="/Images/Yodle.png" alt="Yodle Challenge">
                </li>
                <li class="item">
                    <a href="https://github.com/Milhound/Lottery.git">Lottery</a>
                    <img src="/Images/Lottery.png" alt="Lottery - Python">
                </li>
                <li class="item">
                    <a href="https://github.com/Milhound/Magic-the-Gathering/tree/master">Magic The Gathering</a>
                    <img src="/Images/MTG.png" alt="MTG - Python">
                </li>
                </uL>
            </div>
        </div>
    </section>
<?php 
    include('./Partials/scripts.php');
?>
</div>
</div>
</body>
</html>


