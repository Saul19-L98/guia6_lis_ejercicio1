<!doctype html>
<html lang="es">
    <?php
        // Start the session
        session_start();
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Discucion</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="./css/navbar-top.css" rel="stylesheet">
</head>
<body style="background-color: rgba(51, 75, 97, 0.349)">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand disabled" href="#">Discución 1 </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" ariaexpanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1 style="text-align: center;">Oredenando numeros</h1>
            <form method="POST">
                <div class="input-group">
                    <span class="input-group-text">Ingrese Numeros</span>
                    <input type="text"name="numero" id="numero" class="formcontrol">
                </div><br>
                <center><button name="conv" class="btn btn-primary btnlg">Añadir</button>
                <button name="ord" class="btn btn-primary btnlg">Ordenar</button></center>
            </form>
            <br>
            <?php
                if(isset($_POST['conv']) ){
                    $numeros= array();
                    if (isset($_SESSION['nm_arr1'])){$tmp_arr=$_SESSION["nm_arr1"];
                        array_push($tmp_arr,$_POST['numero']);
                        echo "<h3>";
                        foreach($tmp_arr as $n){
                            echo $n . "\n";
                        }
                        echo "</h3>";
                        $_SESSION["nm_arr1"] = $tmp_arr;
                    }
                    else{
                        array_push($numeros,$_POST['numero']);
                        echo "<h3>";
                        foreach($numeros as $n){
                            echo $n . "\n";
                        }
                        echo "</h3>";
                        $_SESSION["nm_arr1"] = $numeros;
                    }
                }
                if(isset($_POST['ord'])){
                    if(isset($_SESSION['nm_arr1'])){
                        maxmin();
                    }
                }   
                function maxmin(){
                    $tmp_arr=$_SESSION["nm_arr1"];
                    echo "<h3>";
                    foreach($tmp_arr as $n){
                        echo $n . "\n";
                    }
                    echo "</h3>";
                    echo "<h3>";
                    echo "Mayor "; echo max($tmp_arr);
                    echo "</h3>";
                    echo "<h3>";
                    echo "Menor "; echo min($tmp_arr);
                    echo "</h3>";
                    session_unset();
                }   
            ?>
        </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>