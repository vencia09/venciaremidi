<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.tambah', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // uniqe:products = tidak boleh ada duplikasi
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            // 2024 KB, 2Mb
            'image' => 'image|file|max:2024',
            'deskripsi' => 'required',
        ]);

        if ($request->image) {
            // ubah nama gambar, menjadi slug + . + ekstensi: songkok-mewah.png
            $imageName = $request->slug . '.' . $request->image->getClientOriginalExtension();
            // untuk menyimpan nama image kedatabase
            $validatedData['image'] = $imageName;
            // move image ke folder 'public/images/product'
            $request->image->move(public_path('images/products'), $imageName);
            // access di Front-End
            // {{ asset('images/products/' . $product->image) }}
            // atau src="/images/products/{{ $product->image }}"
        }
        // berguna untuk menghasilkan timpestamp: 2024-02-07 15:30:45
        $validatedData['publish_at'] = Carbon::now();
        Product::create($validatedData);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'deskripsi' => 'required'
        ];
        if ($request->image) {
            $rules['image'] = 'image|file|max:2024';
        }
        // jika slug tidak sama maka harus validasi dulu
        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validatedData = $request->validate($rules);

        // jika image diperbarui
        if ($request->image) {
            // hapus oldImage jika ada
            $filePath = public_path('/images/products/' . $product->image);
            if (File::exists($filePath)) {
                // hapus file tsb
                File::delete($filePath);
            }
            // ubah nama gambar, menjadi slug + . + ekstensi: songkok-mewah.png
            $imageName = $request->slug . '.' . $request->image->getClientOriginalExtension();
            // untuk menyimpan nama image kedatabase
            $validatedData['image'] = $imageName;
            // move image ke folder 'public/images/product'
            $request->file('image')->move(public_path('images/products'), $imageName);
        }

        Product::where('id', $product->id)
            ->update($validatedData);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // ambil path gambar unntuk dihapus
        // $filePath menghasilkan path gambar = public/images/products/songkok-mewah.png
        $filePath = public_path('/images/products/' . $product->image);
        if (File::exists($filePath)) {
            // hapus file tsb
            File::delete($filePath);
        }
        Product::destroy($product->id);
        return redirect('/dashboard/About')->with('success', 'Produk berhasil dihapus!');
    }
}