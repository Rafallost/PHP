<?php

    require_once '../core/header.php';

?>    

<section>
    <h2>Obiekty i pliki</h2>
    <p>Stworzyłem przykładową klasę, która umożliwia utworzenie obiektu do manipulowania plikiem tekstowym.</p>
    <form method="get">
        <label>Podaj nazwę pliku txt jaki chcesz utworzyć lub dopisać do niego informacje oraz podaj jego treść</label><br>
        Nazwa pliku: <input type="text" name="nameOfFile" required><br>
        Treść: <input type="text" name="content"><br>
    <input type="submit" name="send" value="Prześlij"><br>
    <input type="submit" name="show" value="Prześlij i wyświetl"><br>
</form>
    <?php
class FileOpener{
    private $file;
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename.'.txt';
        $this->file = fopen($this->filename, 'a+');
        if (!($this->file)) 
            throw new Exception("Nie udało się uwotrzyć pliku $filename");
    }

    public function write($content) {
        if (!fwrite($this->file, $content)) 
            throw new Exception('Nie udało się zapisać tekstu');
    }
    
    public function read() {
        rewind($this->file);
        return fread($this->file, filesize($this->filename));
    }

    public function __destruct() {
        fclose($this->file);
    }
}


$nameOfFile = @$_GET['nameOfFile'];
$content = @$_GET['content']."   ";
$buttonShowStatus = @$_GET['show'];
$buttonSendStatus = @$_GET['send'];

if($nameOfFile != "")
{
    try 
    {
        $fileOne = new FileOpener($nameOfFile);
        $fileOne->write($content);
    } 
    catch (Exception $e) 
    {
        echo "Error: " . $e->getMessage();
    }
}

if(isset($buttonShowStatus))
{
    echo $fileOne->read();
}
    

?>
</section>
<?php

    require_once '../core/footer.php';
    
?>