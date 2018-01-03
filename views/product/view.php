<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
                        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?php echo '/template/images/'.$product['id'].'.jpg';?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $product['name'];?></h2>
                                <p>Product code: <?php echo $product['code'];?></p>
                                <span>
                                    <span>US $<?php echo $product['price'];?></span>
                                    <label>QTY:</label>
                                    <input type="text" value="3" />
                                    <button type="button" data-id="<?php echo $product['id']; ?>"
                                            class="btn btn-default cart add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add To Cart
                                    </button>
                                </span>
                                <p><b>Availability:</b><?php echo $product['availability']; ?></p>
                                <p><b>Condition:</b> <?php echo $product['is_new']; ?></p>
                                <p><b>Brand:</b><?php echo $product['brand']; ?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <h5>Description</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>