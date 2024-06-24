<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/mpc/app/css/header.css">
</head>
<>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="repsit.css">
</head>


<>
    <div class="grid.wide">
        <div class="trangchinh">
            <header>Đăng ký nhận thông tin mới</header>
            <div class="logotimkiem">
                <div class="logo">
                    <img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/08/logo.png">
                </div>
                <div class="timkiem"><input type="text" value="Tìm sản phẩm hoặc thương hiệu">
                    <a href=""><img src="https://png.pngtree.com/png-clipart/20191122/original/pngtree-cart-icon-isolated-on-abstract-background-png-image_5165752.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" l-2 m-4 c-12">
                <div class="boxmenu ">
                    <ul>
                        <li><a href="">THƯƠNG HIỆU</a>
                            <div class="thuonghieu">
                                <ul>
                                    <li><a href="">CÁC HÃNG BÁN CHẠY</a>
                                        <p><a href="">Daniel Wellington (DW)</a></p>
                                        <p><a href="">Seiko</a></p>
                                        <p><a href="">Saga</a></p>
                                        <p><a href="">Sokolov</a></p>
                                        <p> <a href="">Casio</a></p>
                                        <p><a href="">Citizen</a></p>
                                    </li>
                                    <li> <a href="">CÁC HÃNG BÁN CHẠY </a>
                                        <p><a href="">KOI</a></p>
                                        <p><a href="">G-Shock</a></p>
                                        </p><a href="">Baby-G</a></p>
                                        <p><a href="">Fossil</a></p>
                                        <p><a href="">SR Watch</a></p>
                                        <p><a href="">Orient</a></p>
                                    </li>

                                    <li><a href="">CÁC DÒNG ĐẶC BIỆT</a>
                                        <p><a href="">Phiên bản giới hạn (Limited Editon)</a></p>
                                        <p><a href="">Đồng hồ quân đội</a></p>
                                        <p><a href="">Đồng hồ điện từ</a></p>
                                        <p><a href="">Đồng hồ đính kim cương</a></p>
                                        <p><a href="">Đồng hồ trẻ em</a></p>
                                        <p><a href="">Đồng hồ Nhật Bản</a></p>

                                    </li>
                                    <li><a href="">SWISS MADE (THỤY SỸ)</a>
                                        <p><a href="">Longines</a></p>
                                        <p><a href=""> Doxa</a></p>
                                        <p><a href=""> Tissot</a></p>
                                        <p><a href=""> Rado</a></p>
                                        <p><a href="">Movado</a></p>
                                        <p><a href="">Frederique Constant</a></p>

                                    </li>
                                    <li><a href="">THƯƠNG HIỆU KHÁC</a>
                                        <p><a href="">Calvin Klein </a></p>
                                        <p><a href="">Mido</a></p>
                                        <p><a href="">Certina</a></p>

                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="">NAM</a></li>
                        <li><a href="">NỮ</a></li>
                        <li><a href="">CẶP ĐÔI</a></li>
                        <li><a href="">TRANG SỨC</a></li>
                        <li><a href="">PHỤ KIỆN</a></li>
                        <li><a href="">LIÊN HỆ</a></li>
                        <li><a href="">TIN TỨC</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
    <?php
    if(isset($_SESSION["user"])):?>
    <p> helo <?=$_SESSION["user"]["username"]?></p>
    <a href=" http://localhost/mpc/user/logout"> Logout</a>
    <?php else : ?>
        <a href=" http://localhost/mpc/user/login"> login</a>
        <?php endif;?></div>
    <div class="grid wide"> 
