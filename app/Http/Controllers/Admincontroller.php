<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Product;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Payment_invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class Admincontroller extends Controller
{
    //here mention order-table function

    public function Ordersview(){
       $orders= order::paginate(8);
       return view('Admin.order',['orders' => $orders], compact('orders'));
    }

    //delete order detail by id
    Public function Delete_order($id){
        $order = order::where('id', $id)->first();
        $order->delete();
        return redirect()->back();
    }

    //add Product by click add new product in header navbar
    public function add_product(Request $request){
        $request->validate([
            'product_name'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:10000',
            'price'=>'required',

        ]);
         //store product to table
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return view('Admin.product');

    }

    //marketPlace here Show uploaded_product
    public function marketplaceview(){
        $product = Product::get();
        return view('Admin.MarketPlace', compact('product'));
    }

    //payment & invoice function
    public function Payment_invo(){
      $payment_invoices = Payment_invoice::paginate(8);
      return view('Admin.paymentino', ['payment_invoices'=>$payment_invoices], compact('payment_invoices'));
    }

    //here use Pdf Downloader
    public function Print_pdf(){
        $pdf= PDF::loadview('Admin.pdf');
        return $pdf->download('Payment & invoice.pdf');

    }
       //this use for showing Detail of product
    public function detail_view($id){
        $data = Product::get();
        $products = Product::where('id', $id)->first();

        return view('Admin.detail', compact('products'), compact('data'));
    }
}
