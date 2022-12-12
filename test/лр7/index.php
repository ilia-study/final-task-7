<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/main2.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body class="main_body">
    <header>
        <?php
            if(($_SESSION['user_login'] ?? null) != null) {
                echo '<h2 class="profile">Логин: ' .$_SESSION['user_login'] . '</h2>';
                echo '<br>';
                echo '<a href="inc/logout.php" class="exit_btn">Выйти</a>';
            }
            else{
                echo '<a href="login.php" class="exit_btnl">Войти</a>';
                echo '<a href="register.php" class="exit_btnl">Зарегистрироваться</a>';
            }
        ?>
    </header>
        <div class="calc">
        <?php
            $buttons = [1,2,3,'+',4,5,6,'-',7,8,9,'*','C',0,'.','/','=','^3'];
            $pressed = '';
            if (isset($_POST['pressed']) && in_array($_POST['pressed'], $buttons)) {
                $pressed = $_POST['pressed'];
            }
            $stored = '';
            if (isset($_POST['stored']) && preg_match('~^(?:[\d.]+[*/+-]?)+$~', $_POST['stored'], $out)) {
                $stored = $out[0];  
            }

            $display = $stored . $pressed;

            if ($pressed == 'C') {
                $display = '';
            }
            elseif($pressed == '^3') {
                $display = pow($stored, 3);
            }
            elseif ($pressed == '=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~', $stored)) {
                $display = eval("return $stored;");
                if($display == INF){
                    $display = "Ошибка";
                }
            }
            
            echo "<form action=\"\" method=\"POST\">";
                echo "<table style=\"width:300px;\">";
                    echo "<tr>";
                        echo "<td colspan=\"4\" class=\"result\">$display</td>";
                    echo "</tr>";
                    foreach (array_chunk($buttons, 4) as $chunk) {
                        echo "<tr>";
                            foreach ($chunk as $button) {
                                echo "<td",(count($chunk) != 4 ? " colspan=\"4\"" : "") , "><button name=\"pressed\" class=\"btn_calc\" value=\"$button\">$button</button></td>";
                            }
                    }

                echo "</table>";
               
                echo "<input type=\"hidden\" name=\"stored\" value=\"$display\">";
                
            echo "</form>";
            ?>
            </div>
</body>
</html>