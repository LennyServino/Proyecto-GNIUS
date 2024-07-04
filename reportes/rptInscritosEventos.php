<?php
require("fpdf/fpdf.php");
require("../modelo/conexion.php");
require("../modelo/mReportes.php");
class miPDF extends FPDF
{
	function Header()
	{
		$this->SetFillColor(100, 26, 57);
		$this->Rect(0, 0, 500, 30, 'F');
		$this->Image('img/Logo_GNIUS3.png', 5, 0, 40, 40, 'png');
		$this->SetFont('Arial','B',9);
		$this->SetTextColor(255, 255, 255);
		$this->Cell(0, 5, date('d/m/Y'), 0, 0, 'R');
		$this->Ln();
		$this->SetFont('Arial','B',16);
		$this->Cell(0, 10, 'Lista de Emprendedores Inscritos a Eventos', 0, 0, 'C');
		$this->Ln(20);
	}
	function Footer()
	{
		global $resultado;
		$this->SetY(-20);
		$this->SetFont('Arial','B',12);
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
		$this->Ln();
		$this->Cell(0,10,'Total de Emprendedores Inscritos: '.$resultado->num_rows,0,1,'R');
	}
}
$pdf = new miPDF('L', 'mm', 'LEGAL', true);
$pdf->SetFillColor(100, 26, 57);
$pdf->SetDrawColor(255, 255, 255);
$pdf->SetTextColor(255, 255, 255);
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetLeftMargin(8);
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(3);
	//$pdf->Cell(15,10,'ID',1,0,'C', true);
	$pdf->Cell(90,10,'Nombre Completo',1,0,'C', true);
	$pdf->Cell(70,10,'Evento',1,0,'C', true);
	$pdf->Cell(40,10,'Hora',1,0,'C', true);
	$pdf->Cell(35,10,'Fecha',1,0,'C', true);
	$pdf->Cell(45,10,'Fecha de Inscripción',1,0,'C', true);
	$pdf->Cell(60,10,'Lugar',1,0,'C', true);
	//$pdf->Cell(30,10,'Cliente',1,0,'C', true);
	$pdf->ln(10);
$reportes= new Reportes();
$resultado=$reportes->ObtenerInsEventos($conPublica);
while($fila=$resultado->fetch_array())
{
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(164, 164, 164);
	//$pdf->Cell(15,10,$fila['cod'],1,0,'C',true);
	$pdf->Cell(90,10,$fila['nom_com'],1,0,'C', true);
	$pdf->Cell(70,10,$fila['nom_eve'],1,0,'C', true);
	$pdf->Cell(40,10,$fila['hrs'],1,0,'C', true);
	$pdf->Cell(35,10,$fila['fch'],1,0,'C', true);
	$pdf->Cell(45,10,$fila['fch_ins'],1,0,'C', true);
	$pdf->Cell(60,10,$fila['lug_eve'],1,0,'C', true);
	//$pdf->Cell(30,10,$fila['nombrecliente'],1,0,'C', true);
	$pdf->Ln(10);
}
$pdf->Ln(30);
$pdf->OutPut();
?>