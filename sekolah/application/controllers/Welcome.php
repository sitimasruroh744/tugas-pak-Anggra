<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	



	public function index()
	{
		// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
		$this->load->model('MSudi');
		// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
		$GetMenu = $this->MSudi->GetDataWhere('menu', 'status_menu', 1);
		// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
		$data['GetMenu'] = $GetMenu->result();
		// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array



		// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
		$this->load->model('MSudi');
		// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
		$GetBox = $this->MSudi->GetDataWhere('menu_box', 'status_box', 1);
		// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
		$data['GetBox'] = $GetBox->result();
		// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array

// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
$this->load->model('MSudi');
// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
$Getsiswa= $this->MSudi->GetDataWhere('costum1', 'status', 1);
// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
$data['Getsiswa'] = $Getsiswa->result();
// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array



// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
$this->load->model('MSudi');
// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
$Getmembaca= $this->MSudi->GetDataWhere('costum2', 'status', 1);
// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
$data['Getmembaca'] = $Getmembaca->result();
// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array



// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
$this->load->model('MSudi');
// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
$Getmenulis= $this->MSudi->GetDataWhere('costum3', 'status', 1);
// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
$data['Getmenulis'] = $Getmenulis->result();
// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array


// Untuk memanggil fungsi2 untuk berinteraksi kedalam database (CRUD)
$this->load->model('MSudi');
// Untuk memanggil nama table dan seleksi pada saat pemanggilan data
$Getberjalan= $this->MSudi->GetDataWhere('costum4', 'status', 1);
// Untuk menjalankan fungsi GetMenu dan membuat data array kedalam templates/halaman website
$data['Getberjalan'] = $Getberjalan->result();
// Untuk memanggil atau menjalankan layout/file tampilan dan memasukan data array




		$this->load->view('welcome_message',$data);
	}







}



