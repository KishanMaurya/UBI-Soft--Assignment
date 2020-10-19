<?php include 'pages/header.php';?>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container-fluid">

          <div class="row justify-content-center">

            <div class="col-md-3 marginTop">
                <div class="card borderRadius box-shadow shadow-lg border-0">
                    <div class="card-body">
                        <h4> Register Here
                          <svg width="1em" height="1em" viewBox="0 0 16 16" 
                            class="bi bi-receipt-cutoff ml-5 mt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                            <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                    </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card box-shadow shadow border-0">
                <div class="card-body">
                  <form action="#" method="post" enctype="multipart/form-data">
                    <label>Title:</label>
                    <div class="form-group">
                      <input type="text" name="title" data-toggle="tooltip" data-placement="bottom" title="Enter Title" class="form-control" placeholder="Enter Title" required="required">
                    </div>
                    <label>Description:</label>
                    <div class="form-group">
                      <textarea name="description" data-toggle="tooltip" data-placement="bottom" title="Enter Description" class="form-control" id="" cols="30" rows="4" placeholder="Enter Description"></textarea>
                    </div>
                    <label>Image:</label>
                    <div class="form-group">
                      <input type="file" name="file" data-toggle="tooltip" data-placement="bottom" title="Select  Images" class="form-control" placeholder="Select  Images" required="required">
                    </div>
                    <div class="form-group float-right">
                      <button type="reset" class="btn btn-danger btn-sm font-weight-bold">Reset</button>
                      <button type="submit" name="register" class="btn btn-success btn-sm font-weight-bold">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
           
            <div class="col-md-8">
            </div>

            
          </div>
        </div>
      </div>

    </main>
<?php include 'pages/footer.php';?>


<?php

      if(isset($_POST['register']))
        {
          //// escape variables for security

        $title=mysqli_real_escape_string($con,$_POST['title']);
        $description=mysqli_real_escape_string($con,$_POST['description']);
        $Product_image=mysqli_real_escape_string($con,$_FILES["file"]["name"]);
          
        $dir="images/";
        if(!is_dir($dir))
        {
          mkdir("images/");
        }

        move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);

      $Query="INSERT INTO register (title,description,image) VALUES ('$title','$description','$Product_image')";

          $run=mysqli_query($con , $Query);
          
              if ($run > 0) {
                  ?>
                    <script>
                      sweetAlert(
                          {
                              title: "Wow One Card Added...!",
                              text: "Just wait for a Second",
                              type: "success"
                          },
                          function () {
                              window.location.href = 'index.php';
                          });
                  </script>
                  <?php
              }
              else{
                ?>
                    <script>
                      sweetAlert(
                          {
                              title: "Somthing Went Wrong .Please Try Again Latter...!",
                              text: "Just wait for a Second",
                              type: "error"
                          },
                          function () {
                              window.location.href = 'index.php';
                          });
                  </script>
                <?php
              }
            }
    ?>
