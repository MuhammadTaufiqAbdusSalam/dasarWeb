<!DOCTYPE html>
<html>
    <!--kode ini berfungsi untuk menampilkan data tentang beberapa film dalam sebuah tabel HTML menggunakan PHP untuk mengambil dan menampilkan nilai dari array multi-dimensi.-->
    <head>
        <link rel="stylesheet" type ="text/css" href="style.css"/>
    </head>
    <body>
        <h2>Multi dimensional array</h2>
        <table>
            <tr>
                <th>judul film</th>
                <th>tahun</th>
                <th>rating</th>
            </tr>
            <?php
                $movie = array(
                    array("avengers: invity war",2018,8.7),
                    array("the avengers",2012,8.1),
                    array("guardian of galaxy",2014,8.1),
                    array("iron man",2008,7.9)
                );
                echo "<tr>";
                    echo "<td>". $movie[0][0] ."</td>";
                    echo "<td>". $movie[0][1] ."</td>";
                    echo "<td>". $movie[0][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[1][0] ."</td>";
                    echo "<td>". $movie[1][1] ."</td>";
                    echo "<td>". $movie[1][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[2][0] ."</td>";
                    echo "<td>". $movie[2][1] ."</td>";
                    echo "<td>". $movie[2][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $movie[3][0] ."</td>";
                    echo "<td>". $movie[3][1] ."</td>";
                    echo "<td>". $movie[3][2] ."</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>