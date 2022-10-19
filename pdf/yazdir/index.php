<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/gensis';

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';
//============================================================+

// File name   : urunler.php

//

//============================================================+



/***/



// Include the main TCPDF library (search for installation path).

require_once('tcpdf_include.php');
// create new PDF document

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information


$pdf->SetTitle('Ürünler');


// set default header data

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

//$pdf->setFooterData(array(0,64,0), array(0,64,128));



// set header and footer fonts

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));



// set default monospaced font

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);



// set margins

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);



// set auto page breaks

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);



// set image scale factor

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



// set some language-dependent strings (optional)

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {

	require_once(dirname(__FILE__).'/lang/eng.php');

	$pdf->setLanguageArray($l);

}



// ---------------------------------------------------------



// set default font subsetting mode

$pdf->setFontSubsetting(true);



// Set font

// dejavusans is a UTF-8 Unicode font, if you only need to

// print standard ASCII chars, you can use core fonts like

// helvetica or times to reduce file size.

$pdf->SetFont('dejavusans', '', 14, '', true);



// Add a page

// This method has several options, check the source code documentation for more information.

$pdf->AddPage();



// set text shadow effect

//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));



// Set some content to print


$html = '<h1>Size uygun ürünler</h1>';

if( isset($_GET['urunler']) ){
	
	$html .= '<table>';
	
	$urunler_arr = explode(',', $_GET['urunler']);
	foreach( $urunler_arr as $urun_id ){
		$thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($urun_id), 'full' );
		$thumbnail_url = $thumbnail_url[0];
		$html .= '<tr>';
		$html .= '<td width="50"><img style="width: 30px; height: 30px;" src="'.$thumbnail_url.'"/></td>';
		$html .= '<td><b>'.get_the_title($urun_id).'</b></td>';
		
		
		$html .= '</tr>';
		
	}

	$html .= '</table>';

}


// Print text using writeHTMLCell()

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



// ---------------------------------------------------------



// Close and output PDF document

// This method has several options, check the source code documentation for more information.

$pdf->Output('urunler.pdf', 'I');



//============================================================+

// END OF FILE

//============================================================+

