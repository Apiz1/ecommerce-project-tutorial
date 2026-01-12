<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart;
use App\Models\Coupon; 
use App\Models\Address;   
use App\Models\Order; 
use App\Models\OrderItem;  
use App\Models\Transaction;
use App\Models\Slide;
use App\Models\Category;
use App\Models\Product;
use App\Models\Contact;
use Illuminate\Support\Facades\Session; // ← THIS WAS MISSING!
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $slides = Slide::where('status',1)->get()->take(3);
        $categories = Category::orderby('name')->get();
        $sproducts = Product::whereNotNull('sale_price')->where('sale_price','<>','')->inRandomOrder()->get()->take(8);
        $fproducts = Product::where('featured',1)->get()->take(8);
        return view('home.index',compact('slides','categories','sproducts','fproducts'));
    }

    public function orders()
    {
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        return view('home.orders',compact('orders'));   
    }

    public function order_details($order_id)
    {
        $order = Order::where('user_id',Auth::user()->id)->where('id',$order_id)->first();
        if($order)
        {
             $orderItems = OrderItem::where('order_id',$order->id)->orderBy('id')->paginate(12);
             $transaction = Transaction::where('order_id',$order->id)->first();
             return view('home.order_details',compact('order','orderItems','transaction'));
        }
        else
        {
            return redirect()->route('login');
        }
       
    }
    
    public function order_cancel(Request $request){
        $order = Order::find($request->order_id);
        $order->status = "canceled";
        $order->canceled_date = Carbon::now();
        $order->save();
        return back()->with('status',"Order has been Cancelled successfully");
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function contact_store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:100',
            'email'=>'required|email',
            'phone'=>'required|numeric|digits:10',
            'comment'=>'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comment = $request->comment;
        $contact->save();
        return redirect()->back()->with('success','Your Message has been sent successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $result = Product::where('name','LIKE',"%{$query}%")->get()->take(8);
        return response()->json($result);
    }
}
