<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker | Programador a Bordo</title>
</head>
<body>
    <?php
        $result = file_get_contents("http://node-container-1:9001/products");
        $products = json_decode($result);
    ?>

    <table>
        <thead>
            <th>Produto</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td> <?php echo $product->name; ?> </td>
                    <td> <?php echo $product->price; ?> </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>

</body>
</html>