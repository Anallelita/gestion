
<?

require('fpdf/fpdf.php');
class PDF extends FPDF
{
	
   //Cabecera de página
   function Header()
   {

       $this->Image('logocom.png',10,8,190);

      $this->SetFont('Arial','B',12);

      
	   

	  
   }
}

//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//Aquí escribimos lo que deseamos mostrar...
$pdf->Ln(40);
		
		
$pdf->Cell(190,15,utf8_decode ('LUGAR DEL INCIDENTE PRESENTADO (2):   '.$_POST['lugar']),1,1,$align='l');	
$pdf->Cell(190,10,utf8_decode ('¿SE REQUIRIÓ EVACUACIÓN (3)?:  ( '.$_POST['evacuacion'].')SI  ( '.$_POST['eva'].')NO '),1,1,$align='l');	

		
	
		//para imprimir en rojo$pdf->SetTextColor(255,0,255);
		$pdf->SetXY(10,75);
		$pdf->Cell(36.5,20,'TIPO DE RIESGO (4):   ',1,1,$align='l');

$pdf->SetXY(46.5,75);
		$pdf->Cell(153.5,5,'( '.$_POST['trival'].'  ) TRIVIAL O TOLERABLE  ',0,1,$align='l');

$pdf->SetXY(46.5,75);
		$pdf->Cell(153.5,13.5,'( '.$_POST['moderado'].'  ) MODERADO, CONSIDERABLE, INTOLERABLE (EMERGENCIA) ',0,1,$align='l');

$pdf->SetXY(46.5,75);
		$pdf->Cell(153.5,20,'( '.$_POST['simulacro'].'  ) SIMULACRO ',1,1,$align='l');


		
if(isset($_POST['trival'])){
		$var="";
		}else
			if(isset($_POST['moderado'])){
		$var="";
		} else
			if(isset($_POST['simulacro'])){
		$var="";}
				
				
$pdf->Cell(190,30,utf8_decode ('DESCRIPCIÓN DEL EVENTO (5):  '.$_POST['desc']),1,1,$align='l');

$pdf->Cell(190,10,utf8_decode ('IDENTIFICACIÓN DE LA
SUSTANCIA/RESIDUO (6): '.$_POST['residuos']),1,1,$align='l');


$pdf->SetXY(10,135);
$pdf->Cell(47.5,5,'NUM. DE HOJA DE SEG. (7)   ',0,1,$align='l');
$pdf->SetXY(10,135);
$pdf->Cell(47.5,30,'  '.$_POST['hoja'],1,1,$align='l');


$pdf->SetXY(57.5,135);
$pdf->Cell(47.5,5,'CANTIDAD Y UNIDAD',0,1,$align='l');
$pdf->SetXY(57.5,135);
$pdf->Cell(47.5,15,'DE MEDIDA (8):  ',0,1,$align='l');
$pdf->SetXY(57.5,135);
$pdf->Cell(47.5,30,''.$_POST['medida'],1,1,$align='l');

$pdf->SetXY(105,135);
$pdf->Cell(47.5,5,'EQUIPO UTILIZADO (9)   ',0,1,$align='l');
$pdf->SetXY(105,135);
$pdf->Cell(47.5,30,' '.$_POST['equipo'],1,1,$align='l');


$pdf->SetXY(152.5,135);
$pdf->Cell(47.5,5,utf8_decode ('SE CONTROLÓ:   '.$_POST['quesi']),0,1,$align='l');	
$pdf->SetXY(152.5,135);
$pdf->Cell(47.5,15,' ¿COMO? (10)  ',0,1,$align='l');	
$pdf->SetXY(152.5,135);
$pdf->Cell(47.5,30,'  '.$_POST['como'],1,1,$align='l');	


if(isset($_POST[''])){
		$var="si";
		}else
			if(isset($_POST['jose'])){
		$var="no";
		}   

		$pdf->SetXY(10,165);
		$pdf->Cell(190,10,utf8_decode ('CONCLUSIONES (11):  '),0,1,$align='l');
			$pdf->SetXY(10,165);
			$pdf->Cell(190,50,utf8_decode (''.$_POST['conclu']),1,1,$align='l');

$pdf->Cell(190,10,'FECHA: (1)',0,1,$align='l');

$pdf->SetXY(10,225);
$pdf->Cell(142.5,10,utf8_decode ('Nombre, firma y puesto del responsable de la elaboración del reporte (12): '),0,1,$align='l');
$pdf->SetXY(10,225);
$pdf->Cell(142.5,20,' '.$_POST['nombre'],0,1,$align='l');
$pdf->SetXY(10,225);
$pdf->Cell(142.5,30,' '.$_POST['puesto'],0,1,$align='l');
$pdf->SetXY(10,225);
$pdf->Cell(142.5,40,' '.$_POST['firma'],1,1,$align='l');


$pdf->SetXY(152.5,225);
$pdf->Cell(47.5,5,utf8_decode ('Fecha de Elaboración(13): '),0,1,$align='l');	
$pdf->SetXY(152.5,225);
$pdf->Cell(47.5,40,date('d/m/Y'),1,1,$align='l');	








$pdf->AddPage( );
	
		


$pdf->Image('form6.png' ,'JPG');





$pdf->Output("prueba.pdf",'F');
echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;

?>