<body>
    <?php
    if (!isset($_POST["datos"])) {
        ?>  
        <h3>Triangulo</h3>
        <h2>Area</h2>
        <form method="post"action="triangulo.php">
            <input type="hidden" name="datos" value="12345">
            BASE:<input type="text" name="base"><br>
            ALTURA:<input type="text" name="altura"><br>
            <h2>Perimetro</h2>
            LADO_1:<input type="text" name="lado1"><br>
            LADO_2:<input type="text" name="lado2"><br>
            LADO_3:<input type="text" name="lado3"><br>
            <input type="submit" value="calcular">
        </form>
        <?php
    } else {
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $lado_1 = $_POST["lado1"];
        $lado_2 = $_POST["lado2"];
        $lado_3 = $_POST["lado3"];
        $area = ($base * $altura) / 2;
        $perimetro = ($lado_1 + $lado_2 + $lado_3);
        echo "<h3>resultado del area</h3>";
        echo "base = $base <br> ";
        echo "altura = $altura<br> ";
        echo "area = $area <br> ";
        echo "<h3>resultado del Perimetro</h3>";
        echo "lado_1 = $lado_1 <br> ";
        echo "lado_2 = $lado_2<br> ";
        echo "lado_3 = $lado_3 <br> ";
        echo "Perimetro = $perimetro <br> ";
        echo "<a href='triangulo.php'>Nuevo Calculo</a>";
    }
    ?>

</body>

