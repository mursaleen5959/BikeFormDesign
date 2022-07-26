<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="src/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container h-100 mt-4 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <!-- <div class="col-sm-3"></div> -->
            <div class="col-lg-12 col-xl-11 form-reg">
                <div class="row">
                    <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">
                        <form action="" method="post" class=" pt-4 ps-4 pb-4">
                            <h3 class="display-6 text-center text-white">Register for Warranty</h3>
                            <div class="mb-3 mt-3">
                                <label for="chassis" class="form-label text-white">Chasis Number:</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Chassis no" name="chassis">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Name:</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email:</label>
                                <input type="email" class="form-control" id="" placeholder="Enter Email address" name="email">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-6 order-1 order-lg-2">
                        <img src="images/sideimg.jpg" class="img-fluid" alt="Sample image">
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-3"></div> -->
        </div>
    </div>

</body>

</html>