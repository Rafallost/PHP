<?php

    require_once '../core/header.php';

?>    

<section>
    <h2>Tablice</h2>
    <p>Przedstawienie tablicy asocjacyjnej</p>
    <form method="get">
    <input type="text" name="condition" required>
    <input type="submit" name="zatwierdź">
    <?php
    if(!(@$_GET['condition']==""))
    {
        $position = $_GET['condition'];

        if($position!='imie' && $position!='wiek' && $position!='zawod')
        {
            echo "Nie ma takiej opcji<br>";
        }
        else
        {
            $assoArray=['imie' => 'Rafal', 'wiek' => 20, 'zawod' => 'programista'];
            echo $assoArray["$position"]; 
        }
    }
    ?>
</section>
<?php

    require_once '../core/footer.php';
    
?>