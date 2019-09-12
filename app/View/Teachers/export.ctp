<?php

	$html = "Dados do " . $exportConfig[3] . " " . $exportConfig[4] . '<br>' . $exportConfig[0] . '<br>' . $exportConfig[1] . '<br>' . $exportConfig[2] . '<br>';

	$this->response->type('pdf');

	$this->Pdf->core->SetFooterMargin('10');

	$this->pdf->core->getScaleFactor();

	$this->Pdf->core->setFont('helvetica', '', 9);

	$this->Pdf->core->addPage('', 'USLETTER');

	$this->Pdf->core->writeHTML($html, false, false, false, false, '');

	$this->Pdf->core->lastPage();
	ob_end_clean();
	$this->Pdf->core->Output('resultado.pdf', 'D');
