<?php 

require "./fpdf/fpdf.php";

$db =new PDO('mysql:host=localhost;dbname=project','root','');


class myPDF extends FPDF{

    
    function header1(){
        $this->setFont('Arial','B',14);
        $this->Cell(200,5,"Project Status",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function header_2(){
        $this->setFont('Arial','B',14);
        $this->Cell(200,5,"GOWTHAM",0,0,'C');

        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable(){
        $this->SetLeftMargin(30);
        $this->SetFont('Times','B',12);
   
        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    } 


    function viewTable($db){
        $this->SetFont('Times','',12);

        $start = $db->query("select * from project where static='Mohammed Azarudeen'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
        $this->Ln();
       
        }      
    }

    function header_3(){
        $this->Ln(10);
        
        $this->setFont('Arial','B',14);
        $this->Cell(170,5,"Mohammed Azarudeen",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable1(){
        $this->SetFont('Times','B',12);
        
        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    }
    function viewTable1($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from project where static='Gowtham'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
        $this->Ln();
       
        }      
    }


    function header_4(){
        $this->Ln(10);
        $this->setFont('Arial','B',14);
        $this->Cell(170,5,"Sharath Kannan",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable2(){
        $this->SetFont('Times','B',12);
        
        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    }
    function viewTable2($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from project where static='Sharath Kannan'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
        $this->Ln();
       
        }      
    }


    function header_5(){
        $this->Ln(10);

        $this->setFont('Arial','B',14);
        $this->Cell(170,5,"Siva Kumar S",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable5(){
        $this->SetFont('Times','B',12);

        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    }
    function viewTable5($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from project where dynamic='Siva Kumar S'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
        $this->Ln();
       
        }      
    }


    function header_6(){
        $this->Ln(40);

        $this->setFont('Arial','B',14);
        $this->Cell(170,5,"Naveen Vimal",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable6(){
        $this->SetFont('Times','B',12);
        
        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    }
    function viewTable6($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from project where dynamic='Naveen Vimal'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
        $this->Ln();
       
        }      
    }

    function header_7(){
        $this->Ln(10);

        $this->setFont('Arial','B',14);
        $this->Cell(170,5,"Racky",0,0,'C');
        $this->ln();
        $this->SetFont('Times','',12);
        $this->ln(10);
    }

    function headerTable7(){
        $this->SetFont('Times','B',12);
        
        $this->Cell(40,10,'Project Name',1,0,'C');
        $this->Cell(40,10,'Quardinator',1,0,'C');
        $this->Cell(40,10,'Process',1,0,'C');
        $this->Cell(40,10,'status',1,0,'C');
        $this->Ln();
    }
    function viewTable7($db){
        $this->SetFont('Times','',12);
        $start = $db->query("select * from project where dynamic='Racky'");

        while($data = $start->fetch(PDO::FETCH_OBJ)){
        $this->Cell(40,10,$data->project_name,1,0,'C');
        $this->Cell(40,10,$data->quardinator,1,0,'C');
        $this->Cell(40,10,$data->process,1,0,'C');
        $this->Cell(40,10,$data->status,1,0,'C');
      
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

$pdf->header_3();
$pdf->headerTable1();
$pdf->viewTable1($db);

$pdf->header_4();
$pdf->headerTable2();
$pdf->viewTable2($db);


$pdf->header_5();
$pdf->headerTable5();
$pdf->viewTable5($db);

$pdf->header_6();
$pdf->headerTable6();
$pdf->viewTable6($db);

$pdf->header_7();
$pdf->headerTable7();
$pdf->viewTable7($db);



$pdf->Output();