<?php
    $data = file_get_contents("books.json");
    $decodedData = json_decode($data, true);
    // print_r($decodedData[0]["bookInfo"]["title"]);
    // print_r(count($decodedData));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="2">
            <tr>
                <th>BookID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Pages</th>
                <th>Description</th>
                <th>Genres</th>
                <th>Image</th>
                <th>Language</th>
                <th>Publisher</th>
                <th>Published Date</th>
                <th>Category</th>
            </tr>

            <?php 
                $i = 0;
                while($i < count($decodedData))
                {
            ?>

            <tr>
                <td><?php print_r($decodedData[$i]["id"]) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['title']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['author'][0]) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['pages']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['description']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['genres']) ?></td>
                <td><img src="<?php $decodedData[$i]['bookInfo']['imgLink'] ?>" alt="" ></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['lang']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['publisher']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['publishedDate']) ?></td>
                <td><?php print_r($decodedData[$i]['bookInfo']['category']) ?></td>
            </tr>

            <?php 
                $i = $i+1;
                }
            ?>

        </table>

        <?php 
            $ctr = 0;
            while($ctr < 145)
            {
                $link = $decodedData[$ctr]['bookInfo']['imgLink'];
                echo '<img src="' . $link . '" alt="alt" height="220" width="150">';
                $ctr = $ctr + 1;
            }
            
        ?>
        </center>
</body>
</html>