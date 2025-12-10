<?php
$trophies = [
    "UEFA Champions League" => "15 titles",
    "La Liga" => "36 titles",
    "Copa del Rey" => "20 titles",
    "Supercopa de España" => "13 titles",
    "UEFA Super Cup" => "6 titles",
    "FIFA Club World Cup" => "5 titles"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trophy Section</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

        body {
            font-family: 'Lato', sans-serif;
            background-color: #c196c7;
            color: #422480;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #fff;
            border-bottom: 4px solid #febe10;
            padding: 15px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #00529f;
            font-weight: bold;
            font-size: 1.1em;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        body {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #b392b9;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }


        h1 {
            color: #391f6d;
            text-align: center;
            font-weight: 700;
            border-bottom: 3px solid #FEBE10;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 1.1em;
            color: #0f0f0f;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            background-color: #ffffff;
            border-left: 5px solid #FEBE10;
            border-radius: 0 8px 8px 0;
            padding: 20px 25px;
            margin-bottom: 15px;

            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);

            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;

            font-size: 1.15em;
            font-weight: 700;
            color: #00417E;
        }

        li:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 5px 15px rgba(0, 82, 159, 0.15);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="extras.html">Extras</a></li>
                <li><a href="about.html">About Me</a></li>
            </ul>
        </nav>
    </header>
    <h1>Trophy Section</h1>

    <p>Real Madrid has a rich history of success, and their trophy cabinet is a testament to that. Here are some of the
        most notable trophies won by the club:</p>

    <ul>
        <?php foreach ($trophies as $name => $count): ?>
            <li><?php echo $name . ": " . $count; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>