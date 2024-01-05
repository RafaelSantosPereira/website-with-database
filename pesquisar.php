
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="configurador.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
            <h1>Pesquise uma configuração</h1>
    </header>
    <nav class="side-bar" side-bar>
            <ul>
                <li class="menu-item">
                    <a href="configurador.php">
                        <span class="icon"><i class="bi bi-house"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="eliminar.php">
                        <span class="icon"><i class="bi bi-trash"></i></span>
                        <span class="txt-link">Eliminar</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pesquisar.php">
                        <span class="icon"><i class="bi bi-search"></i></span>
                        <span class="txt-link">Pesquisar</span>
                    </a>
                </li>
                
            </ul>
    </nav>   
   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formeliminar">
        <input type="number" name="id" placeholder="ID" min="1" class="idimput" required>
        <button type="submit"  value="Pesquisar">Pesquisar</button>
    </form>
    <div class="tabela">
        <table class="tabelapesquisar">
            <tr>
                <th>ID</th>
                <th>Processador</th>
                <th>Placa mae</th>
                <th>Placa de video</th>
                <th>Memoria</th>
                <th>Disco</th>
                <th>Fonte</th>
                <th>Torre</th>
            </tr>
            <?php
                session_start(); // Inicie a sessão
                include 'connect.php';
                
                // Recupere o nome do utilizador da sessão
                $Nome = $_SESSION['Nome'];
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    
                    $id = $_POST["id"];
                
                    if (!$id){
                        header("location:pesquisar.php");
                    }
                
                    $pesquisar = "SELECT * FROM Componentes WHERE id = '$id' AND Nome ='$Nome'";
                    $result = mysqli_query($liga, $pesquisar);

                    $nregistos = mysqli_num_rows($result);

                    for ($i=0; $i<$nregistos; $i++)
                    {
                    $registo = mysqli_fetch_assoc($result);
                    echo '<tr><td>' .$registo['id']. '</td>';
                    echo '<td>' .$registo['processador']. '</td>';
                    echo '<td>' .$registo['PlacaMae']. '</td>';
                    echo '<td>' .$registo['PlacaVideo']. '</td>';
                    echo '<td>' .$registo['Memoria']. '</td>';
                    echo '<td>' .$registo['Disco']. '</td>';
                    echo '<td>' .$registo['Fonte']. '</td>';
                    echo '<td>' .$registo['Torre']. '</td></tr>'; 
                        
                    };
                }

                
            ?>
        </table>
    </div>
    
</body>
</html>