<?php

use webLazy\Core\Request;
use webLazy\Core\URL;
use webLazy\Model\ProductModel;
use webLazy\Model\SearchModel;

require_once 'views/Shop/header.php';
$row = SearchModel::searchProduct($_POST['Search']); ?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="active">Search</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-wraper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Li's Banner Area -->
                    <?php if (isset($row) && !empty($row)) { ?>
                    <div class="single-banner shop-page-banner">
                        <a href="#">
                            <img src="./assets/theme/images/bg-banner/2.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                    <?php } ?>
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div class="tab-pane product-list-view fade active show">
					            <?php
					            if (isset($row) && !empty($row)) {
						            foreach ($row as $key => $value): ?>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="<?= URL::uri('ctsp') . '/' . $value[0] ?>">
                                                                <img src="./assets/upload/<?= LoadOneAnh($value[4]) ?>"
                                                                     style="width: 270px;height: 270px"
                                                                     alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="">Graphic Corner</a>
                                                                    </h5>
                                                                    <div class="rating-box">
                                                                        <ul class="rating">
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li class="no-star"><i
                                                                                        class="fa fa-star-o"></i>
                                                                            </li>
                                                                            <li class="no-star"><i
                                                                                        class="fa fa-star-o"></i>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4><a class="product_name"
                                                                       href="<?= URL::uri('ctsp') . '/' .
													                   $value[0] ?>"><?= $value[1] ?></a>
                                                                </h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?= Money($value[2]); ?> vnđ</span>
                                                                </div>
                                                                <p><?= the_excerpt($value[3]) ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart">
                                                                    <button style="width: 120px;"
                                                                            data-id="<?= $value[0] ?>"
                                                                            onclick="const id = this.getAttribute('data-id');addToCard(id); ">
                                                                        Add to cart
                                                                    </button>
                                                                </li>
                                                                <li class="wishlist">
                                                                    <button style="width: 140px;"
                                                                            class="links-details"
                                                                            data-id="<?= $value[0] ?>"
                                                                            onclick="const id = this.getAttribute('data-id');
                                                                addToWishList(id); "><i class="fa fa-heart-o"></i>Add to
                                                                        wishlist</a>
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

						            <?php endforeach;
					            } else {
						            echo "<h1>Sản Phẩm Bạn Tìm Kiếm Chưa Tồn Tại</h1>";
					            }
					            ?>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
            </div>
        </div>
    </div>
<?php require_once 'views/Shop/footer.php' ?>