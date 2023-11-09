<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productCategory;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        $product = Product::with('productCategory')->paginate(4);
        return view('admin.product.admin_product', compact('product'));
    }

    public function create(): View
    {
        $categories = productCategory::all();
        return view('admin.Product.admin_product_create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'price' => ['required', 'decimal:2'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required', 'string'],
            'category' => ['required', 'numeric'],
        ]);

        $input = request()->all();

        if ($request->hasFile('image')) {
            $destinationPath = 'public/image/product/';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destinationPath, $image_name);

            $input['image'] = $image_name;
        }

        $newItem = Product::create([
            'product_name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $input['image'],
            'status' => $request->status,
            'category' => $request->category,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        if (!$newItem) {
            return redirect()->back()->with('error', 'Could not create new item');
        }
        return redirect(route('admin.product'))->with('success', 'new Item Inserted');
    }

    public function edit($id): View
    {
        $product = Product::where('id', $id)->first();
        $categories = productCategory::all();
        return view('admin.product.admin_product_edit', compact('product', 'categories'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'price' => ['required', 'decimal:2'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'status' => ['required', 'string'],
            'category' => ['required', 'numeric'],
        ]);


        $newData = Product::where('id', $id)->first();

        if ($request->hasFile('image')) {
            $destinationPath = 'public/image/product/';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destinationPath, $image_name);
            $newData->image = $image_name;
        }

        $newData->product_name = $request->name;
        $newData->description = $request->description;
        $newData->price = $request->price;
        $newData->status = $request->status;
        $newData->category = $request->category;
        $newData->updated_at = Carbon::now();
        $newData->save();

        return back()->with('success', 'item updated');
    }

    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->with('error',"item deleted");
    }
}
