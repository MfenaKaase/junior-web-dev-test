<h1>Product List</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="main-cont">
    <div class="">
        <div class="action-links">
            <a href="\addproducts" class="btn btn-success">ADD</a>
            <button type="submit" href="" class="btn btn-danger">MASS DELETE</button>
        </div>
    </div>
    <div class="products-container">
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <div class="img-cont">
                    <img src="../img/<?php echo $product['type']?>.png" alt="">
                </div>
                <div class="container">
                    <input type="checkbox" name="<?php echo $product['id'] ?>" id="<?php echo $product['id'] ?>" class="delete-checkbox">
                    <p id="sku"><?php echo $product['sku'] ?></p>
                    <h3 id="name"><?php echo $product['name'] ?></h3>
                    <p id="price">$<?php echo $product['price']  ?></p>
                    <p id="special-attribute"><?php echo $product['attribute'] . $product['attr_name'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</form>