<?php
class upDownTriangle extends Triangle {

	public function __construct (int $length) {
		$this->length = $length;
	}

	public function draw() {
		$row_cnt = $this->length;
		while($row_cnt >= 1) {
			$this->drawRow($row_cnt);
			--$row_cnt;
		}
	}

	protected function drawRow(int $length) {
		$brick_count = $length;
		while($brick_count >= 1) {
			echo BRICK;
			--$brick_count;
		}
		echo "\n";
	}
}
?>