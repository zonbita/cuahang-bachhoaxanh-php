
<!DOCTYPE html>
<!--[if lt IE 10]>    <html class="ltie10 " lang="vi-VN"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="vi-VN" class="">
<!--<![endif]-->
<head>
        <title>Siêu thị Bách hoá CAM - Mua bán thực phẩm, sản phẩm gia đình</title>
        <meta name="keywords" content="Siêu thị, bách hoá, thực phẩm, đồ dùng, bách hoá cam">
        <meta name="description" content="Siêu thị Bách hoá Cam bán lẻ thực phẩm tươi sống, bánh kẹo, đồ hộp, đồ dùng gia đình giá rẻ, sản phẩm tươi mới, nguồn gốc đảm bảo, dịch vụ chu đáo.">
        <link rel="canonical" href="https://www.bachhoacam.com" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type="image/x-pngs" href="./fav.png" />
<meta http-equiv="x-dns-prefetch-control" content="on">
<meta charset="utf-8">
<meta name="robots" content="index, follow" />
<meta name="format-detection" content="telephone=no">
<meta http-equiv="audience" content="General" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="x-dns-prefetch-control" content="on">
<meta property="fb:app_id" content="369722380436915">
<meta property="og:site_name" content="www.bachhoacam.com" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:url" itemprop="url" content="https://www.bachhoacam" />
        <meta property="og:title" content="Siêu thị Bách hoá CAM - Mua bán thực phẩm, sản phẩm gia đình" />
        <meta property="og:description" content="Siêu thị Bách hoá CAM bán lẻ thực phẩm tươi sống, bánh kẹo, đồ hộp, đồ dùng gia đình giá rẻ, sản phẩm tươi mới, nguồn gốc đảm bảo, dịch vụ chu đáo." />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
    <!--[if lt IE 9]>
      <script src="https://cdn1.tgdd.vn/v2015/Scripts/desktop/detectie/html5shiv.js"></script>
      <script src="https://cdn2.tgdd.vn/v2015/Scripts/desktop/detectie/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/main2.css">
	  <!--<script src="https://cdn.tgdd.vn/bachhoaxanh/www/Scripts/min/product.min.v202109172337.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

    <style id="maincss">

	.colcontent2 {
    width: 1100px;
    float: right;
}
		.content {
    position: relative;
    max-width: 600px;
    margin: auto;
    overflow: hidden;
}.common-input {
    display: block;
    width: calc(100% - 10px);
    border: 1px solid #eee;
    line-height: 40px;
    padding: 0 20px !important;
    margin-top: 10px;
}

    </style>

<body class="new2019" data-staticversion="2021052702">


<header class=sticky data-shortlink="" data-provid=3 data-district=0 data-ward=0 data-store=0 data-isexitscookies=False data-isexitsdistrict=False data-isexitsstore=False data-isuserhadorder=False data-currentdist="" data-isonedistrict=False data-selectbyuser=False data-storecombo=-1>
    <div class=tophead>
        <a href="<?php echo base_url()?>" class=logo aria-hidden=true> <i class=bhx-logo></i> </a>
        <div class=popup-overlays></div>

<div class=hiscart>
    <form class=mainsearch onsubmit="return mainSearch.submitSearch(this)" action="<?php echo base_url()?>tim-kiem-san-pham.php" method="get">
        <input type=text name=search id=text-search placeholder="Tìm kiếm sản phẩm" maxlength=80 aria-label=text-search style="color: black;">
        <div class=reset><i class=bhx-closemenu></i>
        </div>
        <button type=submit aria-label=Search> <i class=bhx-search></i>
            <div class=btn-search><span>TÌM</span>
            </div>
        </button>
    </form>


	<div class=histories>
                        <?php if (isset($_SESSION['name_user'])): ?>
                            <ul class="list">
                                <li style=""  >Xin chào: <?php echo $_SESSION['name_user'] ?></li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Tài khoản
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" style="color: black;" href="category.html">Thông tin</a>
                                    <a class="dropdown-item" style="color: black;" href="<?php echo base_url()?>gio-hang.php">Giỏ hàng</a>
                                    <a class="dropdown-item" style="color: black;" href="thoat.php">Đăng xuất</a>
                                </div>
                            </li>
                            </ul>
                        <?php else: ?>
                            <ul class="list">
                            <li><a href="dang-nhap.php">Đăng nhập</a></li>
                            <li><a href="dang-ky.php">Đăng ký</a></li>
                        </ul>
                        <?php endif ?>
	</div>
    <a href="<?php echo base_url()?>gio-hang.php" class=temcart>
        <div><i class=bhx-cart></i> <span class=hidden>0</span>
        </div>
        <div><b >GIỎ HÀNG </b> <b class="sumorder hidden">0 <sup>đ</sup></b>
        </div>
    </a>
