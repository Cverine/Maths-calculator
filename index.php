<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Press+Start+2P|Sacramento|Schoolbell" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
                $(".result p").fadeOut(5000)
        });
    </script>
    <title>Révise tes tables</title>
</head>
<body>
<div class="container">
    <div class="title"><h1>Révise tes tables !!</h1></div>
    <div class="menu">
        <a href="addition.php" class="choice">Addition</a>
        <a href="addition.php?level=2" class="choice">Addition Niv. 2</a>
        <a href="multiplication.php" class="choice">Multiplication</a>
        <a href="both.php" class="choice">Les 2 !!</a>
    </div>
    <div class="question">
        <h2>Combien font <span class="numbers"><?php if ($error) { echo $_POST['display']; } else { echo $display; } ?></span> ?</h2>
    </div>
    <div class="list">
        <div class="list-title">
            <h3>Les opérations déjà faites</h3>
        </div>
        <div class="success">
            <h4>Correctes</h4>
            <?php

                foreach ($_SESSION['list'] as $row) {
                    foreach ($row as $key => $value) {

                        echo "<p>$key</p>";
                    }
                }
            ?>
        </div>
        <div class="fail">
            <h4>Incorrectes</h4>
            <?php

                foreach ($_SESSION['fail'] as $row) {
                    foreach ($row as $key => $value) {
                        echo "<p>$key</p>";
                    }
                }
            ?>
        </div>
    </div>
    <div class="calculate">
        <form method="post" name="form" action="">
            <label for="result">Ton résultat : </label>
            <input type="text" name="result" id="result" value="<?php if(isset($_POST['result'])) {
                $_POST['result'];
            }
            ?>">
            <input type="hidden" name="calcul" value="<?php echo $calcul; ?>" />
            <input type="hidden" name="display" value="<?php echo $display; ?>" />
            <button type="submit">Vérifie ton résultat</button>
        </form>
    </div>
    <div class="result">
        <p><?php if ($error) { echo $error; } else { echo $message; } ?></p>
    </div>
    <div class="points">
        <h2>Ton total de points : <span><?php echo count($_SESSION['list']); ?></span></h2>
    </div>

    <form method="post" action="">
        <input type="submit" name="session" value="Effacer tous les résultats">
    </form>
</div>
</body>
</html>

