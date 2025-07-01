<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function index()
    {
        $cart = $this->getCartFromCookie();
        $cartItems = [];
        $total = 0;

        if (!empty($cart)) {
            $productIds = array_keys($cart);
            $products = Product::whereIn('id', $productIds)->get();

            foreach ($products as $product) {
                $quantity = $cart[$product->id];
                $price = $product->sale_price ?? $product->price;
                $subtotal = $price * $quantity;
                
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'price' => $price,
                    'subtotal' => $subtotal
                ];
                
                $total += $subtotal;
            }
        }

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $quantity = $request->input('quantity', 1);

        $cart = $this->getCartFromCookie();
        
        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        $this->saveCartToCookie($cart);

        return response()->json([
            'success' => true,
            'message' => 'تم إضافة المنتج إلى السلة',
            'cart_count' => $this->getCartCount($cart)
        ]);
    }

    public function update(Request $request, $productId)
    {
        $quantity = $request->input('quantity', 1);
        
        if ($quantity <= 0) {
            return $this->remove($productId);
        }

        $cart = $this->getCartFromCookie();
        
        if (isset($cart[$productId])) {
            $cart[$productId] = $quantity;
            $this->saveCartToCookie($cart);
        }

        return response()->json([
            'success' => true,
            'message' => 'تم تحديث السلة',
            'cart_count' => $this->getCartCount($cart)
        ]);
    }

    public function remove($productId)
    {
        $cart = $this->getCartFromCookie();
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            $this->saveCartToCookie($cart);
        }

        return response()->json([
            'success' => true,
            'message' => 'تم حذف المنتج من السلة',
            'cart_count' => $this->getCartCount($cart)
        ]);
    }

    public function clear()
    {
        Cookie::queue(Cookie::forget('cart'));
        
        return response()->json([
            'success' => true,
            'message' => 'تم مسح السلة',
            'cart_count' => 0
        ]);
    }

    public function getCount()
    {
        $cart = $this->getCartFromCookie();
        return response()->json(['count' => $this->getCartCount($cart)]);
    }

    private function getCartFromCookie()
    {
        $cart = Cookie::get('cart');
        return $cart ? json_decode($cart, true) : [];
    }

    private function saveCartToCookie($cart)
    {
        Cookie::queue('cart', json_encode($cart), 60 * 24 * 30); // 30 days
    }

    private function getCartCount($cart)
    {
        return array_sum($cart);
    }
}
