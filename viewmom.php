<?php 

require "./fpdf/fpdf.php";

$db =new PDO('mysql:host=localhost;dbname=project','root','');


class myPDF extends FPDF{

    
    function header(){
        $this->setFont('Arial','U',14);
        $this->SetTextColor(100, 43, 150);
        $this->Cell(276,5,"Team Meeting",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function header_2(){
        $this->setFont('Arial','B',14);
        $this->Cell(276,5,"",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function footer(){
        $this ->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'c');
    }
   


    function headerTable(){
        $this->SetFont('Times','B',12);
       
        $this->Ln();
    } 


    function viewTable($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from mom where dob='2023-09-04' ");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(100,10,$data->title,1,0,'C');
      
        $this->Ln();
       
        }      
    }
     

        } 

 

  

 


$pdf =new myPDF();
$pdf->AliasNbPages();
$pdf->AddPAge('L','A4',0);

$pdf->header_2();


$pdf->headerTable();
$pdf->viewTable($db);


$pdf->Output();