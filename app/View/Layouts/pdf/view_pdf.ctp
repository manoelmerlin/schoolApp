<?php
	echo $this->Html->link(__('PDF'), array('controller' => 'teacher', 'action' => 'view_pdf', 'ext' => 'pdf', $teacher['Teacher']['id']));