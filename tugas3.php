<?php
class makan{

	public function kenyang(){
		$kenyang = $this->ambilmakanan();
		$kenyang .= $this->ambilsendok();
		$kenyang .= $this->berdoa();
		$kenyang .= "yummy....<br>";
		echo $kenyang;
	}

	private function ambilmakanan(){
		return "Ambil Makanan <br>";
	}
	private function ambilsendok(){
		return "Ambil Sendok <br>";
	}
	private function berdoa(){
		return "Berdoa <br>";
	}
}
$makan = new makan();
$makan->kenyang();
?>