<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/updatestyle.css">

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
---------------------------------nav bar end-------------------------------------------->

<!-----------------------------------info------------------------------------------------->
<div class="name">
<h2>WRSK RATHNAYAKE
<br>
34 yrs old
</h2>
</div>

<section id="info">

<form>

<div class="form-group">
    <label for="diagnosis">Reason for visit / diagnosis</label>
    <textarea class="form-control" id="diagnosis" rows="5"></textarea>
  </div>

  <div class="form-group col-md-6">
      <label for="fname">Examination</label>
      
      <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#bp" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Blood Presure</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pulsrate" aria-expanded="false" aria-controls="multiCollapseExample2">Pulsrate</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#respiratoryrate" aria-expanded="false" aria-controls="multiCollapseExample2">Respiratoryrate</button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#other" aria-expanded="false" aria-controls="multiCollapseExample2">Other Findings</button>

  <!--button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button-->
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="bp">
      <div class="card card-body">
      <input type="text" class="form-control" id="bp" placeholder="Blood presure">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="pulsrate">
      <div class="card card-body">
      <input type="text" class="form-control" id="pulsrate" placeholder="Pulsrate">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="respiratoryrate">
      <div class="card card-body">
      <input type="text" class="form-control" id="respiratoryrate" placeholder="Respiratoryrate">
      </div>
    </div>
  </div>

  <div class="col">
    <div class="collapse multi-collapse" id="other">
      <div class="card card-body">
      <label for="other">Other Findings</label>
      <textarea class="form-control" id="other" rows="5"></textarea>
      </div>
    </div>
  </div>

</div>


    </div>

  <div class="form-group">
    <label for="investigation">Investigation</label>

    <textarea class="form-control" id="investigation" rows="5"></textarea>

    <div class="row ">
   <div class=" my-auto">
     
</div>
    <div class="container">
    <div class="picture-container">
        <div class="picture1">
            <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
            <input type="file" id="wizard-picture" class="">
        </div>
         <h6 class="">Upload Image</h6>

    </div>
</div>

<script>

$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}


</script>

  </div>

  <div class="form-group">
    <label for="treatments">Treatments</label>
    <textarea class="form-control" id="treatments" rows="10"></textarea>
  </div>

  <div class="form-group">
    <label for="alergies">Alergies</label>
    <textarea class="form-control" id="alergies" rows="5"></textarea>
  </div>

  <div class="form-group">
    <label for="specialnotes">Special Notes</label>
    <textarea class="form-control" id="specialnotes" rows="5"></textarea>
  </div>

  <a href="#" class="btn btn-primary">done</a>
  </form>
  </section>
</body>
</html>