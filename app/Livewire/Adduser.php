<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Adduser extends Component
{
    use WithFileUploads;
    public $name, $email, $password, $photo;

    public function insert(){


        try{
            $model = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            if ($this->photo){
                $fullpath = $this->photo->store('photo', 'public');
                $model->profile_photo_path = $fullpath;
                $model->save();
            }

            return redirect()->to(route('userdata'));
        }catch(Exception $e){
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.adduser');
    }
}
