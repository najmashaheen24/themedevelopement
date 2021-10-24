<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <title>Edge Med Solution LLC</title>
  </head>
  <body>
    <header class="nav-bg-color px-5">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html"><img class="img-fluid"
				 src="<?php bloginfo('template_directory'); ?>/images/edgeMedLogo.jpg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                      <a class="nav-link active" aria-current="page" 
					  href="<?php echo get_template_directory_uri(); ?>/home.html">Home</a>
	                  </li>
	                  <li class="nav-item">
	                      <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/services.html">
						  Services</a>
	                  </li>
	                  <li class="nav-item">
		                 	<a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/who-we-help.html">Who We Help</a>
		               </li>
	                 
                    </ul>
                </div>
            </div>
        </nav>
    </header>