<div class="anhbia">
            <img src="https://lh3.googleusercontent.com/pw/AP1GczMuvytgRmVn80H3lVbbJZU1YiAAGF3ynw1CX-X5WI1sIEMkILGm9m7-0eAuchPIZSsDQHQQQmWlLtX3ROUuUsyiTFbCFrUIfn1zfDc7L1hr-CIDqdvmEs049Y4EgTP68-yuDoyzFgt34e55E3P_syk5=w2048-h596-s-no?authuser=0" alt="">
        </div>
        <div class="tonghopphukien">
            <div class="phukien1">
                <div class=" l-2 m-4 c-4">
                <div><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-xa-cu.jpg" alt=""></div>
                <div class="text">Đồng hồ thời trang xà cừ</div> 
            </div>
               <div class=" l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-phien-ban-gioi-han.jpg" alt=""><div>
                <div class="text"> Phiên bản giới hạn</div>
               </div></div>
               <div class=" l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-sieu-mong.jpg" alt="">
            <div class="text">Mặt số siêu mỏng </div>
            </div>
               <div class=" l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-skeleton-1.jpg" alt="">
            <div class="text">Đồng hồ Skeleton siêu</div></div>

                <div class=" l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-vang-18k-1.jpg" alt="">
                <div class="text">Đồng hồ cao cấp vàng 18k</div>
            </div>
                <div class=" l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-vat-lieu-quy-hiem.jpg" alt="">
                <div class="text">Đá quý – Vật liệu hiếm</div>
            </div>
            </div>
            <div class="phukien2">
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/day-da-hirsch.jpg" alt="">
                    <div class="text">Dây da Hirsch</div>
                </div>
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/dong-ho-dinh-kim-cuong.jpg" alt="">
                    <div class="text">Đính kim cương</div>
                </div>
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/kinh-hai-trieu-1.jpg" alt="">
                    <div class="text">Kính Hải Triều</div>
                </div>
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/vi-da.jpg" alt="">
                    <div class="text">Ví da thật</div>
                </div>
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/day-da-that.jpg" alt="">
                    <div class="text">Dây da đồng hồ</div>
                </div>
                <div class="l-2 m-4 c-4"><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/trang-suc-dep.jpg" alt="">
                    <div class="text">Trang sức</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="quangcao">
            <div class="quangcao1">
                <a href=""><img src="https://image.donghohaitrieu.com/wp-content/uploads/2024/02/Saga-Long-Xing-Da-da-1.jpg" alt="">
                <div class="bst">BỘ SƯU TẬP MỚI</div>
            <div class="xemngay3"><a href="">Xem ngay</a></div></a>
            </div>
            <div class="quangcao2">
                <div class="quangcao3">
                    <div class="quangcao31"><a href=""><img src="https://donghoorient.com/wp-content/uploads/2016/09/thiet-ke-dong-ho-cho-nguoi-trung-nien-co-gi-khac-biet-4.png" alt=""></a>
                    
                    <div class="nam">NAM</div>
                    <div class="xemngay"><a href="">Xem ngay</a></div></div>
                    <div class="quangcao32"><a href=""><img src="https://donghoduyanh.com/upload_images/images/2021/05/04/dong-ho-nu.jpg" alt=""></a>
                        <div class="nu">NỮ</div>
                        <div class="xemngay1"><a href="">Xem ngay</a></div>
                    </div>
                </div>
                <div class="quangcao4">
                    <a href=""><img src="https://luxshopping.vn/Uploads/UserFiles/images/Tin%20tuc%20-%20kinh%20nghiem/dong-ho-guess-chinh-han-tai-viet-nam.jpg" alt=""></a>
                <div class="dhd">ĐỒNG HỒ ĐÔI</div>
                <div class="xemngay2"><a href="">Xem ngay</a></div>
                </div>
            </div>
        </div>
        <div class="maudongho">
            <div class="maudongho1"><a href=""><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/11/BST-dong-ho-nam-ban-chay.jpg" alt=""></a>
            <div>BST ĐỒNG HỒ NAM HOT</div></div>
            `
            <div class="maudongho1"><a href=""><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/11/BST-dong-ho-nu-ban-chay.jpg" alt=""></a>
                <div>BST ĐỒNG HỒ NỮ ĐẸP</div>
            </div>
            <div class="maudongho1"><a href=""><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/bst-dong-ho-moi.jpg" alt=""></a>
                <div>ĐỒNG HỒ ĐEO TAY MỚI VỀ</div>
            </div>
            <div class="maudongho1"><a href=""><img src="https://image.donghohaitrieu.com/wp-content/uploads/2023/10/trang-suc-nu-ban-chay.jpg" alt=""></a>
                <div>CÁC MẪU TRANG SỨC MỚI VỀ</div>
            </div>
        </div>
    </div>
    <hr>
  
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- <script>
    const menuscroll = document.querySelector('.trangchinh');
    var boxmenu = document.querySelector(".boxmenu");
    window.addEventListener("scroll",myfunction);
    var temp ;
    function myfunction(){
        temp = menuscroll.getBoundingClientRect().top + menuscroll.getBoundingClientRect().height;
        if(temp<=0){
            boxmenu.style.setProperty("position","fixed");
            boxmenu.style.setProperty("top","0px");
        }else{
            boxmenu.style.removeProperty("position","fixed");
            boxmenu.style.removeProperty("top","0px");
        }
    }
</script> -->
</html>
</body>
</html>