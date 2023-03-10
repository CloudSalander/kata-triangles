<?php
define("BRICK","#");

abstract class Triangle {
	
	private int $length;

	public abstract function draw();
	protected abstract function drawRow(int $length);
}
?>