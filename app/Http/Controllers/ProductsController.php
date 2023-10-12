<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductsController extends Controller
{
   public function products(){
    $products = product::all();
    return view('admin/products', compact('products'));
   }
   public function add_products(){
      // $products = product::all();
      return view('admin.add_products');
     }
   public function ret_add_products(Request $request){

      $image = $request->file('photo')->getClientOriginalName();
      $request->file('photo')->move(public_path('/assets/img'), $image);
            $product_name=$request->input('product_name');
            $product_feature=$request->input('product_feature');
            $product_description=$request->input('product_description');
            $price=$request->input('price');
            $product_quantity=$request->input('product_quantity');
            $photo=$request->file('photo');
            $data=array('product_name'=>$product_name,
            'product_description'=>$product_description,
            'product_feature'=>$product_feature,
            'product_quantity'=>$product_quantity,
            'price'=>$price,
            'photo' => '/assets/img/' . $image,
        );
            DB::table('products')->insert($data);

            $products = DB::table('products')->get();

            $productsArray = json_decode(json_encode($products), true);
      return redirect('/admin/products')->with('products', $productsArray);

     }
   public function cart()
   {$cartItems = session()->get('cart', []);
      $quantity = array_column($cartItems, 'quantity');
      // dd($quantity);
      $products = Product::whereIn('id', array_keys($cartItems))->get();
      return view('cart', ['products' => $products, 'cartItems'=>$cartItems]);
   }
   public function addToCart(Request $request){

      $productId = $request->input('product_id');
      $quantity = $request->input('customer_quantity');
    $product = product::find($productId);

    // dd($quantity);
      $cart = session()->get('cart', []);
      if (isset($cart[$productId])) {
         $cart[$productId]['quantity'] += $quantity;
     } else {
         $cart[$productId] = [
             'product_id' => $product->id,
             'photo'=>$product->photo,
             'name' => $product->product_name,
             'price' => $product->price,
             'quantity' => $quantity,
         ];
     }
      session()->put('cart', $cart);
    //   dd($cart);
      return redirect('cart');
   }
   public function complete($id)
   {
       $product = Product::find($id);
       return view('complete', ['product' => $product]);
   }
   function checkout(){
    $cartItems = session()->get('cart', []);
    $products = Product::whereIn('id', array_keys($cartItems))->get();
    // dd($products);
    return view('checkout', compact('products','cartItems'));
}
    public function ret_checkout(Request $request)
    {
        $cartItems = session()->get('cart', []);
        $products = Product::whereIn('id', array_keys($cartItems))->get();
        if(isset($products[0])){
            $request->validate(
                [
                    'first_name'=>'required',
                    'last_name'=>'required',
                    'country'=>'required',
                    'address'=>'required',
                    'city'=>'required',
                    'zip'=>'required',
                    'phone'=>'required',
                    'email'=>'required',
                ]
                );
// ****************************Customers Table*********************************************************
                $lastOrderNumber = Customer::max('order_number');
                $orderNumber = $lastOrderNumber ? $lastOrderNumber + 1 : 1;
                $customer = new Customer();
                $customer->order_number = str_pad($orderNumber, 8, '0', STR_PAD_LEFT);
                $customer->first_name = $request->input('first_name');
                $customer->last_name = $request->input('last_name');
                $customer->country = $request->input('country');
                $customer->address = $request->input('address');
                $customer->city = $request->input('city');
                $customer->zip = $request->input('zip');
                $customer->phone = $request->input('phone');
                $customer->email = $request->input('email');
                $customer->notes = $request->input('notes');
                $customer->save();
                session()->put('customer', $customer);

// ****************************Orders Table*********************************************************
        $order = new Order();
        $order->order_number = str_pad($orderNumber, 8, '0', STR_PAD_LEFT);
        $order->customer_name = $request->input('first_name') . ' ' . $request->input('last_name');
        $order->totalbill = 145;
        $order->status="Pending";
        $order->save();
        session()->put('order', $order);

// ****************************OrderItems Table*********************************************************
$cart = session()->get('cart', []);
// dd($cart);
foreach ($cart as $cart) {
        $orderItems = new OrderItem();
        $orderItems->order_number = str_pad($orderNumber, 8, '0', STR_PAD_LEFT);
        // $orderItems->product_code = 0;
        $orderItems->product_title = $cart['name'];
        // $orderItems->product_size = $cart["size"];
        // $orderItems->product_color = $cart["color"];
        $orderItems->product_quantity = $cart['quantity'];
        $orderItems->product_price = $cart['price'];
        // $orderItems->product_category = $cart['category'];
        $orderItems->save();
}


session()->forget('cart');
return redirect('/')->with('products', $products);
        }else{
        return redirect('/');
        }
    }

    public function order(){
        $orders = Order::all()->toArray();
    $customers = Customer::all()->toArray();
    return view('admin.orders', ['orders' => $orders], ['customers' => $customers]);
    }
    public function edit_order($id){
        $order = Order::find($id)->toArray();
        return view('admin.edit_order')->with('orders', $order);
    }

    public function ret_edit_order(Request $request, $id){
        $order = Order::find($id);

       $order->order_number = $request->input('order_number');
       $order->customer_name = $request->input('customer_name');
       $order->totalbill = $request->input('totalbill');
       $order->status = $request->input('status');
       $order->save();
       $orderArray = $order->toArray();
       return redirect()->route('admin.orders')->with('orders', [$orderArray]);
    }

    public function view_order($id)
    {
        $order = Order::find($id)->toArray();
        $orderNumber = $order['order_number'];
        $orderitem = OrderItem::where('order_number', $orderNumber)->get()->toArray();
        $customer = Customer::find($id)->toArray();

        return view('admin.view_order')->with(['customers' => [$customer], 'order' => $order, 'orderitems' => $orderitem, 'orders' => [$order]]);
    }

    public function contact(){
        $contacts = Contact::all(); // Retrieve all contacts from the database
        return view('admin.contact', ['tables' => $contacts]);
    }

public function ret_contact(Request $request){
    $contact = new Contact;
    $contact->address = $request["address"];
    $contact->email = $request["email"];
    $contact->phone = $request["phone"];
    $contact->save();
 return view('admin.contact');
}
// function front_contact(){
//     $latestContact = Contact::latest('id')->first();
//     return view('add_contact')->with('add_contact', $latestContact);
// }

public function front_contact(){
    $latestContact = Contact::latest('id')->first();

    if ($latestContact) {
        return view('add_contact', ['add_contact' => $latestContact]);
    } else {
        // Handle the case when no contact is found
        return view('add_contact'); // Or show an appropriate message
    }
}


function home_settings(){
    return view('admin.home_settings');
}

function ret_home_settings(Request $request){

    $image = $request->file('photo')->getClientOriginalName();
    $request->file('photo')->move(public_path('/assets/img'), $image);
          $title=$request->input('title');
          $description=$request->input('description');

          $photo=$request->file('photo');
          $data=array('title'=>$title,
          'description'=>$description,
          'photo' => '/assets/img/' . $image,
      );
          DB::table('homes')->insert($data);

          $home = DB::table('homes')->get();

          $homeArray = json_decode(json_encode($home), true);
    return redirect('/admin/home-settings')->with('home', $homeArray);
}
public function delete_product($id)
{
    $product = Product::find($id);
    $product->delete();
    return redirect('/admin/products');
}
public function edit_product($id){
    $products = Product::find($id);
    // $variants_no = session('variants_no');
    // dd($variants_no);
    return view('admin.edit_products')->with(['products'=>$products]);
}

public function ret_edit_product(Request $request, $id)
{

// Handle product editing
$product = Product::find($id);
$product->product_feature = $request->input('product_feature');
$product->product_name = $request->input('product_name');
$product->price = $request->input('price');
$product->product_quantity = $request->input('product_quantity');
$product->product_description = $request->input('product_description');

// Check if a new image is uploaded
if ($request->hasFile('photo')) {
    $image = $request->file('photo');

    // Delete the old image if it exists
    if ($product->photo) {
        Storage::delete($product->photo);
    }

    $imagePath = '/backend/assets/img/' . $image->getClientOriginalName();
    $image->move(public_path('/backend/assets/img/'), $imagePath);
    $product->product_image = $imagePath;
}

$product->save();


return redirect()->route('admin.products')->with('success', 'Product updated successfully');
}

}
