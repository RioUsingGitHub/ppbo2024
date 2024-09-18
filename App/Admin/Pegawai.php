<?php

class Pegawai
{
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(): bool
    {
        echo "{$this->nama} melakukan check-in\n";
        return true;
    }

    public function cekOut(): bool
    {
        echo "{$this->nama} melakukan check-out\n";
        return true;
    }

    public function getNoHp(): int
    {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void
    {
        $this->no_hp = $no_hp;
    }
}