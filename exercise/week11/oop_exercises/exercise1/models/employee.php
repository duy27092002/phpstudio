<?php
	class Employee {
		private $id;
		public $name;
		const workingHoursPerDay = "8";
		const hourlyRate = "15";
		public $totalLeaveTaken;
		public $workingDays;

		public function __construct($name,$totalLeaveTaken, $totalDays)
		{
			$this->name = $name;
			$this->totalLeaveTaken = $totalLeaveTaken;
			$this->totalDays = $totalDays;
		}
		public function getTotalLeaveTaken()
		{
			return $this->totalLeaveTaken;
		}
		public function getTotalDays()
		{
			return $this->totalDays;
		}
		public function getSalaryAmount()
		{
			$name = $this->name;
			$workingDays = ($this->totalDays - $this->totalLeaveTaken);
			$salary = ($this->totalDays - $this->totalLeaveTaken) * self::workingHoursPerDay * self::hourlyRate;

			return $name." has worked for ".$workingDays." days and taken ".$this->totalLeaveTaken." leaves, ".$name." salary is ".$salary;
		}
	}
?>