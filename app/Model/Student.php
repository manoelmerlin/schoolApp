<?php
	class Student extends AppModel {

		public $hasAndBelongsToMany = array('Curse');

	}