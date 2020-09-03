<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="pasta-icon.ico">
        <link rel="apple-touch-icon" href="pasta-icon.ico">
        <link rel="stylesheet" href="pasta-eats-stylesheet.css">
        <title>Newsletter for 8/12-8/19 | News | Pasta Eats</title>
        <meta charset="utf-8">
        <meta name="description" content="The best cooking tutorials.">
        <meta name="author" content="Jude Tisdale">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body">
            <div class="main-content">
                <div class="article-heading">
                    <img src="newsletterimahe.jpg" alt="newsletterimahe.jpg">
                    <div class="overlay">
                        <div id="heading-one" class="light-text heading">
                            Newsletter for 8/12-8/19
                        </div>
                        <div id="subheading-one" class="light-text subheading">
                            August 19, 2020
                        </div>
                    </div>
                </div>
                <section class="article-section">
                    <div class="light-text paragraph" id="no-paragraph-one">
                        I've decided to keep tabs on my due projects and assignments at school using an app called ClickUp. They're not sponsored, but I do recommend it. They keep me on track for my projects, assignments, homework, and they also remind me to update this.
                    </div>
                    <div class="light-text paragraph" id="no-paragraph-two">
                        I've created a new temporary schedule for new updates and I think you testers will enjoy it. You may also notice this new page is different. It's the beginning of something very exciting: newsletters! We have one every week, and they replace these "What's new in..." pages so that it doesn't clutter up the homepage. A newsletter will be picked out and released every Wednesday and will contain news and changelogs to the website.
                    </div>
                    <div class="light-text paragraph" id="no-paragraph-three">
                        More exciting news: I think we will be able to purchase the domain name by the beginning of Alpha, but if all else fails, we might have to wait until near the beginning of Beta. Alpha testing should begin in Q4 2020 or Q1 2021, depending on the circumstances. Anyways, stay safe out there. This is the newsletter for the week of 8/12 to 8/19.
                    </div>
                </section>
                <section class="article-section" id="schedule-section">
                    <div class="light-text heading" id="schedule-heading">
                        Schedule Changes
                    </div>
                    <div class="light-text paragraph" id="schedule-paragraph-one">
                        The schedule I had in place was very hard to follow (update every 2 days), so I created a new schedule that was easier for me to follow. I will update the website every Tuesday, Thursday, and Sunday. From Sunday to Tuesday, this leaves me two days. From Tuesday to Thursday, this leaves me another two days. And from Thursday to Sunday, I get three days off. This schedule is practically the same, but since I get that little break during the weekend, I will be able to have more updates ready and delivered by the deadline.
                    </div>
                </section>
                <section class="article-section" id="versions-section">
                    <div class="light-text heading" id="versions-heading">
                        Version Changes<a href="#versions-paragraph-one">*</a>
                    </div>
                    <div class="light-text paragraph" id="versions-paragraph-one">
                        <i>*Please Note: We are not including versions that already have a changelog on the news section because it is unnecessary and would only cause consumption of time for us, who are already on tight schedules.</i>
                    </div>
                    <div class="light-text subheading" id="version-subheading-one">
                        Pasta Eats Pre-Alpha 1.3
                    </div>
                    <div class="light-text paragraph" id="version-subheading-one-paragraph-one">
                        <ul>
                            <li class="light-text item" id="ul-one-first-item">Changed "Changelog" to "News"</li>
                            <li class="light-text item" id="ul-one-second-item">Added newsletter for this week</li>
                            <li class="light-text item" id="ul-one-third-item">Changed update schedule</li>
                            <li class="light-text item" id="ul-one-fourth-item">Fixed a responsive issue with small devices</li>
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