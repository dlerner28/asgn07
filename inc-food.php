<?php
class Food
{
 private $name;
 private $calories;
  
  public function getName()
	{
		return $this->name;
	}
	
	public function setName()	
	{
		$this->name = $name;
	}
  
  public function getCalories()
	{
		return $this->calories;
	}
	
	public function setCalories()	
	{
		$this->calories = $calories;
	}
  
}

?>