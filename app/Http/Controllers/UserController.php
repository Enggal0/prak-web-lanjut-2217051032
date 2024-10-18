<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function create(){ 
        $kelasModel = new Kelas(); 

        $kelas = $kelasModel->getKelas(); 

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas, 
        
    ];  
        return view('create_user', $data); 
    }

    public function store(Request $request) 
    { 
        //validasi input
        $request -> validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //validasi foto
        ]);

        //handle upload foto
        if ($request->hasFile('foto')){
            $foto = $request->file('foto');
            $fotoPath = $foto->move(('upload/img'), $foto); //simpan foto di folder upload
        } 
        else{
            $fotoPath = null; // Jika tidak ada file yang diupload, set fotoPath menjadi null atau default
        }

        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoPath, // Menyimpan path foto
            ]);
            return redirect()->to('/user')->with('success', 'User
            berhasil ditambahkan');
            } 
    
    public $userModel; 
    public $kelasModel; 
    
    public function __construct() 
    { 
        $this->userModel = new UserModel(); 
        $this->kelasModel = new Kelas(); 
    } 
    
    public function index() 
    { 
        $data = [ 
            'title' => 'List Users', 
            'users' => $this->userModel->getUser(), 
        ]; 
    
        return view('list_user', $data); 
    } 

    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }
}
