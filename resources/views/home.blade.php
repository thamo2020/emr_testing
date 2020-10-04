<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/submit.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" ><!-- bootstrap css link -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script><!-- bootstrap first link in js/jquery -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><!-- bootstrap third link in js/jquery-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--font-awesome 4 cdn-->
        <link href="jquery.datetimepicker.min.css" rel="stylesheet" />

    <title>Document</title>

</head>
<body>
    
        <!----------------------------------nav bar started---------------------------------------------->
        <section id="nav-bar"><!--nav-bar-navigation bar..section is not same as div tag..it focus on same criteriar groups-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand"><img src="images/5016684-medical-logo-png-97-images-in-collection-page-1-medical-logo-png-300_286_preview.png" alt=""><span class="ab">EMR</span></div>
            
        <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </button-->
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"><!--align to the right corner--> 
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Uploads</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" >Share</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" >View</a>
                </li>
            </ul>
            </div>
        </nav>

        </section>
        <!---------------------------------nav bar end-------------------------------------------->
        <!---------------------------------banner start-------------------------------------------->

    <section id="banner">

    <div class="container py-5">

<!-- For demo purpose -->
<header class="text-white text-center">
    <h1 class="display-4">upload your records</h1>
    
    <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
</header>

<form action="{{route('uploadimages')}}" method="POST" enctype="multipart/form-data" >
@csrf
<div class="row py-4">
    <div class="col-lg-6 mx-auto">

        <!-- Upload image input-->
        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
            <input id="upload" type="file" name="images" onchange="readURL(this);" class="form-control border-0">
            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
            <div class="input-group-append">
                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                <button type="submit" name=submit>Upload</button>

                
            </div>
        </div>
        <div class="info">

        <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css/" >
        <script src="/jquery.js"></script>
        <script src="/build/jquery.datetimepicker.full.min.js"></script>

        <input id="datetimepicker" type="text" >


        <script>
        
        
        jQuery.datetimepicker.setLocale('de');

jQuery('#datetimepicker1').datetimepicker({
 i18n:{
  de:{
   months:[
    'Januar','Februar','März','April',
    'Mai','Juni','Juli','August',
    'September','Oktober','November','Dezember',
   ],
   dayOfWeek:[
    "So.", "Mo", "Di", "Mi", 
    "Do", "Fr", "Sa.",
   ]
  }
 },
 timepicker:false,
 format:'d.m.Y'
});
        
        
        </script>
            

            <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCreated_at">Created at</label>
      <input type="text" class="form-control" id="inputdatetimepicker" placeholder="Created Date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputExpired_at">Expired_at</label>
      <input type="text" class="form-control" id="inputdatetimepicker" placeholder="Expired date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputnotes">notes</label>
    <input type="text" class="form-control" id="inputnotes" placeholder="Add special notes">
  </div>
  <div class="form-group">
    <label for="inputrecommendations">recommendations</label>
    <input type="text" class="form-control" id="inputrecommendations" placeholder="inputrecommendations">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">Done</button>
</form>



        </div>
</form>
    </section>

    <section id ="input">

</div>

        



    </section>

</body>
</html>