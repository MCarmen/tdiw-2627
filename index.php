<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> UAB/Enginyeria </title>
	    <link rel="stylesheet" type="text/css" href="css/uab.css">
	<!-- completa -->
    </head>
    <body>
        <?php
		    //completa
        ?>
        <div id="layout">
            <!-- SECCIÓ 1 - Capçalera -->
            <header style="grid-area: titol">
                <a href="http://www.uab.cat" target="_blank"><img src="img/uab.png" width="200px"></img></a>
                <h1>Escola d'Enginyeria</h1>
                <p>Benvinguts a l'Escola d'Enginyeria de la UAB</p>
                <hr/>
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
                    <form method="post" action="registre.php">
                        Nom complet: <input type="text" name="nom" /><br />
                        Password: <input type="password" name="clau" /><br />
                        Grau:
                        <select name="grau" id="graus">
                        <?php
                            //completa
                        ?>
                        </select>
                        <p>Tria la menció que t'atreu més:<p>
                        <select name="mencio" id="mencions">
                        <?php
                            //completa
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
                    <tr> <th colspan="2">Escola d'Enginyeria</th> <th colspan="2">Ciències</th> </tr>
                    <tr> <td>Enginyeria Informàtica</td> <td>300</td> <td>Matemàtiques</td> <td>200</td> </tr>
                    <tr> <td>Enginyeria de Sistemes de Telecomunicació</td> <td>150</td> <td rowspan="2">Física</td>
                    <td rowspan="2">100</td> </tr>
                    <tr> <td>Enginyeria Química</td> <td>300</td> </tr>
                    <tr> <td>Total:</td> <td>750</td> <td>Total</td> <td>300</td> </tr>
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
