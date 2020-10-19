<?php include 'pages/header.php' ;?>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container-fluid">

          <div class="row justify-content-center">
            
            <!---left side of content---->
            <div class="col-md-9">
              <div class="card border-0 box-shadow white-smoke">
                <div class="card-body">
                  <div class="row">

                <?php
                  if (isset($_GET['page'])) {
                      $page=$_GET['page'];
                  }else{
                    $page=1;
                  }
                  $Previous = $page - 1;
                  $Next = $page + 1;
                  $number_par_page=6;
                  $start_from=($page-1)*6;
                  $query=" SELECT * FROM register LIMIT $start_from,$number_par_page";
                  $run=mysqli_query($con,$query);
                  while ($row=mysqli_fetch_array($run)) {
                  $img=$row['image'];
                  ?>
                    <div class="col-md-4 my-3">
                        <div class="card box-shadow hieght h-100 border-0">
                          <a href="images/<?php echo htmlentities($img);?>">
                          <img class="card-img-top" src="images/<?php echo htmlentities($img);?>" width="306" height="226" alt="Card image cap">
                          </a>
                          <div class="card-body">
                            <p class="card-title text-muted font-weight-bold">
                              <?php echo $row['title'];?>
                            </p>
                            <p class="card-text "><?php echo $row['description'];?></p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
                            </div>
                          </div>
                        </div>
                    </div>
                  <?php
                }

                $sql = "SELECT * FROM `register`"; 
 
                $connStatus = mysqli_query($con,$sql); 
                 
                $totalNum = mysqli_num_rows($connStatus); 
                $res=$totalNum-$number_par_page; 
                ?>
                  <p class="text-right font-weight-bold mt-4">
                    <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#multiCollapseExample1" data-target=".multi-collapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">See all <span class="font-weight-bold ml-2"><?php echo $res;?></span></a>
                  </p>
                  <div class="row">
                   <?php
                    $number_par_page=6;
                    $start_from=($page-1)*6;
                    $query=" SELECT * FROM register LIMIT $number_par_page,$totalNum";
                    $run=mysqli_query($con,$query);
                    while ($row=mysqli_fetch_array($run)) {
                    $img=$row['image'];
                    ?>
                    <div class="col-md-3 mb-3">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card box-shadow hieght h-100 border-0">
                          <a href="images/<?php echo htmlentities($img);?>">
                          <img class="card-img-top" src="images/<?php echo htmlentities($img);?>" width="306" height="226" alt="Card image cap">
                          </a>
                          <div class="card-body">
                            <p class="card-title text-muted font-weight-bold">
                              <?php echo $row['title'];?>
                            </p>
                            <p class="card-text "><?php echo $row['description'];?></p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php }?>
                  </div>
                <?php
              ?>
                </div>
              </div>
            </div> 
            </div>

            
          </div>
        </div>
      </div>

    </main>

    <?php include 'pages/footer.php'; ?>



<script>
$(document).ready(function(){
   setTimeout(function () {
    window.location='delete.php'
  },30000); // 30 seconds    1seconds=1000

})


</script>