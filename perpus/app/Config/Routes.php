<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//buku
$routes->get('/', 'Home::index');
$routes->get('/buku','Buku::index');
$routes->get('/product','product::tampil');
$routes->get('/tambah','product::halaman_tambah');
$routes->get('/edit','product::halaman_edit');
$routes->get('/hapus','product::halaman_hapus');
$routes->post('/tambah','product::tambah');
$routes->get('/tampil', 'Product::tampil');
$routes->delete('/hapus_permanen/(:num)','Product::hapusPermanen/$1');
$routes->post('/update/(:num)', 'Product::perbarui/$1');
//user
$routes->get('/login', 'User::login');
$routes->get('/register', 'User::signup');
$routes->post('/register/simpan', 'User::register');
$routes->get('/login/save', 'User::saveLogin');
$routes->get('/datauser', 'User::index');
$routes->post('/user/edit', 'User::edit/$1');
$routes->post('/user/saveEdit(:num)', 'User::saveEdit/$1');
$routes->post('/user/hapus', 'User::hapus/$1');
//peminjaman
$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/create', 'Peminjaman::create');
$routes->post('/peminjaman/store', 'Peminjaman::store');
$routes->get('/peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('/peminjaman/update/(:num)', 'Peminjaman::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'Peminjaman::delete/$1');
