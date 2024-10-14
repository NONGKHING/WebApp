<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edituser extends Component
{
    use WithFileUploads;
    public $uid,$name, $email, $password, $photo, $temp_user;

    public function mount($id){
        $temp_user = User::find($id);
        $this->name = $temp_user->name;
        $this->email = $temp_user->email;
        $this->uid = $id;
        // $this->password = $temp_user->password;
    }

    public function insert(){


        try{
            $model = User::where('id',$this->uid)
            ->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            $model = User::find($this->uid);

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
        return view('livewire.edituser');
    }
}
