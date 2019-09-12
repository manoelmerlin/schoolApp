<?php
	class Teacher extends AppModel {

		public $belongsTo = array('User');


		public function getExportConfig() {
			$header = [__('Field label 1'), __('Field label 2'), __('Field label 3'), __('Field label 4')];
			$width = [35, 20, 10, 15];
			$align = ['L', 'L', 'C', 'R'];
			$fileName = __('Export file');

			return compact('header', 'width', 'align', 'fileName');
		}

		public function getExportData($conditions = []) {
			$result = [

						[
							'0',
							'1',
							'2',
							'3',
							'4',
							'5',
							'6'
						]

			];

			return $result;
		}

	}