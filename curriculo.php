<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$date = new DateTime($_POST['dtNascimento']);
$interval = $date->diff(new DateTime(date('Y-m-d')));
$idade = $interval->format('%Y anos');

require('libraries/fpdf/fpdf.php');
$pdf = new FPDF();
//$pdf->FPDF("L");
//$pdf->Open();
$pdf->AddPage();
$pdf->AddFont('Calibri', '', 'calibri.php');
$pdf->AddFont('Calibri', 'B', 'calibrib.php');
$pdf->SetAuthor("Curriculo");
$pdf->SetXY(10, 8);
$pdf->SetFillColor(255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Calibri', 'B', 18);
$pdf->Cell(0, 8, $_POST['nome'], 0, 0, 'C', 0);
$pdf->ln(20);
$pdf->SetFont('Calibri', 'B', 12);
$pdf->Cell(0, 8, 'Dados Pessoais', 0, 0, 'L', 0);
$pdf->ln();
$pdf->SetFont('Calibri', '', 11);
$pdf->Cell(0, 8, 'Nome: ' . $_POST['nome'], 0, 0, 'L', 0);
$pdf->ln();
$pdf->MultiCell(0, 8, 'Endereço: ' . $_POST['endereco'] . ' - ' . $_POST['bairro'] . ' - ' . $_POST['cidade'] . ' - ' . $_POST['estado'], 0, 'L', 0);
$pdf->Cell(0, 8, 'Idade: ' . $idade, 0, 0, 'L', 0);
$pdf->ln();
$pdf->Cell(0, 8, 'Telefone: ' . $_POST['telefone'], 0, 0, 'L', 0);
$pdf->ln();
$pdf->Cell(0, 8, 'E-mail: ' . $_POST['email'], 0, 0, 'L', 0);
$pdf->ln(15);
$pdf->SetFont('Calibri', 'B', 12);
$pdf->Cell(0, 8, 'Objetivo', 0, 0, 'L', 0);
$pdf->ln();
$pdf->SetFont('Calibri', '', 11);
$pdf->MultiCell(0, 8, $_POST['objetivo'], 0, 'L', 0);
$pdf->ln(10);
$pdf->SetFont('Calibri', 'B', 12);
$pdf->Cell(0, 8, 'Habilidades e Competências', 0, 0, 'L', 0);
$pdf->ln();
$pdf->SetFont('Calibri', '', 11);
$pdf->MultiCell(0, 8, $_POST['habilidadesCompetencias'], 0, 'L', 0);
if(isset($_POST['empresa'])){
	if (count($_POST['empresa']) > 0) {
		$pdf->ln(10);
		$pdf->SetFont('Calibri', 'B', 12);
		$pdf->Cell(0, 8, 'Experiência', 0, 0, 'L', 0);
		$pdf->ln();
		$pdf->SetFont('Calibri', '', 11);
		foreach ($_POST['empresa'] as $key => $nomeEmpresa) {
			$pdf->Cell(0, 8, $nomeEmpresa . ' - ' . $_POST['cargo'][$key], 0, 0, 'L', 0);
			$pdf->ln(5);
			$pdf->Cell(0, 8, strftime('%B/%Y', strtotime($_POST['dt-inicio'][$key])) . ' - ' . strftime('%B/%Y', strtotime($_POST['dt-fim'][$key])), 0, 0, 'L', 0);
			$pdf->ln();
			$pdf->MultiCell(0, 8, 'Responsabilidades: ' . $_POST['responsabilidade'][$key], 0, 'L', 0);
			if (count($_POST['empresa']) != $key + 1) {
				$pdf->ln(6);
			}
		}
	}
}
if(isset($_POST['instituicao'])){
	if (count($_POST['instituicao']) > 0) {
		$pdf->ln(10);
		$pdf->SetFont('Calibri', 'B', 12);
		$pdf->Cell(0, 8, 'Educação', 0, 0, 'L', 0);
		$pdf->ln();
		$pdf->SetFont('Calibri', '', 11);

		foreach ($_POST['instituicao'] as $key => $nomeInstituicao) {
			$pdf->Cell(0, 8, $nomeInstituicao, 0, 0, 'L', 0);
			$pdf->ln(5);
			$pdf->Cell(0, 8, strftime('%B/%Y', strtotime($_POST['dt-formacao'][$key])), 0, 0, 'L', 0);
			$pdf->ln();
			$pdf->MultiCell(0, 8, 'Cursos e prêmios: ' . $_POST['cursos-premios'][$key], 0, 'L', 0);
			if (count($_POST['instituicao']) != $key + 1) {
				$pdf->ln(6);
			}
		}
	}
}
$pdf->Output();
