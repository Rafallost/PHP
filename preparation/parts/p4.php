<?php

    require_once '../core/header.php';

?>    

<section>
    <h2>Bazy danych</h2>
    <p>Łączenie się z bazą danych i wydanie podstawowych poleceń.W tym przypadku Użyłem metody post z uwagi na prace z danymi osobowymi</p>
    <form method="post">
    <label>Osoby z imionami na jaką litere chcesz wyświetlić?</label>
    <input type="text" name="nameLetter" >
    <input type="submit" name="showButton" value="wyświetl">
    <br>
    <?php
        mysqli_report(MYSQLI_REPORT_OFF);

        $nameLetter = @$_POST['nameLetter']; 

        $db = @new mysqli("localhost","root","","sklep2");

        if($db->connect_error) 
            die('Nie udało się połączyć z bazą danych: '.$db->connect_error);

        if(isset($nameLetter)) 
        {
            $show = $db->query("SELECT imie, nazwisko, rok_urodzenia FROM osoby WHERE imie LIKE '".$nameLetter."%'");

            while($result=$show->fetch_assoc())
                echo $result['imie']." ".$result['nazwisko']." ".$result['rok_urodzenia']."<br>";
    
            $db->close();
        }
    ?>
</section>
<?php

    require_once '../core/footer.php';
    
?>