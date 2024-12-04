<?php 

require "./fpdf/fpdf.php";

$db =new PDO('mysql:host=localhost;dbname=project','root','');



class myPDF extends FPDF{

    
    function header1(){
        $this->SetLeftMargin(10);
        
        $this->setFont('Arial','B',14);
        $this->Cell(200,5,"Minutes Of Meeting",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function header_2(){
        $this->setFont('Arial','B',14);
        $this->Cell(200,5,"Web Design and Development Team",0,0,'C');

        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable(){
        $this->SetLeftMargin(40);

        $this->SetFont('Times','B',12);
   
        $this->Cell(70,10,'Name',1,0,'C');
        $this->Cell(70,10,'Attendence Status',1,0,'C');
        $this->Ln();
    } 


    function viewTable($db){
        $id=$_GET['dob'];

        $this->SetFont('Times','',12);

        $start = $db->query("select * from status where dob='$id' ");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(70,10,$data->name,1,0,'C');
        $this->Cell(70,10,$data->attendance_status,1,0,'C');
       
      
        $this->Ln();
       
        }      
    }

    function headerTable1(){
        $this->SetLeftMargin(20);

        $this->SetFont('Times','B',12);
   
        // $this->Cell(50,10,'Name',1,0,'C');
        // $this->Cell(50,10,'Attendence Status',1,0,'C');
        $this->Ln();
    }
    function viewTable1($db){
        $id=$_GET['dob'];

        $this->SetFont('Times','',12);

        $start = $db->query("select * from mom where dob='$id' ");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->write(10,$data->point1);
        $this->Ln(20);
        $this->write(10,$data->point2);
        $this->Ln(20);
        $this->write(10,$data->point3);
        $this->Ln(20);
        $this->write(10,$data->point4);
        $this->Ln(20);
        $this->write(10,$data->point5);
       
      
        $this->Ln();
       
        }      
    }

    } 


$pdf =new myPDF();
$pdf->AliasNbPages();
$pdf->AddPAge('P','A4',0);
$pdf->header1();

$pdf->header_2();


$pdf->headerTable();
$pdf->viewTable($db);

$pdf->headerTable1();
$pdf->viewTable1($db);









$pdf->Output();