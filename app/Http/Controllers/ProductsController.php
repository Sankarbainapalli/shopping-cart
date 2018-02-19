<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\User;
use Auth;
use App\Http\Requests;
use Session;
use App\Contact;
 use App\Cart;
 use Stripe\Charge;
  use Stripe\Stripe;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('shop.index')->with('product',$product);

    }


    
    public function getAdd(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
    
        $cart = new Cart($oldCart);
         $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);

        // dd($request->session()->get('cart'));
        return redirect('/shoppingcart');

    }





    public function home()
    {
        return view('user.home1');
    }
      public function about()
    {
        return view('user.about');
    }
        public function contact()
    {
        return view('user.contact');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.signup');
    }

    public function getSignin(){

        return view('user.signin');
    }



    //checkout
    public function checkout(){
          if(!Session::has('cart')){
            return view('shop.shoppingcart');

        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
       $total = $cart->totalPrice;

        return view('shop.checkout',['total' => $total]);
    }
//postCheckout
     public function postCheckout(Request $request){
          if(!Session::has('cart')){
            return redirect('/shoppingcart');

        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
       // $total = $cart->totalPrice;

        Stripe::setApiKey('sk_test_1EOALhyajS1UHpc8OMconT22
');
        try{
            Charge::create(array(
  "amount" => $cart->totalPrice * 100,
  "currency" => "usd",
  "source" => $request->input('stripeToken'),// obtained with Stripe.js
  "description" => "text charge"
));
        }catch(\Exception  $e){
            return redirect('/checkout')->with('error',$e->getMessage());
        }
        Session::forget('cart');
        return redirect('/contact')->with('success',"successfully purcheged");

    }



//dashboard

    public function getDashboard(){

       
        if(!Session::has('cart')){
            return view('shop.shoppingcart',['products' => null]);

        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shop.shoppingcart',['products'=> $cart->items, 'totalPrice' => $cart->totalPrice]);

     
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Respons
     */



     public function post(){

        return view('user.new');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[

           'title' => 'required',
           'imgpath' => 'required',
           'price' => 'required',
           'description' => 'required'


        ]);
        $products = new Product;
        $products->title =$request->input('title');
         $products->imgpath =$request->input('imgpath');
           $products->prices =$request->input('price');
            $products->description =$request->input('description');
            $products->save();

            return redirect('/shoppingcart')->with('users','successfully register');


           
    }
    //   public function postCheckout(Request $request)
    // {
    //     //
    //     $this->validate($request,[

    //        'title' => 'required',
    //        'imgpath' => 'required',
    //        'price' => 'required',
    //        'description' => 'required'


    //     ]);
    //     $orders = new Order;
    //     $orders->name =$request->input('title');
    //      $orders->address =$request->input('imgpath');
    //       $orders ->cardholdername =$request->input('price');
    //       $orders ->cardnumber =$request->input('description');
    //        $orders ->expiremonth =$request->input('description');
    //         $orders ->expireyear =$request->input('description');
    //          $orders ->cvc =$request->input('description');
    //        $orders->save();

    //         return redirect('/shoppingcart')->with('users','successfully register');


           
    // }
    public function postContact(Request $request){
        $contacts = new Contact;
        $contacts->email =$request->input('email');
         $contacts->message =$request->input('message');
         $contacts->save();
         return redirect('/shoppingcart');

    }

    public function postSign(Request $request){


         $this->validate($request,[

           
           'email' => 'required',
           'password' => 'required'


        ]);
         if(Auth::attempt([

                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),


            ])){
                return redirect('/shoppingcart')->with('users','successfully login');
            }
            
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
