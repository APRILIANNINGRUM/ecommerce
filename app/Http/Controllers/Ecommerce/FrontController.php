<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use File;
use App\Category;
use App\Customer;

class FrontController extends Controller
{
    public function index()
    {
        //MEMBUAT QUERY UNTUK MENGAMBIL DATA PRODUK YANG DIURUTKAN BERDASARKAN TGL TERBARU
        //DAN DI-LOAD 10 DATA PER PAGENYA
        $products = Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate(10);
        $total = $this->getCartTotal();
        //LOAD VIEW INDEX.BLADE.PHP DAN PASSING DATA DARI VARIABLE PRODUCTS
        return view('ecommerce.index', compact('products', 'total'));
    }
    public function product()
    {   
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        $total = $this->getCartTotal();
        return view('ecommerce.product', compact('products', 'total'));
    }
    public function categoryProduct($slug)
    {
       //JADI QUERYNYA ADALAH KITA CARI DULU KATEGORI BERDASARKAN SLUG, SETELAH DATANYA DITEMUKAN
       //MAKA SLUG AKAN MENGAMBIL DATA PRODUCT YANG BERELASI MENGGUNAKAN METHOD PRODUCT() YANG TELAH DIDEFINISIKAN PADA FILE CATEGORY.PHP SERTA DIURUTKAN BERDASARKAN CREATED_AT DAN DI-LOAD 12 DATA PER SEKALI LOAD
        $products = Category::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(12);
        //LOAD VIEW YANG SAMA YAKNI PRODUCT.BLADE.PHP KARENA TAMPILANNYA AKAN KITA BUAT SAMA JUGA
        return view('ecommerce.product', compact('products'));
    }
    public function show($slug)
    {
        //QUERY UNTUK MENGAMBIL SINGLE DATA BERDASARKAN SLUG-NYA
        $product = Product::with(['category'])->where('slug', $slug)->first();
        //get function from total cart
        $total = $this->getCartTotal();
        return view('ecommerce.show', compact('product', 'total'));
    }
    public function verifyCustomerRegistration($token)
    {
        //JADI KITA BUAT QUERY UNTUK MENGMABIL DATA USER BERDASARKAN TOKEN YANG DITERIMA
        $customer = Customer::where('activate_token', $token)->first();
        if ($customer) {
            //JIKA ADA MAKA DATANYA DIUPDATE DENGNA MENGOSONGKAN TOKENNYA DAN STATUSNYA JADI AKTIF
            $customer->update([
                'activate_token' => null,
                'status' => 1
            ]);
            //REDIRECT KE HALAMAN LOGIN DENGAN MENGIRIMKAN FLASH SESSION SUCCESS
            return redirect(route('customer.login'))->with(['success' => 'Verifikasi Berhasil, Silahkan Login']);
        }
        //JIKA TIDAK ADA, MAKA REDIRECT KE HALAMAN LOGIN
        //DENGAN MENGIRIMKAN FLASH SESSION ERROR
        return redirect(route('customer.login'))->with(['error' => 'Invalid Verifikasi Token']);
    }
    public function getImage($filename)
    {
        //FUNGSI INI UNTUK MENGAMBIL FILE IMAGE DARI FOLDER PUBLIC/PRODUCTS
        //get from public/images
        $path = storage_path('app/public/images/' . $filename);
        //JIKA FILENYA ADA MAKA KITA TAMPILKAN
        if (file_exists($path)) {
            return response()->file($path);
        }
    }
    //get total product in cart from session dw_cart
    public function getCartTotal()
    {
        $total = 0;
        if (request()->cookie('dw-carts')) {
            $carts = json_decode(request()->cookie('dw-carts'), true);
            foreach ($carts as $cart) {
                $total += $cart['qty'];
            }
        }
        return $total;
    }

    public function getTotal()
    {
        $total = 0;
        if (request()->cookie('dw-carts')) {
            $carts = json_decode(request()->cookie('dw-carts'), true);
            foreach ($carts as $cart) {
                $total += $cart['qty'];
            }
        }
        return view('layouts.ecommerce', compact('total'));
    }
}