</div>
</div>

<div class=popup-wish>
    <div class="popupwish-bhx hidden"><i></i>
        <div class=popupwish-content></div>
    </div>
</div>
<div class=popup-shortlink>
    <div class="popupshortlink-bhx hidden"><i class=bhx-pmh></i> <i class=bhx-close></i>
        <div class=popupshortlink-content></div>
    </div>
</div>
<div class=popup-promexpired>
    <div class="popuppromexpired-bhx hidden"><i class=icon-giftbig></i> <i class=bhx-close></i>
        <div class=popuppromexpired-content></div>
    </div>
</div>
<aside class="colmenu sb-container menu2 sb-container-noscroll">
    <nav class=menu-hover> <span><i class=bhx-navmenu></i> DANH MỤC SẢN PHẨM</span>
        <ul id=colmenuId class=colmenu-ul>
            <li class=CateItem data-id=8686>
                <div class=nav-parent>Thịt, c&#225;, trứng, rau</div>
                <div class=nav-item>
                    <div class=parent><a href=/thit-ca-tom-trung class="link-hover menu-haschild" data-search="Thịt, cá, tôm, trứng,Thit, ca, tom, trung" data-keyword="thịt, cá, tôm, trứng,thit, ca, tom, trung"> Thịt, c&#225;, t&#244;m, trứng </a>
                    </div>
                    <div class=parent><a href=/rau-cu-rau-nem class="link-hover menu-haschild" data-search="Rau củ, rau nêm,Rau cu, rau nem" data-keyword="rau, củ, rau nêm, rau sạch, rau tươi,rau, cu, rau nem, rau sach, rau tuoi"> Rau củ, rau n&#234;m </a>
                    </div>
                    <div class=parent><a href=/rau-cu-lam-san class=link-hover data-search="Thực phẩm sơ chế,Thuc pham so che" data-keyword="rau củ làm sẵn, rau củ,rau cu lam san, rau cu"> Thực phẩm sơ chế </a>
                    </div>
                    <div class=parent><a href=/thuc-pham-dong-lanh class=link-hover data-search="Thực phẩm đông lạnh,Thuc pham dong lanh" data-keyword=,> Thực phẩm đ&#244;ng lạnh </a>
                    </div>
                </div>
                <li class=CateItem data-id=2488>
                    <div class=nav-parent>Đồ uống c&#225;c loại</div>
                    <div class=nav-item>
                        <div class=parent><a href=/nuoc-ngot-nuoc-tra-giai-khat class="link-hover menu-haschild" data-search="Nước ngọt, nước trà,Nuoc ngot, nuoc tra" data-keyword=,> Nước ngọt, nước tr&#224; </a>
                        </div>
                        <div class=parent><a href=/ca-phe-tra class="link-hover menu-haschild" data-search="Cafe, trà các loại,Cafe, tra cac loai" data-keyword="cà phê phin, cà phê pha phin, cách pha cafe phin đậm đặc, cà phê trung nguyên, cà phê sạch, trà,ca phe phin, ca phe pha phin, cach pha cafe phin dam dac, ca phe trung nguyen, ca phe sach, tra"> Cafe, tr&#224; c&#225;c loại </a>
                        </div>
                        <div class=parent><a href=/nuoc-tang-luc-nuoc-bu-khoang class="link-hover menu-haschild" data-search="Nước uống tăng lực,Nuoc uong tang luc" data-keyword="Nước tăng lực, nước bù khoáng, nước bổ sung i-on, nước bổ sung điện giải, nước uống thể thao, nước uống vận động,Nuoc tang luc, nuoc bu khoang, nuoc bo sung i-on, nuoc bo sung dien giai, nuoc uong the thao, nuoc uong van dong"> Nước uống tăng lực </a>
                        </div>
                        <div class=parent><a href=/nuoc-trai-cay-trai-cay-hop-siro class="link-hover menu-haschild" data-search="Nước uống trái cây,Nuoc uong trai cay" data-keyword="Nước trái cây, trái cây hộp, siro,Nuoc trai cay, trai cay hop, siro"> Nước uống tr&#225;i c&#226;y </a>
                        </div>
                        <div class=parent><a href=/bia class=link-hover data-search="Bia, nước có cồn,Bia, nuoc co con" data-keyword=,> Bia, nước c&#243; cồn </a>
                        </div>
                        <div class=parent><a href=/nuoc-suoi-khoang class=link-hover data-search="Nước suối, nước khoáng,Nuoc suoi, nuoc khoang" data-keyword="Nước suối, nước khoáng, nước tinh khiết, nước lọc đóng chai, nước suối đóng chai, nước lọc,Nuoc suoi, nuoc khoang, nuoc tinh khiet, nuoc loc dong chai, nuoc suoi dong chai, nuoc loc"> Nước suối, nước kho&#225;ng </a>
                        </div>
                        <div class=parent><a href=/tra-sua class=link-hover data-search="Trà sữa đóng chai,Tra sua dong chai" data-keyword="Trà sữa, hồng trà, hồng trà sữa,Tra sua, hong tra, hong tra sua"> Tr&#224; sữa đ&#243;ng chai </a>
                        </div>
                        <div class=parent><a href=/nuoc-yen-cot-ga class="link-hover menu-haschild" data-search="Nước yến, cốt gà,Nuoc yen, cot ga" data-keyword="nước yến cốt gà,nuoc yen cot ga"> Nước yến, cốt g&#224; </a>
                        </div>
                        <div class=parent><a href=/mat-ong-tinh-bot-nghe class="link-hover menu-haschild" data-search="Mật ong, bột nghệ,Mat ong, bot nghe" data-keyword="Mật ong, tinh bột nghệ, nước cốt gà, nước sâm, thảo dược,Mat ong, tinh bot nghe, nuoc cot ga, nuoc sam, thao duoc"> Mật ong, bột nghệ </a>
                        </div>
                        <div class=parent><a href=/ruou-ngon-cac-loai class=link-hover data-search="Rượu ngon các loại,Ruou ngon cac loai" data-keyword="rượu, rượu ngon,ruou, ruou ngon"> Rượu ngon c&#225;c loại </a>
                        </div>
                    </div>
                    <li class=CateItem data-id=7091>
                        <div class=nav-parent>Sữa uống c&#225;c loại</div>
                        <div class=nav-item>
                            <div class=parent><a href=/sua-tuoi class=link-hover data-search="Sữa tươi các loại,Sua tuoi cac loai" data-keyword="sữa tươi,sữa tươi không đường,sữa thanh trùng,sữa hộp,sữa tươi tiệt trùng, sữa nguyên kem, sữa tươi nhập khẩu, sữa tươi Úc, sữa tươi Mỹ, sữa tách béo, sữa tươi organic, sữa tươi non GOM, sữa bò, sữa bò tươi, fresh milk,sua tuoi,sua tuoi khong duong,sua thanh trung,sua hop,sua tuoi tiet trung, sua nguyen kem, sua tuoi nhap khau, sua tuoi Uc, sua tuoi My, sua tach beo, sua tuoi organic, sua tuoi non GOM, sua bo, sua bo tuoi, fresh milk"> Sữa tươi c&#225;c loại </a>
                            </div>
                            <div class=parent><a href=/sua-tu-hat class=link-hover data-search="Sữa hạt, sữa đậu,Sua hat, sua dau" data-keyword="sữa đậu nành, sữa hạnh nhân, sữa óc chó, sữa hạt, sữa từ hạt, sữa bắp non, sữa hạt dẻ cười, sữa mè đen, sữa đậu đen, sữa gạo lứt, sữa gạo lức, sữa hạt sen,sua dau nanh, sua hanh nhan, sua oc cho, sua hat, sua tu hat, sua bap non, sua hat de cuoi, sua me den, sua dau den, sua gao lut, sua gao luc, sua hat sen"> Sữa hạt, sữa đậu </a>
                            </div>
                            <div class=parent><a href=/sua-dac class=link-hover data-search="Sữa đặc các loại,Sua dac cac loai" data-keyword="sữa đặc, sữa đặc có đường, kem đặc, kem đặc có đường,sua dac, sua dac co duong, kem dac, kem dac co duong"> Sữa đặc c&#225;c loại </a>
                            </div>
                            <div class=parent><a href=/sua-chua-pho-mai class="link-hover menu-haschild" data-search="Sữa chua, phô mai,Sua chua, pho mai" data-keyword=,> Sữa chua, ph&#244; mai </a>
                            </div>
                            <div class=parent><a href=/sua-ca-cao-socola class=link-hover data-search="Thức uống lúa mạch,Thuc uong lua mach" data-keyword="Thức uống dinh dưỡng, sữa ca cao, sữa lúa mạch, sữa ca cao lúa mạch, thức uống ca cao lúa mạch, sữa lúa mạch socola,Thuc uong dinh duong, sua ca cao, sua lua mach, sua ca cao lua mach, thuc uong ca cao lua mach, sua lua mach socola"> Thức uống l&#250;a mạch </a>
                            </div>
                            <div class=parent><a href=/yen-mach-ngu-coc class=link-hover data-search="Ngũ cốc, ca cao,Ngu coc, ca cao" data-keyword=,> Ngũ cốc, ca cao </a>
                            </div>
                            <div class=parent><a href=/sua-bot-an-dam class="link-hover menu-haschild" data-search="Sữa bột các loại,Sua bot cac loai" data-keyword="sữa bột, bột ăn dặm,sua bot, bot an dam"> Sữa bột c&#225;c loại </a>
                            </div>
                        </div>


	<li class=productpromo-count><a href=/khuyen-mai><i class=bhx-productpromo></i><strong class=number>744</strong> sản phẩm khuyến mãi</a>
	<li class=store-count><a href=/he-thong-sieu-thi rel=nofollow><i class=bhx-storecount></i>Danh sách <strong>1.937</strong> cửa hàng</a>
	<li class=sim>
	<a href="https://www.thegioididong.com/sim-so-dep?utm_source=bhx&amp;utm_medium=link_menu&amp;utm_campaign=promote_simthe" title="Mua online sim số đẹp" target=_blank rel="noopener noreferrer nofollow"> <i class=bhx-sim> </i> Sim, thẻ cào </a>
	<li class=installment>
	<a href="https://www.thegioididong.com/tien-ich/thanh-toan-tra-gop?utm_source=bhx&amp;utm_medium=link_menu&amp;utm_campaign=promote_tragop" title="Đóng tiền trả góp online" target=_blank rel="noopener noreferrer nofollow"> <i class=bhx-installment></i> Trả góp, điện nước </a>
	<li class=installment>
	<a href=javascript: class=buyevoucher title="Mua Phiếu mua hàng" rel="noopener noreferrer nofollow"> <i class=bhx-installment></i> Mua Phiếu mua hàng </a>
	<li class=installment>
	<a href=https://vieclam.thegioididong.com/tuyen-dung/cong-tac-vien-giao-hang-shipper-bach-hoa-xanh-online-116 title="Tuyển dụng Shipper" rel="noopener noreferrer nofollow"> <i class=bhx-installment></i> Tuyển dụng Shipper </a>
	</ul>
    </nav>
</aside>
<input type=hidden value=10 class=totalProduct>
<input type=hidden value=6LfYlKYZAAAAAAHYuba0doTIvcfKWzCwz-G0dZGn id=public-keycapcha-v3>
</header>
