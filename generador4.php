<?

require('fpdf/fpdf.php');
class PDF extends FPDF
{
	
   //Cabecera de página
   function Header()
   {

       $this->Image('aaaa123.png',10,8,190);

      $this->SetFont('Arial','B',12);

      
	   

	  
   }
}

//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//Aquí escribimos lo que deseamos mostrar...


$pdf->Ln(40);
		
$pdf->Cell(8,15,' No. ',1,1,$align='l');	


$pdf->SetXY(18,50);
$pdf->Cell(22,5,utf8_decode('ÁREA'),0,1,$align='l');	
$pdf->SetXY(18,55);
$pdf->Cell(22,5,utf8_decode('OPERACIÓN'),0,1,$align='l');
$pdf->SetXY(18,60);
$pdf->Cell(22,5,utf8_decode('ACTIVIDAD'),0,1,$align='l');
$pdf->SetXY(18,50);
$pdf->Cell(25,15,utf8_decode(''),1,1,$align='l');



$pdf->SetXY(43,50);
$pdf->Cell(15,15,utf8_decode('SISMOS'),1,1,$align='l');
$pdf->SetXY(58,50);
$pdf->Cell(18,15,utf8_decode('INCENDIO'),1,1,$align='l');
$pdf->SetXY(76,50);
$pdf->Cell(10,8,utf8_decode('EXPLO-'),0,1,$align='l');
$pdf->SetXY(76,50);
$pdf->Cell(14,15,utf8_decode('SIÓN'),1,1,$align='l');


