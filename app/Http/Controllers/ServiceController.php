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
    // دالة عرض جميع الخدمات
    public function index()
    {
        // جلب جميع الخدمات من قاعدة البيانات
        $services = Service::all();

        // تمرير البيانات إلى العرض
        return view('index', compact('services'));
    }

    // دالة تخزين الخدمة الجديدة
    public function store(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Picture' => 'required|image|max:5000',
        ]);

        // إنشاء كائن جديد للخدمة
        $service = new Service();
        $service->Title = $request->Title;
        $service->Description = $request->Description;

        // حفظ الصورة في مجلد 'images' إذا كانت موجودة
        if ($request->hasFile('Picture')) {
            $service->Picture = $request->file('Picture')->store('logo');
        }

        // حفظ الخدمة في قاعدة البيانات
        $service->save();

        // إعادة التوجيه إلى صفحة عرض الخدمات مع رسالة نجاح
       
        return redirect()->route('services.index')->with('success', 'تم إضافة الخدمة بنجاح');
    }
}
