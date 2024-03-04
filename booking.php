<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/booking_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>จองโต๊ะล่วงหน้า</title>
</head>
<body>

     <!--- navbar ---->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white">
        <div class="container">

            <a href="index.php" class="navbar-brand a_nav" aria-current="page"> ย้อนกลับ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mt-3 ms-auto">
                    <li class="nav-item">
                        <h1 class="ms-auto">จองโต๊ะล่วงหน้า</h1>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container">

        <!--- content table ---->
        <div class="row">
            <div class="content-table">
                <div class="content-header text-center mb-3 mt-3">
                    <h4>โปรดเลือกโต๊ะที่คุณต้องการจะ <span style="color: #FF3E1D;"><u>จองวันนี้</u></span></h4> 
                </div>

                <div class="box-table">

                    <!-- โต๊ะทั้งหมดในร้านแถว 1 --->
                    <div class="row mb-2">

                        <div class="col-md-3 col-sm-5 col-sm-4 mb-3">
                            <div class="card card-booking1" style="width: 150px; height: 100px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=A01"><button type="button" class="btn btn-success btn-booking">A01</button></a>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-5 col-sm-4 mb-3">
                            <div class="card card-booking1" style="width: 150px; height: 100px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=A02"><button type="button" class="btn btn-success btn-booking">A02</button></a>

                                </div>
                            </div>
                        </div>
                        

                        <div class="col-md-3 col-sm-5 col-sm-4 mb-3">
                            <div class="card card-booking1" style="width: 150px; height: 100px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=A03"><button type="button" class="btn btn-success btn-booking">A03</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-5 mb-3">
                            <div class="card card-booking1" style="width: 150px; height: 100px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=A04"><button type="button" class="btn btn-success btn-booking">A04</button></a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- โต๊ะทั้งหมดในร้านแถว 2 --->

                    <div class="row mb-2">

                        <div class="col-md-4 mb-3">
                            <div class="card card-booking1" style="height: 120px; width: 300px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=B01"><button type="button" class="btn btn-success btn-booking">B01</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card card-booking1" style="height: 120px; width: 300px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=B02"><button type="button" class="btn btn-success btn-booking">B02</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card card-booking1" style="height: 120px; width: 300px;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=B03"><button type="button" class="btn btn-success btn-booking">B03</button></a>

                                </div>
                            </div>
                        </div>

                    
                    </div>

                      <!-- โต๊ะทั้งหมดในร้านแถว 3 --->
                      <div class="row">

                        <div class="col-md-4 col-sm-5 mb-3">
                            <div class="card card-booking1" style="width: 200px; height: 120px; border-radius: 50%;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=C01"><button type="button" class="btn btn-success btn-booking">C01</button></a>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-5 mb-3">
                            <div class="card card-booking1" style="width: 200px; height: 120px; border-radius: 50%;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=C02"><button type="button" class="btn btn-success btn-booking">C02</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-5 mb-3">
                            <div class="card card-booking1" style="width: 200px; height: 120px; border-radius: 50%;">
                                <div class="card-body">
                                    <a href="booking_form.php?table_id=C03"><button type="button" class="btn btn-success btn-booking">C03</button></a>
                                </div>
                            </div>
                        </div>


                    </div>





                </div>
            </div>





            
            
  




        </div>   
    </div>


    
</body>
</html>