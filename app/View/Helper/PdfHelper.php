<?php
App::import('Vendor', 'TCPDF',  array('file' => 'tecnickcom/tcpdf/tcpdf.php'));
class PdfHelper extends AppHelper	{
		var $core;

		public function __construct()
		{
			$this->core = new TCPDF();
		}

		function PdfHelper() {
			self::__construct();
				$this->core = new TCPDF();
		}

}
