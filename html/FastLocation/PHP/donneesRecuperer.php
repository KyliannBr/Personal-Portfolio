<?php 

include("mysqlinfo.php");

// Create connection
$mysqli = new mysqli($servername, $username, $password, $myDB);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

date_default_timezone_set('Europe/Paris');

$dateY = date('Y');

$date18 = date(($dateY - 18).'-m-d');

$Nom = ucfirst($_POST["Nom"]);
$Prenom = ucfirst($_POST["Prenom"]);
$DateNaissance = $_POST['DateNaissance'];
$Login = $_POST["Login"];
$VoitureChoisie = $_POST["voitureChoisie"];
$CouleurVoitureChoisie = $_POST["CouleurVoitureChoisie"];
$Immatriculation = $_POST["Immatriculation"];
$puissance = $_POST["puissance"];

$sql = "INSERT INTO reservation (nom, prenom, login, voitureChoisie, coloris, immatriculation, puissance) VALUES ('$Nom', '$Prenom', '$Login', '$VoitureChoisie', '$CouleurVoitureChoisie', '$Immatriculation', '$puissance')";

if ($mysqli->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

require('fpdf.php');

#Listes des phrases a écrire 
$string1 = utf8_decode('FastLoation - Location de voitures de luxe');
$string2 = utf8_decode("Merci ".$Nom." ".$Prenom." pour votre réservation");
$string3 = utf8_decode("Document à présenter lors du retrait de la voiture");
$string4 = utf8_decode($Nom." ".$Prenom. " (".$Login.")");
$string5 = utf8_decode($DateNaissance);
$string6 = utf8_decode("N'oubliez pas votre permis de conduire, votre piece d'identité et un cheque pour payer la caution.                Ce cheque vous sera rendu a la fin de votre contrat de location si la voiture est dans le meme état que lors de la signature de votre contrat avec nous.");
$string7 = utf8_decode("Vous n'avez pas 18 ans. Vous ne possedez pas le permis, désolé. Mais vous pouvez toujours venir en magasin regarder nos véhicules de luxe.");
class PDF extends FPDF
{
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this -> Line(20,260,180,260);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
}


$pdf = new PDF();
$pdf->AliasNbPages(); 
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->SetTextColor(0,0,0);// input R , G , B 
$pdf->SetFillColor(255, 148, 148); 
$pdf->SetX(40);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(0, 115, 202);
$pdf->Cell(130,13,$string1,'TRLB',1,'C',false);

$pdf->Ln(10);

$pdf->SetFont('Arial','B',16);
$pdf->SetX(40);
$pdf->SetLineWidth(0.7);
$pdf->Cell(130,11,$string2,'B',1,'C',false);

$pdf->Ln(10);

$pdf->SetFont('Arial','',11);
$pdf->Cell(190,11,$string3,'',1,'C',false);

$pdf->Ln(10);

$pdf->SetLineWidth(0.5);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Cell(95,13,$string4,'TRLB',0,'C',false);
$pdf->Cell(95,13,$string5,'TRLB',1,'C',false);

$pdf->Ln(10);

$pdf->SetX(60);
$pdf->Cell(90,13,$VoitureChoisie,'TRLB',2,'C',false);
$pdf->Ln(2);
$pdf->SetX(60);
$pdf->Cell(90,13,$CouleurVoitureChoisie,'TRLB',2,'C',false);
$pdf->Ln(2);
$pdf->SetX(60);
$pdf->Cell(90,13,$Immatriculation,'TRLB',2,'C',false);
$pdf->Ln(2);
$pdf->SetX(60);
$pdf->Cell(90,13,$puissance,'TRLB',2,'C',false);

$pdf->Ln(50);
$pdf->MultiCell(190,7,$string6,0,'',false);

$pdf->Output('pdf_genere.pdf','I'); // Send to browser and display
?>