﻿<!DOCTYPE html>
<html>
<head>
    <title>Scallywag Tickets | About</title>
    <meta name="description" content="the place to score tickets without overpaying"> <!--gives a descrip which may be used by google  or other search engines-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="main-header">
        <nav class="nav main-nav">
            <!-- tells the website that there are links here-->
            <div id="nav-container">
                <div class="left">
                    <a href="home.php">LOGO IN TRAINING</a>
                </div>

                <div class="center">
                    <ul>
                        <!-- unordered list-->
                        <li id="center-right"><a href="tickets.php">TICKETS</a></li>
                        <li id="center-left"><a href="about.php">CONTACT/part that refuses to work</a></li>
                    </ul>
                </div>
                <div class="right">
                    <a href="login.php">LOGIN</a>
                </div>
            </div>
        </nav>
        <h1 class="company-name company-name-large">Scallywag Tickets</h1>
    </header>
    <hr> <!-- makes a boarder line-->
    <div class="search-home">
        <span><strong>LETS FIND YOU SOME TICKETS, GUY!</strong></span>
        <br />
        <div class="dropdown">
            <button class="dropbtn">HOW MANIES??</button>
            <div class="dropdown-content">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>
        </div>
        <br />
        <input type="text" name="location" placeholder="City or ZIP Code">
        <br />
        <input type="text" name="artist" placeholder="Artist">
        <button class="submit">SEARCH</button>
    </div>
    <br />
    <br> <!-- line break-->
    <br>
    <section>
        <h2>TOURS</h2>
        <div>
            <div>
                <strong>Jul 16</strong>
                &lt;&gt; <!-- temp fix to add space-->
                <span>Detroit, MI </span>
                &lt;&gt;
                <span>DTE ENergy Music Theatre</span>
                &lt;&gt;
                <button type="button">Buy Tickets</button>
                <hr>
            </div>
        </div>
        <div>
            <div>
                <strong>Jul 17</strong>
                &lt;&gt; <!-- temp fix to add space-->
                <span>Lansing, MI </span>
                &lt;&gt;
                <span>DHobo Music Theatre</span>
                &lt;&gt;
                <button type="button">Buy Tickets</button>
                <hr>
            </div>
        </div>
        <div>
            <div>
                <strong>Jul 20</strong>
                &lt;&gt; <!-- temp fix to add space-->
                <span>Minneapolis , MN </span>
                &lt;&gt;
                <span>1st Ave</span>
                &lt;&gt;
                <button type="button">Buy Tickets</button>
                <hr>
            </div>
        </div>
        <div>
            <div>
                <strong>Jul 22</strong>
                &lt;&gt; <!-- temp fix to add space-->
                <span>Minot, ND</span>
                &lt;&gt;
                <span>Some trash punk dude's house</span>
                &lt;&gt;
                <button type="button">Buy Tickets</button>
            </div>
        </div>

    </section>
    <footer class="main-footer">
        <div class="container main-footer-container">
            <h3 class="band-name">cheap cheap</h3>
            <ul class="nav footer-nav">
                <li>
                    <a href="https://facebook.com" target="_blank">
                        <img src="Images/face.png">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com" target="_blank">
                        <img src="Images/download.png">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>