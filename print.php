<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new mPDF();

$mpdf->SetHTMLFooter('<div class="footer"> page: {PAGENO}/{nb}</div>');

$mpdf->WriteHTML('<h1 class="header">Page Title</h1>');

$mpdf->Output();