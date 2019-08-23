<?php
	class Teacher extends AppModel {
		public $hasAndBelongsToMany = array('Curse');

	}