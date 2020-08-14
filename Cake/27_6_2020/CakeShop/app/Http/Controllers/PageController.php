<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use Auth;

class PageController extends Controller
{
    //
    function getSlide() {

        $slide =Slide::all();
        $new_product= Product::where('new','1')->paginate(8);
        $top_product=Product::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide','new_product','top_product'));
    }
    function getTest() {
        echo "abc";
    }

    public function getLoaiSP($type) {
        $sp_theoloai=Product::where('id_type',$type)->get();

        $sp_khac=Product::where('id_type','<>',$type)->limit(3)->get();
        $loai=TypeProduct::all();
        $loai_sp= TypeProduct::where('id',$type)->first();

        return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

    function getChiTiet(Request $req) {
        $sanpham=Product::where('id',$req->id)->first();
        $sp_tuongtu=Product::where('id',$sanpham->id_type)->paginate(3);
        
        // lay cac san pham co new=1
        $sp_banchay=Product::where('promotion_price','=',0)->paginate(3);

        $sp_new = Product::select('id', 'name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new', 'created_at', 'updated_at')->where('new','>',0)->orderBy('updated_at','ASC')->paginate(3);											


        return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu','sp_banchay','sp_new'));
    }
    function getLienHe() {
        return view('page.lienhe');
    }

    function getGioiThieu() {
        return view('page.about');
    }

    function getAddToCart(Request $req,$id) {
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    function getDeleteCart(Request $req,$id) {
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart= new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->item>0)) {
            Session::put('cart',$cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    function getDatHang() {
        $oldCart = Session::get('cart');
       $cart = new Cart($oldCart);
       return view('page.checkout')->with(['cart','product_cart'=>$cart->items,
       'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
   }
    
    function postDatHang(Request $req) {
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    function getDangNhap() {
        return view('page.dangnhap');
    }
    function getDangKi() {
        return view('page.dangki');
    }
    function postDangKi(Request $request) {
        $user = new User();
        $user->email =  $request->input('txtEmail');
        $user->full_name = $request->input('txtFullName');
        
        $user->address = $request->input('txtAddress');
        $user->phone = $request->input('txtPhone');
        $password = $request->pwd;
        $reenter = $request->repwd;
        if($password!=$reenter){
            return $this->getDangKi()->with('thongbao','Mật khẩu bạn vừa nhập không chính xác');
            
        }
        else{
            $user->password = password_hash ($reenter, PASSWORD_DEFAULT);
            $user->save();
        }

        return redirect()->action("PageController@getDangNhap");
        
    }
}
