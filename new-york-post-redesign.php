<!DOCTYPE html>
<html lang="en">
<?php include_once 'include/head.php'; // include head ?>

    <body id="new-york-post-redesign" class="project-page">
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                    <div class="title-text">
                        <h1>New York Post Landing Page</h1>
                        <h2>Responsive Web Design</h2> </div> <img class="header-img" src="images/new-york-post/new-york-post-header.png" alt="mobile and desktop screen shots of the redesigned New York Post website"> </div>
        </header>
        <!-- end header -->
        <main>
            <div class="wrapper">
                <section class="intro container">
                    <p>As an exercise in responsive design I redesigned the landing page for the New York Post. The purpose of this project was to create a fully responsive webpage that was readable across all devices. We were advised to work with complex content in order to explore the in-and-outs of responsive design. My inspiration came from newspaper layouts of the 1940’s, where content was crammed into an unending series  of columns. Consequently, I was also intrigued by the idea of making a web-page with the feel of a newspaper. </p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Illustrator</li>
                                <li>HTML/CSS</li>
                                <li>jQuery</li>
                                <li>SASS</li>
                                <li>Git</li>
                            </ul>
                        </div>
                        <div class="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Web Design</li>
                                <li>Responsive</li>
                                <li>UI / UX</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sticky-anchor"></div>
                        <a href="#" id="sticky" class="out-link" >Visit Live Site</a>
                </section>
                <!-- end project-intro container -->
                <section class="inspiration container">
                    <div class="description">
                        <h3>Starting Point</h3>
                        <p>The inspiration for this project started in print. Knowing the main constraint was to create a fully responsive layout, I felt that finding a way to work with multiple columns would offer a useful challenge. ‘Multiple columns’ instantly conjured images of congested newspapers of old, as you can see in the image of the The New York Times below. After researching ‘old newspapers’ I quickly found that the New York Post is one of the oldest daily newspapers in North America, beginning circulation in 1801. Seeing the current state of the tabloid-esque newspaper, I felt it would be fun to rebrand their homepage to re-capture a bit of their heritage.</p>
                    </div> <img src="images/new-york-post/responsive-layout.jpg" alt="The front page of the New York Times, June 6th, 1944"> </section>
                <!-- end inspiration container -->
                <section class="typography container">
                    <div class="description">
                        <h3>Typography</h3>
                        <p>Typographically, I began the project by closely examining the fonts classically used by the New York Times. I choose the strong, no-nonsense serif font, Heuristica, for the featured article title and body copy, paired with a condensed version of Franklin Gothic for the article headers. In combination, Franklin Gothic and Heuristica seemed to capture the classic 1940s feel I looking for. Roboto Light was used on all buttons and article subtext, and helped to provide some visual variety. Due to the text heavy design,finding and combining visually interesting fonts was a major part of the design process.</p>
                    </div> <img src="images/new-york-post/responsive-typography.svg" alt="a list of typefaces used in the New York Post Redisgn. Fonts include: Heuristica, Franklin Gothic and Roboto"> </section>
                <!-- end typography container -->
                <section class="color-palette container">
                    <div class="description">
                        <h3>Colour Palette</h3>
                        <p>Hoping to capture the feeling of an aged newspaper, I choose a warm yellow to act as the background colour for the site. The use of yellow also worked well as a colour variation on the New York Post’s current branding.</p>
                    </div>
                    <div class="swatches">
                        <div class="swatch swatch-01">
                            <p>Yellow</p>
                            <div class="swatch-codes">
                                <p>HEX #E1B451</p>
                                <p>RGB 255, 180, 10</p>
                            </div>
                        </div>
                        <div class="swatch swatch-02">
                            <p>Off Yellow</p>
                            <div class="swatch-codes">
                                <p>HEX #C09945</p>
                                <p>RGB 192, 153, 75</p>
                            </div>
                        </div>
                        <div class="swatch swatch-03">
                            <p>Black</p>
                            <div class="swatch-codes">
                                <p>HEX #231F20</p>
                                <p>RGB 35, 31, 32</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end color-palette container -->
                <section class="responsive container">
                    <div class="description">
                        <h3>Responsive Web Design</h3>
                        <p>As my first experience coding a responsive layout, I worked desktop down. This presented a series of challenges which revolved around compressing an already complex desktop layout into a single column layout for smaller devices. As I adjusted my screen size smaller, and smaller I identified all the points where the layout broke. I added a number of media queries to fix the braking areas of the site until the layout worked on every devices from an iphone 5 to a large desktop monitor.</p>
                    </div>
                    <div class="gallery">
                       <div><img src="images/new-york-post/new-york-post-desktop-02.png" alt="desktop sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/new-york-post/new-york-post-mobile-01.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/new-york-post/new-york-post-mobile-02.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                        <div><img src="images/new-york-post/new-york-post-mobile-03.png" alt="mobile sreen capture of the redesigned New York Post landing page"></div>
                    </div>
                </section>
                <!-- end responsive container -->
                <section class="menu container">
                    <div class="description">
                        <h3>Bottom Oriented Menu Bar</h3>
                        <p>While working on this project, one of our instructors presented an intriguing UI / UX lecture on the benefits of bottom oriented navigations. We were told that <a href="http://www.uxmatters.com/mt/archives/2013/02/how-do-users-really-hold-mobile-devices.php">49% of people use their phones with one-hand</a>, meaning that nearly half of all users have to stretch their thumbs to the top of their screen to navigate through many sites with traditional navigations.. Keeping this in mind, I decided to design a bottom oriented navigation to ease the pain of the thumbs using my site. The navigation consists of a search bar and menu. Due to the length of the menu, I placed the buttons on a slider to be swiped through.</p>
                    </div>
                    <div class="gallery">
                        <div><img src="images/new-york-post/responsive-mobile-menu-01.png" alt="mobile sreen capture showing the bottom oriented navigation with the menu closed"></div>
                        <div><img src="images/new-york-post/responsive-mobile-menu-02.png" alt="mobile sreen capture showing the bottom oriented navigation with the 'sections' open"></div>
                        <div><img src="images/new-york-post/responsive-mobile-menu-03.png" alt="mobile sreen capture showing the bottom oriented navigation with the 'search' bar open"></div>
                    </div>
                </section>
                <!-- end menu container -->
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.js" type="text/javascript"></script>
    </body>

</html>