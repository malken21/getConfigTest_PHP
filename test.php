<html>

<body>
    <h1>
        <?php
        //Config.jsonを読み込み $Config.json 変数に代入
        $Config = file_get_contents("Config.json");
        $Config = json_decode($Config);

        //Configにあるlistを $list 変数に代入
        $list = $Config->list;

        //$listから ランダムに要素を取り出して 出力
        $key = array_rand($list, 1);
        echo $list[$key];
        ?>
    </h1>
</body>

</html>