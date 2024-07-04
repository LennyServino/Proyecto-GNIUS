<?php
require("fpdf/fpdf.php");
require("../modelo/conexion.php");
require("../modelo/mReportes.php");
class miPDF extends FPDF
{
	function Header()
	{
		$this->SetFillColor(100, 26, 57);
		$this->Rect(0, 0, 600, 30, 'F');
		$this->Image('img/Logo_GNIUS3.png', 5, 0, 40, 40, 'png');
		$this->SetFont('Arial','B',9);
		$this->SetTextColor(255, 255, 255);
		$this->Cell(0, 5, date('d/m/Y'), 0, 0, 'R');
		$this->Ln();
		$this->SetFont('Arial','B',16);
		$this->Cell(0, 10, 'Lista de Ideas Finalizadas', 0, 0, 'C');
		$this->Ln(20);
	}
	function Footer()
	{
		global $resultado;
		$this->SetY(-20);
		$this->SetFont('Arial','B',12);
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
		$this->Ln();
		$this->Cell(0,10,'Total de Ideas de Negocio: '.$resultado->num_rows,0,1,'R');
	}
}
$pdf = new miPDF('L', 'mm', array(250,550), true);
$pdf->SetFillColor(100, 26, 57);
$pdf->SetDrawColor(255, 255, 255);
$pdf->SetTextColor(255, 255, 255);
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetLeftMargin(8);
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Ln(3);
	$pdf->Cell(15,10,'ID',1,0,'C', true);
	$pdf->Cell(100,10,'Idea de Negocio',1,0,'C', true);
	$pdf->Cell(90,10,'Forma Jurídica',1,0,'C', true);
	$pdf->Cell(40,10,'Servicio',1,0,'C', true);
	$pdf->Cell(100,10,'Razón Social',1,0,'C', true);
	$pdf->Cell(40,10,'Fecha de Inicio',1,0,'C', true);
    $pdf->Cell(100,10,'Nombre del Lider',1,0,'C', true);
    $pdf->Cell(30,10,'Estado',1,0,'C', true);
	$pdf->ln(10);
$reportes= new Reportes();
$resultado=$reportes->ObtenerIdeasFinalizadas($conPublica);
while($fila=$resultado->fetch_array())
{
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFillColor(164, 164, 164);
	$pdf->Cell(15,10,$fila['cod'],1,0,'C',true);
	$pdf->Cell(100,10,$fila['nom_pro'],1,0,'C', true);
	$pdf->Cell(90,10,$fila['jur'],1,0,'C', true);
	$pdf->Cell(40,10,$fila['ser'],1,0,'C', true);
	$pdf->Cell(100,10,$fila['razon'],1,0,'C', true);
	$pdf->Cell(40,10,$fila['fch'],1,0,'C', true);
    $pdf->Cell(100,10,$fila['nom_com'],1,0,'C', true);
    $pdf->Cell(30,10,$fila['est'],1,0,'C', true);
	$pdf->Ln(10);
}
$pdf->Ln(30);
$pdf->OutPut();
?>