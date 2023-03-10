<?php
class downUpTriangle extends Triangle {

	public function __construct (int $length) {
		$this->length = $length;
	}

	public function draw() {
		$row_cnt = 1;
		while($row_cnt <= $this->length) {
			$this->drawRow($row_cnt);
			++$row_cnt;
		}
	}

	protected function drawRow(int $length) {
		$brick_count = 1;
		while($brick_count <= $length) {
			echo BRICK;
			++$brick_count;
		}
		echo "\n";
	}


}
?>