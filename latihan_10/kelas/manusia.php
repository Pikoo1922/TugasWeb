<?php
class manusia
{
    protected $nama = "Ficko";
    protected $nik;
    protected $umur;

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNik($nik) {
        $this->nik = $nik;
    }

    public function getNIK()
    {
        return $this->nik;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}
?>