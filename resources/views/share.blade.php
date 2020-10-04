<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/sharestyle.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" ><!-- bootstrap css link -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script><!-- bootstrap first link in js/jquery -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script><!-- bootstrap third link in js/jquery-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--font-awesome 4 cdn-->


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

<div class='container d-flex justify-content-center mt-100'> <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal"> Share on social media </button> </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title">Share</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">
                <div class="icon-container1 d-flex">
                    <div class="smd"> <i class=" img-thumbnail fab fa-twitter fa-2x" style="color:#4c6ef5;background-color: aliceblue"></i>
                        <p>Twitter</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-facebook fa-2x" style="color: #3b5998;background-color: #eceff5;"></i>
                        <p>Facebook</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-reddit-alien fa-2x" style="color: #FF5700;background-color: #fdd9ce;"></i>
                        <p>Reddit</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-discord fa-2x " style="color: #738ADB;background-color: #d8d8d8;"></i>
                        <p>Discord</p>
                    </div>
                </div>
                <div class="icon-container2 d-flex">
                    <div class="smd"> <i class="img-thumbnail fab fa-whatsapp fa-2x" style="color: #25D366;background-color: #cef5dc;"></i>
                        <p>Whatsapp</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-facebook-messenger fa-2x" style="color: #3b5998;background-color: #eceff5;"></i>
                        <p>Messenger</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-telegram fa-2x" style="color: #4c6ef5;background-color: aliceblue"></i>
                        <p>Telegram</p>
                    </div>
                    <div class="smd"> <i class="img-thumbnail fab fa-weixin fa-2x" style="color: #7bb32e;background-color: #daf1bc;"></i>
                        <p>WeChat</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <label style="font-weight: 600">Page Link <span class="message"></span></label><br />
                <div class="row"> <input class="col-10 ur" type="url" placeholder="https://www.arcardio.app/acodyseyy" id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;"> <button class="cpy" onclick="myFunction()"><i class="far fa-clone"></i></button> </div>
            </div>
        </div>
    </div>
</div>

<script>

function myFunction() {

$(".message").text("link copied");
}

</script>


</body>
</html>