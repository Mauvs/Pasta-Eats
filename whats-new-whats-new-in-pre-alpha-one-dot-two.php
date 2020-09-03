<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="pasta-icon.ico">
        <link rel="apple-touch-icon" href="pasta-icon.ico">
        <link rel="stylesheet" href="pasta-eats-stylesheet.css">
        <title>What's new in Pre-Alpha 1.2? | News | Pasta Eats</title>
        <meta charset="utf-8">
        <meta name="description" content="The best cooking tutorials.">
        <meta name="author" content="Jude Tisdale">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body">
        <div class="content">
            <div class="main-content">
                <div class="article-heading">
                    <img src="update-img.png" alt="update-img.png">
                    <div class="overlay">
                        <div id="heading-one" class="light-text heading">
                            What's new in Pre-Alpha 1.2?
                        </div>
                        <div id="subheading-one" class="light-text subheading">
                            August 17, 2020
                        </div>
                    </div>
                </div>
                <section class="article-section">
                    <div class="light-text paragraph" id="no-paragraph-one">
                        I was right, today was the first day of school and I received a ton of homework. However, I was able to finish this version right before bed and was able to get a little bit of sleep. Anyway, let's get into the changes.
                    </div>
                </section>
                <section class="article-section" id="additions-section">
                    <div class="light-text heading" id="additions-heading">
                        Additions
                    </div>
                    <div class="light-text paragraph" id="additions-paragraph-one">
                        <ul>
                            <li class="light-text item" id="ul-one-item-one">Added the recipes section</li>
                            <li class="light-text item" id="ul-one-item-two">Added <a href="recipes-buttermilk-biscuits.php">How to bake easy buttermilk biscuits</a></li>
                            <li class="light-text item" id="ul-one-item-three">Added <a href="whats-new-whats-new-in-pre-alpha-one-dot-two.php">What's new in Pre-Alpha 1.2?</a></li>
                        </ul>
                    </div>
                </section>
                <footer class="footer" id="below">
                    <div class="sections">
                        <div class="heading-foot">
                            Pasta Eats
                        </div>
                        <nav class="lead">
                            <a href="pasta-eats.php" class="a-foot">Homepage</a>
                            <br>
                            <a href="pasta-eats-recipes.php" class="a-foot">Recipes</a>
                            <br>
                            <a href="pasta-eats-whats-new.php" class="a-foot">News</a>
                        </nav>
                    </div>
                    <div class="contacts">
                        <div class="heading-foot">
                            Contacts
                        </div>
                        <nav class="lead">
                            <div class="subheading-foot">
                                Contributors
                            </div>
                            <a href="mailto:minecraft36590@gmail.com" class="a-foot">Jude Tisdale</a>
                            <br>
                            <a class="a-foot">Anonymous Contributor</a>
                            <br>
                            <div class="subheading-foot">
                                Pre-Alpha Testers
                            </div>
                            <a href="mailto:g.tisdale@icloud.com" class="a-foot">Gerritt Tisdale</a>
                            <br>
                            <a href="mailto:jaynecorrea8@gmail.com" class="a-foot">Jayne Correa</a>
                        </nav>
                    </div>
                </footer>
                <script>
                    function responsive(div) {
                        if (div.matches) {
                            var versions = document.getElementsByClassName("versions");
                            var i;
                            for (i = 0; i < versions.length; i++) {
                            versions[i].remove();
                            }
    
                            var contacts = document.getElementsByClassName("contacts");
                            var j;
                            for (j = 0; j < contacts.length; j++) {
                            contacts[j].remove();
                            }
                        }
                    }
    
                    var div = window.matchMedia("(max-width: 574px)");
                    responsive(div);
                    div.addListener(responsive);
                </script>
            </div>
        </div>
    </body>
</html>