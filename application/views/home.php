<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    table {
      background-color: #f8f9fa;
      border-radius: 10px;
      width: 90%;
 
    }

    table th,
    table td {
      border: none;
      font-size: 16px;
      padding: 6px 9px;
    }

    table thead {
      background-color: #343a40;
      color: #ffffff;
    }

    table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table tbody tr:hover {
      background-color: #d4d4d4;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1 class="title mb-3"> All  Products </h1>
    <table class="table">

      <thead>
        <tr>
          <th> Title</th>
          <th> Price </th>
          <th> Quantity</th>
          <th> Action </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) :  ?>
          <tr>
            <td> <?= $product->title ?> </td>
            <td> <?= $product->quantity ?> </td>
            <td> <?= $product->price ?> </td>
            <td> <button class="btn btn-primary"> Add To Cart </button> </td>
          <tr>
          <?php endforeach;   ?>

      </tbody>
    </table>

      <h2 class="title"> Cart </h2>

        <?php
          json_encode($cart);
        ?>


  </div>



</body>

</html>