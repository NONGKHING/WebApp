<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        try{
            User::find($id)->delete();
        }catch(\Exception $e){
            dd($e);
        }
    }
    

    public function render()
    {
        // ดึงข้อมูลทั้งหมดจาก User เก็บใส่ตัวเเปร Data
        $data = User::paginate(6);
        //with compact คือ ทั้งหมดที่มีการ ranter
        return view('livewire.userdata')->with(compact('data'));;
    }
}
