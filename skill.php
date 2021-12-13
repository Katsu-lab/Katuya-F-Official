<?php include_once("common/get_json.php") ?>
<?php
    $title = "Skill - Katsuya F Official";
    $main = "SKILL";
    $url = "skill";
    $s = $data["skill"];
    $programmingBusiness = $s["programming"]["business"];
    $programmingBusinessNum = count($programmingBusiness) + 1;
    $programmingHobby = $s["programming"]["hobby"];
    $programmingHobbyNum = count($programmingHobby) + 1;
    $otherBusiness = $s["other"]["business"];
    $otherBusinessNum = count($otherBusiness) + 1;
    $otherHobby = $s["other"]["hobby"];
    $otherHobbyNum = count($otherHobby) + 1;
    $otherOther = $s["other"]["other"];
    $otherOtherNum = count($otherOther) + 1;
    $certificate = $s["certificate"];
    $project = $s["project"];

    include_once("common/head.php")
?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skill.css">
</head>
<body class="lp">

<?php include_once("common/menu.php") ?>
<?php include_once("common/header.php") ?>

    <section id="main">

        <div class="category">
            <div class="title">
                <h3><?php echo $s["skillSet"] ?></h3>
                <hr>
            </div>

            <div class="item">
                <h3><?php echo $s["program"] ?></h3>
                <table>
                    <tr>
                        <th><?php echo $s["skillLevel"] ?></th>
                        <th><?php echo $s["languageName"] ?></th>
                    </tr>
                    <tr>
                        <td rowspan="<?php echo $programmingBusinessNum ?>"><?php echo $s["business"] ?></td>
                        <td>HTML5</td>
                    </tr>
                    <?php foreach ($programmingBusiness as $val) : ?>
                    <tr>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td rowspan="<?php echo $programmingHobbyNum ?>"><?php echo $s["hobby"] ?></td>
                        <td>Go</td>
                    </tr>
                    <?php foreach ($programmingHobby as $val) : ?>
                    <tr>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="item">
                <h3><?php echo $s["otherSkill"] ?></h3>
                <table>
                    <tr>
                        <th><?php echo $s["skillLevel"] ?></th>
                        <th><?php echo $s["type"] ?></th>
                        <th><?php echo $s["skillName"] ?></th>
                    </tr>
                    <tr>
                        <td rowspan="<?php echo $otherBusinessNum ?>"><?php echo $s["business"] ?></td>
                        <td><?php echo $s["webServer"] ?></td>
                        <td>MAMP</td>
                    </tr>
                    <?php foreach ($otherBusiness as $key => $val) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td rowspan="<?php echo $otherHobbyNum ?>"><?php echo $s["hobby"] ?></td>
                        <td>Office</td>
                        <td>Word, PowerPoint, Excel</td>
                    </tr>
                    <?php foreach ($otherHobby as $key => $val) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td rowspan="<?php echo $otherOtherNum ?>"><?php echo $s["otherSkill"] ?></td>
                        <td><?php echo $s["textEditor"] ?></td>
                        <td>VS Code, Xcode, IntelliJ IDEA</td>
                    </tr>
                    <?php foreach ($otherOther as $key => $val) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $s["certificates"] ?></h3>
                <hr>
            </div>
            <table>
                <tr>
                    <th><?php echo $s["certificatesName"] ?></th>
                    <th><?php echo $s["getYear"] ?></th>
                </tr>
                <?php foreach ($certificate as $key => $val) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $val ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="category">
            <div class="title">
                <h3><?php echo $s["projects"] ?></h3>
                <hr>
            </div>
            <table>
                <tr>
                    <th><?php echo $s["projectsName"] ?></th>
                    <th><?php echo $s["joinYear"] ?></th>
                </tr>
                <?php foreach ($project as $key => $val) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $val ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        
        <?php include_once("common/footer.html") ?>
    </section>

</body>
</html>