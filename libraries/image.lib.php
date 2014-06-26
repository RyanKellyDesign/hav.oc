<?php

class Image{

	public $path = '';
	public $data = null;
	public $width = 0;
	public $height = 0;
	public $new_width = 0;
	public $new_height = 0;
	public $resize_width = 0;
	public $resize_height = 0;

	public function __construct($path = false){
		if($path){
			$this->load($path);
		}
	}
	
	public function load($path){
		$this->path = $path;

		if(strstr($path, '.jpg') || strstr($path, '.jpeg')){
			$this->data = imagecreatefromjpeg($path);
		}elseif(strstr($path, '.png')){
			$this->data = imagecreatefrompng($path);
		}elseif(strstr($path, '.gif')){
			$this->data = imagecreatefromgif($path);
		}else{
			echo 'wrong filetype';
			return false;
		}

		$this->width  = imagesx($this->data);
		$this->height = imagesy($this->data);
	}

	public function resize($w = false, $h = false){
		$width  = $w ? $w : '100';
		$height = $h ? $h : $width;

		$this->resize_width = $w;
		$this->resize_height = $w;

		$original_aspect = $this->width / $this->height;
		$thumb_aspect = $width / $height;

		if($original_aspect >= $thumb_aspect){
			// If image is wider than thumbnail (in aspect ratio sense)

			$this->new_height = $height;
			$this->new_width = $this->width / ($this->height / $height);
		}else{
			// If the thumbnail is wider than the image

			$this->new_width = $width;
			$this->new_height = $this->height / ($this->width / $width);
		}
	}

	public function output($dir){
		$thumb = imagecreatetruecolor($this->width, $this->height);

		// Resize and crop
		imagecopyresampled($thumb,
			$this->data,
			0 - ($this->new_width - $this->resize_width) / 2,
			0 - ($this->new_height - $this->resize_height) / 2,
			0, 0,
			$this->new_width, $this->new_height,
			$this->width, $this->height
		);

		$path_exploded = explode('/',$dir);
		$filename = $path_exploded[count($path_exploded)-1];

		file_put_contents($dir.$filename, imagejpeg($thumb));
		
	}

}