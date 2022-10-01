<?php
include_once(dirname(__FILE__) . '/model/include.php');
session_start();
require_once 'FPDF/fpdf184/fpdf.php';

        $Bookings = new Booking();
        $bookings =  $Bookings->getterAllById($_SESSION['id']);
        $total = $Bookings->getTotalAmount($_SESSION['id']);
            
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d');


//customer and invoice details
  $info=[
    "customer"=>$_SESSION['name'],
    "address"=>$_SESSION['residance'],
    "email"=>$_SESSION['email'],
    "invoice_no"=>"1000001",
    "invoice_date"=>$createdAt,
    "total_amt"=>$total,
  ];
  
  
  class PDF extends FPDF
  {
    function Header(){
      
      //Display Company Info
      $this->SetFont('Arial','B',14);
      $this->Cell(50,10,"Willuda Inn",0,1);
      $this->SetFont('Arial','',14);
      $this->Cell(50,7,"West Street,",0,1);
      $this->Cell(50,7,"Salem 636002.",0,1);
      $this->Cell(50,7,"PH : 8778731770",0,1);
      
      //Display INVOICE text
      $this->SetY(15);
      $this->SetX(-80);
      $this->SetFont('Arial','B',18);
      $this->Cell(50,10,"Bookings Summary",0,1);
      
      //Display Horizontal line
      $this->Line(0,48,210,48);
    }
    
    function body($info,$bookings){
      
      //Billing Details
      $this->SetY(55);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(50,10,"Customer Info: ",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(50,7,$info["customer"],0,1);
      $this->Cell(50,7,$info["address"],0,1);
      $this->Cell(50,7,$info["email"],0,1);
      
      //Display Invoice no
      $this->SetY(55);
      $this->SetX(-60);
      $this->Cell(50,7,"Invoice No : ".$info["invoice_no"]);
      
      //Display Invoice date
      $this->SetY(63);
      $this->SetX(-60);
      $this->Cell(50,7,"Invoice Date : ".$info["invoice_date"]);
      
      //Display Table headings
      $this->SetY(95);
      $this->SetX(10);
      $this->SetFont('Arial','B',12);
      $this->Cell(80,9,"Service Type",1,0);
      $this->Cell(40,9,"Date",1,0,"C");
      $this->Cell(30,9,"No of Persons",1,0,"C");
      $this->Cell(40,9,"TOTAL",1,1,"C");
      $this->SetFont('Arial','',12);
      
      //Display table product rows
      foreach($bookings as $row){
        $this->Cell(80,9,$row["serviceType"],"LR",0);
        $this->Cell(40,9,$row["date"],"R",0,"R");
        $this->Cell(30,9,$row["quantity"],"R",0,"C");
        $this->Cell(40,9,$row["total"],"R",1,"R");
      }

      //Display table empty rows
      for($i=0;$i<12-count($bookings);$i++)
      {
        $this->Cell(80,9,"","LR",0);
        $this->Cell(40,9,"","R",0,"R");
        $this->Cell(30,9,"","R",0,"C");
        $this->Cell(40,9,"","R",1,"R");
      }

      //Display table total row
      $this->SetFont('Arial','B',12);
      $this->Cell(150,9,"GRAND TOTAL",1,0,"R");
      $this->Cell(40,9,$info['total_amt'],1,1,"R");
    
      
    }
    function Footer(){
      
      //set footer position
      $this->Ln(15);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Authorized Signature",0,1,"R");
      $this->SetFont('Arial','',10);
      
      //Display Footer Text
      $this->Cell(0,10,"This is a computer generated invoice",0,1,"C");
      
    }
    
  }
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info,$bookings);
  $pdf->Output();

?>
