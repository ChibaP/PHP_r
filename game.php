<?php ?>

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
<?php 
         session_start();
         $errorMessage=[];
         $name = isset($_POST['userName']) ? $_POST['userName'] : '';
    //   $errorMessage=[];
    //   if(empty($name)){
    //     array_push($errorMessage, "名前入力してくださいね");
    //     }

    //   if(mb_strlen($name)>8){
    //     array_push($errorMessage, "8文字以内で入力してくださいね");
    //   }

    //   $lists = ["きつね","たぬき"];

    //   if(0 < count($errorMessage)){
    //       $_SESSION["error"]=$errorMessage;
    //       header("location: index.php");
    //       exit;
    //   }

    

      
    //   ?>
<?php $n=5 ?>
    <script lang="javascript">
        function submitUserHand(hand) {
            document.querySelector("#user_hand").value = hand;
            document.querySelector("#select_hand_form").submit();
        }
    </script>


    <header>
        <h1 class="title">PHPでジャンケンゲーム</h1>
        <p><?php echo "{$name}っち"?></p>
    </header>
    <div class="game_display">
        <div class="info">
            <?php $userHand=$_GET["user_hand"]; ?>
            <?php echo $userHand?>
            <script lang="javascript">
                document.write(n);
                document.write("ざぁこ");
            </script>
        </div>
        <div class="enemy">
            <img class="battle center" src="image/janken_gu.png" alt="">
        </div>
        <div class="center">
            <p class="font2" >vs</p>
        </div>
        <div class="myHand">
            <?php if($userHand == "rock"):?>
                   <img class="battle center" src="image/janken_gu.png" alt="">
            <?php elseif($userHand == "scissors"):?>
                   <img class="battle center" src="image/janken_choki.png" alt="">
            <?php elseif($userHand == "paper"):?>
                   <img class="battle center" src="image/janken_pa.png" alt="">
            <?php else :?>
                   <img class="battle center" src="image/janken_gu.png" alt="">
            <?php endif ?>

            
        </div>
        <form action="game.php" name="hand" id="select_hand_form">
            <input type="hidden" name="user_hand" id="user_hand" value="" />
                <div class="my">
                        <button>
                            <img class="hand1" src="image/janken_gu.png" onclick="submitUserHand('rock');" alt="">
                        </button>
                        <button>
                            <img class="hand1" src="image/janken_choki.png" onclick="submitUserHand('scissors');" alt="">
                        </button>
                        <button>
                            <img class="hand2" src="image/janken_pa.png" onclick="submitUserHand('paper')" alt="">
                        </button>
                </div>
        </form>
    </div>
</body>
</html>