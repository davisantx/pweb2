<!doctype html>
<html lang="en">

<head>
    <title>Votação</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="vh-100">

    <header class="d-flex justify-content-around align-items-center">
        <h1 class="text-white">Votação</h1>
        <form action="apuracao_votos.php" class="form d-flex flex-column gap-2" method="POST">
            <input type="submit" value="Apuração de votos"></input>
        </form>

    </header>

    <main class="d-flex justify-content-center align-items-center">
        <?php

        function returnPost($element)
        {
            return $_POST[$element];
        }


        $candidato = returnPost('candidato');

        $quantidadeDeVotosCandidato1 = 0;
        $quantidadeDeVotosCandidato2 = 0;


        $arquivo = fopen("txt/arquivo.txt", "w");


        if ($candidato == 'candidato1') {
            $quantidadeDeVotosCandidato1++;
        } else {
            $quantidadeDeVotosCandidato2++;
        }

        fwrite($arquivo, "$quantidadeDeVotosCandidato1\n");
        fwrite($arquivo, "$quantidadeDeVotosCandidato2\n");


        fclose($arquivo);


        echo "<h1> Voto computado! </h1>";



        ?>


    </main>


    <footer>


    </footer>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>