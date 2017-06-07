<?
//header("content-Type;text/html;charset=utf-8");
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
		
	$pdf->SetXY(10,50);	
$pdf->Cell(80,5,utf8_decode ('Tipo de emergencia:  (1)    '),0,1,$align='l');	
$pdf->SetXY(10,50);
$pdf->Cell(80,15,''.$_POST['emergencia'],1,1,$align='l');	

$pdf->SetXY(90,50);
$pdf->Cell (110,5,utf8_decode ('Número de seguimiento Reporte de Emergencia /Conato (2)  '),0,1,$align='l');	
$pdf->SetXY(90,50);
$pdf->Cell(110,15,utf8_decode ('  '.$_POST['segui']),1,1,$align='l');	


$pdf->SetXY(10,65);
$pdf->Cell(63.6,5, utf8_decode ('Día del Evento(3):  '.$_POST['eve']),1,1,$align='l');	

$pdf->SetXY(73.7,65);
$pdf->Cell(63,5,'Tiempo:(4)  '.$_POST['tien'],1,1,$align='l');	

$pdf->SetXY(136.3,65);
$pdf->Cell(63.6,5,utf8_decode ('Localización(5)  '.$_POST['local']),1,1,$align='l');	

$pdf->Cell(190,10,utf8_decode ('Descripción del Evento(6): '.$_POST['desc']),1,1,$align='l');	



$pdf->SetXY(10,80);
$pdf->Cell(190,5,'Personas evacuadas (8): ',1,1,$align='l');
$pdf->SetXY(73.7,80);
$pdf->Cell(153.5,5,utf8_decode ('( '.$_POST['sex'].'  ) Parcial  '),0,1,$align='l');
$pdf->SetXY(136.3,80);
$pdf->Cell(153.5,5,'( '.$_POST['sexo'].'  ) Total ',0,1,$align='l');


$pdf->SetXY(10,85);
$pdf->Cell(190,5,'(9) ',0,1,$align='l');

$pdf->SetXY(10,85);
$pdf->Cell(190,45,' ',1,1,$align='l');

$pdf->SetXY(10,90);
$pdf->Cell(190,5,utf8_decode ('Se les llamó a los responsables del área afectada? '),0,1,$align='l');
$pdf->SetXY(120,90);
$pdf->Cell(20,5,'( '.$_POST['llamo'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,90);
$pdf->Cell(20,5,'( '.$_POST['amo'].'  ) No ',0,1,$align='l');


$pdf->SetXY(10,95);
$pdf->Cell(190,5,'Se encontraron a los responsables de atender  la emergencia? ',0,1,$align='l');
$pdf->SetXY(120,95);
$pdf->Cell(20,5,'( '.$_POST['atender'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,95);
$pdf->Cell(20,5,'( '.$_POST['ander'].'  ) No ',0,1,$align='l');

$pdf->SetXY(10,100);
$pdf->Cell(190,5,utf8_decode ('Se solicitó apoyo de Protección Civil? '),0,1,$align='l');
$pdf->SetXY(120,100);
$pdf->Cell(20,5,'( '.$_POST['civil'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,100);
$pdf->Cell(120,5,'( '.$_POST['ivil'].'  ) No ',0,1,$align='l');

$pdf->SetXY(10,105);
$pdf->Cell(190,5,utf8_decode ('Se solicitó apoyo de los Bomberos? '),0,1,$align='l');
$pdf->SetXY(120,105);
$pdf->Cell(20,5,'( '.$_POST['bomberos'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,105);
$pdf->Cell(20,5,'( '.$_POST['bombe'].'  ) No ',0,1,$align='l');

$pdf->SetXY(10,110);
$pdf->Cell(190,5,utf8_decode ('Se solicitó apoyo de Corporaciones de 1os 1ros Auxilios?'),0,1,$align='l');
$pdf->SetXY(120,110);
$pdf->Cell(20,5,'( '.$_POST['auxilio'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,110);
$pdf->Cell(20,5,'( '.$_POST['axilio'].'  ) No ',0,1,$align='l');

$pdf->SetXY(10,115);
$pdf->Cell(190,5,'Estaba presente la prensa?',0,1,$align='l');
$pdf->SetXY(120,115);
$pdf->Cell(20,5,'( '.$_POST['prensa'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,115);
$pdf->Cell(20,5,'( '.$_POST['presa'].'  ) No ',0,1,$align='l');


$pdf->SetXY(10,120);
$pdf->Cell(190,5,utf8_decode ('La dirección  fue notificada?'),0,1,$align='l');
$pdf->SetXY(120,120);
$pdf->Cell(20,5,'( '.$_POST['notificada'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,120);
$pdf->Cell(20,5,'( '.$_POST['tificada'].'  ) No ',0,1,$align='l');


$pdf->SetXY(10,125);
$pdf->Cell(190,5,'Se requiere seguimiento?',0,1,$align='l');
$pdf->SetXY(120,125);
$pdf->Cell(20,5,'( '.$_POST['requiere'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(150,125);
$pdf->Cell(20,5,'( '.$_POST['require'].'  ) No ',0,1,$align='l');

$pdf->Cell(190,5,'Comentarios (10): ',0,1,$align='l');
$pdf->SetXY(10,130);
$pdf->Cell(190,20,' '.$_POST['come'],1,1,$align='l');





$pdf->SetXY(10,150);
$pdf->Cell(190,5,'Se identificaron deficiencias en el plan (11): ',1,1,$align='l');
$pdf->SetXY(90,150);
$pdf->Cell(153.5,5,'( '.$_POST['se'].'  ) Si  ',0,1,$align='l');
$pdf->SetXY(136.3,150);
$pdf->Cell(153.5,5,'( '.$_POST['so'].'  ) No ',0,1,$align='l');


$pdf->Cell(190,20,utf8_decode ('Describa las deficiencias (12) :  '.$_POST['defi']),1,1,$align='l');


$pdf->Cell(190,20,utf8_decode ('Acción sugerida para eliminar deficiencias(13):   '.$_POST['elimi']),1,1,$align='l');


$pdf->Cell(190,20,utf8_decode ('Responsable  de la Acción(14):   '.$_POST['respo']),1,1,$align='l');

$pdf->Cell(190,20,utf8_decode ('Tiempo Límite para la Acción(15):  '.$_POST['limite']),1,1,$align='l');


$pdf->SetXY(10,235);	
$pdf->Cell(90,5,utf8_decode ('Evaluación completada por (16):  '),0,1,$align='l');	
$pdf->SetXY(10,235);
$pdf->Cell(90,25,utf8_decode (''.$_POST['completada']),1,1,$align='l');	

$pdf->SetXY(100,235);
$pdf->Cell (100,5,'Fecha (17): ',0,1,$align='l');	
$pdf->SetXY(100,235);
$pdf->Cell(100,25,date('d/m/Y'),1,1,$align='l');	


 


		
	
		





$pdf->Output("prueba.pdf",'F');
echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;

?>