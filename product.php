<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>

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
    <link rel="stylesheet" href="assets/css/product.css">
    <script src="jquery-1.8.3.min.js"></script>
    <script src="jquery.elevateZoom-3.0.8.min.js"></script>
    <script>
        $(document).ready(function(e) {
            //initiate the plugin and pass the id of the div containing gallery images
            $("#img_01").elevateZoom({
                constrainType: "height",
                constrainSize: 480,
                zoomType: "lens",
                containLensZoom: true,
                gallery: 'gallery_01',
                cursor: 'defaul',
                galleryActiveClass: "active",
                imageCrossfade: "true",
                lensShape: "round"
            });

            //pass the images to Fancybox
            $("#img_01").bind("click", function(e) {
                var ez = $('#img_01').data('elevateZoom');
                $.fancybox(ez.getGalleryList());
                return false;
            });
        });
    </script>
</head>

<body>
    <?php
    if (isset($_REQUEST["id"]) == false)
        die("<p>Chưa có id sản phẩm</p>");
    $id = $_REQUEST["id"];
    if ($id == "" || is_numeric($id) == false)
        die("<p>id không được rỗng và phải là số</p>");

    require_once("database.php");
    $row = getProduct($id);
    ?>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--separate">Kênh Người Bán</li>
                        <li class="header__navbar-item header__navbar-item--separate">Trở thành Người bán Shopee</li>
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            Tải ứng dụng

                            <!-- Header QR Code -->
                            <div class="header__qr">
                                <img src="./assets/img/qr_code.png" alt="QR code" class="header__qr-img">
                                <div class="header__qr-app">
                                    <a href="" class="header__qr-link"><img src="./assets/img/app_store.png" alt="App Store" class="header__app-img-download"></a>
                                    <a href="" class="header__qr-link"><img src="./assets/img/google_play.png" alt="Google Play" class="header__app-img-download"></a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-item--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-facebook"></i></a>
                            <a href="" class="header__navbar-icon-link"><i class="header__navbar-icon fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-regular fa-bell"></i>
                                Thông báo
                            </a>
                            <!-- Notification -->
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </header>
                                <div class="header__notify-content">
                                    <a href="" class="header__notify-content-link">
                                        <div class="header__notify-content-img">
                                            <img src="./assets/img/pate meo.jfif" alt="pate mèo" class="notify-img">
                                        </div>
                                        <div class="header__notify-content-info">
                                            <p class="header__notify-content-info-tittle">Pate Mèo</p>
                                            <p class="header__notify-content-info-describe">Súp thưởng cho mèo Shizuka súp thưởng Pet Snacks Ciaowang và xúc xích cho mèo giá rẻ 15 gram Choowie Pet Shop</p>
                                        </div>
                                    </a>
                                    <a href="" class="header__notify-content-link">
                                        <div class="header__notify-content-img">
                                            <img src="./assets/img/pate meo.jfif" alt="pate mèo" class="notify-img">
                                        </div>
                                        <div class="header__notify-content-info">
                                            <p class="header__notify-content-info-tittle">Pate Mèo</p>
                                            <p class="header__notify-content-info-describe">Súp thưởng cho mèo Shizuka súp thưởng Pet Snacks Ciaowang và xúc xích cho mèo giá rẻ 15 gram Choowie Pet Shop</p>
                                        </div>
                                    </a>
                                    <a href="" class="header__notify-content-link">
                                        <div class="header__notify-content-img">
                                            <img src="./assets/img/pate meo.jfif" alt="pate mèo" class="notify-img">
                                        </div>
                                        <div class="header__notify-content-info">
                                            <p class="header__notify-content-info-tittle">Pate Mèo</p>
                                            <p class="header__notify-content-info-describe">Súp thưởng cho mèo Shizuka súp thưởng Pet Snacks Ciaowang và xúc xích cho mèo giá rẻ 15 gram Choowie Pet Shop</p>
                                        </div>
                                    </a>
                                    <a href="" class="header__notify-content-link">
                                        <div class="header__notify-content-img">
                                            <img src="./assets/img/pate meo.jfif" alt="pate mèo" class="notify-img">
                                        </div>
                                        <div class="header__notify-content-info">
                                            <p class="header__notify-content-info-tittle">Pate Mèo</p>
                                            <p class="header__notify-content-info-describe">Súp thưởng cho mèo Shizuka súp thưởng Pet Snacks Ciaowang và xúc xích cho mèo giá rẻ 15 gram Choowie Pet Shop</p>
                                        </div>
                                    </a>
                                </div>
                                <footer class="header__notify-footer">
                                    <a href="" class="view-all-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <i class="header__navbar-icon fa-regular fa-circle-question"></i>
                            <a href="" class="header__navbar-item-link">Hỗ trợ</a>
                        </li>
                        <?php
                        if (isset($_SESSION["logined"]) == false || $_SESSION["logined"] == "") {
                        ?>
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate" id="register"><a href="register.php" class="header__navbar-item-link">Đăng ký</a></li>
                            <li class="header__navbar-item" id="login"><a href="login.php" class="header__navbar-item-link">Đăng nhập</a></li>
                        <?php
                        } else {
                        ?>

                            <li class="header__navbar-item header__navbar-user">
                                <i class="fa-solid fa-user i-user"></i>
                                <span class="header__navbar-user-name"><?= $_SESSION["fullname"] ?></span>

                                <ul class="header__navbar-user-menu" style="z-index: 1;">
                                    <li class="header__navbar-user-item">
                                        <a href="">Tài khoản của tôi</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="">Địa chỉ của tôi</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="">Đơn mua</a>
                                    </li>
                                    <li class="header__navbar-user-item">
                                        <a href="logout.php">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
                <!-- Header with search -->
                <div class="header__with-search">
                    <div class="header__logo">
                        <a href="index.php"><svg viewBox="0 0 192 65" class="header__with-search-img shopee-svg-icon header-with-search__shopee-logo icon-shopee-logo">
                                <g fill-rule="evenodd">
                                    <path fill="#fff" d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"></path>
                                </g>
                            </svg></a>
                    </div>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input class="header__search-input" type="text" placeholder="Đăng ký và nhận voucher bạn mới đến 70k">
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">
                                    Lịch Sử Tìm Kiếm
                                </h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">
                                            <p>Pate mèo</p>
                                        </a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">
                                            <p>Cát vệ sinh</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="separate"></span>
                        <div class="header__search-select">
                            <span class="header__search-select-label" maxlength="10">Trong Thời Trang Nam</span>
                            <i class="header__search-select-icon fa-sharp fa-solid fa-chevron-down"></i>
                            <ul class="header__search-select-option">
                                <li class="header__search-select-option-item header__search-select-option-item--active">
                                    <span class="text-item">Trong Thời Trang Nam</span>
                                    <i class="check-icon fa-solid fa-check"></i>
                                </li>
                                <li class="header__search-select-option-item">
                                    <span class="text-item">Trong Shopee</span>
                                    <i class="check-icon fa-solid fa-check"></i>
                                </li>
                            </ul>
                        </div>

                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <a href="cart.php"><i class="header__cart-icon fa-solid fa-cart-shopping"></i></a>
                            <span class="header__cart-notice ">3</span>
                            <!-- no cart: header__cart-detail--no-cart -->
                            <!-- <div class="header__cart-detail">
                                <img class="header__cart-img-no-cart" src="./assets/img/cart.png" alt="">
                                <p class="header__text-no-cart">Chưa Có Sản Phẩm</p>
                                <h3 class="header__cart-header">Sản Phẩm Đã Thêm</h3>
                                <ul class="header__cart-list">
                                    <li class="header__cart-item">
                                        <img class="header__cart-item-img" src="./assets/img/pate meo.jfif" alt="">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-info-head">
                                                <h4 class="header__cart-item-name">Pate Mèo</h4>
                                                <div>
                                                    <span class="header__cart-item-price">10.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-quantity">100</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-info-body">
                                                <p class="header__cart-item-description">Phân loại hàng: Cá ngừ</p>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img class="header__cart-item-img" src="./assets/img/pate meo.jfif" alt="">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-info-head">
                                                <h4 class="header__cart-item-name">Pate Mèo</h4>
                                                <div>
                                                    <span class="header__cart-item-price">10.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-quantity">100</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-info-body">
                                                <p class="header__cart-item-description">Phân loại hàng: Cá ngừ</p>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img class="header__cart-item-img" src="./assets/img/pate meo.jfif" alt="">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-info-head">
                                                <h4 class="header__cart-item-name">Pate Mèo</h4>
                                                <div>
                                                    <span class="header__cart-item-price">10.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-quantity">100</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-info-body">
                                                <p class="header__cart-item-description">Phân loại hàng: Cá ngừ</p>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <p class="header__cart-detail-btn">
                                    <button class="header-cart-view-cart btn btn-primary">Xem tất cả</button>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="pr-detail grid">
            <div class="pr-info">
                <div>
                    <img id="img_01" src="./assets/img/<?= $row["img"] ?>" width="480" data-zoom-image="./assets/img/large/<?= $row["imglarge"] ?>" />

                    <div id="gallery_01" style="display: flex; justify-content: space-between; margin-top: 2px;">

                        <a class="active" href="#" data-image="./assets/img/small/img1-small.jpg" data-zoom-image="./assets/img/large/img1-large.jpg">
                            <img id="img_01" src="./assets/img/thumb/img1-thumb.jpg" />
                        </a>

                        <a href="#" data-image="./assets/img/small/img2-small.jpg" data-zoom-image="./assets/img/large/img2-large.jpg">
                            <img id="img_01" src="./assets/img/thumb/img2-thumb.jpg" />
                        </a>

                        <a href="#" data-image="./assets/img/small/img3-small.jpg" data-zoom-image="./assets/img/large/img3-large.jpg">
                            <img id="img_01" src="./assets/img/thumb/img3-thumb.jpg" />
                        </a>

                        <a href="#" data-image="./assets/img/small/img4-small.jpg" data-zoom-image="./assets/img/large/img4-large.jpg">
                            <img id="img_01" src="./assets/img/thumb/img4-thumb.jpg" />
                        </a>

                        <a class="active" href="#" data-image="./assets/img/small/img1-small.jpg" data-zoom-image="./assets/img/large/img1-large.jpg">
                            <img id="img_01" src="./assets/img/thumb/img1-thumb.jpg" />
                        </a>
                    </div>
                </div>
                <div class="pr-describe">
                    <div class="pr-describe-header">
                        <div class="favourite">Yêu thích</div>
                        <?= $row["title"] ?>
                    </div>
                    <div class="pr-describe-rate">
                        <div style="display:flex">
                            <p class="rate-number">
                            <div class="rate--underline">4.9</div>
                            <i class="fa-solid fa-star" style="color: #ee4d2d;font-size: 14px;"></i>
                            <i class="fa-solid fa-star" style="color: #ee4d2d;font-size: 14px;"></i>
                            <i class="fa-solid fa-star" style="color: #ee4d2d;font-size: 14px;"></i>
                            <i class="fa-solid fa-star" style="color: #ee4d2d;font-size: 14px;"></i>
                            <i class="fa-solid fa-star" style="color: #ee4d2d;font-size: 14px;"></i>
                            </p>
                            <p class="saled">
                                <?= numberK($row["soldquantity"]) ?> Đã bán
                            </p>
                        </div>
                        <button class="btn-rpt"><a href="">Tố cáo</a></button>
                    </div>
                    <div class="pr-item__price">
                        <div class="pr-item__price-old"><?= number_format($row["priceold"], "0", ".", ".") ?>đ</div>
                        <div class="pr-item__price-new"><?= number_format($row["pricenew"], "0", ".", ".") ?>đ</div>
                        <div class="pr-item__sale-off"><?= $row["saleoff"] ?>% GIẢM</div>
                    </div>
                    <div class="div-combo">
                        <label for="">Combo Khuyến Mãi</label>
                        <button class="btn-1pc">
                            <div>Mua 3 & Giảm 1%</div>
                        </button>
                    </div>
                    <div class="div-vc">
                        <label for="">Vận Chuyển</label>
                        <img src="./assets/img/74f3e9ac01da8565c3baead996ed6e2a.png" width="25" alt="">
                        <div>Miễn phí vận chuyển</div>
                    </div>
                    <div class="div-ctrl" style="margin-left: 20px;">
                        <?php
                        if (isset($_SESSION["logined"]) == false || $_SESSION["logined"] == "") {
                        ?>
                        <a href="login.php">
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                                <span>Thêm Vào Giỏ Hàng</span>
                            </button>
                        </a>
                        <?php
                        } else {
                        ?>
                        <a href="xulyAddToCart.php?id=<?=$row["id"]?>">
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                                <span>Thêm Vào Giỏ Hàng</span>
                            </button>
                        </a>
                        <?php
                        }
                        ?>
                        <button class="buy-now">
                            Mua Ngay
                        </button>
                    </div>
                </div>
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
<script src="function.js"></script>

</html>