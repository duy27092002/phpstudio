<?php
	class Bank {
		private $accNo;
		public $name;
		public $balance;

		public function __construct($balance, $amount)
		{
			$this->balance = $balance;
			$this->amount = $amount;
		}
		public function depositAmount()
		{
			$sum = $this->balance + $this->amount;
			return "Your new balance after added is: $sum";
		}
		public function deductAmount()
		{
			$balance = $this->balance;
			$amount = $this->amount;
			if ($balance < 0) {
				echo "No balance in account";
			} elseif ($balance < $amount) {
				echo "Requested amount is greater than balance";
			} else {
				$newBalance = $balance - $amount;
				return "New Balance is: $newBalance";
			}
		}
	}
?>