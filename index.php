<?php

$list = [
  ["group"=>"宮下遊","list"=>[
                          ["name"=>"キルマー","description"=>"さまざまな声色を使い分け歌唱されている。か弱い歌声から力強い歌声になるラスサビは必見！","url"=>"https://www.youtube.com/watch?v=g_ryxSMlouo"],
                          ["name"=>"ヲズワルド","description"=>"ウィスパーヴォイスがとても耳に残る。","url"=>"https://www.youtube.com/watch?v=9tLAV3jnK54"],
                          ["name"=>"熱異常","description"=>"高速テンポに合わせて繰り広げられるウィスパーボイスが最高！！","url"=>"https://www.youtube.com/watch?v=STF54Zw50Fs"]
                        ]
  ],
  ["group"=>"syudou","list"=>[
                          ["name"=>"インザバックルーム","description"=>"TVアニメ「チェンソーマン」第5話のEDに抜擢！耳に残るリズムが最高！","url"=>"https://www.youtube.com/watch?v=eW620xcBnVE"],
                          ["name"=>"爆笑","description"=>"お笑い芸人「マヂカルラブリー」を題材に作られた楽曲。歌詞に注目して聴くのがオススメ！","url"=>"https://www.youtube.com/watch?v=KQPpw3dzEks"],
                          ["name"=>"うっせぇわ(selfcover)","description"=>"大人気アーティスト「Ado」に書き下ろした楽曲の本人カバー！Adoと違った良さがある！","url"=>"https://www.youtube.com/watch?v=70ycICWwQgw"]
                        ]
  ],
  ["group"=>"ウォルピスカーター","list"=>[
                          ["name"=>"マーシャル・マキシマイザー","description"=>"女性のような歌声からサビになると力強い高音になるのは必見！","url"=>"https://www.youtube.com/watch?v=CdO6TXG4QzE"],
                          ["name"=>"泥中に咲く","description"=>"思わず聴き入ってしまう歌詞と儚い高音の中毒性が高い！","url"=>"https://www.youtube.com/watch?v=40dJS_LC6S8"],
                          ["name"=>"もっちょこちょい","description"=>"サビがとにかく高い！高音を聴きにくる場所！","url"=>"https://www.youtube.com/watch?v=MSQo_36gq0Q"]
                        ]
  ],
  ["group"=>"sekai","list"=>[
                          ["name"=>"アイデンティティ","description"=>"女性でありながら少年のような声色を使い、一人二役で歌い分けている。","url"=>"https://www.youtube.com/watch?v=fAtdtq8MfsI"],
                          ["name"=>"アランダーノ","description"=>"楽曲のダークな世界観にあった歌声で歌唱されている。オク下での歌い方に耳が惹かれる。","url"=>"https://www.youtube.com/watch?v=BFf22jP2eAM"],
                          ["name"=>"じゃあ君の思想が死ねばいい","description"=>"程よい高音が耳に残る。途中に入る話言葉を聴き入ってしまう。","url"=>"https://www.youtube.com/watch?v=RpW1OadF88E"]
                        ]
  ]
];

?>

<!DOCTYPE html>
<html>
<head>
  <title>おすすめアーティスト</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
</head>
<body>

<?php date_default_timezone_set('Asia/Tokyo');

// 現在時刻を取得
// date() 関数は引数に G を取ることで、24時間単位の時間のみを取得できる
$time = date('G');

// 使用する変数を空文字で初期化
$bgColor = ''; // 背景色
$color   = ''; // 文字色

//午前・午後でスタイルを変更する
if($time < 12){
  $bgColor = 'royalblue';
  $color = 'white';
}else{
  $bgColor = 'coral';
  $color = 'black';
}?>

<div id="time">
    今は<?php echo $time;?>時だよ
</div>

<style>
      #time {
        /* PHP の変数を echo する */
        background-color: <?=$bgColor;?>;
        color: <?=$color;?>;
        width: 120px;
        height: 25px;
        border-radius: 5px;
        margin: 20px;
        padding: 10px;
        text-align: center;
      }
  </style>


<h1>おすすめのアーティスト！</h1>

  <?php foreach ($list as $item) { ?>
    <?php for ($a=1;$a<200;$a++){echo "*";}?>
    <h2 class="food_title"><?php echo $item["group"]; ?></h2>
    <ul>
      <?php $i = 0; ?>
      <?php foreach ($item["list"] as $foodList) { ?>
        <?php $i++; ?>
        <li>
        <h3 class="food_title type<?php echo $i; ?>">
          <a href="<?php echo $foodList["url"]; ?>" target="_blank">
            <?php echo $foodList["name"]; ?>
          </a>
        </h3>
        <div><?php echo $foodList["description"]; ?></div>
      </li>
      <?php } ?>
    </ul>

  <?php } ?>


  


</body>
</html>