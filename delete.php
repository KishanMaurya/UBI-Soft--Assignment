<?php include 'config/db_config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
</head>
<body>
<?php
$page=1;
$number_par_page=6;
$start_from=($page-1)*$number_par_page;
$query="SELECT * FROM register LIMIT $start_from,$number_par_page";
$run=mysqli_query($con,$query);//return 6 recods

$sql = "SELECT * FROM `register`"; 
$connStatus = mysqli_query($con,$sql); 
$totalNum = mysqli_num_rows($connStatus); //tottal all records
$res=$totalNum-$number_par_page; 
echo $res;

function deleteItem(){
  GLOBAL $res;
  GLOBAL $con;
  $cnt=1;
  for($i=$cnt; $i < $res; $i++) { 
  $Query="DELETE FROM register WHERE id=$cnt";
  $cnt++; 
  echo "cnt".$cnt;
  $run=mysqli_query($con , $Query);
  if ($run > 0) {
    ?>
      <script>
        sweetAlert(
          {
            title: "Wow One Card Deleted...!",
            text: "Just wait for a Second",
            type: "success"
          },
        function () {
          window.location.href = 'index.php';
        });
      </script>
    <?php
    echo "id deleted ".$cnt;
    break;
  }else{
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
    break;
  }
 }
}
deleteItem();
?>

<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>
</html>
