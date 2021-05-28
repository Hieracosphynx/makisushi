<?php
require('config.php');
$ctr=$_POST['ctr'];
$sum=0;

$query="SELECT order_table.uname, order_table.TableNum, waiter.wname, order_table.time_stamp from waiter, orderdetails,menu,order_table where order_table.OrderNo=$ctr and orderdetails.OrderNo=$ctr and menu.FoodID=orderdetails.FoodID and waiter.WNO=order_table.WNO order by order_table.OrderNo";
$query2=mysqli_query($conn,$query);
$count=mysqli_num_rows($query2);
$height=(210+($count*10));
$row=mysqli_fetch_assoc($query2);
$name=$row['uname'];
$tnum=$row['TableNum'];
$wname=$row['wname'];
$time=$row['time_stamp'];
?>

<?php
require('fpdf/fpdf.php');
//Cell(Space,MarginTop,'messege',border,endl,align)
$pdf = new FPDF('P','mm',array(210,$height));
$pdf->AddPage();
//HEADER
$pdf->SetFont('Arial','B',25);
$pdf->Cell(0,20,'Makisushi',1,1,'C');
$pdf->Cell(0,5,'',0,1);//endl
//HEADER

//BODY
$pdf->SetFont('Arial','B',16);
$pdf->Cell(43,10,'Order Number: ',0,0); //orderno
$pdf->Cell(35,10,$ctr,1,0); //orderno

$pdf->Cell(55,10,'Date: ',0,0,'R'); //date
$pdf->Cell(0,10,$time,1,1); //date

$pdf->Cell(0,10,'',0,1);//endl

$pdf->Cell(20,10,'Name: ',0,0); //name
$pdf->Cell(0,10,$name,1,1); //name
$pdf->Cell(0,1,'',0,1);//endl
$pdf->Cell(38,10,'Waiter Name: ',0,0); //wnam
$pdf->Cell(94,10,$wname,1,0); //wname

$pdf->Cell(43,10,'Table Number: ',0,0); //tnum
$pdf->Cell(15,10,$tnum,1,1); //tnum

$pdf->Cell(0,10,'',0,1);//endl

///////////////////////////////

$pdf->Cell(11,10,'Qty',1,0);
$pdf->Cell(129,10,'Food Name',1,0,'C');
$pdf->Cell(20,10,'Price',1,0,'C');
$pdf->Cell(30,10,'Sub-Total',1,1,'C');

//////////////////////////////

$query="SELECT orderdetails.Quantity,menu.Foodname, menu.UnitPrice from waiter, orderdetails,menu,order_table where order_table.OrderNo=$ctr and orderdetails.OrderNo=$ctr and menu.FoodID=orderdetails.FoodID and waiter.WNO=order_table.WNO order by order_table.OrderNo";
$query2=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query2)){
    $qty=$row['Quantity'];
    $fname=$row['Foodname'];
    $uprice=$row['UnitPrice'];
    $subto=$qty*$uprice;
    $sum=$sum+$subto;

    $pdf->Cell(11,10,$qty,1,0);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(129,10,$fname,1,0,'C');
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(20,10,$uprice,1,0,'C');
    $pdf->Cell(30,10,$subto,1,1,'C');

}
$pdf->Cell(160,10,'Total:',0,0,'R');
$pdf->Cell(0,10,$sum,1,1,'C');
$pdf->Cell(0,10,'',0,1);//endl
$pdf->Cell(0,10,'Thank you',1,1,'C');




//BODY
$pdf->Output();
?>