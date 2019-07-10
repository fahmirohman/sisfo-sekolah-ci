<?php


class Produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul ="judul", $penulis ="penulis", $penerbit="penerbit", $harga=0){
		$this->judul =$judul;
		$this->penulis =$penulis;
		$this->penebit =$penerbit;
		$harga->harga =$harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

}

class CetakInfoProduk{
	public function cetak($produk){
		$str = "{$produk->judul} | {$pruduk->getLabel()} (Rp. {$produk->harga} ";
		return $str;
	}
}

$pruduk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann","Sony Computer",250000);


echo "komik : ".$produk1->getLabel();
echo "<br/>";
echo "Game : ".$pruduk2->getLabel();



