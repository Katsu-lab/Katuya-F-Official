<?php include_once("common/get_json.php") ?>
<?php
    $title = "Portfolio - Katsuya F Official";
    $main = "PORTFOLIO";
    $url = "portfolio";
    $p = $data["portfolio"];
    $webSite = $p["webSite"];
    $webService = $p["webService"];
    $educationalSystem = $p["educationalSystem"];
    $paper = $p["paper"];
    $poster = $p["poster"];
    $drama = $p["drama"];

    include_once("common/head.php")
?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body class="lp">

<?php include_once("common/menu.php") ?>
<?php include_once("common/header.php") ?>

    <section id="main">

        <div class="category">
            <div class="title">
                <h3><?php echo $p["webSites"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                    <?php foreach ($webSite as $key => $val) : ?>
                    <div class="works">
                        <div class="worksHead">
                            <a href="<?php echo $val[0] ?>"><img src="img/portfolio/web-site/<?php echo $key ?>.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5><?php echo $val[1] ?></h5>
                            <p><?php echo $val[2] ?></p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p><?php echo $val[3] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["webServices"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                    <?php foreach ($webService as $key => $val) : ?>
                    <div class="works">
                        <div class="worksHead">
                            <a href="<?php echo $val[0] ?>"><img src="img/portfolio/web-service/<?php echo $key ?>.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5><?php echo $val[1] ?></h5>
                            <p><?php echo $val[2] ?></p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p><?php echo $val[3] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["educationalSystems"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                <?php foreach ($educationalSystem as $key => $val) : ?>
                <div class="works">
                    <div class="worksHead">
                    <a href=""><img src="img/portfolio/system/<?php echo $key ?>.png" alt=""></a>
                    </div>
                    <div class="worksName">
                        <h5><?php echo $val[0] ?></h5>
                        <p><?php echo $val[1] ?></p>
                    </div>
                    <hr>
                    <div class="worksBody">
                        <p><?php echo $val[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["papers"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                    <?php foreach ($paper as $key => $val) : ?>
                    <div class="works">
                        <div class="worksHead">
                            <a href="img/portfolio/paper/pdf/<?php echo $key ?>.pdf"><img src="img/portfolio/paper/img/<?php echo $key ?>.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5><?php echo $val[0] ?></h5>
                            <p><?php echo $val[1] ?></p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p><?php echo $val[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["posters"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                    <?php foreach ($poster as $key => $val) : ?>
                    <div class="works">
                        <div class="worksHead">
                            <a href="img/portfolio/poster/pdf/<?php echo $key ?>.pdf"><img src="img/portfolio/poster/img/<?php echo $key ?>.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5><?php echo $val[0] ?></h5>
                            <p><?php echo $val[1] ?></p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p><?php echo $val[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["dramas"] ?></h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">

                    <?php foreach ($drama as $key => $val) : ?>
                    <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/portfolio/drama/<?php echo $key ?>.jpeg" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5><?php echo $val[0] ?></h5>
                            <p><?php echo $val[1] ?></p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p><?php echo $val[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <?php include_once("common/footer.html") ?>
    </section>

</body>
</html>