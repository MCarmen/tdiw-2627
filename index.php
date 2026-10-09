<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UAB/Enginyeria </title>
    <link rel="stylesheet" type="text/css" href="css/uab.css">
    <!-- TODO1: Load the JQuery library from:  https://code.jquery.com/jquery-4.0.0.js-->
    <script src="https://code.jquery.com/jquery-4.0.0.js"></script>
    <!-- TODO2: Load the js file -->
    <script src="js/funcions.js"></script>
</head>

<body>
    <div id="layout">
        <!-- SECCIÓ 1 - Capçalera -->
        <header style="grid-area: titol">
            <a href="http://www.uab.cat" target="_blank"><img src="img/uab.png" width="200px"></img></a>
            <h1>Escola d'Enginyeria</h1>
            <p>Benvinguts a l'Escola d'Enginyeria de la UAB</p>
            <hr />
        </header>
        <!-- SECCIÓ 2 - Llistat dels diferents graus que ofereix l’escola d’enginyeria -->
        <section style="grid-area: graus;">
            <header>
                <h3>Graus disponibles: </h3>
            </header>
            <ul>
                <li><a href="http://www.uab.cat/grauEI">Enginyeria Informàtica</a>
                    <ul>
                        <li>Menció Enginyeria del software</li>
                        <li>Menció Enginyeria de computadors</li>
                        <li>Menció Computació</li>
                        <li><a href="mencions/TI/index.html">Menció Tecnologies de la informació</a></li>
                    </ul>
                </li>
                <li>Enginyeria de Sistemes de Telecomunicació</li>
                <li>Enginyeria Electrònica de Telecomunicació</li>
                <li>Enginyeria Química</li>
            </ul>
        </section>
        <!-- SECCIÓ 3 - Formulari de registre -->
        <section style="grid-area: registre">
            <header class="fancy">
                <h3>Registra't com a alumne en un grau: </h3>
            </header>
            <p> Si us plau facilita'ns les teves dades </p>
            <div id="formDiv">
                <!-- TODO6: request for the script registre.php when the form is submitted -->
                <form method="post" action="registre.php">
                    Nom complet: <input type="text" name="nom" /><br />
                    Password: <input type="password" name="clau" /><br />
                    Grau:
                    <select name="grau" id="graus">
                        <?php
                        //TODO4: show a tag option for each degree.
                        //Step1: Stablish the DB connection
                        include_once __DIR__ . "/connectaBD.php";
                        $con = connectaBD();
                        //Step2: Query the degrees from the DB.
                        $sql = "SELECT * FROM graus";
                        $result = pg_query($con, $sql);
                        $rows = pg_fetch_all($result);
                        foreach ($rows as $row) {
                            //Step3: Generate and option tag with the 'id' and the 'nom' of the degree register.
                            //echo "<option value='".$row['id']."'>$row['nom']</option>";
                        ?>
                            <option value="<?= $row['id'] ?>"> <?= $row['nom'] ?> </option>

                        <?php
                        }
                        ?>
                    </select>
                    <p>Tria la menció que t'atreu més:
                    <p>
                        <select name="mencio" id="mencions">
                            <?php
                            //TODO5: Load the mencions from the DB and show a tag option for each one.
                            //solution 1: 
                            //include_once __DIR__ . "/mencions.php"; 

                            //solution 2: 
                            //Step2: Query the degrees from the DB.
                            $sql = "SELECT * FROM mencions WHERE grau=1";
                            $result = pg_query($con, $sql);
                            $rows = pg_fetch_all($result);
                            foreach ($rows as $row) :
                                //Step3: Generate and option tag with the 'id' and the 'nom' of the degree register.
                                //echo "<option value='".$row['id']."'>$row['nom']</option>";
                            ?>
                                <option value="<?= $row['id'] ?>"> <?= $row['nom'] ?> </option>

                            <?php
                            endforeach;
                            ?>

                        </select>
                        <br /><br />
                        <input type="submit" value="Registrar-me" />
                </form>
            </div>
            <hr />
        </section>
        <!-- SECCIÓ 4 -  Estadístiques de matriculació per grau -->
        <section class="statistics" style="grid-area: stats">
            <header>
                <h3>Estadístiques de matriculació per graus</h3>
            </header>
            <table>
                <tr>
                    <th colspan="2">Escola d'Enginyeria</th>
                    <th colspan="2">Ciències</th>
                </tr>
                <tr>
                    <td>Enginyeria Informàtica</td>
                    <td>300</td>
                    <td>Matemàtiques</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>Enginyeria de Sistemes de Telecomunicació</td>
                    <td>150</td>
                    <td rowspan="2">Física</td>
                    <td rowspan="2">100</td>
                </tr>
                <tr>
                    <td>Enginyeria Química</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>750</td>
                    <td>Total</td>
                    <td>300</td>
                </tr>
            </table>
        </section>
        <!-- SECCIÓ 5 - Peu de pàgina -->
        <footer style="grid-area: peu">
            <img src="img/campus-e.png" width="100px" id="campus-e" />
            <p>&copy;Universitat Autònoma de Barcelona. Campus d'Excel·lència</p>
        </footer>
    </div>
</body>

</html>