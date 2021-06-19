<?php
    require "conn.php";

$query = "select * from engines";

?>


<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
<head>
<nav class="navbar navbar-brand">
    <a class="navbar-brand" href="#">
      <img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        <a>  Smart Methods </a>
    </a>
  </nav>
</head>

<body>
<div class="container mx-auto my-4">
<?php
if($result=mysqli_query($conn, $query)){
    if(mysqli_num_rows($result)>0){
        $str ="";
        while($row=mysqli_fetch_array($result)){
            $str .= "
            <div class='card card-body py-2 my-2'>
            <div class='row row-cols-3 g-1 g-sm-3'>
                <div class='col'>
                ".$row['Engine']."
                </div>
    <div class='rangeslider col text-center'>
    <input type='range' name='value1' min='0' max='5' value='".$row['value']."' class='myslider' id='value1' disabled>
    </div>
    <div class='rangeslider col text-center'>
    <p> Value: <span id='value11'>".$row['value']."</span></p>
    </div>
    </div>
    </div>
    " ;
        }
        echo $str;
    }
    else {
        echo "";
    }

}
?>

</div>

</div>

</body>
</html>

<?php
mysqli_close($conn);
?>