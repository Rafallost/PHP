<?php

    require_once '../core/header.php';

?>    

<section>
    <h2>Pętle</h2>
    <p>Stworzyłem prosty formularz, który za pomocą metody GET pobiera informacje o ilości iteracji, które chcemy wykonać. Następnie wykorzystałem każdy z dostępnych rodzajów pętli do wykonania tych iteracji.
        Wybrałem metodę GET, ponieważ przekazywane informacje nie wymagają szczególnego poziomu bezpieczeństwa. Dodatkowo, dzięki temu że przeglądarka zapamiętuje te dane, cały proces może być nieco szybszy.</p>
    <form method="get">
        <label>Podaj liczbę iteracji: </label>
        <input type="number" name="iterations" min="0" required>
        <input type="submit" value="Prześlij dane">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'GET')
        $iterations = @$_GET['iterations'];
    
        if(isset($iterations) && $iterations > 0)
        {
            for($i=0;$i<$iterations;$i++)
                echo 'Pętla for iteracja nr: '.($i+1).'<br>';

            echo "<br>";
            $y=1;
            while($y<=$iterations)
            {
                echo "Pętla While iteracja nr: $y<br>";
                $y++;
            }

            echo "<br>";
            $y=0;
            do
            {
                ++$y;
                echo 'Pętla do While iteracja nr: '.$y.'<br>';
            }
            while($y<$iterations);

            echo "<br>";
    
            $array = range(1,$iterations);
            foreach($array as $i)
                echo "Pętla foreach iteracja nr: $i<br>";
        }
    
    ?> 
</section>
<?php

    require_once '../core/footer.php';
    
?>