<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work | Elections Canada Party Comparison Page</title>
    <?php include_once 'include/head.php'; // include head ?>
</head>

    <body id="elections-canada" class="project-page">
       
       <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
       
        <header>
            <div class="wrapper">
                <?php include_once 'include/nav.php'; // include nav ?>
                <div class="title-text">
                    <h1>Elections Canada Party Comparison Page</h1>
                    <h2>UX Development</h2> 
                </div> 
                <img class="header-img" src="images/elections-canada/elections-canada-header-image-01.png" alt="Desktop screen shot of the Elections Canada party comparison page, as enivisioned by Tevis Bateman"> 
            </div>
        </header>
        <!-- end header -->
        <main id="content">
            <div class="wrapper">
                <section class="intro container">
                    <p>Elections Canada was the result of a two part project created to highlight the process of developing strong user experiences and interfaces from beginning to end. The goal of the project was to successfully design a page for Elections Canada that allowed users to easily compare the policies of Federal political parties leading up to an election. The scope of the project included a number of deliverables including a detailed content strategy, style guide and a working desktop-view prototype of the page.</p>
                    <div class="project-tools-skills">
                        <div class="tools">
                            <h3>Tools</h3>
                            <ul>
                                <li>Photoshop</li>
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
                                <li>Logo Design</li>
                                <li>Web Design</li>
                                <li>UI/UX Research</li>
                            </ul>
                        </div>
                    </div>
                    <div id="sticky-anchor">
                        <a href="new-york-post/index.html" id="sticky" class="out-link" target="_blank">Visit Live Site</a>
                    </div>
                </section>
                <!-- end project-intro container -->
                <section class="content-strategy container">
                    <div class="description">
                        <h3>Content Strategy</h3>
                        <p>The final deliverable for part one of the Elections Canada project was a detailed content strategy booklet. Working in a group, we defined clear goals for the project and created personas based on research regarding the primary and secondary target audience in order to understand how best to design for our users. Gap and competitive analyses were also completed to research the strengths and weaknesses of similar sites to our own. We also created a content map and laid out the site information architecture to better organize and understand the content of the page. All the data was compiled into a booklet which was designed by myself. For a closer closer look, please view the PDF below.</p>
                    </div> 
                    <img src="images/elections-canada/elections-canada-content-strategy-01.png" alt="Cover of the user experience and content strategy booklet for the Elections Canada party comparison page">
                    <a class="out-link" target="_blank" href="pdf/elections-canada-content-strategy.pdf">View PDF</a> 
                </section>
                <!-- end content strategy container -->
                <section class="style-guide container">
                    <div class="description">
                        <h3>Style Guide</h3>
                        <p>Once the preliminary user research and content management was complete we were then tasked with individually creating an style guide that would be used to inform the look and feel of the final page. Along with a clearly defined visual language, the style guide also included insite on the voice and tone the page should convey. Below is the style tile used to showcase the fonts, colors, buttons and text sizes to be used on the site. To see the full style guide please click the ‘view pdf’ link.</p>
                    </div>
                    <img src="images/elections-canada/elections-canada-style-tile.png" alt="The cover of the style guide booklet created for the Elections Canada party comparison page">
                    <a class="out-link" target="_blank" href="pdf/elections-canada-style-guide.pdf">View PDF</a> 
                </section>
                <!-- end style guide container -->
                <section class="logo container">
                    <div class="description">
                        <h3>Logo Design</h3>
                        <p>One part of creating the style guide for the party comparison page involved taking a stab at redesigning the dated Elections Canada logo. My primary goal was to create a clear, yet simple wordmark which worked well on it’s own while also complementing the style of the party comparison page. I also wanted to channel a bit of the ‘voting’ allusion found in ‘checkbox’ of the original logo. As a subtle reference to this element, I boxed off the maple leaf and left-aligned it to the text. The font used in the text is Gilroy.</p>
                    </div> 
                    <div class="gallery">
                       <div>
                           <img src="images/elections-canada/elections-canada-logo-old.png" alt="The original Elections Canada Logo">
                       </div>
                       <div>
                           <img src="images/elections-canada/elections-canada-logo-new.png" alt="The revised Elections Canada Logo designed by Tevis Bateman">
                       </div>
                    </div>
                </section>
                <!-- end logo design container -->
                <section class="party-comparison container">
                    <div class="description">
                        <h3>Party Comparison Page</h3>
                        <p>During our preliminary research we identified our target audience as users who were concerned about politics, but had an average or below average knowledge of party-policies. With this in-mind, our group followed the design sprint process which helped to inform my final user interface design choices. The idea behind the page design was to make the party comparison process as simple and intuitive as possible. This was accomplished by creating an additive filter system which allowed the user to decide which parties and policies to view. The images below should how policies are added to the party columns through the policy menu. The final page was a desktop prototype coded with HTML, CSS and JavaScript. </p>
                    </div>
                    <div class="gallery">
                       <div>
                           <img src="images/elections-canada/elections-canada-desktop-01.png" alt="desktop screen shot of the Elections Canada Party Comparison page">
                       </div>
                       <div>
                           <img src="images/elections-canada/elections-canada-desktop-02.png" alt="desktop screen shot of the Elections Canada Party Comparison page">
                       </div>
                       <div>
                           <img src="images/elections-canada/elections-canada-desktop-03.png" alt="desktop screen shot of the Elections Canada Party Comparison page">
                       </div>
                       <div>
                           <img src="images/elections-canada/elections-canada-desktop-04.png" alt="desktop screen shot of the Elections Canada Party Comparison page">
                       </div>
                    </div>
                </section>
                <!-- end party comparison container -->
                <nav class=project-nav>
                    <a class="previous" href="javascript-jquery.php">Previous</a> 
                    <a class="next no-project" href="#">Next</a>
                </nav>
            </div>
        </main>
        <!-- end main -->
        <?php include_once 'include/footer.php'; // include footer ?>
            <!-- scripts -->
            <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
            <script src="scripts/sticky-nav.min.js" type="text/javascript"></script>
            <script src="scripts/hide-mobile-menus.min.js" type="text/javascript"></script>
    </body>

</html>