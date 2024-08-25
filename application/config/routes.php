<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['login']                         = 'backend/AuthController/login';
$route['register']                         = 'backend/AuthController/register';
$route['logout']                        = 'backend/AuthController/logout';
$route['dash']                          = 'backend/HomeController/index';
// Routing Admin
$route['admin']                         = 'backend/AdminController/index';
$route['admin/create']                  = 'backend/AdminController/create';
$route['admin/update/(:num)']           = 'backend/AdminController/edit/$1';
// Routing Admin
$route['level']                         = 'backend/LevelController/index';
$route['level/create']                  = 'backend/LevelController/create';
$route['level/update/(:num)']           = 'backend/LevelController/edit/$1';
// Routing Pengajar
$route['layanan']                         = 'backend/LayananController/index';
$route['layanan/create']                  = 'backend/LayananController/create';
$route['layanan/detail/(:num)']           = 'backend/LayananController/detail/$1';
// Jenis Konten
$route['jenis-konten']                  = 'backend/JenisKontenController/index';
$route['jenis-konten/create']           = 'backend/JenisKontenController/create';
$route['jenis-konten/update/(:num)']    = 'backend/JenisKontenController/edit/$1';
// Routing Konten
$route['konten']                         = 'backend/KontenController/index';
$route['konten/create']                  = 'backend/KontenController/create';
$route['konten/update/(:num)']           = 'backend/KontenController/edit/$1';
// Routing Galeri
$route['galeri']                         = 'backend/GaleriController/index';
$route['galeri/create']                  = 'backend/GaleriController/create';
// Routing artikel
$route['artikel']                         = 'backend/ArtikelController/index';
$route['artikel/create']                  = 'backend/ArtikelController/create';
$route['artikel/update/(:num)']           = 'backend/ArtikelController/edit/$1';

$route['dokumen/(:num)']                  = 'backend/DokumenController/index/$1';
$route['soft-file/(:num)']                  = 'backend/DokumenController/index/$1';


// Routing Frontend
$route['home-page']                     = 'frontend/HomeController/index';
$route['profile-page']                  = 'frontend/AboutController/index';
$route['visi-page']                     = 'frontend/VisiController/index';
$route['sejarah-page']                  = 'frontend/SejarahController/index';
$route['struktur-page']                 = 'frontend/StrukturController/index';
$route['pengajar-page']                 = 'frontend/TeacherController/index';
$route['artikel-page']                  = 'frontend/ArtikelController/index';
$route['artikel-detail/(:num)']         = 'frontend/ArtikelController/detail/$1';
$route['galeri-page']                   = 'frontend/GaleriController/index';
$route['kontak-page']                   = 'frontend/KontakController/index';
$route['layanan-page']                  = 'frontend/LayananController/form';
$route['layanan/create']                = 'frontend/LayananController/form';



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
