<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
    <section class="cart">
        <form action="">
            <table>
                <thead>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá bán</th>
                        <th>Số lượng</th>
                        <th>Chọn</th>
                    </tr>
                </thead>
                <tbody id="products">
                </tbody>
            </table>
            <div class="price-total">
                <p>Tổng cộng : <span id="total-price"></span><sup>đ</sup></p>
                <p style=""></p>
            </div>
        </form>
    </section>
    <div>
        <button class="checkout">Mua hang</button>
        <form class="checkout-form" style="display: none">
            <div class="form-group">
                <label for="name">Ten</label>
                <input type="text" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="phone">Sdt</label>
                <input type="text" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="note">Ghi chu</label>
                <input type="text" class="form-control" id="note">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<script type="text/javascript" src="public/js/scrip.js"></script>
<script type="text/javascript" src="public/js/cart.js"></script>