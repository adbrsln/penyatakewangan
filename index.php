<?php 

$dbHost = 'localhost';
$dbUsername = 'root'; 
$dbPassword = '';
$dbName = 'penyatakewangan';
//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Display error if failed to connect
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$sql = "SELECT * FROM akaun where jenis = 1";
$resultdebit = mysqli_query($db,$sql);
$resultdebit2 = mysqli_query($db,$sql);
$num1 = mysqli_num_rows($resultdebit);

$sql = "SELECT * FROM akaun where jenis = 2";
$resultkredit = mysqli_query($db,$sql);
$resultkredit2 = mysqli_query($db,$sql);
$num2 = mysqli_num_rows($resultkredit);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <main class="container">
    <h1>Penyata Kewangan</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th colspan="3" class="text-center">Pendapatan</th>
            <th colspan="3"  class="text-center">Perbelanjaan</th>
            </tr>
            <tr>
            <th style="width: 5%">#</th>
            <th style="width: 25%">Tajuk</th>
            <th style="width: 10%">Debit</th>

            <th style="width: 5%">#</th>
            <th style="width: 25%">Tajuk</th>
            <th style="width: 10%">Kredit</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
            <th ><?php for($v1 =1;$v1<=$num1;$v1++) echo $v1.'</br>';?></th>
                
            <td><?php while($debit = mysqli_fetch_assoc($resultdebit)){?> <?=$debit['tajuk']?></br> <?php }?></td>
            <td><?php $jumdebit = 0; while($debitt = mysqli_fetch_assoc($resultdebit2)){?> <?=$debitt['jumlah']?></br> <?php $jumdebit+=$debitt['jumlah']; }?></td>
            
            <th ><?php for($v2 =1;$v2<=$num2;$v2++) echo $v2.'</br>';?></th>
            <td><?php while($kredit = mysqli_fetch_assoc($resultkredit)){?> <?=$kredit['tajuk']?></br> <?php $v2++;}?></br></td>
            <td><?php $jumkredit = 0; while($kreditt = mysqli_fetch_assoc($resultkredit2)){?> <?=$kreditt['jumlah']?></br> <?php $jumkredit+=$kreditt['jumlah']; }?></td>
            
            </tr>
            
            <?php 
            if($jumdebit > $jumkredit){
                $untung = $jumdebit - $jumkredit;
                $inUntung =$untung ;
                $varuntung = 'Untung Bersih';
                $varugi = '';
                $indRugi = ''; 
            }else  {
                $rugi = $jumkredit - $jumdebit;
                $varuntung = '';
                $varugi = 'Rugi Bersih';
                $inUntung ='' ;
                $indRugi = $rugi; 
            }
            ?>
            <tr>
            <td colspan="1"></td>
            <td >Untung Kasar</td>
            <td ><?=$jumdebit?></td>

            <td colspan="1"></td>
            <td >Rugi Kasar</td>
            <td ><?=$jumkredit?></td>
            </tr>
            
            <tr class="bg-light">
            <td colspan="1"></td>
            <td ><strong><?=$varuntung?></strong></td>
            <td ><strong><?=$inUntung?></strong></td>

            <td colspan="1"></td>
            <td ><strong><?=$varugi?></strong></td>
            <td ><strong><?=$indRugi?></strong></td>
            </tr>

            <tr >
            <td colspan="6"></td>
            </tr>
        </tbody>
    </table>


  </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>