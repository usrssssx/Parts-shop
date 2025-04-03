<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

<title>Корзина</title>
  <style>
    a{
      text-decoration: none;
    }
    h1{
      text-align: center;
      font-family: "Golos Text", sans-serif;
    }
    table {
      margin-top: 75px;
      width: 1400px;
      margin: 55px auto;
      
    }
    th, td {
      border: 1px solid black;
      padding: 5px;
    }

    .button-back{
        margin: 0 auto;
        text-align:center;
        align-items:center;
    }

    .btn{
      align-items:center;
      text-align:center;
      display: fixed;
      cursor:pointer;
      font-family: "Golos Text", sans-serif;
      border:3px solid white;
      color: white;
      background-color: rgba(255,79,0);
      text-transform: uppercase;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      border-radius: 1rem;
      margin-left: 1200px;
      margin-bottom:20px;
    }
    .btn:hover{
      border: 2px solid black;  
      color:black;
      background-color:#EEEFF1;
      transition: all 0.3s ease;
    }
    .btn-block{
      width: 200px;
      height: 100px;
      margin: 0 auto;
    }
    .btn-zakaz{
      cursor:pointer;
      font-family: "Golos Text", sans-serif;
      border:3px solid black;
      color: white;
      background-color: rgba(255,79,0);
      text-transform: uppercase;
      padding-top: 1rem;
      padding-bottom: 1rem;
      padding-left: 1rem;
      padding-right: 1rem;
      border-radius: 3rem;
      margin-top: 50px;
    }
    .btn-zakaz:hover{
      color:black;
      background-color:white;
      border: 3px solid black;
      transition: all 0.3s ease;
    }
    .tablepad{
    cursor:pointer;
    height: 364px;
    width: 1500px;
    min-height: 350px;
    border: 3px solid orange;
    border-radius: 25px;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
    margin: 0 auto;
    }

    i{
        font-size:45px;
        padding:10px;
        border-radius:50%;
        border: 2px solid rgba(255,79,0)
    }
  </style>
</head>
<body>
  <h1><i class="ri-shopping-basket-line"></i></h1>
  <div class="button-back">
    <button class="btn" onclick="window.location.href = 'products.html'">Назад</button>
  </div>
  <div class="tablepad">
  <table>
    <thead>
      <tr>
        <th>Название товара</th>
        <th>Количество</th>
        <th>Цена за единицу</th>
        <th>Общая цена</th>
        <th>Удалить</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cart_items as $item): ?>
        <tr>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['quantity']; ?></td>
          <td><?php echo $item['price']; ?></td>
          <td><?php echo $item['quantity'] * $item['price']; ?></td>
          <td><a href="remove_from_cart.php?product_id=<?php echo $product_id; ?>">Удалить</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">Общая сумма:</td>
        <td colspan="2"><?php echo $total_price; ?></td>
      </tr>
    </tfoot>
  </table>
</div>
<div class="btn-block">
    <a href="checkout.html"><button class="btn-zakaz">Оформить заказ</button></a>
</div>
</body>
</html>