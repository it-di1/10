<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }
    
    public function index()
    {
        $customers = Customer::all();
        return view('index', compact('customers'));
    }

    public function view()
    {
        $customers = Customer::all();
        return view('customers.view', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Picture' => 'required|image|max:5000',
        ]);

        $customer = new Customer();
        $customer->Title = $request->Title;
        $customer->Description = $request->Description;

        if ($request->hasFile('Picture')) {
            $image = 'logo_' . uniqid() . '.' . $request->Picture->getClientOriginalExtension();
            $request->Picture->move(public_path('logo'), $image);
            $customer->Picture = $image;
        }

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'تم إضافة العميل بنجاح');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Picture' => 'nullable|image|max:5000',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->Title = $request->Title;
        $customer->Description = $request->Description;

        if ($request->hasFile('Picture')) {
            if (file_exists(public_path('logo/' . $customer->Picture))) {
                unlink(public_path('logo/' . $customer->Picture));
            }

            $image = 'logo_' . uniqid() . '.' . $request->Picture->getClientOriginalExtension();
            $request->Picture->move(public_path('logo'), $image);
            $customer->Picture = $image;
        }

        $customer->save();

        return redirect()->route('customers.index')->with('success', 'تم تحديث العميل بنجاح');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        if (file_exists(public_path('logo/' . $customer->Picture))) {
            unlink(public_path('logo/' . $customer->Picture));
        }

        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'تم حذف العميل بنجاح');
    }
}
