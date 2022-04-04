<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="Style_index.css">
    <title>じゃんけん</title>
</head>
<body>
    <?php echo phpversion();?>
    <header>
        <h1 class="title">PHPでジャンケンゲーム</h1>
        <p>なんかcssが適用されねーんだけど</p>
    </header>
    <div class="input" >
        <img src="image/janken_boys.png" alt="">
        <form method="POST" action="game.php">
            <p>名前を入力してください。</p>
            <input class="name" id="userName" name="userName">
            <br>
            <input class="sub" type="submit" value="ゲーム開始">
        </form>
    </div>
    </div>
      <form class="input" method="post" action="game.php">
        <div class="mt-3 col-5">
          <label for="user_name" class="form-label">ユーザー名</label>
          <input type="text" class="form-control" id="user_name" name="user_name">
          <div class="d-flex justify-content-center">
            <button type="submit" class="sub">始める</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>
