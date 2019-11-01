<?php
	
	
	class GuestBookRecord
	{
		protected $message;
		
		/**
		 * @return mixed
		 */
		public function __construct($message)
		{
			$this->message = $message;
		}
		
		/**
		 * @return mixed
		 */
		public function getMessage()
		{
			return $this->message;
		}
	}