<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $title = 'Product';

    function list(Request $request) {
        $data = $request->getQueryParams();
        $query = Product::orderBy('code');
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
        $query->where(function($innerQuery) use ($word) {
        return $innerQuery
        ->where('code', 'LIKE', "%{$word}%")
        ->orWhere('name', 'LIKE', "%{$word}%");
        
        });
        }

        return view('product-list', [
        'title' => "{$this->title} : List",
        'term' => $term,
        'products' => $query->paginate(5),
        ]);
        } 

        function createForm() {
            return view('product-create', [
            'title' => "{$this->title} : Create",
            ]);
            }
            
            function create(Request $request) {
            $product = Product::create($request->getParsedBody());
            
            return redirect()->route('product-list');
            }

            function updateForm($productCode) {
                $product = Product::where('code', $productCode)->firstOrFail();

                return view('product-update', [
                    'title' => "{$this->title} : Update",
                    'product' => $product,
                    'submitMessage' => 'Update'
                ]);
            }

            function update(Request $request, $productCode) {
                $product = Product::where('code', $productCode)->firstOrFail();
                $product->fill($request->getParsedBody());
                $product->save();

                return redirect()->route('product-view', [
                    'product' => $product->code,
                ]);
            }

            function delete($productCode) {
                $product = Product::where('code', $productCode)->firstOrFail();
                $product->delete();

                return redirect()->route('product-list', [
                ]);
            }

    function show($productCode) {
        $product = Product
        ::where('code', $productCode)
        ->firstOrFail();
        
        return view('product-view', [
            'title' => "{$this->title} : View",
            'product' => $product,
        ]);
    }

}

    