$pdf->SetXY(90,50);
$pdf->Cell(19,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(90,50);
$pdf->Cell(22,3,utf8_decode('DERRAMA'),0,1,$align='l');
$pdf->SetXY(90,53);
$pdf->Cell(22,3,utf8_decode('DE'),0,1,$align='l');
$pdf->SetXY(90,56);
$pdf->Cell(22,3,utf8_decode('QUÍMICOS'),0,1,$align='l');
$pdf->SetXY(90,59);
$pdf->Cell(22,3,utf8_decode('DE '),0,1,$align='l');
$pdf->SetXY(90,62);
$pdf->Cell(22,3,utf8_decode('LIMPIEZA'),0,1,$align='l');


$pdf->SetXY(109,50);
$pdf->Cell(24,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(109,50);
$pdf->Cell(24,3,utf8_decode('SUSTANCIAS '),0,1,$align='l');
$pdf->SetXY(109,55);
$pdf->Cell(24,3,utf8_decode('QUÍMICAS'),0,1,$align='l');
$pdf->SetXY(109,59);
$pdf->Cell(24,3,utf8_decode('PELIGROSAS'),0,1,$align='l');


$pdf->SetXY(133,50);
$pdf->Cell(11,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(133,45);
$pdf->Cell(11,15,utf8_decode('FUGA'),0,1,$align='l');
$pdf->SetXY(133,50);
$pdf->Cell(11,15,utf8_decode('DE'),0,1,$align='l');
$pdf->SetXY(133,55);
$pdf->Cell(11,15,utf8_decode('GAS'),0,1,$align='l');

$pdf->SetXY(144,50);
$pdf->Cell(18.5,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(144,50);
$pdf->Cell(17,4,utf8_decode('FUGA DE'),0,1,$align='l');
$pdf->SetXY(144,54);
$pdf->Cell(17,4,utf8_decode('AGUA'),0,1,$align='l');
$pdf->SetXY(144,58);
$pdf->Cell(18,4,utf8_decode('RESIDUAL'),0,1,$align='l');


$pdf->SetXY(162.5,50);
$pdf->Cell(19,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(162.5,50);
$pdf->Cell(19,4,utf8_decode('CAÍDA DE '),0,1,$align='l');
$pdf->SetXY(162.5,53);
$pdf->Cell(19,4,utf8_decode('RESIDUOS'),0,1,$align='l');
$pdf->SetXY(162.5,56);
$pdf->Cell(19,4,utf8_decode('PELI-'),0,1,$align='l');
$pdf->SetXY(162.5,59);
$pdf->Cell(19,4,utf8_decode('GROSOS'),0,1,$align='l');
$pdf->SetXY(162.5,62);
$pdf->Cell(19,4,utf8_decode('SÓLIDOS'),0,1,$align='l');

$pdf->SetXY(181.5,50);
$pdf->Cell(17,15,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(181.5,50);
$pdf->Cell(13,4,utf8_decode('DERRA-'),0,1,$align='l');
$pdf->SetXY(181.5,53);
$pdf->Cell(13,4,utf8_decode('MA DE'),0,1,$align='l');
$pdf->SetXY(181.5,56);
$pdf->Cell(13,4,utf8_decode('RESI-'),0,1,$align='l');
$pdf->SetXY(181.5,59);
$pdf->Cell(13,4,utf8_decode('DUOS LI-'),0,1,$align='l');
$pdf->SetXY(181.5,61);
$pdf->Cell(13,5,utf8_decode('QUIDOS'),0,1,$align='l');

$pdf->SetXY(10,65);
$pdf->Cell(8,10,' 1 ',1,1,$align='l');	

$pdf->SetXY(18,65);
$pdf->Cell(25,10,utf8_decode('OFICINA'),1,1,$align='l');

//primera fila de llenado
$pdf->SetXY(43,65);
$pdf->Cell(15,10,utf8_decode(''.$_POST['civil']),1,1,$align='l');
$pdf->SetXY(58,65);
$pdf->Cell(18,10,utf8_decode(''.$_POST['a2']),1,1,$align='l');
$pdf->SetXY(76,65);
$pdf->Cell(14,10,utf8_decode(''.$_POST['a3']),1,1,$align='l');
$pdf->SetXY(90,65);
$pdf->Cell(19,10,utf8_decode(''.$_POST['a4']),1,1,$align='l');
$pdf->SetXY(109,65);
$pdf->Cell(24,10,utf8_decode(''.$_POST['a5']),1,1,$align='l');
$pdf->SetXY(133,65);
$pdf->Cell(11,10,utf8_decode(''.$_POST['a6']),1,1,$align='l');
$pdf->SetXY(144,65);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['a7']),1,1,$align='l');
$pdf->SetXY(162.5,65);
$pdf->Cell(19,10,utf8_decode(''.$_POST['a8']),1,1,$align='l');
$pdf->SetXY(181.5,65);
$pdf->Cell(17,10,utf8_decode(''.$_POST['a9']),1,1,$align='l');


$pdf->SetXY(10,75);
$pdf->Cell(8,10,' 2 ',1,1,$align='l');	

$pdf->SetXY(18,75);
$pdf->Cell(25,10,utf8_decode('AULAS'),1,1,$align='l');




$pdf->SetXY(43,75);
$pdf->Cell(15,10,utf8_decode(''.$_POST['civil']),1,1,$align='l');
$pdf->SetXY(58,75);
$pdf->Cell(18,10,utf8_decode(''.$_POST['a2']),1,1,$align='l');
$pdf->SetXY(76,75);
$pdf->Cell(14,10,utf8_decode(''.$_POST['a3']),1,1,$align='l');
$pdf->SetXY(90,75);
$pdf->Cell(19,10,utf8_decode(''.$_POST['a4']),1,1,$align='l');
$pdf->SetXY(109,75);
$pdf->Cell(24,10,utf8_decode(''.$_POST['a5']),1,1,$align='l');
$pdf->SetXY(133,75);
$pdf->Cell(11,10,utf8_decode(''.$_POST['a6']),1,1,$align='l');
$pdf->SetXY(144,75);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['a7']),1,1,$align='l');
$pdf->SetXY(162.5,75);
$pdf->Cell(19,10,utf8_decode(''.$_POST['a8']),1,1,$align='l');
$pdf->SetXY(181.5,75);
$pdf->Cell(17,10,utf8_decode(''.$_POST['a9']),1,1,$align='l');




$pdf->SetXY(10,85);
$pdf->Cell(8,10,' 3 ',1,1,$align='l');	

$pdf->SetXY(18,85);
$pdf->Cell(25,10,utf8_decode('PASILLOS'),1,1,$align='l');




$pdf->SetXY(43,85);
$pdf->Cell(15,10,utf8_decode(''.$_POST['b1']),1,1,$align='l');
$pdf->SetXY(58,85);
$pdf->Cell(18,10,utf8_decode(''.$_POST['b2']),1,1,$align='l');
$pdf->SetXY(76,85);
$pdf->Cell(14,10,utf8_decode(''.$_POST['b3']),1,1,$align='l');
$pdf->SetXY(90,85);
$pdf->Cell(19,10,utf8_decode(''.$_POST['b4']),1,1,$align='l');
$pdf->SetXY(109,85);
$pdf->Cell(24,10,utf8_decode(''.$_POST['b5']),1,1,$align='l');
$pdf->SetXY(133,85);
$pdf->Cell(11,10,utf8_decode(''.$_POST['b6']),1,1,$align='l');
$pdf->SetXY(144,85);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['b7']),1,1,$align='l');
$pdf->SetXY(162.5,85);
$pdf->Cell(19,10,utf8_decode(''.$_POST['b8']),1,1,$align='l');
$pdf->SetXY(181.5,85);
$pdf->Cell(17,10,utf8_decode(''.$_POST['b9']),1,1,$align='l');



