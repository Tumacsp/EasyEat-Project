<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>หน้าแคชเชียร์</title>

    <!---print --->
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link href="https://printjs-4de6.kxcdn.com/print.min.css">

    <!--- stylesheet --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link href="css\Cashier_style.css" rel="stylesheet">
    <link rel="stylesheet" href="admin\adminStyle\admin_style.css">

    <!--- fonts.google --->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">

        <div class="d-flex flex-sm-column align-items-center px-3 pt-2 text-white">

            <a href="#" class="text-decoration-none mt-3" style="color: #ff7b00;" onclick="showmenu('btn_payment')">
                <i class="bi bi-bank2" style="font-size: 32px;"></i>
                <span class="ms-2" style="font-size: 28px;">แคชเชียร์</span>
            </a>

            <hr class="mb-3" style="width: 100%; border-width: 2px;">

            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showmenu('btn_payment')">
                        <i class="fs-5 bi bi-cash-coin"></i><span class="ms-1">ระบบชำระเงิน</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showmenu('btn_table')">
                        <i class="fs-5 bi bi-card-checklist"></i><span class="ms-1">ระบบจัดการโต๊ะ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showmenu('btn_history')">
                        <i class="fs-5 bi bi-table"></i><span class="ms-1">ดูประวัติการขาย</span>
                    </a>
                </li>

                <hr class="mt-5" style="width: 100%; border-width: 2px;">


                <li class="nav-item">
                    <a href="backEnd/logout.php" class="nav-link">
                        <i class="fs-5 bi bi-box-arrow-in-right"></i><span class="ms-1">ออกจากระบบ</span>
                    </a>
                </li>
            </ul>

        </div>


    </div>


    <div class="bigbox">

        <div class="BoxOrder">

            <div class="PaymentMenu" id="PaymentMenu">
                <div class="title_top">
                    <h2>ระบบชำระเงิน</h2>
                </div>

                <!-- สร้างโต็ะในหน้าชำระเงิน และ แทบนับจำนวนโต็ะที่ว่าง-->
                <?php include("Cashier_gentable.php"); ?>

            </div>

            <div class="PaymentBox" id="PaymentBox">

                <?php include("Cashier_payment.php"); ?>

            </div>

            <div class="ManageTableMenu" id="ManageTableMenu">

                <?php include("Cashier_managetable.php"); ?>

            </div>
            <div class="HistoryMenu" id="HistoryMenu">

                <?php include("Cashier_history.php"); ?>

            </div>

        </div>
    </div>

    <!---------- script สำหรับเปลี่ยนหน้า --------------->
    <script>
        function showmenu(btnvalue) {
            document.getElementById("PaymentMenu").style.display = "none";
            document.getElementById("ManageTableMenu").style.display = "none";
            document.getElementById("HistoryMenu").style.display = "none";
            document.getElementById("navbox").style.display = "none";
            document.getElementById("PaymentBox").style.display = "none";
            if (btnvalue == "btn_payment") {
                document.getElementById("PaymentMenu").style.display = "flex";
                document.getElementById("navbox").style.display = "flex";
            } else if (btnvalue == "btn_table") {
                document.getElementById("ManageTableMenu").style.display = "flex";
                document.getElementById("navbox").style.display = "flex";
            } else if (btnvalue == "btn_history") {
                document.getElementById("HistoryMenu").style.display = "flex";
            } else if (btnvalue == "btn_payment_info") {
                document.getElementById("PaymentBox").style.display = "flex";
            }
        }
    </script>



</body>

</html>