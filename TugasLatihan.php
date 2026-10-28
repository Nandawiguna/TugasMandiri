<?php
class Buku {
   public $idBuku, $namaBuku, $jenisBuku;
   public function __construct($idBuku, $namaBuku, $jenisBuku) {
    $this->idBuku = $idBuku;
    $this->namaBuku = $namaBuku;
    $this->jenisBuku = $jenisBuku;
   }
   public function InfoBuku() {
    echo "===INFORMASI PEMINJAMAN BUKU=== <br>";
    echo "ID Buku : $this->idBuku<br>";
    echo "Nama Buku : $this->namaBuku<br>";
    echo "Jenis Buku : $this->jenisBuku<br>";
   }
}
Class Anggota {
    public $nama;
    public $idAnggota;
    public function __construct($nama,$idAnggota){
        $this->nama = $nama;
        $this->idAnggota = $idAnggota;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setNama($nama) {
        $this->nama =$nama;
    }
    public function getIdAnggota(){
        return $this->idAnggota;
    }
    public function dipinjamoleh(){
        echo " Nama Anggota  : ". $this->nama . "<br>";
        echo "ID Anggota     : ". $this->idAnggota. "<br>";
    }
}
Class Peminjaman extends Buku {
    private $idPinjam ;
    private $tanggalPinjam;
    private $tanggalPengembaliyan;
    public $anggota;
    public function __construct($idBuku, $namaBuku, $jenisBuku,$idPinjam,$tanggalPinjam,$tanggalPengembaliyan,$anggota){
        parent::__construct($idBuku, $namaBuku, $jenisBuku);
        $this->idPinjam = $idPinjam;
        $this->tanggalPinjam = $tanggalPinjam;
        $this->tanggalkembali = $tanggalPengembaliyan;
        $this->anggota = $anggota;
    }
    public function detaipinjaman(){
        $this->InfoBuku();
        $this->anggota->dipinjamoleh();

        echo "ID Peminjaman :". $this->idPinjam. "<br>";
        echo "Tanggal Pinjam :". $this->tanggalPinjam. "<br>";
        echo "Tanggal Pengembaliyan :". $this->tanggalkembali. "<br>";
    }



}
$anggota = new Anggota("Nanda", "250030032");

$peminjaman = new Peminjaman( "B001","Beckend","Pendidikan","P001","18-9-2026","9-12-2026",$anggota);

$peminjaman->detaipinjaman();
?>
    
