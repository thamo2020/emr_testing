<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" >

    <title>Login</title>
</head>
<body>
<section id="background"> 
        <div class="container-fluid bg" >
            <div class="row">
                <!--div class="col-md-6 col-sm-4 col-xs-12"--> 
                
                <!--div class="col-md-6 col-sm-4 col-xs-12"--> 
                <div class="col-md">
                  <!--form strated-->
                  <form action="{{route('login.submit')}}" method="POST">
                      @csrf
                    <div class="form-group">
                        <h2>Sign Up</h2>
                      <label for="fullname">Full Name</label>
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name">
                      @error('fullname')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="slmcnumber">SLMC Number</label>
                      <input type="text" name="slmcnumber" class="form-control" id="slmcnumber" placeholder="SLMC Number">
                      @error('slmcnumber')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="hospital">Current working hospital</label>
                      <input type="text" name="hospital" class="form-control" id="hospital" placeholder="Curret working hospital">
                      @error('hospital')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="Password" name="password" class="form-control" id="password" placeholder="Password">
                      @error('password')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="retypepassword">Retype Password</label>
                      <input type="Password" name="retypepassword" class="form-control" id="retypepassword" placeholder="Retype your Password">
                      @error('retypepassword')
                      <p style="color:red">{{$message}}</p>
                      @enderror

                    </div>
                    <div class="form-group">
                      <label for="exampleInputprofilepicture">Profile picture</label>
                    <div class="row">
                    <div class="col">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Upload Image</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-secondary ">Skip</button>
                      </div>
                  
                      
    
                    </div>
    
    
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                    <button type="button submit" class="button  btn btn-primary active btn-lg btn-block">Sign Up Me</button>
                  </form>
                </div>
                  <!--form end-->
                </div>
</body>
</html>