<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function create()
    {
        return view('services.create');
    }
    
    public function index()
    {
        
        $services = Service::all();

        return view('index', compact('services'));
    }

    // دالة تخزين الخدمة الجديدة
    public function store(Request $request)
{
    $request->validate([
        'Title' => 'required|string|max:255',
        'Description' => 'required|string|max:1000',
        'Picture' => 'required|image|max:5000',
    ]);

    $service = new Service();
    $service->Title = $request->Title;
    $service->Description = $request->Description;

    if ($request->hasFile('Picture')) {
    
        $image = 'logo_' . uniqid() . '.' . $request->Picture->getClientOriginalExtension();

         
        $request->Picture->move(public_path('logo'), $image);

        
        $service->Picture = $image;
    }

    $service->save();

    return redirect()->route('services.index')->with('success', 'تم إضافة الخدمة بنجاح');
}
}
