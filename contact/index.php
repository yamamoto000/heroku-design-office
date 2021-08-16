<?php
session_start();
require __DIR__ . '/Validation.php';
require __DIR__ . '/config.php';
ini_set('display_errors', 0);  

$mode = "input";
$error = validation($_SESSION);
// $_SESSION = [];

if( isset($_POST["back"] ) && $_POST["back"] ){

} else if( isset($_POST["confirm"] ) && $_POST["confirm"]){
    $_SESSION["inquiry"] = $_POST["inquiry"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["tel"] = $_POST["tel"];
    $_SESSION["other"] = $_POST["other"];
    $error = validation($_SESSION);
    if (empty($error)) {
        $mode = "confirm";
    }
} else if( isset($_POST["send"] ) && $_POST["send"] ){
  $mode = "send";
  try {
    $option = array(

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
      );
    $PDO = new PDO(DB_DNS, DB_USER, DB_PASSWORD,$option);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $inquiry = implode(',', $_SESSION['inquiry']);
    $name = $_SESSION['name'];
    $tel = $_SESSION['tel'];
    $email = $_SESSION['email'];
    $other = $_SESSION['other'];

    $name	= htmlspecialchars($name, ENT_QUOTES);
    $other	= htmlspecialchars($other, ENT_QUOTES);

    $error_message = array();

    $sql = "INSERT INTO contact_form (inquiry, name, tel, email, other) VALUES (:inquiry, :name, :tel, :email, :other)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
    $stmt = $PDO->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
    $params = array(':inquiry' => $inquiry, ':name' => $name, ':tel' => $tel, ':email' => $email, ':other' => $other); // 挿入する値を配列に格納する
    $stmt->execute($params);
  } catch (PDOException $e) {
        $e->getMessage();
}
} else {
    $SESSION = array();
}

if(!isset($_SESSION['csrfToken'])){
    $csrfToken = bin2hex(random_bytes(32));
    $_SESSION['csrfToken'] = $csrfToken;
  }
  $token = $_SESSION['csrfToken'];
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/destyle.css" rel="stylesheet" type="text/css">
        <link href="../css/common.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Noto+Serif+JP&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="flex">
                    <div class="header-left">
                        <a href="/">Cresta Design</a>
                    </div>
                    <div class="header-right">
                        <ul>
                            <li><a href="../#concept">Concept</a></li>
                            <li><a href="../#service">Service</a></li>
                            <li><a href="../#works">Works</a></li>
                            <li><a href="../#contact">Contact</a></li>
                        </ul>
                        <div class="menu">
                            <button class="menu__button">
                              <span class="menu__lineTop"></span>
                              <span class="menu__lineMiddle"></span>
                              <span class="menu__lineBottom"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <div class="top-image page-image contact" id="top-image">
            <div class="container">
                <div class="page-image-content">
                    <div class="title">
                        <p>Contact</p>
                    </div>
                    <div class="title-foot"><p>Contact us</p></div>
                </div>
            </div>
        </div>

<?php if($mode == "input") :  ?>
<!-- 入力画面 -->
        <div class="form-wrap">
            <div class="container">

        <?php if(!empty($_POST)): ?>
            <?php if( !empty($error) ): ?>
                <ul class="error_message">
                    <?php foreach( $error as $value ): ?>
                        <li>・<?php echo $value; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>

            <form method="POST" action="index.php">
            <p class="form-title">お問い合わせ内容</p>
            <div class="form-item inquiry">
                <div class="list-item">
                    <?php $inquiry = ["資料請求","お電話でのご相談を希望","申し込み"];?>
                    <input type="checkbox" name="inquiry[0]" value="資料請求" id="資料請求" 
                    <?php if($_SESSION["inquiry"][0] == "資料請求"){echo "checked";}?>>
                    <label for="資料請求" class="checkbox03">
                        資料請求
                    </label>
                </div>
                <div class="list-item">
                    <input type="checkbox" name="inquiry[1]" value="お電話でのご相談を希望" id="お電話でのご相談を希望"
                    <?php if($_SESSION["inquiry"][1] == "お電話でのご相談を希望"){echo "checked";}?>>
                    <label for="お電話でのご相談を希望" class="checkbox03">
                        お電話でのご相談を希望
                    </label>
                </div>
                <div class="list-item">
                    <input type="checkbox" name="inquiry[2]" value="申し込み" id="申し込み"
                    <?php if($_SESSION["inquiry"][2] == "申し込み"){echo "checked";}?>>
                    <label for="申し込み" class="checkbox03">
                        申し込み
                    </label>
                </div>
            </div>

            <p class="form-title">担当者名</p>
            <div class="form-item">
                <input type="text" name="name" value="<?php echo $_SESSION["name"] ?>" size="40" class="">
            </div>

            <p class="form-title">電話番号</p>
            <div class="form-item">
                <input type="tel" name="tel" value="<?php echo $_SESSION["tel"] ?>" size="40" class="">
            </div>

            <p class="form-title">メールアドレス</p>
            <div class="form-item">
                <input type="email" name="email" value="<?php echo $_SESSION["email"] ?>" size="40" class="">
            </div>

            <p class="form-title">その他</p>
            <div class="form-item">
                <textarea name="other" value="" cols="40" rows="10" class=""><?php echo $_SESSION["other"] ?></textarea>
            </div>

            <div class="button yellow">
                <!-- <input type="submit" value="submit" class=""> -->
                <input type="submit" name="confirm" value="確認">
                <!-- <span class="ajax-loader"></span> -->
            </div>
            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
            </form>
            </div>
        </div>
<?php endif; ?>

<?php if($mode == "confirm") : ?>
<!-- 確認画面 -->
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        <div class="form-wrap">
            <div class="container">
                <form method="POST" action="index.php">
                    <p class="form-title">お問い合わせ内容</p>
                    <div class="form-item inquiry">
                        <?php echo implode(',', $_SESSION['inquiry']);?>
                    </div>

                    <p class="form-title">担当者名</p>
                    <div class="form-item">
                        <?php echo $_SESSION["name"] ?>
                    </div>

                    <p class="form-title">電話番号</p>
                    <div class="form-item">
                        <?php echo $_SESSION["tel"] ?>
                    </div>

                    <p class="form-title">メールアドレス</p>
                    <div class="form-item">
                        <?php echo $_SESSION["email"] ?>
                    </div>

                    <p class="form-title">その他</p>
                    <div class="form-item">
                        <p><?php echo $_SESSION["other"] ?></p>
                    </div>

                    <div class="button gray">
                        <input type="submit" name="back" value="戻る" />
                    </div>
                    <div class="button yellow">
                        <input type="submit" name="send" value="送信" />
                    </div>

                    <input type="hidden" name="csrf" value="<?php echo($_POST['csrf']) ; ?>">
                </form>
            </div>
        </div>
<?php endif; ?>
<?php endif; ?>  

<?php if($mode == "send") : ?>
<!-- 完了画面 -->
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
    <?php
        header('Location: complete.php');
        exit;
        unset($_SESSION['csrfToken']);
    ?>
<?php endif; ?>
<?php endif; ?>
 
        <footer>
          <small>&copy;cresta.design all rights reserved</small>  
        </footer>
    </body>
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="../js/jquery.bgswitcher.js"></script>
    <script src="../js/common.js"></script>
    <script>
    jQuery(function($) {
        $('.bg-slider').bgSwitcher({
            images: ['../img/fv-bgi_01@2x.jpg','../img/fv-bgi_02@2x.jpg','../img/fv-bgi_03@2x.jpg'], // 切り替える背景画像を指定
        });
    });
    </script>
</html>