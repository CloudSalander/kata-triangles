<?php
class upDownTriangle extends Triangle {
	public function draw(){
		$count = 1;
		while($count < 1) {

			++$count;
		}	
	}

	private function drawLine($count) {
		$brick_count = 1;
		while($brick_count < $count) {
			echo BRICK;
			++$brick_count;
		}
		echo "\n";
	}
}
?>