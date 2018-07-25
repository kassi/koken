<?php

class GPS {

	private $exif;

	function __construct($exif)
	{
		$this->exif = $exif;
	}

	function latitude()
	{
		return $this->convert($this->exif['GPSLatitude'], $this->exif['GPSLatitudeRef']);
	}

	function longitude()
	{
		return $this->convert($this->exif['GPSLongitude'], $this->exif['GPSLongitudeRef']);
	}

	function date()
	{
		return implode('-', explode(':', $this->exif['GPSDateStamp']));
	}

	function time()
	{
		$ts = $this->exif['GPSTimeStamp'];
		return sprintf('%2u:%2u:%2u', $this->divide($ts[0]), $this->divide($ts[1]), $this->divide($ts[2]));
	}

	function direction()
	{
		if (isset($this->exif['GPSImgDirection'])) {
			$value = $this->divide($this->exif['GPSImgDirection']);
			$ref = $this->direction_ref($this->exif['GPSImgDirectionRef']);
			return array(
				'raw' => $this->exif['GPSImgDirection'],
				'computed' => $value,
				'computed_ref' => $ref,
				'clean' => sprintf('%.02f° %s', $value, $ref)
			);
		}
	}

	private function direction_ref($ref)
	{
		return sprintf('%sN', $ref[0]);
	}

	private function convert($arr, $quadrant)
	{
		$d = $this->divide($arr[0]);
		$m = $this->divide($arr[1]);
		$s = $this->divide($arr[2]);
		$dec = ((($s/60)+$m)/60) + $d;
		if (strtolower($quadrant) == 's' || strtolower($quadrant) == 'w') {
			$dec = -$dec;
		}
		return $dec;
	}

	private function divide($str)
	{
		$bits = explode('/', $str);
		$dec = $bits[0] / $bits[1];
		return $dec;
	}

}
