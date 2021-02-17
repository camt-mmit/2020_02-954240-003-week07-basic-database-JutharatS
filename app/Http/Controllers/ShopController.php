<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Shop;

class ShopController extends Controller
{
    private $title = 'Shop';

    function list(Request $request) {
        $data = $request->getQueryParams();
        $query = Shop::orderBy('code');
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
        $query->where(function($innerQuery) use ($word) {
        return $innerQuery
        ->where('code', 'LIKE', "%{$word}%")
        ->orWhere('name', 'LIKE', "%{$word}%")
        ->orWhere('owner', 'LIKE', "%{$word}%");
        
        });
        }

        return view('shop-list', [
        'title' => "{$this->title} : List",
        'term' => $term,
        'shop' => $query->paginate(5),
        ]);
        }

    function createForm() {
        return view('shop-create', [
        'title' => "{$this->title} : Create",
        ]);
        }
        
        function create(Request $request) {
        $shop = Shop::create($request->getParsedBody());
        
        return redirect()->route('shop-list');
        }

        function updateForm($shopCode) {
            $shop = Shop::where('code', $shopCode)->firstOrFail();

            return view('shop-update', [
                'title' => "{$this->title} : Update",
                'shop' => $shop,
                'submitMessage' => 'Update'
            ]);
        }

        function update(Request $request, $shopCode) {
            $shop = Shop::where('code', $shopCode)->firstOrFail();
            $shop->fill($request->getParsedBody());
            $shop->save();

            return redirect()->route('shop-view', [
                'shop' => $shop->code,
            ]);
        }

        function delete($shopCode) {
            $shop = Shop::where('code', $shopCode)->firstOrFail();
            $shop->delete();

            return redirect()->route('shop-list', [
            ]);
        }

    function show($shopCode) {
        $shop = Shop
        ::where('code', $shopCode)
        ->firstOrFail();
        
        return view('shop-view', [
            'title' => "{$this->title} : View",
            'shop' => $shop,
        ]);
    }
}
