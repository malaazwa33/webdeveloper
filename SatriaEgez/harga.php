
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Harga</title>
  </head>
  <body id="page-top">
 
  <div>
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand font-weight-bold" href="index.php">PT  COVER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profil.php">PPROFIL </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  </div>
  </nav>
  

    <br> <br> <br> <br>
  <div class="container mt-8">
  
  <table class="table">
  <thead class="thead-dark">

  
    <tr>
      <th scope="col">NO</th>
      <th scope="col">JENIS</th>
      <th scope="col" >STATUS </th>
      <th scope="col" >HARGA</th>

    </tr>
  </thead>
  <tbody>

  <?php for ($a = 1; $a < 11; $a++){?>
   
  
    <tr>
      <th scope="row"> <?php echo $a ?> </th>
      <td style = "red">Cover <?php echo $a ?> </td>
      <td  <?php if ($a == "2")
{
  echo"class = bg-danger";

} elseif 
($a == "4")
{
  echo  "class = bg-danger";
}elseif 
 ( $a == "6") 
{ 
  echo "class = bg-danger";
}else {
  echo "class = bg-primary";
}
?>
      <?php    
$a == ("2");
if ($a == "2")
{
  echo "<span style>Kosong";

} elseif 
($a == "4")
{
  echo "<span style>Kosong";

}elseif 
 ( $a == "6") 
{ 
  echo "<span style>Kosong";

}else {
  echo "<span style>Tersedia";

}

?>
<td  <?php if ($a == "2")
{
  echo"class = bg-danger";

} elseif 
($a == "4")
{
  echo  "class = bg-danger";
}elseif 
 ( $a == "6") 
{ 
  echo "class = bg-danger";
}else {
  echo "class = bg-primary";
}
?>
      
      <?php    
$a == ("2");
if ($a == "2")
{
  echo  "<span style>-";
} elseif 
($a == "4")
{
echo  "<span style>-";}
elseif 
( $a == "6") 
{
  echo "<span style>-";}
else{
  echo "<span style>Rp 15.000";
}


?></td>
    </td>
    </tr>
    
  <?php }
 ?>

  </tbody>
</table>
  </div>
  </body>
</html>