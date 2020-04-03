<?php
	class SimpleTest extends \PHPUnit\Framework\TestCase {
		public static function setupBeforeClass() : void {
		}
		public static function teardownAfterClass() : void {
		}

		public function setup() : void {
			$this->factorail = new factorail();
 		}

		public function teardown() : void {
		}
		public function test_factorail_on_zero() {

			$this->assertTrue($this->factorail->fact(0)==1);
		}
		public function test_factorail_on_one() {

			$this->assertTrue($this->factorail->fact(1)==1);
		}
		public function test_factorail_on_five_equal_120() {

			$this->assertTrue($this->factorail->fact(5)==120);
		}
		public function test_factorail_on_minus_3() {

			$this->assertTrue($this->factorail->fact(-3)==null);
		}
		public function test_factorail_on_one_point_five() {

			$this->assertTrue($this->factorail->fact(1.5)==null);
		}
		
		public function test_factorail_withnot_number() {
				$this->assertTrue($this->factorail->fact("ABC")==null);
		}

	}

