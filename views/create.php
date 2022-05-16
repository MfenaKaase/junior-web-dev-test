
<h1>Create Products</h1>

<form class="d-flex" id="product_form" method="post" action="">
    <div class="action-links">
        <button type="submit" class="btn btn-success">Save</button>
        <a href="/" class="btn btn-danger">Cancel</a>
    </div>
    <div class="row">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="form-cont">
            <div>
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="sku" value="<?php echo $_POST['sku'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo $_POST['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="price">PRICE ($)</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" value="<?php echo $_POST['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="productType">TYPE</label>
                    <select class="form-control" id="productType" name="type" required>
                        <option selected disabled>PICK A TYPE</option>
                        <option value="dvd">DVD</option>
                        <option value="furniture">FURNITURE</option>
                        <option value="book">BOOK</option>

                    </select>
                    <div class="form-d" id="changingInputs" name="attributes">

                    </div>
                    <p class="description">Please, provide <span>attribute</span></p>
                </div>
            </div>
        </div>
    </div>
</form>

