<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Display a listing of customers
    public function index()
    {
        $customers = Customer::all(); // Fetch all customers from the database
        return view('index', compact('customers'));
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('customers.create');
    }

    // Store a newly created customer in storage
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

    // Show the form for editing the specified customer
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    // Update the specified customer in storage
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

    // Remove the specified customer from storage
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        if (file_exists(public_path('logo/' . $customer->Picture))) {
            unlink(public_path('logo/' . $customer->Picture));
        }

        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'تم حذف العميل بنجاح');
    }

    // Display a view page for customers
    public function view()
    {
        $customers = Customer::all(); // Fetch all customers
        return view('customers.view', compact('customers'));
    }
}
