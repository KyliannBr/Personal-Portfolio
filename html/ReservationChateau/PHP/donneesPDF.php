<?php

    session_start();   

    include("mysqlinfo.php");
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 

    $login = $_SESSION["loginReservation"];
    $DR = $_SESSION["dateReservation"];
    $NBRI = $_SESSION["nombrePersonnesInvitees"];

    $string1 = utf8_decode("Billet Réservation");
    $string2 = utf8_decode("Votre commande à bien été prise en compte");



    require('fpdf.php');

    class PDF extends FPDF
    {
        
    }


$pdf = new PDF();
$pdf->AliasNbPages(); 
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->SetTextColor(0, 0, 0);// input R , G , B  
$pdf->SetX(10);
$pdf->MultiCell(190,10,$string1,0,'C',false);
$pdf->SetdrawColor(231, 102, 66);
$pdf->SetLineWidth(1);
$pdf->Line(80, 20, 130, 20);

$pdf->Ln(15);
$pdf->SetLineWidth(0.4);
$pdf->SetdrawColor(0, 0, 0);
$pdf->SetFont('Arial','B',13);
$width_cell=array(63,63,64);
$pdf->Cell($width_cell[0],18,$login,1,0,'C',false);

$pdf->Cell($width_cell[1],18,$DR,1,0,'C',false);

$pdf->Cell($width_cell[2],18,$NBRI,1,0,'C',false);


$pdf->Ln(27);

$pdf->MultiCell(190,10,$string2,0,'C',false);








$pdf->Line(10, 80, 200, 80);

$pdf->Ln(5);

$pdf->Output('pdf_genere.pdf','I');


?>