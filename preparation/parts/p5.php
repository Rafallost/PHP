<?php

require_once '../core/header.php';

?>    

<section>
    <h2>Bazy danych</h2>
    <p>Ustawienie ciasteczek, które tracą ważność po 10 s</p>
    <form method="post">
        Nazwa użytkownika: <input type="text" name="userName" required><br>
        Hasło: <input type="text" name="userPassword" required><br>
        <input type="submit" name="sub" value="zaloguj się"><br>
    </form>

    <?php

    session_start();
    $name = @$_POST['userName'];
    $password = @$_POST['userPassword'];

    if(isset($_POST['sub'])) 
    {
        if($name == "Rafal" && $password == "Haslo") 
        {
            $expiration = time() + 10;
            setcookie("activiti", $name, $expiration);

            $_SESSION['passwordMessage'] = "Twoje hasło zostało zakodowane i wygląda następująco: ".password_hash($password,PASSWORD_DEFAULT);
            header("Location: " . $_SERVER['REQUEST_URI']); 
            exit;
        }
    } 
    else 
    {
        if (isset($_SESSION['passwordMessage'])) {
            echo $_SESSION['passwordMessage'];
            unset($_SESSION['passwordMessage']); 
        }
        else if (isset($_COOKIE["activiti"])) 
        {
            $name = $_COOKIE["activiti"];
            echo "Witaj, $name ponownie!";
        } 
        else 
        {
            echo "Witaj, Gościu!";
        }
    }
    ?>
</section>
<?php

require_once '../core/footer.php';

?>