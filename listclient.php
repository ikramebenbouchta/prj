<?php
require('fpdf/fpdf.php');
require("database.php");
$cnx=$_SESSION['connexion'];
ob_start();
$pdf=new FPDF('P','cm','A3');
$pdf->AddPage();
$pdf->SetFont('Times','',15);

// En-tête

    // Logo
    $pdf->Image('img/lgggg.png',1,1,5);
    // Police Arial gras 15
    $pdf->SetFont('Arial','B',15);
    // Décalage à droite
    $pdf->Cell(10);
    // Titre
    $pdf->Cell(10,2,'Liste des clients',1,0,'C');

    // Saut de ligne
    $pdf->Ln(20);


// Pied de page

    // Positionnement à 1,5 cm du bas
    $pdf->SetY(-35);
    // Police Arial italique 8
    $pdf->SetFont('Arial','I',8);
    // Numéro de page
    $pdf->Cell(1,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');




$reponses ='SELECT * FROM user where statut<>"Admin"'; 
$reqst=mysql_query($reponses,$cnx)or die (mysql_error());
$total = mysql_num_rows($reqst);
if($total){
 
while ($donnees = mysql_fetch_array($reqst)) 
{         $pdf->Cell(4,1,'nom',1,0,'L');
         $pdf->Cell(5,1,'prenom',1,0,'L');
         $pdf->Cell(5,1,'login',1,0,'L');
		 $pdf->Cell(5,1,'password',1,0,'L');
         $pdf->Cell(5,1,'email',1,0,'L');
         $pdf->Cell(5,1,'tel',1,0,'L');
	 $pdf->Ln(1);
         $pdf->Cell(5,1,$donnees['nom'],1,0,'L');
         $pdf->Cell(5,1,$donnees['prenom'],1,0,'L');
         $pdf->Cell(5,1,$donnees['login'],1,0,'L');
		 $pdf->Cell(5,1,$donnees['password'],1,0,'L');
         $pdf->Cell(5,1,$donnees['email'],1,0,'L');
	     $pdf->Cell(5,1,$donnees['tel'],1,0,'L');
		 
        
    }    
}





$pdf->Output();

?>