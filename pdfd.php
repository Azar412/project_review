<?Php
//SQL to get 10 records
$db =new PDO('mysql:host=localhost;dbname=project','root','');

$sql="select * from project where static='Mohammed Azarudeen'";
require('./fpdf/fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();

$width_cell=array(20,50,40,40,40);
$pdf->SetFont('Arial','B',16);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'Project Name',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'Static',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Quardinator',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Process',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Status',1,1,'C',true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
foreach ($db->query($sql) as $row) {
$pdf->Cell($width_cell[0],10,$row['project_name'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['static'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['quardinator'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['process'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['status'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 

$pdf->Output();
?>
PDF Output with records is here
