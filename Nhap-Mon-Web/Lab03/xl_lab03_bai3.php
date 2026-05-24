<?php
// Lấy dữ liệu từ form
$nmProID = isset($_POST['nmProID']) ? $_POST['nmProID'] : '';
$nmProName = isset($_POST['nmProName']) ? $_POST['nmProName'] : '';
$nmProImg = isset($_FILES['nmProImg']['name']) ? $_FILES['nmProImg']['name'] : '';
$nmMan = isset($_POST['nmMan']) ? $_POST['nmMan'] : '';
$nmWidth = isset($_POST['nmWidth']) ? $_POST['nmWidth'] : '';
$nmHeight = isset($_POST['nmHeight']) ? $_POST['nmHeight'] : '';
$nmCount = isset($_POST['nmCount']) ? $_POST['nmCount'] : '';
$nmTacGia = isset($_POST['nmTacGia']) ? $_POST['nmTacGia'] : '';
$nmPrice = isset($_POST['nmPrice']) ? $_POST['nmPrice'] : '';
$nmColor = isset($_POST['nmColor']) ? $_POST['nmColor'] : '';
$nmLive = isset($_POST['nmLive']) ? $_POST['nmLive'] : '';
$nmFunction = isset($_POST['nmFunction']) ? $_POST['nmFunction'] : array();
$nmProDet = isset($_POST['nmProDet']) ? $_POST['nmProDet'] : '';

// Chuyển đổi mảng checkbox thành chuỗi
$functionStr = implode(', ', $nmFunction);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="images/layout/book.png" />
    <title>BookStore - Kết Quả Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="Vi_du_Lab01/styles/main.css" />
    <style>
        .result-table {
            width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #f9f9f9;
            border: 2px solid #333;
        }
        .result-table th {
            background-color: #d4a574;
            color: #333;
            padding: 12px;
            text-align: left;
            border: 1px solid #333;
            font-weight: bold;
        }
        .result-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .result-table tr:nth-child(odd) {
            background-color: #fff;
        }
        .result-table tr:nth-child(even) {
            background-color: #f0f0f0;
        }
        .result-title {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #333;
            padding: 15px;
            background-color: #e8d4c0;
            border: 2px solid #333;
            margin: 20px auto;
            width: 600px;
        }
        .label-cell {
            font-weight: bold;
            width: 150px;
            background-color: #e8d4c0;
        }
        .back-link {
            text-align: center;
            margin: 20px 0;
        }
        .back-link a {
            padding: 10px 20px;
            background-color: #d4a574;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .back-link a:hover {
            background-color: #c89468;
        }
    </style>
</head>
<body>
    <div id="container">
        <!-- Hình Banner hoặc Logo  -->
        <div id="header">
            <div id="banner_logo">
                <a href="#"> <img src="./Vi_du_Lab01/images/bookstoreBanner.jpg" alt="" style="border-radius: 10px;" width="1000px" height="300px"></a>
            </div>
        </div>

        <!-- MENU CHÍNH  -->
        <div id="menu">
            <div id="menu_left_corner"></div>
            <div id="menu_content">
                <ul id="hmenu">
                    <li>
                        <a href="#"><img src="./Vi_du_Lab01/images/layout/home.png" /> TRANG CHỦ</a>
                    </li>
                    <li class="devider">&nbsp;</li>
                    <li>
                        <a href="#"><img src="./Vi_du_Lab01/images/layout/services.png" /> DỊCH VỤ</a>
                    </li>
                    <li class="devider">&nbsp;</li>
                    <li>
                        <a href="#"><img src="./Vi_du_Lab01/images/layout/favs.png" /> TIN KHUYẾN MÃI</a>
                    </li>
                    <li class="devider">&nbsp;</li>
                    <li>
                        <a href="#"><img src="./Vi_du_Lab01/images/layout/car.png" /> GIAO HÀNG</a>
                    </li>
                    <li class="devider">&nbsp;</li>
                    <li>
                        <a href="#"><img src="./Vi_du_Lab01/images/layout/user_add.png" /> ĐĂNG NHẬP</a>
                    </li>
                </ul>
            </div>
            <div id="menu_right_corner"></div>
            <div style="clear:both"></div>
        </div>

        <!-- CONTENT hiển thị kết quả -->
        <div id="content" style="margin: 20px auto; width: 800px;">
            <div class="result-title">THÔNG TIN SẢN PHẨM VỪA THÊM LÀ:</div>
            
            <table class="result-table">
                <tr>
                    <td class="label-cell">Mã sản phẩm</td>
                    <td><?php echo htmlspecialchars($nmProID); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Tên sản phẩm</td>
                    <td><?php echo htmlspecialchars($nmProName); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Hình ảnh</td>
                    <td><img src="Vi_du_Lab01/images/<?php echo htmlspecialchars($nmProImg); ?>" width="100" height="auto" alt="Hình sản phẩm" style="border: 1px solid #ccc; border-radius: 5px;" /></td>
                </tr>
                <tr>
                    <td class="label-cell">Hãng sản xuất</td>
                    <td><?php echo htmlspecialchars($nmMan); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Kích thước</td>
                    <td><?php echo htmlspecialchars($nmWidth . ' x ' . $nmHeight); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Số trang</td>
                    <td><?php echo htmlspecialchars($nmCount); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Tác giả</td>
                    <td><?php echo htmlspecialchars($nmTacGia); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Giá</td>
                    <td><?php echo htmlspecialchars($nmPrice); ?> <span style="margin-left: 30px;">Màu: <?php echo htmlspecialchars($nmColor); ?></span></td>
                </tr>
                <tr>
                    <td class="label-cell">Xuất sứ</td>
                    <td><?php echo htmlspecialchars($nmLive); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Thể loại</td>
                    <td><?php echo htmlspecialchars($functionStr); ?></td>
                </tr>
                <tr>
                    <td class="label-cell">Mô tả chi tiết</td>
                    <td><?php echo htmlspecialchars($nmProDet); ?></td>
                </tr>
            </table>

            <div class="back-link">
                <a href="./Vi_du_Lab01/lab3_bai3.html">← Quay lại Form</a>
            </div>
        </div>

        <!-- Footer -->
        <div style="clear:both; height:10px;"></div>
        <div id="footer" style="text-align: center; padding: 20px;">
            footer
        </div>
    </div>
</body>
</html>
