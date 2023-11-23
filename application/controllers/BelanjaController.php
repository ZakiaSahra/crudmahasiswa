<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BelanjaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('OfflineStore');
    }

    public function index()
    {
        $belanjaanDita = [
            ['jenis' => 'anak', 'harga' => 75000, 'jumlah' => 2],
        ];

        $belanjaanAditToni = [
            ['jenis' => 'laki-laki', 'harga' => 175000, 'jumlah' => 2],
        ];

        $belanjaanIntan = [
            ['jenis' => 'wanita', 'harga' => 120000, 'jumlah' => 2],
        ];

        $totalDita = $this->offlinestore->hitungTotalHarga($belanjaanDita);
        $totalAditToni = $this->offlinestore->hitungTotalHarga($belanjaanAditToni);
        $totalIntan = $this->offlinestore->hitungTotalHarga($belanjaanIntan);

        echo "Dita harus membayar: Rp. " . $totalDita . "<br>";
        echo "Adit dan Toni harus membayar: Rp. " . $totalAditToni . "<br>";
        echo "Intan harus membayar: Rp. " . $totalIntan;
    }
}
