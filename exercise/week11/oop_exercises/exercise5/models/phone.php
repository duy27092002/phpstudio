<?php
	interface Phone {
		public function makeCall($number);
		public function sendMessage($message);
	}

	class iOS implements Phone
	{
		public $number;
		public $message;
	
		public function makeCall($number)
		{
			echo "The phone number is: $number <br>";
		}
		public function sendMessage($message)
		{
			echo "The message is: $message";
		}
	}
?>