@extends('myproject.admin')
@section('admincontent')
<?php
$files = scandir("C:/xampp/htdocs/Salon/uploads");
for($a = 2;$a <count($files);$a++){

?>
<p> <?php echo $files[$a];?>
  <a href ="uploads/<?php echo $files[$a];?>" download="<?php echo  $files[$a];?>">
    download</a>
  </p>

<?php
}?>
@stop
