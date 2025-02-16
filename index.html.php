<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Selection</title>
    <style>
        /* General page styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        /* Page heading */
        h1 {
            color: #003366;
            font-size: 24px;
            margin-bottom: 15px;
        }

        /* Container for boxes */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            max-width: 90%;
            padding: 15px;
        }

        /* Individual box styling */
        .box {
            background-color: #005b75;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;  /* Smaller width */
            height: 80px;   /* Smaller height */
            border-radius: 8px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        /* Hover effect */
        .box:hover {
            background-color: #0088a9;
            transform: scale(1.05);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
            .box {
                width: 180px; /* Adjust box size for smaller screens */
            }
        }
    </style>
</head>
<body>

    <h1>Select a Resume</h1>

    <div class="container">
    <?php
$people = [
    'Abrea'   => 'http://all.test/Mainpage/Abrea/Abrea.php',
    'Baslot'  => 'Baslot/baslot.php',
    'Batalon' => 'http://all.test/Mainpage/Batalon/batalon.php',
    'Bugnos'  => 'Bugnos/bugnos.php',
    'Calunsod' => 'Calunsod/calunsod.php',
    'Cataylo' => 'http://all.test/Mainpage/Cataylo/cataylo.php',
    'Diabordo' => 'http://localhost/all/Mainpage/Diabordo/diabordo.php',
    'Divinagracia' => 'http://all.test/Mainpage/Divinagracia/divinagracia.php',
    'Espinosa' => 'http://all.test/Mainpage/Espinosa/espinosa.php',
    'Gesulga, A' => 'http://all.test/Mainpage/Gesulga-A/Gesulga_A.php',
    'Gesulga, J' => 'http://localhost/all/Mainpage/Gesulga-J/gesulga,J.php',
    'Lamoste, J' => 'http://all.test/Mainpage/Lamoste-J/Lamoste,J.php',
    'Lamoste, M' => 'http://all.test/Mainpage/Lamoste-M/Lamoste,%20M.php',
    'Magadan,' => 'http://localhost/all/Mainpage/Magadan/sean.php',
    'Makilang' => 'http://all.test/Mainpage/Makilang/Makilang.php',
    'Oclarit' => 'http://all.test/Mainpage/Oclarit/oclarit.php',
    'Orit' => 'http://all.test/Mainpage/Orit/orit.php',
    'Ruales' => 'Ruales/ruales.php',
    'Serdan' => 'http://localhost/all/Mainpage/Serdan/serdan.php',
    'Sinco' => 'http://all.test/Mainpage/Sinco/sinco.php',
    'Tambis' => 'http://localhost/all/Mainpage/Tambis/tambis.php',
    'Tablada' => 'http://all.test/Mainpage/Tablada/tablada.php',
    'Timkang' => 'http://all.test/Mainpage/Timkang/timkang.php',
    'Yecyec' => 'http://localhost/all/Mainpage/Yecyec/yecyec.php' // Fixed absolute URL
];

foreach ($people as $name => $resumePage) {
    $encodedUrl = htmlspecialchars($resumePage, ENT_QUOTES, 'UTF-8'); // Prevents XSS attacks
    echo "<a href='$encodedUrl' class='box' target='_blank'>$name</a>";
}
?>

    </div>

</body>
</html>
