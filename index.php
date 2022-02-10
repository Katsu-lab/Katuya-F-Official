<?php include("common/get_json.php") ?>
<?php
    $title = "HOME - Katsuya F Official";
    $main = "WELCOME";
    $url = "index";
    $i = $data["index"];

    include("common/head.php")
?>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="lp">

<?php include("common/menu.php") ?>
<?php include("common/header.php") ?>

    <section id="main">

        <section id="profile">
            <div class="big-item right-side">
                <h2>PROFILE</h2>
            </div>
            <div class="gridL">
                <div class="col col-left"></div>
                <div class="col col-title">
                    <h3>Profile</h3>
                    <hr>
                    <p>Who <br> are <br> you?</p>
                </div>
                <div class="col col-body">
                    <div class="contents">
                        <div class="contents-body">
                            <div class="sample">
                                <img src="img/<?php echo $i["profile"] ?>" alt="">
                                <h4><span>K</span>atsuya <span> F</span>ukuoka</h4>
                            </div>
                            <div class="more">
                                <a href="profile.php" class="btn btnRed">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-right"></div>
            </div>
        </section>

        <section id="skill">
            <div class="big-item left-side">
                <h2>SKILL</h2>
            </div>
            <div class="gridR">
                <div class="col col-left"></div>
                <div class="col col-body">
                    <div class="contents">
                        <div class="contents-body">
                            <div class="sample">
                                <img src="img/<?php echo $i["skill"] ?>" alt="">
                            </div>
                            <div class="more">
                                <a href="skill.php" class="btn btnBlue">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-title">
                    <h3>Skill</h3>
                    <hr>
                    <p>What can you do?</p>
                </div>
                <div class="col col-right"></div>
            </div>
        </section>

        <section id="portfolio">
            <div class="big-item right-side">
                <h2>PORTFOLIO</h2>
            </div>
            <div class="gridL">
                <div class="col col-left"></div>
                <div class="col col-title">
                    <h3>Portfolio</h3>
                    <hr>
                    <p>What did you create?</p>
                </div>
                <div class="col col-body">
                    <div class="contents">
                        <div class="contents-body">
                            <div class="sample">
                                <img src="img/portfolio/web-service/<?php echo $i["portfolio"] ?>" alt="">
                                <h4><span>R</span>esearch <span>I</span>ntegrated <span>D</span>evelopment <span>E</span>nvironment</h4>
                            </div>
                            <div class="more">
                                <a href="portfolio.php" class="btn btnGreen">MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-right"></div>
            </div>
        </section>

        <section id="contact">
            <div class="big-item left-side">
                <h2>CONTACT</h2>
            </div>
            <div class="gridR">
                <div class="col col-left"></div>
                <div class="col col-body">
                    <div class="contents">
                        <div class="contents-body">
                            <div class="sample">
                                <div class="mail-box">
                                    <div class="box-title"><?php echo $i["mail"]["business"] ?></div>
                                    <p><a><?php echo $i["mail"]["businessAddress"] ?></a></p>
                                </div>
                                <div class="mail-box">
                                    <div class="box-title"><?php echo $i["mail"]["private"] ?></div>
                                    <p><a><?php echo $i["mail"]["privateAddress"] ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-title">
                    <h3>Contact</h3>
                    <hr>
                    <p>How <br> can I contact?</p>
                </div>
                <div class="col col-right"></div>
            </div>
        </section>

        <?php include("common/footer.html") ?>
    </section>

</body>
</html>