<?php $name = isset($_POST['userName']) ? $_POST['userName'] : '';?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="Style_game.css">
    <title>ゲーム開始</title>
</head>
<body>
    <header>
        <h1 class="title">PHPでジャンケンゲーム</h1>
        <p><?php echo "{$name}っち"?></p>
    </header>
    <div class="game_display">
        <img class="hand1" src="image/janken_gu.png" alt="">
        <img class="hand1" src="image/janken_choki.png" alt="">
        <img class="hand2" src="image/janken_pa.png" alt="">
    </div>
</body>
</html>