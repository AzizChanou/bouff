<?php

namespace App\Http\Controllers;

use App\Models\Eatery;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderItem;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        //liste des commandes utilisateur
        $order_items = Order::join('order_items', 'orders.id', 'order_items.order_id')
            ->where('user_id', Auth::user()->id)
            ->join('food', 'food.id', 'order_items.food_id')
            ->get();

        $getOrders = Auth::user()->orders;

        $orders = [];

        for ($i = 0; $i < count($getOrders); $i++) {
            $order = [
                'id' => $getOrders[$i]->id,
                'status' => $getOrders[$i]->status,
                'total_amount' => $getOrders[$i]->total_amount,
                'order_items' => []
            ];
            $orders[] = $order;
        }

        for ($i = 0; $i < count($getOrders); $i++) {
            for ($j = 0; $j < count($order_items); $j++) {
                if ($order_items[$j]->order_id === $getOrders[$i]->id) {
                    array_push($orders[$i]['order_items'], [
                        'quantity' => $order_items[$j]->quantity,
                        'name' => $order_items[$j]->name,
                        'price' => $order_items[$j]->price,
                    ]);
                }
            }
        }

        return Inertia::render('Order/User', [
            'orders' =>  $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eatery()
    {
        /*  $order_items = Order::join('order_items', 'orders.id', 'order_items.order_id')
            ->where('orders.eatery_id', Auth::user()->eatery->id)
            ->where('orders.status_payment', true)
            ->join('food', 'food.id', 'order_items.food_id')
            ->orderBy('orders.created_at', 'asc')
            ->get();

        $getOrders = Auth::user()->eatery->orders;

        $orders = [];

        for ($i = 0; $i < count($getOrders); $i++) {
            if ($getOrders[$i]->status_payment && ($getOrders[$i]->status === 'Treatment' || $getOrders[$i]->status === 'Preparation')) {
                $order = [
                    'id' => $getOrders[$i]->id,
                    'phone' => $getOrders[$i]->phone,
                    'comment' => $getOrders[$i]->comment,
                    'status_payment' => true,
                    'status' => $getOrders[$i]->status,
                    'total_amount' => $getOrders[$i]->total_amount,
                    'order_items' => []
                ];
                $orders[] = $order;
            }
        }
        for ($i = 0; $i < count($orders); $i++) {
            for ($j = 0; $j < count($order_items); $j++) {
                if ($order_items[$j]->order_id === $orders[$i]['id']) {
                    array_push($orders[$i]['order_items'], [
                        'quantity' => $order_items[$j]->quantity,
                        'name' => $order_items[$j]->name,
                        'price' => $order_items[$j]->price,
                    ]);
                }
            }
        } */

        $orders = Order::with(['orderItems.food', 'user'])->where('eatery_id', Auth::user()->eatery->id)->whereIn('status', ['Treatment', 'Preparation'])->orderBy('created_at', 'desc')->get();

        return Inertia::render('Order/Eatery', [
            'orders' =>  $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function treatedeatery()
    {
        //liste des commandes restaurant attribuées
        /* $order_items = Order::join('order_items', 'orders.id', 'order_items.order_id')
            ->where('orders.eatery_id', Auth::user()->eatery->id)
            ->where('orders.status_payment', true)
            ->where('orders.status', '<>', 'Treatment')
            ->orWhere('orders.status', '<>', 'Preparation')
            ->join('food', 'food.id', 'order_items.food_id')
            ->get();

        $getOrders = Auth::user()->eatery->orders;

        $orders = [];

        for ($i = 0; $i < count($getOrders); $i++) {
            if ($getOrders[$i]->status_payment) {
                $order = [
                    'id' => $getOrders[$i]->id,
                    'phone' => $getOrders[$i]->phone,
                    'address' => $getOrders[$i]->address,
                    'comment' => $getOrders[$i]->comment,
                    'status' => $getOrders[$i]->status,
                    'total_amount' => $getOrders[$i]->total_amount,
                    'order_items' => []
                ];
                $orders[] = $order;
            }
        }

        for ($i = 0; $i < count($getOrders); $i++) {
            for ($j = 0; $j < count($order_items); $j++) {
                if ($order_items[$j]->order_id === $getOrders[$i]->id) {
                    array_push($orders[$i]['order_items'], [
                        'quantity' => $order_items[$j]->quantity,
                        'name' => $order_items[$j]->name,
                        'price' => $order_items[$j]->price,
                    ]);
                }
            }
        } */
        $orders = Order::with(['orderItems.food', 'user'])->where('eatery_id', Auth::user()->eatery->id)->whereIn('status', ['Retrieve', 'Delivered'])->get();

        return Inertia::render('Eatery/Order', [
            'orders' =>  $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deliverer()
    {
        /*  
        $order_items = Order::join('order_items', 'orders.id', 'order_items.order_id')
            ->where('orders.status_payment', true)
            ->where('orders.deliverer_id', null)
            ->where('orders.status', '<>', 'Retrieve')
            ->where('orders.status', '<>', 'Delivered')
            ->join('food', 'food.id', 'order_items.food_id')
            ->get();



        $getOrders = Eatery::join('orders', 'orders.eatery_id', 'eateries.id')
            ->where('status_payment', true)
            ->where('deliverer_id', null)
            ->where('orders.status', '<>', 'Retrieve')
            ->where('orders.status', '<>', 'Delivered')
            ->get();

        $orders = [];

        for ($i = 0; $i < count($getOrders); $i++) {
            $order = [
                'id' => $getOrders[$i]->id,
                'phone' => $getOrders[$i]->phone,
                'address' => $getOrders[$i]->address,
                'comment' => $getOrders[$i]->comment,
                'status' => $getOrders[$i]->status,
                'total_amount' => $getOrders[$i]->total_amount,
                'order_items' => []
            ];
            $orders[] = $order;
        }

        for ($i = 0; $i < count($getOrders); $i++) {
            for ($j = 0; $j < count($order_items); $j++) {
                if ($order_items[$j]->order_id === $getOrders[$i]->id) {
                    array_push($orders[$i]['order_items'], [
                        'quantity' => $order_items[$j]->quantity,
                        'name' => $order_items[$j]->name,
                        'price' => $order_items[$j]->price,
                    ]);
                }
            }
        }
        */

        $orders = Order::with(['orderItems.food', 'user'])->where('deliverer_id', null)->whereIn('status', ['Treatment', 'Preparation'])->get();

        return Inertia::render('Order/Deliverer', [
            'orders' =>  $orders
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function treateddeliverer()
    {
        /* $order_items = Order::join('order_items', 'orders.id', 'order_items.order_id')
            ->where('orders.status_payment', true)
            ->where('orders.deliverer_id', Auth::user()->deliverer->id)
            ->join('food', 'food.id', 'order_items.food_id')
            ->get();

        $getOrders = Auth::user()->deliverer->orders;

        $orders = [];

        for ($i = 0; $i < count($getOrders); $i++) {
            $order = [
                'id' => $getOrders[$i]->id,
                'phone' => $getOrders[$i]->phone,
                'address' => $getOrders[$i]->address,
                'comment' => $getOrders[$i]->comment,
                'status' => $getOrders[$i]->status,
                'total_amount' => $getOrders[$i]->total_amount,
                'order_items' => []
            ];
            $orders[] = $order;
        }

        for ($i = 0; $i < count($getOrders); $i++) {
            for ($j = 0; $j < count($order_items); $j++) {
                if ($order_items[$j]->order_id === $getOrders[$i]->id) {
                    array_push($orders[$i]['order_items'], [
                        'quantity' => $order_items[$j]->quantity,
                        'name' => $order_items[$j]->name,
                        'price' => $order_items[$j]->price,
                    ]);
                }
            }
        } */
        $orders = Order::with(['orderItems.food', 'user'])->where('deliverer_id', Auth::user()->deliverer->id)->whereIn('status', ['Retrieve', 'Delivered'])->get();
        return Inertia::render('Deliverer/Order', [
            'orders' =>  $orders
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
        $kkiapay = new \Kkiapay\Kkiapay(
            env('KKIPA_PUBLIC_KEY'),
            env('KKIPA_PRIVAYE_KEY'),
            env('KKIPA_SECRET_KEY'),
            $sandbox = true
        );

        $totalPrice = 0;
        for ($i = 0; $i < count($request->cart["cart"]); $i++) {
            $food = Food::findOrFail($request->cart["cart"][$i]["food"]["id"]);
            $totalPrice += $food->price * $request->cart["cart"][$i]["quantity"];
        }

        $totalPrice += (500 + ($totalPrice * 0.01));

        $order =  Order::create([
            'comment' => $request->comment,
            'phone' => $request->phone,
            'status_payment' => true,
            'address' => $request->address,
            'total_amount' =>  $totalPrice,
            'user_id' => Auth::user()->id,
            'eatery_id' => $request->cart["cart"][0]["food"]["eatery_id"],
        ]);

        for ($i = 0; $i < count($request->cart["cart"]); $i++) {
            OrderItem::create([
                'order_id' => $order->id,
                'quantity' => $request->cart["cart"][$i]["quantity"],
                'price' => $request->cart["cart"][$i]["food"]["price"],
                'food_id' => $request->cart["cart"][$i]["food"]["id"],
            ]);
        }

        return redirect()->back()->with('success', 'Commande effectuée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findorfail($id);
        return redirect()->back()->with('order', $order);
        /*  return Inertia::render('Order/Eatery', [
            'order' =>  $order
        ]); */
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ready($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Preparation';
        $order->save();
        return redirect()->back()->with('success', 'Commande prête');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrieve($id)
    {
        $order = Order::findOrFail($id);
        if ($order->status === 'Preparation') {
            $order->status = 'Retrieve';
            $order->save();
            return redirect()->back()->with('success', 'Commande récupérée');
        } else {
            return redirect()->back()->with('error', 'Commande pas encore prête');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delivered($id)
    {
        $codeId = substr($id, 9);
        $order = Order::find($codeId);
        if ($order === null) {
            return redirect()->back()->with('error', 'Aucune commande ne correspond !');
        } else {
            $order->status = 'Delivered';
            $order->save();
            return redirect()->back()->with('success', 'Commande livrée');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reserve($id)
    {
        $order = Order::findOrFail($id);
        $order->deliverer_id = Auth::user()->deliverer->id;
        $order->save();
        return redirect()->back()->with('success', 'Commande réservée');
    }
}
