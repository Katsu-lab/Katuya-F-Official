<?php
    if (True) {
        $file = "locals/jp.json";
    }else {
        $file = "locals/en.json";
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    
    $title = "Skill - Katsuya F Official";
    $main = "SKILL";
    $url = "skill";
    $s = $data["skill"];
    $programmingBusiness = $s["skillSet"]["programming"]["business"];
    $programmingBusinessNum = count($programmingBusiness) + 1;
    $programmingHobby = $s["skillSet"]["programming"]["hobby"];
    $programmingHobbyNum = count($programmingHobby) + 1;
    $otherBusiness = $s["skillSet"]["other"]["business"];
    $otherBusinessNum = count($otherBusiness) + 1;
    $otherHobby = $s["skillSet"]["other"]["hobby"];
    $otherHobbyNum = count($otherHobby) + 1;
    $otherOther = $s["skillSet"]["other"]["other"];
    $otherOtherNum = count($otherOther) + 1;
    $certificate = $s["certificate"];
    $project = $s["project"];
?>
<?php include_once("common/head.php") ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skill.css">
</head>
<body class="lp">

<?php include_once("common/menu.php") ?>
<?php include_once("common/header.php") ?>


    <section id="main">

        <div class="category">
            <div class="title">
                <h3>スキルセット</h3>
                <hr>
            </div>
            <div class="item">
                <h3>プログラミング言語</h3>
                <table>
                    <tr>
                        <th>スキルレベル</th>
                        <th>言語名</th>
                    </tr>
                    <tr>
                        <td rowspan="<?php echo $programmingBusinessNum ?>">実務経験</td>
                        <td>HTML5</td>
                    </tr>
                    <?php foreach ($programmingBusiness as $val) : ?>
                    <tr>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td rowspan="<?php echo $programmingHobbyNum ?>">趣味</td>
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
                <h3>その他</h3>
                <table>
                    <tr>
                        <th>スキルレベル</th>
                        <th>種類</th>
                        <th>技術名</th>
                    </tr>
                    <tr>
                        <td rowspan="<?php echo $otherBusinessNum ?>">実務経験</td>
                        <td>Webサーバ</td>
                        <td>MAMP</td>
                    </tr>
                    <?php foreach ($otherBusiness as $key => $val) : ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $val ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td rowspan="<?php echo $otherHobbyNum ?>">趣味</td>
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
                        <td rowspan="<?php echo $otherOtherNum ?>">その他</td>
                        <td>テキストエディタ</td>
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
                <h3>資格・表彰・認定</h3>
                <hr>
            </div>
            <table>
                <tr>
                    <th>資格・表彰状・認定証名</th>
                    <th>取得年</th>
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
                <h3>プロジェクト</h3>
                <hr>
            </div>
            <table>
                <tr>
                    <th>プロジェクト名</th>
                    <th>参加年</th>
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