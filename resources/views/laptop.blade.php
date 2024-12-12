<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer</title>
    <link rel="icon" href="img/iconlogo.png" type="iconlogo/png">
    <style>
        /* Styling for the page */
        body {
            background-color: #ffffff;
            color: #000000;
        }

        #top-header {
            background-color: #232f3e;
            color: #ffffff;
        }

        #header {
            background-color: #ffffff;
            padding: 10px 0;
        }

        .header-links a {
            color: #ffffff;
        }

        .header-links a:hover {
            color: #fdd835;
        }

        h1, h5, p, button {
            color: #000000;
        }

        .text-white {
            color: #ffffff;
        }

        .card-footer button {
            background-color: #232f3e;
            color: #ffffff;
        }

        .card-footer button:hover {
            background-color: #fdd835;
            color: #000000;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    	<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +6281324835760</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> adillayasiyroh@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Sukamanah, Majalaya</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li><a href="login"><i class="fa fa-user-o"></i> My Account</a></li>
                </ul>
            </div>
        </div>

        <!-- MAIN HEADER -->
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="./img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="container my-5">
        <h1 class="text-left mb-4">laptop</h1>

        <!-- Row for Accessories -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            @foreach($laptops as $laptop)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/'.$laptop->gambar) }}" class="card-img-top" alt="{{ $laptop->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $laptop->nama_produk }}</h5>
                        <p class="card-text">{{ $laptop->deskripsi }}</p>
                        <p class="card-text"><strong>Price: Rp.{{ number_format($laptop->harga, 0, ',', '.') }}</strong></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            @endforeach
 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
