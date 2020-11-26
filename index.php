<?php
require "class.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <select name="tipoDe" id="tipoDe">
            <option value="1">Quilômetro (Km)</option>
            <option value="2">Hectômetro (Hm)</option>
            <option value="3">Decâmetro (Dam)</option>
            <option value="4">Metro (M)</option>
            <option value="5">Decímetro (Dm)</option>
            <option value="6">Centímetro (Cm)</option>
            <option value="7">Milímetro (Mm)</option>
        </select>
        <p>Para</p>
        <select name="tipoPara" id="tipoPara">
            <option value="1">Quilômetro (Km)</option>
            <option value="2">Hectômetro (Hm)</option>
            <option value="3">Decâmetro (Dam)</option>
            <option value="4">Metro (M)</option>
            <option value="5">Decímetro (Dm)</option>
            <option value="6">Centímetro (Cm)</option>
            <option value="7">Milímetro (Mm)</option>
        </select>
        <input type="number" step="0.01" name="entrada" id="entrada">
        <button type="submit">Converter</button>
    </form>
    <?php if (isset($_GET, $_GET['tipoDe'], $_GET['tipoPara'])) {
        $resultado = Converte::Definir($_GET['tipoDe'],$_GET['tipoPara']);
    ?>
        <p>Valor: <span id="saida"><?php echo $resultado ?></span> </p>
    <?php } ?>
</body>

</html>