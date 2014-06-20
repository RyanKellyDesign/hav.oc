<?php 
	
class Form{

	public function input($type, $name, $value = ''){
		$html = "<input type='$type' name='$name' id='$name' value='$value'>";
		return $html;
	}

	public function label($for, $text){
		$html = "<label for='$for'>$text</label>";
		return $html;
	}

	public function textarea($name, $value = ''){
		$html = "<textarea name='$name' id='$name'>$value</textarea>";
		return $html;
	}

	public function submit($value = 'Submit'){
		$html = "<input type='submit' value='$value'>";
		return $html;
	}

	public function select($name, $values){
		$html = "<select name='$name' id='$name'>";
		foreach ($values as $option => $value) {
			$html .= "<option value='$value'>$option</option>";
		}
		$html .= "</select>";
		return $html;
	}

	public function open($action = '', $method = 'post'){
		$html = "<form action='$action' method='$method'>";
		return $html;
	}

	public function close(){
		$html .= "</form>";
		return $html;
	}
}



