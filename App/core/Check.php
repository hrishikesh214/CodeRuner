<?php

	class Check extends CodeRunner{

		public function index(){
			$this->hello();
		}

		public function hello(){
			echo "Hello Sir!";
			echo "<br>";
		}

		public function bye(){
			echo "GoodBye Sir!";
		}

	}