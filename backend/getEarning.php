<?php 

include '../dbconnected.php';

$janfirst=strtotime('first day of January');
$janlast=strtotime('last day of January');

$janStart=date('Y-m-d',$janfirst);
$janend=date('Y-m-d',$janlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$janStart);
$stmt->bindParam(':value2',$janend);
$stmt->execute();
$janResult=$stmt->fetch(PDO::FETCH_ASSOC);



// February 
$febfirst=strtotime('first day of February ');
$feblast=strtotime('last day of February ');


$febStart=date('Y-m-d',$febfirst);
$febend=date('Y-m-d',$feblast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$febStart);
$stmt->bindParam(':value2',$febend);
$stmt->execute();
$febResult=$stmt->fetch(PDO::FETCH_ASSOC);


// March 
$marfirst=strtotime('first day of March ');
$marlast=strtotime('last day of March');

$marStart=date('Y-m-d',$marfirst);
$marend=date('Y-m-d',$marlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$marStart);
$stmt->bindParam(':value2',$marend);
$stmt->execute();
$marResult=$stmt->fetch(PDO::FETCH_ASSOC);

// April
$aprfirst=strtotime('first day of April');
$aprlast=strtotime('last day of April');

$aprStart=date('Y-m-d',$aprfirst);
$aprend=date('Y-m-d',$aprlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$aprStart);
$stmt->bindParam(':value2',$aprend);
$stmt->execute();
$aprResult=$stmt->fetch(PDO::FETCH_ASSOC);

// May 
$mayfirst=strtotime('first day of May ');
$maylast=strtotime('last day of May ');

$mayStart=date('Y-m-d',$mayfirst);
$mayend=date('Y-m-d',$maylast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$mayStart);
$stmt->bindParam(':value2',$mayend);
$stmt->execute();
$mayResult=$stmt->fetch(PDO::FETCH_ASSOC);

// June 
$junfirst=strtotime('first day of June');
$junlast=strtotime('last day of June');

$junStart=date('Y-m-d',$junfirst);
$junend=date('Y-m-d',$junlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$junStart);
$stmt->bindParam(':value2',$junend);
$stmt->execute();
$junResult=$stmt->fetch(PDO::FETCH_ASSOC);

// July 
$janfirst=strtotime('first day of July');
$janlast=strtotime('last day of July');

$julStart=date('Y-m-d',$julfirst);
$julend=date('Y-m-d',$jullast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$julStart);
$stmt->bindParam(':value2',$julend);
$stmt->execute();
$julResult=$stmt->fetch(PDO::FETCH_ASSOC);

// August
$augfirst=strtotime('first day of August');
$auglast=strtotime('last day of August');

$augStart=date('Y-m-d',$augfirst);
$augend=date('Y-m-d',$auglast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$augStart);
$stmt->bindParam(':value2',$augend);
$stmt->execute();
$augResult=$stmt->fetch(PDO::FETCH_ASSOC);

// September 
$sepfirst=strtotime('first day of September');
$seplast=strtotime('last day of September');

$sepStart=date('Y-m-d',$sepfirst);
$sepend=date('Y-m-d',$seplast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$sepStart);
$stmt->bindParam(':value2',$sepend);
$stmt->execute();
$sepResult=$stmt->fetch(PDO::FETCH_ASSOC);

// October 
$octfirst=strtotime('first day of October');
$octlast=strtotime('last day of October');

$octStart=date('Y-m-d',$octfirst);
$octend=date('Y-m-d',$octlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$octStart);
$stmt->bindParam(':value2',$octend);
$stmt->execute();
$octResult=$stmt->fetch(PDO::FETCH_ASSOC);

// November
$novfirst=strtotime('first day of November');
$novlast=strtotime('last day of November');

$novStart=date('Y-m-d',$novfirst);
$novend=date('Y-m-d',$novlast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$novStart);
$stmt->bindParam(':value2',$novend);
$stmt->execute();
$novResult=$stmt->fetch(PDO::FETCH_ASSOC);

// December
$decfirst=strtotime('first day of December');
$declast=strtotime('last day of December');

$decStart=date('Y-m-d',$decfirst);
$decend=date('Y-m-d',$declast);

$sql="SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate BETWEEN :value1 AND :value2";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':value1',$decStart);
$stmt->bindParam(':value2',$decend);
$stmt->execute();
$decResult=$stmt->fetch(PDO::FETCH_ASSOC);


$total=array(
    $janResult['total'],$febResult['total'],$marResult['total'],$aprResult['total'],
    $mayResult['total'],$junResult['total'],$julResult['total'],$augResult['total'],
    $sepResult['total'],$octResult['total'],$novResult['total'],$decResult['total']
);
echo json_encode($total);