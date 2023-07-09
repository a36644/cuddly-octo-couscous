<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.3.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/register.css">

</head>

<body>
    <div class="app">
        <div class="bgr">
            <div class="register">
                <div class="dvao">

                </div>
                <form id="register-form" class="auth-form auth-form-register" method="post" action="xulyDangKy.php">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="modal__inner-header">Đăng Ký</h3>
                            <a href="login.php" style="text-decoration: none;"><span id="switch-register" class="btn-switch">Đăng nhập</span></a>
                        </div>

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input id="phonenumber" name="phonenumber" type="text" class="auth-form__input" placeholder="Số điện thoại" onkeyup="checkPhone()">
                                <div id="err-phonenumber" class="err"></div>
                            </div>
                            <div class="auth-form__group">
                                <input id="fullname" name="fullname" type="text" class="auth-form__input" placeholder="Họ và tên" onkeyup="checkName()">
                                <div id="err-name" class="err"></div>
                            </div>
                            <div class="auth-form__group">
                                <input id="password" name="password" type="password" class="auth-form__input" placeholder="Nhập mật khẩu" onkeyup="checkPass()">
                                <div id="err-password" class="err"></div>
                            </div>
                            <div class="auth-form__group">
                                <input id="re-password" name="re-password" type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu" onkeyup="checkRePass()">
                                <div id="err-re_password" class="err"></div>
                            </div>
                        </div>

                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">
                                Bằng việc đăng kí, bạn đã đồng ý với shoppe về
                                <a href="" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
                                <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                            </p>
                        </div>

                        <div class="auth-form__controls">
                            <a href="index.php"><input id="x-register" name="x-register" class="btn auth-form__controls-back" value="TRỞ LẠI" readonly></a>
                            <input type="submit" name="btn-register" id="btn-register" style="min-width: 124px; margin-right: 10px;"  value="ĐĂNG KÝ" disabled onclick="checkRegister()">
                        </div>
                    </div>

                    <div class="auth-form__social">
                        <a href="#" class="btn--social-icon-fb">
                            <i class="fa-brands fa-square-facebook"></i>
                            <span class="btn--social-text">Kết nối với Facebook</span>
                        </a>
                        <a href="#" class="btn--social-icon-gg">
                            <i class="fa-brands fa-google"></i>
                            <span class="btn--social-text">Kết nối với Google</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-space-top">
            </div>
            <div class="footer-content grid">
                <div class="footer-content-list">
                    <ul class="footer-list grid__column-2-4">
                        <h3 class="footer-list__title">CHĂM SÓC KHÁCH HÀNG</h3>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Trung Tâm Trợ Giúp</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Shopee Blog</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Shopee Mall</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Hướng Dẫn Mua Hàng</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Hướng Dẫn Bán Hàng</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Thanh Toán</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Shopee Xu</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Vận Chuyển</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Trả Hàng & Hoàn Tiền</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Chăm Sóc Khách Hàng</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Chính Sách Bảo Hành</a></li>
                    </ul>
                    <ul class="footer-list grid__column-2-4">
                        <h3 class="footer-list__title">VỀ SHOPPE</h3>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Giới Thiệu Về Shoppe Việt Nam</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Tuyển Dụng</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Điều Khoản Shoppe</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Chính Sách Bảo Mật</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Chính Hãng</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Kênh Người Bán</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Flash Sales</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Chương Trính Tiếp Thị Liên Kết Shoppe</a></li>
                        <li class="footer-list__item"><a class="footer-list__item-link" href="">Liên Hệ Với Truyền Thông</a></li>
                    </ul>
                    <div class="pay-transport grid__column-2-4">
                        <ul class="footer-list">
                            <h3 class="footer-list__title">THANH TOÁN</h3>
                            <div class="pay">
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/d4bbea4570b93bfd5fc652ca82a262a8" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/a0a9062ebe19b45c1ae0506f16af5c16" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/38fd98e55806c3b2e4535c4e4a6c4c08" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/bc2a874caeee705449c164be385b796c" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/2c46b83d84111ddc32cfd3b5995d9281" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/5e3f0bee86058637ff23cfdf2e14ca09" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/9263fa8c83628f5deff55e2a90758b06" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item footer-img-link">
                                    <a class="footer-list__item-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/0217f1d345587aa0a300e69e2195c492" alt="">
                                    </a>
                                </li>
                            </div>
                        </ul>
                        <ul class="footer-list">
                            <h3 class="footer-list__title">ĐƠN VỊ VẬN CHUYỂN</h3>
                            <div class="transport">
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/5e7282bd0f7ee0872fdb0bd1d40fbe9e" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/d10b0ec09f0322f9201a4f3daf378ed2" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/77bf96a871418fbc21cc63dd39fb5f15" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/59270fb2f3fbb7cbc92fca3877edde3f" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/957f4eec32b963115f952835c779cd2c" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/0d349e22ca8d4337d11c9b134cf9fe63" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/3900aefbf52b1c180ba66e5ec91190e5" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/6e3be504f08f88a15a28a9a447d94d3d" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/b8348201b4611fc3315b82765d35fc63" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a class="footer-list__item-link footer-img-link" href="#">
                                        <img src="https://down-vn.img.susercontent.com/file/0b3014da32de48c03340a4e4154328f6" alt="">
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <ul class="footer-list grid__column-2-4">
                        <h3 class="footer-list__title">THEO DÕI CHÚNG TÔI TRÊN</h3>
                        <li class="footer-list__item">
                            <a class="footer-list__item-link" href="">
                                <i class="social-icon fa-brands fa-facebook"></i>
                                <span class="social-label">Facebook</span>
                            </a>
                        </li>
                        <li class="footer-list__item">
                            <a class="footer-list__item-link" href="">
                                <i class="social-icon fa-brands fa-instagram"></i>
                                <span class="social-label">Instagram</span>
                            </a>
                        </li>
                        <li class="footer-list__item">
                            <a class="footer-list__item-link" href="">
                                <i class="social-icon fa-brands fa-linkedin"></i>
                                <span class="social-label">LinkedIn</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-list grid__column-2-4">
                        <h3 class="footer-list__title">TẢI ỨNG DỤNG SHOPEE NGAY THÔI</h3>
                        <div class="footer-wrap">
                            <div class="footer-qr-link">
                                <a href="" class="footer-qr-link-down footer-img-link">
                                    <img class="qr-down" src="https://down-vn.img.susercontent.com/file/a5e589e8e118e937dc660f224b9a1472" alt="">
                                </a>
                            </div>
                            <div class="footer-list__item-right">
                                <li class="footer-list__item">
                                    <a href="" class="footer-list__item-link footer-img-link">
                                        <img src="https://down-vn.img.susercontent.com/file/ad01628e90ddf248076685f73497c163" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a href="" class="footer-list__item-link footer-img-link">
                                        <img src="https://down-vn.img.susercontent.com/file/ae7dced05f7243d0f3171f786e123def" alt="">
                                    </a>
                                </li>
                                <li class="footer-list__item">
                                    <a href="" class="footer-list__item-link footer-img-link">
                                        <img src="https://down-vn.img.susercontent.com/file/35352374f39bdd03b25e7b83542b2cb0" alt="">
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="footer-area grid">
                <p class="footer-area-text">&copy; 2023 Shopee. Tất cả các quyền được bảo lưu.</p>
                <p class="footer-area-text">
                    Quốc gia & Khu vực:
                    <a class="footer-nation" href="#">Singapore</a>
                    <a class="footer-nation" href="#">Indonesia</a>
                    <a class="footer-nation" href="#">Đài Loan</a>
                    <a class="footer-nation" href="#">Thái Lan</a>
                    <a class="footer-nation" href="#">Malaysia</a>
                    <a class="footer-nation" href="#">Việt Nam</a>
                    <a class="footer-nation" href="#">Philippines</a>
                    <a class="footer-nation" href="#">Brazil</a>
                    <a class="footer-nation" href="#">México</a>
                    <a class="footer-nation" href="#">Colombia</a>
                    <a class="footer-nation" href="#">Chile</a>
                </p>
            </div>
            <div class="footer-license">
                <p class="footer-policy grid">
                    <a href="" class="policy-link">CHÍNH SÁCH BẢO MẬT</a>
                    <a href="" class="policy-link">QUY CHẾ HOẠT ĐỘNG</a>
                    <a href="" class="policy-link">CHÍNH SÁCH VẬN CHUYỂN</a>
                    <a href="" class="policy-link">CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN</a>
                </p>
                <p class="name-company">Công ty TNHH Shopee</p>
                <p class="info-company">
                    Địa chỉ: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai, Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.shopee.vn</br>
                    Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí - Điện thoại liên hệ: 024 73081221 (ext 4678)</br>
                    Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần đầu ngày 10/02/2015</br>
                    © 2015 - Bản quyền thuộc về Công ty TNHH Shopee
                </p>
            </div>
        </footer>
    </div>
</body>

</html>
<script src="function.js"></script>