<?php
	class Bank {
		private $accNo;
		public $name;
		private $balance;

		public function __construct($balance, $amount)
		{
			$this->balance = $balance;
			$this->amount = $amount;
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
				return "New Blance is: $newBalance";
			}
		}
	}
?>