<?php

	$thing = new Schema_CreativeWork;
	$thing->setDescription('description');
	$thing->setImage('IMAGE');
	$thing->setName('NAME');
	$thing->setURL('URL');
	$thing->setAwards('AWARDS');
	$thing->setAbout('about');
	$thing->setAggregateRating('rating');
	
	print_r($thing);

class Schema_Thing {

	protected $Description = NULL;
	protected $Image = NULL;
	protected $Name = NULL;
	protected $URL = NULL;

	function setDescription($var) {
		$this->Description = $var;
	}	
	function getDescription() {
		return $this->Description;
	}
	function setImage($var) {
		$this->Image = $var;
	}	
	function getImage() {
		return $this->Image;
	}
	function setName($var) {
		$this->Name = $var;
	}	
	function getName() {
		return $this->Name;
	}
	function setURL($var) {
		$this->URL = $var;
	}	
	function getURL() {
		return $this->URL;
	}
}

class Schema_CreativeWork extends Schema_Thing {
	private $About = NULL;
	private $AggregateRating = NULL;
	private $Awards = NULL;

	
	function setAggregateRating($var) {
		$this->AggregateRating = $var;
	}	
	function getAggregateRating() {
		return $this->AggregateRating;
	}
	function setAbout($var) {
		$this->About = $var;
	}	
	function getAbout() {
		return $this->About;
	}
	function setAwards($var) {
		$this->Awards = $var;
	}	
	function getAwards() {
		return $this->Awards;
	}
	

}


?>