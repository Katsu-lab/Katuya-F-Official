<?php include_once("common/get_json.php") ?>
<?php
    $title = "Profile - Katsuya F Official";
    $main = "PROFILE";
    $url = "profile";
    $p = $data["profile"];
    $basicInformation = $p["basicInformation"];
    $educationalBackground = $p["educationalBackground"];
    $background = $p["educationalBackground"];
    $community = $p["community"];

    include_once("common/head.php")
?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body class="lp">

<?php include_once("common/menu.php") ?>
<?php include_once("common/header.php") ?>

    <section id="main">

        <div class="category">
            <div class="title">
                <h3><?php echo $p["basicInfo"] ?></h3>
                <hr>
            </div>
            <table class="basic">
            <?php foreach ($basicInformation as $key => $val) : ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td><?php echo $val ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["educationalBack"] ?></h3>
                <hr>
            </div>
            <table>
            <?php foreach ($educationalBackground as $key => $val) : ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td><?php echo $val ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["back"] ?></h3>
                <hr>
            </div>
            <table>
            <?php foreach ($background as $key => $val) : ?>
                <tr>
                    <th><?php echo $key ?></th>
                    <td><?php echo $val ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["commu"] ?></h3>
                <hr>
            </div>
            <table class="group">
            <?php foreach ($community as $key => $val) : ?>
                <tr>
                    <td><a href=<?php echo $key ?>>・<?php echo $val ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $p["research"]["title"] ?></h3>
                <hr>
            </div>
            <div class="box">
                <p><?php echo $p["research"]["content"] ?></p>
            </div>
        </div>
        
        <div class="category">
            <div class="title">
                <h3><?php echo $p["view"]["title"] ?></h3>
                <hr>
            </div>
            <div class="box">
                <p?><?php echo $p["view"]["content"] ?></p>
            </div>
        </div>

        <?php include_once("common/footer.html") ?>
    </section>
</body>
</html>