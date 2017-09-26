<?php
/**
 * Created by PhpStorm.
 * User: ruthgeridema
 * Date: 26-09-17
 * Time: 09:15
 */

$pdf = new FPDF('P','mm',array(100,150));
$totaal = $_GET['wtpaneel'] + $_GET['wtcol'];

$counter = range(1,$totaal);
$totaal = count($counter);
foreach($counter as $v) {
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 18);
    $pdf->SetY(10);
    $pdf->Cell(40, 10, $v . '/' . $totaal . ' - ' . $orderData['increment_id']);
    $pdf->SetY(20);
    $pdf->Cell(120, 10, 'Geaddresseerde:');
    $pdf->SetY(29);
    $pdf->SetFont('Arial', 'B', 17);
    $pdf->Cell(120, 10, $order->getShippingAddress()->getFirstname() . " " . $order->getShippingAddress()->getLastname() );
    $pdf->SetY(35);
    $pdf->Cell(120, 10, $shippingData['street']);
    $pdf->SetY(41);
    $pdf->Cell(120, 10, $shippingData['postcode'] . ' ' . $shippingData['city']);
    $pdf->SetY(47);
    $pdf->Cell(120, 10, $shippingData['country_id']);
    $pdf->SetY(60);
    $pdf->Cell(120, 10, 'Tel: ' . $shippingData['telephone']);
    $pdf->SetY(70);
    $pdf->SetFont('Arial', '', 15);
    $pdf->Cell(120, 10, 'Afzender:');
    $pdf->SetY(76);
    $pdf->Cell(120, 10, 'Witjes Petdiscount');
    $pdf->SetY(82);
    $pdf->Cell(120, 10, 'Charles Darwinstraat 13');
    $pdf->SetY(88);
    $pdf->Cell(120, 10, '7825AB Emmen');
    $pdf->SetY(94);
    $pdf->Cell(120, 10, 'Nederland');

    $pdf->setY(135);
    $pdf->Image('http://wetra.nl/edc/wp-content/uploads/2014/11/wetra-edc-logo-21.png','10','125',40,0,'PNG');

}

// Mail naar wetra

$to      = 'orders@wetra.nl';
$subject = 'Zending aanmelden Witjes Verzendhuis';
$message = "Beste Wetra,
    Wij hebben zojuist een zending klaargemaakt:\r\n
    " . $order->getShippingAddress()->getFirstname() . " " . $order->getShippingAddress()->getLastname() . "
    " . $shippingData['street'] . "
    " . $shippingData['postcode'] . ' ' . $shippingData['city'] . "
    \r\nTelefoonnummer van de klant:
    " . $shippingData['telephone'] . "
    \r\nOnze referentie:
    " . $orderData['increment_id'] . "
    \r\nDe zending bevat:
    \r\n". $_GET['wtcol'] . " Collo
    ". $_GET['wtpaneel'] . " Hekwerk\r\n
    \r\nEventuele afleverinstructies:
    ". $_GET['instructie'] . "
    \r\nGraag afhalen tussen 16:00 en 17:00 indien mogelijk.\r\n
    Met vriendelijke groeten,
    Witjes Verzendhuis";

$headers = 'From: info@witjesverzendhuis.nl' . "\r\n" .
    'Reply-To: info@witjesverzendhuis.nl' . "\r\n" .
    'CC: no-reply@shippingreport.nl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
