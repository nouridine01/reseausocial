<!Doctype html5>
<html>
    <head>
        <link rel="stylesheet" href="./bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="card col-md-6  offset-md-3">
                <div class="card-header">
                   <h3> Liste de clients récuperer de la base de données </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead><tr><th>ID</th><th>NOM</th><th>PRENOM</th></tr></thead>
                        <tbody>
                            <?php
                                $login = 'root';
                                $pwd = '27041998';
                                $dsn = 'mysql:host=localhost;dbname=awstpe';
                                try {
                                    $pdo = new PDO($dsn, $login, $pwd);
                                }
                                catch (PDOException $e) {
                                    die("Erreur de connexion : " . $e->getMessage() );
                                }


                                $sql = "SELECT * FROM clients";
                                $resultat=$pdo->query($sql) ;
                                while ($ligne = $resultat->fetch(PDO::FETCH_NUM)){
                                    echo"<tr><td>$ligne[0]</td>
                                    <td>$ligne[1]</td>
                                    <td>$ligne[2]</td></tr>" ;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>