<?php require __DIR__ . "/_header.php"; ?>

<pre><?php

        // Super global $_GET recebe os dados de um formulário usando o método HTTP post. 
        echo "Usando método GET\n";
        print_r($_GET);

        // Super global $_POST recebe os dados de um formulário usando o método HTTP post. 

        echo "\n\n\nUsando método POST\n";

        print_r($_POST);

        ?></pre>

<?php require __DIR__ . "/_footer.php"; ?>