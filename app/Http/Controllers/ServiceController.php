<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

   
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Picture' => 'nullable|image|max:5000',
        ]);

        $service = Service::findOrFail($id);
        $service->Title = $request->Title;
        $service->Description = $request->Description;

        if ($request->hasFile('Picture')) {
           
            if (file_exists(public_path('logo/' . $service->Picture))) {
                unlink(public_path('logo/' . $service->Picture));
            }

            $image = 'logo_' . uniqid() . '.' . $request->Picture->getClientOriginalExtension();
            $request->Picture->move(public_path('logo'), $image);
            $service->Picture = $image;
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'تم تحديث الخدمة بنجاح');
    }

    
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        
        if (file_exists(public_path('logo/' . $service->Picture))) {
            unlink(public_path('logo/' . $service->Picture));
        }

        
        $service->delete();

        return redirect()->route('services.index')->with('success', 'تم حذف الخدمة بنجاح');
    }
}
