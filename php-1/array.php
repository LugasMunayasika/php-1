<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike","Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray"); 
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; // Berapa panjang array kids
        echo count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";

        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        echo "<h3> Soal 3 </h3>";
        $biodata = array(
            array("Will Byers","Mike Wheeler", "Jim Hopper","Eleven"),
            array(12,43),
            array("Will the Wise","Dungeon Master","Chief Hopper","El"),
            array("Alive","Deceased")
        ); 
    ?>
        <h1>Biodata</h1>
        <ul>
            <li>Name: <?php echo $biodata[0][0] ?></li>
            <li>Age: <?php echo $biodata[1][0] ?></li>
            <li>Aliases: <?php echo $biodata[2][0] ?></li>
            <li>Status: <?php echo $biodata[3][0] ?></li>
        </ul>
        <ul>
            <li>Name: <?php echo $biodata[0][1] ?></li>
            <li>Age: <?php echo $biodata[1][0] ?></li>
            <li>Aliases: <?php echo $biodata[2][1] ?></li>
            <li>Status: <?php echo $biodata[3][0] ?></li>
        </ul>
        <ul>
            <li>Name: <?php echo $biodata[0][2] ?></li>
            <li>Age: <?php echo $biodata[1][1] ?></li>
            <li>Aliases: <?php echo $biodata[2][2] ?></li>
            <li>Status: <?php echo $biodata[3][1] ?></li>
        </ul>
        <ul>
            <li>Name: <?php echo $biodata[0][3] ?></li>
            <li>Age: <?php echo $biodata[1][0] ?></li>
            <li>Aliases: <?php echo $biodata[2][3] ?></li>
            <li>Status: <?php echo $biodata[3][0] ?></li>
        </ul>
        
</body>
</html>