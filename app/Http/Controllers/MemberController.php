<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('list-members', [
            'title' => 'Anggota Member',
            'members' => Member::latest()->get()

        ]);
    }

    public function show(Member $member)
    {
        return view('member', [
            'title' => $member->name,
            "member" => $member
        ]);
    }

    public function input()
    {
        return view('form-member', [
            'title' => 'Form New Member'
        ]);
    }


    public function store(Request $request)

    {
        $validatedData = $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'nickname' => 'required',
            'nickname_JP' => 'required',
            'birthdate' => 'required',
            'horoskop' => 'required',
            'golongan_darah' => 'required',
            'tinggi_badan' => 'required',
            'image' => 'image|file|max:5500'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Image');
        }

        Member::create($validatedData);

        return redirect('list-members');
    }
}
