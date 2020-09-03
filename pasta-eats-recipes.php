<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="pasta-icon.ico">
        <link rel="apple-touch-icon" href="pasta-icon.ico">
        <link rel="stylesheet" href="pasta-eats-stylesheet.css">
        <title>Recipes | Pasta Eats</title>
        <meta charset="utf-8">
        <meta name="description" content="The best cooking tutorials.">
        <meta name="author" content="Jude Tisdale">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body">
        <div class="content">
            <div class="main-content">
                <a href="recipes-buttermilk-biscuits.php" class="wrap">
                    <div class="article-content" id="recipes-buttermilk-biscuits" class="wrap">
                        <img src="biscuits-buttermilk-img.jpg" alt="biscuits-buttermilk-img.jpg">
                        <div class="article-description">
                            <div class="heading">
                                How to bake easy buttermilk biscuits
                            </div>
                            <div class="subheading">
                                AUGUST 17, 2020
                            </div>
                        </div>
                    </div>
                </a>
            </div>
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
    </body>
</html>