$pdf->SetXY(10,95);
$pdf->Cell(8,10,' 4 ',1,1,$align='l');	

$pdf->SetXY(18,95);
$pdf->Cell(25,4,utf8_decode('CENTRO DE'),0,1,$align='l');
$pdf->SetXY(18,95);
$pdf->Cell(25,10,utf8_decode('COMPUTO'),1,1,$align='l');


$pdf->SetXY(43,95);
$pdf->Cell(15,10,utf8_decode(''.$_POST['c1']),1,1,$align='l');
$pdf->SetXY(58,95);
$pdf->Cell(18,10,utf8_decode(''.$_POST['c2']),1,1,$align='l');
$pdf->SetXY(76,95);
$pdf->Cell(14,10,utf8_decode(''.$_POST['c3']),1,1,$align='l');
$pdf->SetXY(90,95);
$pdf->Cell(19,10,utf8_decode(''.$_POST['c4']),1,1,$align='l');
$pdf->SetXY(109,95);
$pdf->Cell(24,10,utf8_decode(''.$_POST['c5']),1,1,$align='l');
$pdf->SetXY(133,95);
$pdf->Cell(11,10,utf8_decode(''.$_POST['c6']),1,1,$align='l');
$pdf->SetXY(144,95);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['c7']),1,1,$align='l');
$pdf->SetXY(162.5,95);
$pdf->Cell(19,10,utf8_decode(''.$_POST['c8']),1,1,$align='l');
$pdf->SetXY(181.5,95);
$pdf->Cell(17,10,utf8_decode(''.$_POST['c9']),1,1,$align='l');



$pdf->SetXY(10,105);
$pdf->Cell(8,10,' 5 ',1,1,$align='l');	
$pdf->SetXY(18,105);
$pdf->Cell(25,10,utf8_decode('BIBLIOTECA'),1,1,$align='l');


$pdf->SetXY(43,105);
$pdf->Cell(15,10,utf8_decode(''.$_POST['d1']),1,1,$align='l');
$pdf->SetXY(58,105);
$pdf->Cell(18,10,utf8_decode(''.$_POST['d2']),1,1,$align='l');
$pdf->SetXY(76,105);
$pdf->Cell(14,10,utf8_decode(''.$_POST['d3']),1,1,$align='l');
$pdf->SetXY(90,105);
$pdf->Cell(19,10,utf8_decode(''.$_POST['d4']),1,1,$align='l');
$pdf->SetXY(109,105);
$pdf->Cell(24,10,utf8_decode(''.$_POST['d5']),1,1,$align='l');
$pdf->SetXY(133,105);
$pdf->Cell(11,10,utf8_decode(''.$_POST['d6']),1,1,$align='l');
$pdf->SetXY(144,105);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['d7']),1,1,$align='l');
$pdf->SetXY(162.5,105);
$pdf->Cell(19,10,utf8_decode(''.$_POST['d8']),1,1,$align='l');
$pdf->SetXY(181.5,105);
$pdf->Cell(17,10,utf8_decode(''.$_POST['d9']),1,1,$align='l');



$pdf->SetXY(10,115);
$pdf->Cell(8,10,' 6 ',1,1,$align='l');
$pdf->SetXY(18,115);
$pdf->Cell(25,10,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(18,115);
$pdf->Cell(25,3,utf8_decode('JARDINES'),0,1,$align='l');
$pdf->SetXY(18,116);
$pdf->Cell(25,6,utf8_decode('ESPACIOS '),0,1,$align='l');
$pdf->SetXY(18,121);
$pdf->Cell(25,4,utf8_decode('EXTERIORES'),0,1,$align='l');


$pdf->SetXY(43,115);
$pdf->Cell(15,10,utf8_decode(''.$_POST['e1']),1,1,$align='l');
$pdf->SetXY(58,115);
$pdf->Cell(18,10,utf8_decode(''.$_POST['e2']),1,1,$align='l');
$pdf->SetXY(76,115);
$pdf->Cell(14,10,utf8_decode(''.$_POST['e3']),1,1,$align='l');
$pdf->SetXY(90,115);
$pdf->Cell(19,10,utf8_decode(''.$_POST['e4']),1,1,$align='l');
$pdf->SetXY(109,115);
$pdf->Cell(24,10,utf8_decode(''.$_POST['e5']),1,1,$align='l');
$pdf->SetXY(133,115);
$pdf->Cell(11,10,utf8_decode(''.$_POST['e6']),1,1,$align='l');
$pdf->SetXY(144,115);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['e7']),1,1,$align='l');
$pdf->SetXY(162.5,115);
$pdf->Cell(19,10,utf8_decode(''.$_POST['e8']),1,1,$align='l');
$pdf->SetXY(181.5,115);
$pdf->Cell(17,10,utf8_decode(''.$_POST['e9']),1,1,$align='l');



