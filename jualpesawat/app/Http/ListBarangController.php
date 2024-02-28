<?php
class ListBarangController extends controller 
{
    function tampilkan($id, $nama){
        return view('list_barang', ['id' => $id, 'nama' => $nama]);
    }
}
