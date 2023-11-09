<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(): View
    {
        $inventory = Inventory::with('categories')->paginate(4);
        return view('admin.Inventory.admin_inventory', compact('inventory'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('admin.Inventory.admin_inven_create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'decimal:2'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required', 'string'],
            'category' => ['required', 'numeric'],
        ]);

        $input = request()->all();
        
        if($request->hasFile('image'))
         {
             $destinationPath = 'public/image/inventory/';
             $image = $request->file('image');
             $image_name = $image->getClientOriginalName();
             $path = $request -> file('image')->storeAs($destinationPath,$image_name);

             $input['image'] = $image_name;
         }  
         
        $newItem = Inventory::create([
            'inven_name' => $request->name,
            'quantity' => $request->quantity,
            'inven_price' => $request->price,
            'image' => $input['image'],
            'status' => $request->status,
            'category' => $request->category,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        if (!$newItem) {
            return redirect()->back()->with('error', 'Could not create new item');
        }
        return redirect(route('admin.inventory'))->with('success', 'new Item Inserted');
    }

    public function edit($id): View 
    {
        $inventory = Inventory::where('id',$id)->first();
        $categories = Category::all();
        return view('admin.Inventory.admin_inven_edit',compact('inventory', 'categories'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'decimal:2'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required', 'string'],
            'category' => ['required', 'numeric'],
        ]);

        
        $inven = Inventory::where('id',$id)->first();
        
        if($request->hasFile('image'))
         {
             $destinationPath = 'public/image/inventory/';
             $image = $request->file('image');
             $image_name = $image->getClientOriginalName();
             $path = $request -> file('image')->storeAs($destinationPath,$image_name);
             $inven->image = $image_name;
         }  

         $inven->inven_name = $request->name;
         $inven->quantity = $request->quantity;
         $inven->inven_price = $request->price;
         $inven->status = $request->status;
         $inven->category = $request->category;
         $inven->updated_at = Carbon::now();
         $inven->save();

         return back()->with('success','item updated');

    }

    public function destroy($id){
        $inven = Inventory::where('id',$id)->first();
        $inven->delete();
        return back()->with('error',"item deleted");
    }
}
