<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumcal Hotel</title>
    <link rel="stylesheet" href="Css/master.css">
    <link rel="shortcut icon" type="image/png" href="Img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <div class="fullPage">
        <div class="header">
            <div class="header__top">
                <div class="header__top--logo">
                    <img src="Img/logo.png" alt="">
                </div>
                <div class="header__top--right">
                    <div class="top--right--top">
                        <li><a href="#"><i class="fas fa-globe"></i> English</a></li>
                        <li><a href="#">Dịch vụ khách hàng</a></li>
                    </div>
                    <div class="top--right--bottom">
                        <li><a href="#">Khách sạn</a></li>
                        <li><a href="#">Đặt phòng</a></li>
                        <li><a href="#">Nhà hàng & bar</a>
                            <ul class="header__top--submenu">
                                <li><a href="#">Nguyệt Restaurent</a></li>
                                <li><a href="#">Nguyệt Restaurent</a></li>
                                <li><a href="#">Nguyệt Restaurent</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phòng họp & hội nghị</a>
                            <ul class="header__top--submenu">
                                <li><a href="#"></a>phòng họp</li>
                                <li><a href="#"></a>tiệc cưới</li>
                            </ul>
                        </li>
                        <li><a href="#">Dịch vụ khách sạn</a>
                            <ul class="header__top--submenu">
                                <li><a href="#"></a>Spa</li>
                                <li><a href="#"></a>Bể bơi</li>
                                <li><a href="#"></a>Giữ xe</li>
                            </ul>
                        </li>
                        <li><a href="#">Khuyến mãi</a></li>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <img src="Img/slide/khachsan.jpg" alt="">
            </div>
        </div>


        <div class="mainContent">
            <div class="mainContent__sidebar">
                <div class="mainContent__sidebar--formDatPhong">
                    <form action="" method="post">
                        @csrf
                        <center><h3>Đặt phòng</h3></center>
                        <table>
                            <tr>
                                <th>Ngày đến</th>
                                <th>Ngày đi</th>
                            </tr>

                            <tr>
                                <td><input type="date" name="" id=""></td>
                                <td><input type="date" name="" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="button" value="Đặt Ngay"></center></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="mainContent__sidebar--cardSale">
                    <center><h3>khuyến mãi</h3></center>
                    <div class="card">
                        <a href="#"><img src="Img/khuyenmai/thongtingiamgia.jpg" alt=""></a>
                        <div class="title">
                            <p>Vacation package - siêu giảm giá đến 60%</p>
                        </div>
                    </div>
                </div>
                <div class="mainContent__sidebar--cardInfor">
                    <center><h3>tin tức & sự kiện</h3></center>
                    <div class="cards">
                        <div class="card">
                            <center><a href="#"><h6 class="title">Ấm no ngày tết, mang niềm hạnh phúc cho mọi người</h6></a></center>
                            <div class="content">
                                <img src="Img/tintuc/tet2020.jpg" alt="">
                                <p>Theo truyền thống mỗi dịp tết đến xuân về, nhằm mang lại niềm hạnh phúc cho một số gia đình...</p>
                            </div>
                        </div>
                        <div class="card">
                            <center><h6 class="title">tập đoàn Mumcal giảm giá khủng cho du khách nội địa</h6></center>
                            <div class="content">
                                <img src="Img/tintuc/khuyenmai.jpg" alt="">
                                <p>Trong tháng 7 năm 2020, tập đoàn Mumcal quyết định giảm giá các dịch vụ để mọi người có thể tiếp cận với các dịch vụ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainContent__rightContent">
                <div class="mainContent__rightContent--intro">
                    <h3>Tổng quan về khách sạn</h3>
                    <div class="content">
                        <p>Là thành viên thứ 18 của chuỗi khách sạn tư nhân lớn nhất Việt Nam, khách sạn 4 sao <b>Mumcal Hotel Đà Nẵng</b> tọa lạc tại vị trí đắc địa, nằm giữa một bên là sông Hàn thơ mộng, một bên là bãi biển đẹp nhất Miền Trung. Với hệ thống gồm 370 phòng nghỉ cao cấp và 08 căn hộ hạng sang cùng với các dịch vụ giải trí như bể bơi, phòng gym, spa, karaoke, nhà hàng, bar...<b>Mumcal Hotel Đà Nẵng</b> sẽ mang đến một không gian nghỉ dưỡng tuyệt vời và thuận lợi cho những chuyến công tác của quý khách.
                        </p>
                        <p>Mang đậm đà phong vị Tây Bắc của thương hiệu Mumcal kết hợp hài hòa  với nét văn hóa đặc trưng xứ Quảng – chắc chắn khách sạn<b>Mumcal Hotel Đà Nẵng</b> sẽ mang đến trải nghiệm hoàn toàn mới cho du khách khi đến với thành phố Đà Nẵng.</p>
                    </div>
                </div>
                <div class="mainContent__rightContent--map">
                    <h3>Bản đồ</h3>
                    <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d841.2030372720012!2d108.240958!3d16.0608904!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1594146489753!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                </div>
                <div class="mainContent__rightContent--address">
                        <h3>khách sạn Mumcal đà nẵng</h3>
                        <div class="content">
                            <p>Địa chỉ:101B lê Hữu Trác, Sơn Trà, Đà Nẵng</p>
                            <p>Điện thoại: +(84) 918 203 106</p>
                            <p>Email: mumcalhotel@group.vn</p>
                            <p>Website: mumcalhotelgroup.com.vn</p>
                        </div>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="footer__map">
                <img src="Img/footer/map.png" alt="">
            </div>
            <div class="footer__menu">
                <div class="footer__menu--top">
                    <div class="footer__menu--part">
                        <a href="#">Trang chủ</a>  
                    </div>
                    <div class="footer__menu--part">
                        |  
                    </div>
                    <div class="footer__menu--part">
                        <a href="#">Đặt phòng</a>
                    </div>
                    <div class="footer__menu--part">
                        |  
                    </div>
                    <div class="footer__menu--part">
                        <a href="#">Ưu đãi</a>
                    </div>
                    <div class="footer__menu--part">
                        |  
                    </div>
                    <div class="footer__menu--part">
                        <a href="#">Sự kiện & tiệc cưới</a>
                    </div>
                </div>
                <div class="footer__menu--bottom">
                    <div class="icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"> <i class="fas fa-mail-bulk"></i></a>
                    </div>
                    <div class="copyright">
                        <p>Coppyright by Me</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>    
</body>
</html>