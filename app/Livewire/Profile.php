<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\withFileUploads;

class Profile extends Component
{
    use withFileUploads;
    // การประการตัวเเปร
    public $name = "Natthiwanee", $username, $email, $photo;

    public function update(){
        
        if ($this->photo){
            $fullpath = $this->photo->store('photo','public');
            $model = user::find(auth()->user()->id);
            $model->profile_photo_path = $fullpath;
            $model->save();
        }
        //การ อัปเดตข้อมูลลง ฐานข้อมูล
        User::where('id',auth()->user()->id)
        ->update([
            'name' => $this->username,
            'email' => $this->email,
        ]);
    }
    
    public function render()
    {
        return view('livewire.profile');
    }
}