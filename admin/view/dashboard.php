
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiveChickens</title>
    <link rel="stylesheet" href="/assets/css/manage-index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


    <!-- wrapper all -->
    <div class="wrapper">

        <!-- headerwrapper -->
        <div class="header_wrapper navbar navbar-expand d-flex flex-row justify-content-between">

            <a href="#" class="navbar-brand p-2 m-1 mx-4">
                <img src="./assets/img/fivechickens.jpg" alt="Bootstrap" width="30" height="33.2"> FIVECHICKENS </a>
            </a>

            <div class="dropdown dropstart">
                <button class="btn p-2 px-3 me-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person fs-3"></i>
                </button>
                <ul class="dropdown-menu text-center p-1">
                    <p class="fs-5 ">MANAGER</p>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item " href="#">Thông tin</a></li>
                    <li><a class="dropdown-item my-2" href="#">Đăng xuất</a></li>
                </ul>
            </div>
        </div>

        <!-- main wrapper -->
        <div class="main_wrapper d-flex flex-row">
            <!-- side navigate wrapper -->
            <div class="sidenav text-wrap p-0 m-0">
                <nav class="nav nav-pills flex-column text-center p-0 m-0">
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Dashboard</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?list-product" >Danh sách sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-product">Thêm sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-category">Danh mục sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?inventory">Nhà kho</a>
                </nav>
            </div>

            <!-- main content wrapper -->
            <div class="maincontent container container-fluid">
                <div class="">
                    <div class="sumary p-3 my-1 d-flex flex-row flex-wrap justify-content-xxl-between justify-content-md-around">
                        <div class="summary__element border-3 m-1 py-2 px-5 rounded-4">
                            <div class="sumary__header fs-5">
                                <p>Lợi nhuận</p>
                            </div>
                            <hr>
                            <div class="summary__content fs-3">
                                <p>123456</p>
                            </div>
                        </div>

                        <div class="summary__element border-3 m-1 py-2 px-5 rounded-4">
                            <div class="sumary__header fs-5">
                                <p>Doanh số</p>
                            </div>
                            <hr>
                            <div class="summary__content fs-3">
                                <p>123456</p>
                            </div>
                        </div>

                        <div class="summary__element border-3 m-1 py-2 px-5 rounded-4">
                            <div class="sumary__header fs-5">
                                <p>Sản phẩn</p>
                            </div>
                            <hr>
                            <div class="summary__content fs-3">
                                <p>123456</p>
                            </div>
                        </div>
                    </div>

                    <div class="chart p-3 my-1 d-flex flex-column">
                        <div class="chart__header fs-4 ms-3 mb-0 p-0">
                            Biểu đồ
                        </div>
                        <div class="py-5 m-1 my-2 d-flex flex-shrink-0 rounded-4 justify-content-center bg-secondary-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1038" height="117" viewBox="0 0 1038 117"
                                fill="none">
                                <path
                                    d="M1.24756 0.79126V100.731C1.24756 109.015 7.96329 115.731 16.2476 115.731H1037.66M49.1995 85.4539L221.39 69.1942L390.886 37.7357C392.668 37.4049 394.495 37.3999 396.279 37.7208L569.191 68.8289C570.538 69.0713 571.912 69.1281 573.275 68.9978L694.37 57.4199L868.741 37.2354L972.12 23.7366C974.72 23.3971 977.185 22.3821 979.27 20.7927L1005.51 0.79126"
                                    stroke="black" />
                            </svg>

                        </div>
                        <div class="py-5 m-1 my-2 d-flex flex-shrink-0 rounded-4 justify-content-center bg-secondary-subtle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1038" height="117" viewBox="0 0 1038 117"
                                fill="none">
                                <path
                                    d="M1.24756 0.572754V100.512C1.24756 108.796 7.96329 115.512 16.2476 115.512H1037.66M38.3013 85.2354L184.793 57.6288C186.296 57.3455 187.834 57.2939 189.353 57.4756L301.122 70.8481C303.163 71.0924 305.233 70.9144 307.202 70.3253L347.979 58.1285C350.022 57.5175 352.171 57.349 354.285 57.6343L556.697 84.9664C558.018 85.1449 559.358 85.1463 560.681 84.9705L767.215 57.5142C768.774 57.3069 770.355 57.3461 771.902 57.6303L915.2 83.9598C919.597 84.7677 924.125 83.5724 927.55 80.6996L986.986 30.8495"
                                    stroke="black" />
                            </svg>
                        </div>
                    </div>

                    <div class="topsales p-3 m-3 rounded-4">
                        <table class="topsales-table table table-hover table-bordered table-responsive">
                            <caption class="caption-top fs-5 ms-2 mt-2">Danh sách top 3 sản phẩm bán chạy nhất</caption>
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Loại sản phẩm</th>
                                    <th scope="col">Doanh số</th>
                                    <th scope="col">Giá</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Giày Thể Thao Nam Biti's Hunter Street Mid Americano DSMH03600</td>
                                    <td>Giày thể thao nam</td>
                                    <td>9999</td>
                                    <td>761,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Giày Thể Thao Cao Cấp Nữ Biti's Hunter X Layered Upper DSWH02800</td>
                                    <td>Giày thể thao nữ</td>
                                    <td>9988</td>
                                    <td>902,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Giày Thể Thao Cao Cấp Nam Biti's Hunter Core Classic DSMH05000</td>
                                    <td>Giày thể thao nam</td>
                                    <td>9977</td>
                                    <td>736,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- javascipt -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

