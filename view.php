<!DOCTYPE html>
<html lang="pt" class="no-js">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <!-- Title Page-->
    <title>Aniversário do Licka</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Aniversário do Licka</h2>
                </div>
                <div class="card-body">
                    <table style="width:100%; text-align:center;">
                        <tr>
                            <th>Nome</th>
                            <th>Último Nome</th>
                            <th>Número</th>
                            <th>Confirmação</th>
                        </tr>
                        <?php
                        $hn = 'localhost';
                        $db = 'niver';
                        $un = 'niver';
                        $pw = '123';

                        $conn = new mysqli($hn, $un, $pw, $db);
                        if ($conn->connect_error)
                            die("Erro Fatal");
                        $sql = "SELECT * from convidados";
                        $consulting = mysqli_query($conn, $sql);

                        if ($consulting->num_rows > 0) {
                            while ($row = $consulting->fetch_assoc()) {
                                echo "<tr><td>" . $row["nome"] . "</td>";
                                echo "<td>" . $row["ultimo_nome"] . "</td>";
                                echo "<td>" . $row["ddd"] . " " . $row["numero"] . "</td>";
                                echo "<td>" . $row["confirmacao"] . "</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "<table style='width:100%; text-align:center;'><br><tr><td>Sem Dados</td></tr></table>";
                        } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>