$pdf->SetXY(10,125);
$pdf->Cell(8,10,' 7 ',1,1,$align='l');
$pdf->SetXY(18,125);
$pdf->Cell(25,10,utf8_decode('CAFETERÍA'),1,1,$align='l');



$pdf->SetXY(43,125);
$pdf->Cell(15,10,utf8_decode(''.$_POST['f1']),1,1,$align='l');
$pdf->SetXY(58,125);
$pdf->Cell(18,10,utf8_decode(''.$_POST['f2']),1,1,$align='l');
$pdf->SetXY(76,125);
$pdf->Cell(14,10,utf8_decode(''.$_POST['f3']),1,1,$align='l');
$pdf->SetXY(90,125);
$pdf->Cell(19,10,utf8_decode(''.$_POST['f4']),1,1,$align='l');
$pdf->SetXY(109,125);
$pdf->Cell(24,10,utf8_decode(''.$_POST['f5']),1,1,$align='l');
$pdf->SetXY(133,125);
$pdf->Cell(11,10,utf8_decode(''.$_POST['f6']),1,1,$align='l');
$pdf->SetXY(144,125);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['f7']),1,1,$align='l');
$pdf->SetXY(162.5,125);
$pdf->Cell(19,10,utf8_decode(''.$_POST['f6']),1,1,$align='l');
$pdf->SetXY(181.5,125);
$pdf->Cell(17,10,utf8_decode(''.$_POST['f9']),1,1,$align='l');



$pdf->SetXY(10,135);
$pdf->Cell(8,10,' 8 ',1,1,$align='l');
$pdf->SetXY(18,135);
$pdf->Cell(25,10,utf8_decode('SANITARIOS'),1,1,$align='l');



$pdf->SetXY(43,135);
$pdf->Cell(15,10,utf8_decode(''.$_POST['g1']),1,1,$align='l');
$pdf->SetXY(58,135);
$pdf->Cell(18,10,utf8_decode(''.$_POST['g2']),1,1,$align='l');
$pdf->SetXY(76,135);
$pdf->Cell(14,10,utf8_decode(''.$_POST['g3']),1,1,$align='l');
$pdf->SetXY(90,135);
$pdf->Cell(19,10,utf8_decode(''.$_POST['g4']),1,1,$align='l');
$pdf->SetXY(109,135);
$pdf->Cell(24,10,utf8_decode(''.$_POST['g5']),1,1,$align='l');
$pdf->SetXY(133,135);
$pdf->Cell(11,10,utf8_decode(''.$_POST['g6']),1,1,$align='l');
$pdf->SetXY(144,135);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['g7']),1,1,$align='l');
$pdf->SetXY(162.5,135);
$pdf->Cell(19,10,utf8_decode(''.$_POST['g6']),1,1,$align='l');
$pdf->SetXY(181.5,135);
$pdf->Cell(17,10,utf8_decode(''.$_POST['g9']),1,1,$align='l');


$pdf->SetXY(10,145);
$pdf->Cell(8,10,' 9 ',1,1,$align='l');
$pdf->SetXY(18,145);
$pdf->Cell(25,4,utf8_decode('SUBESTA-'),0,1,$align='l');
$pdf->SetXY(18,145);
$pdf->Cell(25,10,utf8_decode('CIÓN'),1,1,$align='l');


