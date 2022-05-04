<?php
//setto variabile paragrafo
$paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati minus placeat quos consequatur odio quibusdam nostrum praesentium fugit quidem, facere quo deserunt quod in dicta totam reprehenderit, officia ipsam fuga neque cupiditate. Minima distinctio quibusdam iusto debitis, accusamus nesciunt placeat dolor labore eligendi, ipsam vitae reiciendis dignissimos aliquid. Labore laborum, reiciendis voluptatibus aliquid assumenda optio voluptates tenetur unde ipsum laudantium recusandae! Enim dicta ad inventore laborum, repudiandae magni voluptatum tempore libero, deserunt laudantium nostrum animi voluptates perferendis. Eligendi fuga accusantium ducimus assumenda, quam aperiam alias delectus necessitatibus sint dignissimos veniam odio voluptatum provident unde possimus molestiae nisi maxime, non voluptates!";
//crea variabile che prende il valore inserito nell'input 
$banWord = $_GET['banWord'];
//variabile lunghezza della variabile stringa (inserisco anche la funzione per modificare il paragrafo con la barola da bannare così il numero è reattivo e cambia al cambiare del paragrafo)
$stringLength = strlen(str_replace($banWord, "***", $paragraph));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1> Bad Words </h1>
<!-- creo form per inserire la parola da bannare -->
    <form method="get">
        <!-- Il valore della key name mi serve per collegare php a html-->
        <input type="text" name="banWord">
        <button type="submit"> Submit </button>
    </form>

    <div>
        <!-- stampo in HTML la parola bannata-->
        <?php echo "$banWord"?>
    </div>

    <p>
        <!-- stampo in html il paragrafo, se c'è una parola bannata sostituisce la parola con *** -->
        <?php echo str_replace($banWord, "***", $paragraph) ?>
    </p>

    <div>
        <!-- stampo la quantità di caratteri, compresi gli spazzi del paragrafo -->
        <?php echo "$stringLength" ?>
    </div>
</body>
</html>