<?php

namespace App\Http\Controllers;

use App\Models\User; // นำเข้าโมเดล User
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
{
    $user = User::findOrFail($id); // ดึงข้อมูลผู้ใช้ตาม ID
    return view('viewuser', compact('user')); // ตรวจสอบให้แน่ใจว่าชื่อ 'viewuser' ตรงกับไฟล์ที่สร้าง
}

}