$pdf->SetXY(43,145);
$pdf->Cell(15,10,utf8_decode(''.$_POST['h1']),1,1,$align='l');
$pdf->SetXY(58,145);
$pdf->Cell(18,10,utf8_decode(''.$_POST['h2']),1,1,$align='l');
$pdf->SetXY(76,145);
$pdf->Cell(14,10,utf8_decode(''.$_POST['h3']),1,1,$align='l');
$pdf->SetXY(90,145);
$pdf->Cell(19,10,utf8_decode(''.$_POST['h4']),1,1,$align='l');
$pdf->SetXY(109,145);
$pdf->Cell(24,10,utf8_decode(''.$_POST['h5']),1,1,$align='l');
$pdf->SetXY(133,145);
$pdf->Cell(11,10,utf8_decode(''.$_POST['h6']),1,1,$align='l');
$pdf->SetXY(144,145);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['h7']),1,1,$align='l');
$pdf->SetXY(162.5,145);
$pdf->Cell(19,10,utf8_decode(''.$_POST['h6']),1,1,$align='l');
$pdf->SetXY(181.5,145);
$pdf->Cell(17,10,utf8_decode(''.$_POST['h9']),1,1,$align='l');



$pdf->SetXY(10,155);
$pdf->Cell(8,10,' 10 ',1,1,$align='l');
$pdf->SetXY(18,155);
$pdf->Cell(25,10,utf8_decode(''),1,1,$align='l');
$pdf->SetXY(18,155);
$pdf->Cell(25,4,utf8_decode('TALLER DE'),0,1,$align='l');
$pdf->SetXY(18,155);
$pdf->Cell(25,10,utf8_decode('MANTENI-'),0,1,$align='l');
$pdf->SetXY(18,162);
$pdf->Cell(25,3,utf8_decode('MIENTO'),0,1,$align='l');




$pdf->SetXY(43,155);
$pdf->Cell(15,10,utf8_decode(''.$_POST['i1']),1,1,$align='l');
$pdf->SetXY(58,155);
$pdf->Cell(18,10,utf8_decode(''.$_POST['i2']),1,1,$align='l');
$pdf->SetXY(76,155);
$pdf->Cell(14,10,utf8_decode(''.$_POST['i3']),1,1,$align='l');
$pdf->SetXY(90,155);
$pdf->Cell(19,10,utf8_decode(''.$_POST['i4']),1,1,$align='l');
$pdf->SetXY(109,155);
$pdf->Cell(24,10,utf8_decode(''.$_POST['i5']),1,1,$align='l');
$pdf->SetXY(133,155);
$pdf->Cell(11,10,utf8_decode(''.$_POST['i6']),1,1,$align='l');
$pdf->SetXY(144,155);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['i7']),1,1,$align='l');
$pdf->SetXY(162.5,155);
$pdf->Cell(19,10,utf8_decode(''.$_POST['i8']),1,1,$align='l');
$pdf->SetXY(181.5,155);
$pdf->Cell(17,10,utf8_decode(''.$_POST['i9']),1,1,$align='l');




$pdf->SetXY(10,165);
$pdf->Cell(8,10,' 11 ',1,1,$align='l');
$pdf->SetXY(18,165);
$pdf->Cell(25,4,utf8_decode('LABORATO-'),0,1,$align='l');
$pdf->SetXY(18,165);
$pdf->Cell(25,10,utf8_decode('RIOS'),1,1,$align='l');

$pdf->SetXY(43,165);
$pdf->Cell(15,10,utf8_decode(''.$_POST['j1']),1,1,$align='l');
$pdf->SetXY(58,165);
$pdf->Cell(18,10,utf8_decode(''.$_POST['j2']),1,1,$align='l');
$pdf->SetXY(76,165);
$pdf->Cell(14,10,utf8_decode(''.$_POST['j3']),1,1,$align='l');
$pdf->SetXY(90,165);
$pdf->Cell(19,10,utf8_decode(''.$_POST['j4']),1,1,$align='l');
$pdf->SetXY(109,165);
$pdf->Cell(24,10,utf8_decode(''.$_POST['j5']),1,1,$align='l');
$pdf->SetXY(133,165);
$pdf->Cell(11,10,utf8_decode(''.$_POST['j6']),1,1,$align='l');
$pdf->SetXY(144,165);
$pdf->Cell(18.5,10,utf8_decode(''.$_POST['j7']),1,1,$align='l');
$pdf->SetXY(162.5,165);
$pdf->Cell(19,10,utf8_decode(''.$_POST['j8']),1,1,$align='l');
$pdf->SetXY(181.5,165);
$pdf->Cell(17,10,utf8_decode(''.$_POST['j9']),1,1,$align='l');








$pdf->Output("prueba.pdf",'F');
echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;

?>