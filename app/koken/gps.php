<?php

class GPS
{
    private $exif;

    public function __construct($exif)
    {
        $this->exif = $exif;
    }

    public function latitude()
    {
        return $this->convert($this->exif['GPSLatitude'], $this->exif['GPSLatitudeRef']);
    }

    public function longitude()
    {
        return $this->convert($this->exif['GPSLongitude'], $this->exif['GPSLongitudeRef']);
    }

	function date()
	{
    if (in_array('GPSDateStamp', $this->exif)) {
      return implode('-', explode(':', $this->exif['GPSDateStamp']));
    } else {
      return "--:--:--";
    }
	}

	function time()
	{
    if (in_array('GPSTimeStamp', $this->exif)) {
      $ts = $this->exif['GPSTimeStamp'];
      return sprintf('%02u:%02u:%02u', $this->divide($ts[0]), $this->divide($ts[1]), $this->divide($ts[2]));
    } else {
      return "--:--:--";
    }
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
        $dec = 0;
        $bits = explode('/', $str);
        if(is_array($bits) && count($bits) >=2) {
          $dec = $bits[0] / $bits[1];
        }
        return $dec;
    }
}
