<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $rows = Product::get();
        return view('dashboard.products.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name_en' => 'required|string|max:255',
                'name_ar' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'category_id' => 'required|exists:categories,id',
                'colors' => 'required|array',
                'sizes' => 'required|array|max:6',
                'details_en' => 'nullable|string',
                'details_ar' => 'nullable|string',
                'size_and_fit_en' => 'nullable|string',
                'size_and_fit_ar' => 'nullable|string',
                'shipping_and_returns_en' => 'nullable|string',
                'shipping_and_returns_ar' => 'nullable|string',
                'images' => 'array|max:4',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $product = Product::create([
                'name' => [
                    'name_ar' => $request->name_ar,
                    'name_en' => $request->name_en,
                ],

                'price' => $request->price,
                'category_id' => $request->category_id,

                'details' => [
                    'details_ar' => $request->details_ar,
                    'details_en' => $request->details_en,
                ],

                'size_and_fit_ar' => $request->size_and_fit_ar,
                'size_and_fit_en' => $request->size_and_fit_en,

                'shipping_and_returns_ar' => $request->shipping_and_returns_ar,
                'shipping_and_returns_en' => $request->shipping_and_returns_en,
            ]);

            $product->colors()->attach($request->colors);
            $product->sizes()->attach($request->sizes);

            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('products'), $imageName); // Save to public path

                    $product->images()->create(['image' => $imageName]);
                }
            }

            return redirect()->route('products')->with('success', 'Product added successfully');
        }catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->colors()->detach();
        $product->sizes()->detach();
        $product->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully!');
    }
}

