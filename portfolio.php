<?php include_once("common/get_json.php") ?>
<?php
    $title = "Portfolio - Katsuya F Official";
    $main = "PORTFOLIO";
    $url = "portfolio";
    $p = $data["portfolio"];

    
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
                <h3>Webサイト</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">
                <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/site_port.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>KATSUYA F Official</h5>
                            <p>HTML / CSS / PHP</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>自身のポートフォリオサイトであり，本サイト．他者に自身をアピールする際に，多くを語る時間が設けられてないことが多いので，本サイトのURL一つを渡せられれば良いと思い作成．カラフルで見やすいことを意識したが，即時的に仕上げたため，今後一生アップデートしていく予定．面白いスキル・経歴を追加できればと思う．</p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href="sites/katsu-lab/html/home.html"><img src="img/site_katsulab.png" alt="" class="vertical"></a>
                        </div>
                        <div class="worksName">
                            <h5>KATSU LAB</h5>
                            <p>HTML / CSS </p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>研究室をイメージした自身のブログサイト．当時，JavaScriptを使用する実力が無かったので，なんとかCSSのみで動的な表現を可能にした．<br>
                            Webサイトのデザインは一から設計しており，みた事がないサイトの形を目標に作成した．<br>
                            知り合いのWebデザイナーの方数人前でプレゼンをし，高評価を頂いており，本ポートフォリオでも採用しているパーツが多い．</p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href="http://karadafull.sakura.ne.jp/"><img src="img/site_karadafull.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>フィットネスジム カラダフル</h5>
                            <p>HTML / CSS / Javascript</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>知り合いから依頼を受けて作成した，フィットネスジム公式サイト．SCSSの練習も兼ねている．<br>
                            ユーザの対象年齢が幅広いので，親しみやすい色をサイトのメインカラーに採用した．<br>
                            また，私が初めてBootStrapを使用せずにレスポンシブ対応化しており，SEOについても勉強するいい機会であった．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/site_underground.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>Home's bar UnderGround</h5>
                            <p>HTML / CSS / Javascript(jQuery)</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>名前と使用した写真は実際に自身が働いていたバーを基にしている．<br>
                            jQueryの練習のために作成したサイトであり，ドリンクメニューを簡易的に作成，追加でいる仕組みを採用している．<br>
                            デザインに関してはApple Businessの公式サイトのヘッダーを参考に作成し，ページ全体としては黒と暗いオレンジのコントラストが落ち着いた雰囲気を演出している．
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3>Webサービス</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">
                    <div class="works">
                        <div class="worksHead">
                            <a href="sites/ride/index.php"><img src="img/service_ride.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>RIDE</h5>
                            <p>HTML / CSS / PHP / MySQL</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>自身が研究を進める際に効率を高めようと思い，作成したサービス．Research Integrated Development Environmentの略でこのサイト上で研究に関する資料を整理することができる．例えば，各研究に関するMTの要点・要約などをプロジェクトごとの流れで参照・編集可能である．研究論文も分野ごとに分類・保存でき，チーム単位で参照することができる．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/service_pytweet.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>Pytweet</h5>
                            <p>Python(Flask) / HTML / CSS / SQLite</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>Pythonを使ってWebサービスを作ってみたいと言う思いから，TwitterのようなSNSを作ろうと試みた．使用したフレームワークはFlaskであり，Web上でサービスを提供するためにHerokuを使用してデプロイした．<br>
                            Twitter同様，ツイート・コメント・フォローなどの機能はもちろん，登録・ログイン・プロフィールの編集機能なども備わっている．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/service_toyou.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>To You</h5>
                            <p>Wordpress / CSS / PHP</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>日本には暑中見舞い，お中元などの「他者に物を贈る」イベントもとい文化がある事に着想を得て制作した架空の会社「To You」のECサイトである．<br>
                            このサイト内で提供されるサービスの特徴は他者にのみ物を購入する事ができ，自分へのプレゼントとして購入できないと言うことがあげられる．若者の年賀状離れ等の文化が損なわれないような働きもあるのではと期待できる．<br>
                            また，このサイトは自身のWordpressでのWebデザインの練習として作成した成果物であり，商品の追加・削除値段の設定などはできるが実際の売買機能については途中で断念したためサービス部分は未完成である．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/mdp.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>MDP</h5>
                            <p>Javascript(Node.js, NestJS) / MySQL</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>カンボジアの企業にてインターン期間中に自身が携わらせていただいたプロジェクトの一つである．自身にとって初めての企業案件であり，チーム開発で作成したWebサービスである．<br>
                            このサービスはクライアントとベンダーの仲介部分を担っており，商品の管理や取引全般の詳細を手続き，記録している．<br>
                            RESTful APIを採用しており，自身にとって初めての仕様だったため，勉強することが多かった．<br>
                            ベテランエンジニアのレビューも厳格で，プロの現場を感じた経験だった．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/rit.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>RIT</h5>
                            <p>Javascript(Vue.js, Nuxt.js) / MySQL</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>カンボジアの企業にてインターン期間中に自身が携わらせていただいたプロジェクトの一つである．引越し業者と紹介会社，顧客を案件単位で一元管理するシステム．<br>
                            約20のテーブルから構成される大きなDBのデザインを担当した．勉強しながら，編集しながらでの作成だったために時間がかかったが，<br>
                            DB周りの知識が一気に増えて，これからWebサービスを作成するときにも役に立つことが予想される．<br>
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/mms.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>MMS</h5>
                            <p>Javascript(Node.js, NestJS)</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>カンボジアの企業にてインターン期間中に自身が携わらせていただいたプロジェクトの一つである．<br>
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                            <a href=""><img src="img/wiki.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>Company Wiki</h5>
                            <p>wiki.js / Docker / GCE</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>カンボジアの企業にてインターン期間中に自身が携わらせていただいたプロジェクトの一つである．<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3>教育システム</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">
                <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/system_kotowaza.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>諺の概念構造作成・適用教材</h5>
                            <p>Javascript(Node.js) / HTML / CSS</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>このシステム上では学習者（ユーザ）にバラバラの概念をパズルのように組み立ててことわざを再現，具体例への適用と言う活動をしてもらう．その過程で問われる能力として抽象化・具体化能力がある．活動におけるミスをシステムが指摘し，合わせて学習者のミスに沿ったアドバイスを教示することで学習が進むという仕組み．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/system_nazokake.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>意味構造的なぞかけ作成教材</h5>
                            <p>HTML / CSS / PHP / MySQL</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>学習者（ユーザ）に，本システム上でなぞかけを作成してもらう．ここでは上手いなぞかけ＝良質な類推能力の結果として定義しており，上手いなぞかけと下手ななぞかけを構造的に対比して見比べることで，自身の類推能力の向上を図る．また，他者が作成したなぞかけを問題形式として出題，回答させることで他者の思考過程を追うことができ，発想力の向上にも寄与すると考えた．
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3>研究論文</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">
                    <div class="works">
                        <div class="worksHead">
                            <a href="img/paper_kotowaza.pdf"><img src="img/paper_kotowaza.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>諺を教材とした抽象化・具体化スキル育成支援システム</h5>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>創造的活動を有意味なものにする上で重要なスキルの1つとして類推思考力がある.一方で，このような類推思考の発揮が意識的に要求される学習機会はほとんどなく，類推思 考力を養うような学習教材の整備も十分でない.その理由の一つに類推活動における思考過程が判然とせず，この向上に資する確度の高い支援を実現しにくいことが考えられる.そこで，判然とはしない類推過程であっても，共通して行われていると考えられる抽象化・具体化活動に焦点化した支援を 検討する.本研究では学習教材として諺(ことわざ)の使用 方法に着目した.諺は一般的心理や教訓の概念構造に，記憶や想起が容易な言語表現を与えている.諺を学習教材とした理由は，現在直面している事柄の構造を抽象化して捉え，構造的に同型の別の事例に具体化するという類推行為と，ある具体的事象の概念構造を捉えた一般化と諺の適用との間 に同型性を見いだすことができると考えたからである.そこで，本研究では諺の概念的な理解(抽象化)と事例への適用 (具体化)，あるいは逆に，事例を一般化して諺に当てはめる一連の認知活動を通して，学習者の抽象化・具体化スキルを育成するシステムを開発することを目的とする.
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href="img/paper_nazokake.pdf"><img src="img/paper_nazokake.png" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>なぞかけを題材とした<br>類推思考トレーニングシステム</h5>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>ビール工場で稼働しているベルトコンベアに着想を得て回転寿司の仕組みが生み出されたように，ある文脈で得られた知見を異なる文脈へと活用する類推思考力は，創造的活動を有意味なものとする上で重要なスキルとなる.一方で，このような類推思考の発揮が明示的 なタスクとして要求される学習機会は必ずしも多くなく，類推思考力を養う学習教材の整備も十分に整っていない.
                            そこで本研究では，類推思考の発揮を要求する課題として，なぞかけを通じた類推思考トレーニングシステムを開発した.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col col-1"></div>
            </div>
        </div>

        <div class="category">
            <div class="title">
                <h3>演劇</h3>
                <hr>
            </div>
            <div class="row">
                <div class="col col-1"></div>
                <div class="col col-10">
                <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/geki_aku2.jpeg" alt="" class="vertical"></a>
                        <a href=""><img src="img/geki_aku.jpeg" alt="" class="vertical"></a>
                        </div>
                        <div class="worksName">
                            <h5>悪の軍団幸せになって然るべき</h5>
                            <p>脚本 / 演出 / 役者</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>ヒーローに憧れてなかなか定職に付けない主人公の正義．周りからのプレッシャーもあり，これが最後のチャンスだとヒーローの募集に応募するが，間違えて悪の軍団の一員になってしまった！？ヒーローとは正反対の悪の軍団になってしまったが，悪の軍団にも闘ういろいろな事情が．これは本来スポットライトの当たるはずがない『悪の軍団』にフォーカスした物語，そして意外な結末・・・．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href="img/geki_semi.mp4"><img src="img/geki_semi.jpeg" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>蝉</h5>
                            <p>映像 / 舞台美術</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>『もし，あと七日間生きられたら？』．生きる事に執着のない主人公の七生（ななみ）は自殺を実行した，が，目の前に現れたのは奇妙な死神シケイド，七生に七日間の生きる猶予をやると言う．もちろん，生に興味のない七生は興味を示さないが・・・．これは七生が鍵となるメインストーリーと数人のサブストーリーが錯綜する，生を問うお話．それぞれの『生きる意味』とは．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/geki_and.jpeg" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>AND-ROID</h5>
                            <p>映像 / 舞台美術</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>舞台はロボットの学校．このロボットの性能でクラス分けされており，一番下のクラスの主人公ロイドは特徴もなく，自分が何のロボットか分からずにいた．友人達も，特技はあるものの，欠点も多く，いつも他のクラスの優秀なロボット達に馬鹿にされていた．そこで舞い込んだのは校内で開かれるコンテストのお話．ロイドと一同はそのコンテストで周りを見返すべく奮闘することを決心する．
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href="img/geki_momo.mp4"><img src="img/geki_momo.jpeg" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>桃次郎</h5>
                            <p>脚本 / 演出 / 役者</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>むかーし昔，あるところにお爺さんとお婆さんが住んでいました．お爺さんは山へ芝刈りに，お婆さんは皮へ洗濯へ・・・で始まる誰もが知る昔話『桃太郎』．この劇ではそのまた昔に遡り，この二人がどのようにして出会ったのか，その秘密に迫ります．舞台は主人公の桃次郎（ももじろう）が務める吉備団子製作所．そこに現れるは未来のお婆さん候補，四人のヒロイン．さて誰が未来のお婆さんになるのか？笑いあり，感動ありのラブサスペンス！
                            </p>
                        </div>
                    </div>
                    <div class="works">
                        <div class="worksHead">
                        <a href=""><img src="img/geki_higashi.jpeg" alt=""></a>
                        </div>
                        <div class="worksName">
                            <h5>東の夕陽</h5>
                            <p>脚本補佐 / 映像</p>
                        </div>
                        <hr>
                        <div class="worksBody">
                            <p>熱血刑事の冬川（ふゆかわ）はひょんなことから変人探偵の夏目（なつめ）とコンビを組む事になる．そんなコンビが挑む未解決難解事件．容疑者は完璧なアリバイがある被害者の友人．巧妙に仕組まれたトリックを冬川と夏目は暴けるのか！？そして，事件の真相にたどりついた時，求められる，冬川にとっての正義とは何か．
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col col-1"></div>
            </div>
        </div>
        <?php include_once("common/footer.html") ?>
    </section>


</body>
</html>