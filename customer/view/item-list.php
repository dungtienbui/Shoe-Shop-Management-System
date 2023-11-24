    <div class="container-fluid p-0">
        <div class="mx-5">
            <h2 class="text-center my-4"> Tên danh mục </h2>
            <div class="">
                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Màu sắc </button>
                    <div class="dropdown-menu">
                        <div class="d-flex flex-row">
                            <?php foreach ($color_list as $color) {?>
                            <a href="#" class="item-list__filter mx-1 text-center">
                                <img src="<?php echo $color->getColorImg(); ?>" class="w-100 h-100 img-fluid rounded-circle border border-1" alt="...">
                                <!-- <i class="bi bi-check-lg text-white"></i> -->
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Kích thước </button>
                    <div class="dropdown-menu">
                        <div class="d-flex flex-row">
                            <?php foreach ($size_list as $size) {?>
                            <a href="#" class="rounded-circle bg-secondary-subtle item-list__filter mx-1 border border-1 text-center text-black text-decoration-none">
                                <?php echo $size->getSizeName(); ?>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Giá </button>
                    <div class="dropdown-menu item-list__filter-price">
                        <div class="mx-3">
                            <label for="customRange3" class="form-label w-100">
                                <p class="text-center m-0">Giá từ: 0 đ - 2.000.000 đ</p>
                            </label>
                            <input type="range" class="form-range" min="0" max="2000000" step="50000" id="customRange3">
                        </div>
                    </div>
                </div>

                <div class="item-list__sort float-end">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Sắp xếp theo </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Giá: Tăng dần</a></li>
                        <li><a class="dropdown-item" href="#">Giá: Giảm dần</a></li>
                        <li><a class="dropdown-item" href="#">Tên: A-Z</a></li>
                        <li><a class="dropdown-item" href="#">Cũ nhất</a></li>
                        <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                    </ul>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-5 g-4 mt-5">
                <?php foreach ($product_list as $product) {?>
                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="./detail-item.html">
                    <div class="item-list__card card col p-0 h-100 rounded-0">
                        <img src="../view/assets/img/shoe/shoename/shoeimg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                            <p class="card-text"><?php echo $product->getPrice(); ?>đ</p>
                        </div>
                    </div>
                </a>
                <?php }?>
            </div>
            <div class="d-flex justify-content-center my-5">
                <button type="button" class="item-list__view-more-btn btn btn-primary ">Xem thêm</button>
            </div>

        </div>

    </div>
