<?php

/*
 * Include FDPF
 * http://www.fpdf.org/nl/home.php
 */

$pdf = new FPDF();
$pdf->AddPage();

require_once '../app/Mage.php';
Mage::app();
umask(0);

$products = explode(',', $_POST["product"]);

/*
 * Todo: implement offset
 * Todo: multipage
 */

if(isset($products[0])){
    $current = 0;
    $product = Mage::getModel('catalog/product')->load($products[0]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[1])){
    $current = 34;
    $product = Mage::getModel('catalog/product')->load($products[1]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[2])){
    $current = 68;
    $product = Mage::getModel('catalog/product')->load($products[2]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[3])){
    $current = 102;
    $product = Mage::getModel('catalog/product')->load($products[3]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[4])){
    $current = 136;
    $product = Mage::getModel('catalog/product')->load($products[4]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[5])){
    $current = 170;
    $product = Mage::getModel('catalog/product')->load($products[5]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[6])){
    $current = 206;
    $product = Mage::getModel('catalog/product')->load($products[6]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[7])){
    $current = 240;
    $product = Mage::getModel('catalog/product')->load($products[7]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetY($current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetY($current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,25, $current + 32, $product->getData('bol_eannumber'));
}


//SECOND HALF
if(isset($products[8])){
    $current = 0;
    $product = Mage::getModel('catalog/product')->load($products[8]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}
if(isset($products[9])){
    $current = 34;
    $product = Mage::getModel('catalog/product')->load($products[9]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}


if(isset($products[10])){
    $current = 68;
    $product = Mage::getModel('catalog/product')->load($products[10]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[11])){
    $current = 102;
    $product = Mage::getModel('catalog/product')->load($products[11]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[12])){
    $current = 136;
    $product = Mage::getModel('catalog/product')->load($products[12]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[13])){
    $current = 170;
    $product = Mage::getModel('catalog/product')->load($products[13]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[14])){
    $current = 206;
    $product = Mage::getModel('catalog/product')->load($products[14]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}

if(isset($products[15])){
    $current = 240;
    $product = Mage::getModel('catalog/product')->load($products[15]);
    $name = (strlen($product->getData('name')) > 35) ? "...".substr($product->getData('name'),-32,32) : $product->getData('name');
    $pdf->SetXY('115', $current + 15);
    $pdf->SetFont('Arial', 'B', 30);
    $pdf->Cell(90, 10, $product->getData('sku'), 0, 0,'C');
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->SetXY('115', $current + 22);
    $pdf->Cell(90, 10, $name, 0, 0,'C');
    $pdf->Code39(1,132, $current + 32, $product->getData('bol_eannumber'));
}


$pdf->output('D','labels_' . now());

