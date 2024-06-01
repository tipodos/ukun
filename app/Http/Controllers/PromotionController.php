<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

/**
 * Class PromotionController
 * @package App\Http\Controllers
 */
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $promotions = Promotion::paginate(10);

        return view('promotion.index', compact('promotions'))
            ->with('i', (request()->input('page', 1) - 1) * $promotions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotion = new Promotion();
        return view('promotion.create', compact('promotion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'view' => 'required|boolean',
        ]);

        $imageName = time() . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('img/promo'), $imageName);

        $promotion = new Promotion([
            'title' => $request->title,
            'image_url' => $imageName,
            'view' => $request->view,
        ]);
        $promotion->save();
        return redirect()->route('promotions.index')
            ->with('success', 'Promotion created successfully.');
            
    }
    public function getActivePromotions()
    {
        $promotions = Promotion::where('view', true)->get();
        return response()->json($promotions);
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promotion = Promotion::find($id);

        return view('promotion.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::find($id);

        return view('promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Promotion $promotion
     * @return \Illuminate\Http\Response
     */

     public function updateVisibility(Request $request, $id)
     {
         $request->validate([
             'view' => 'required|boolean',
         ]);
 
         $promotion = Promotion::findOrFail($id);
         $promotion->view = $request->view;
         $promotion->save();
 
         return response()->json(['success' => true]);
     }

    public function update(Request $request, Promotion $promotion)
    {
        request()->validate(Promotion::$rules);

        $promotion->update($request->all());

        return redirect()->route('promotions.index')
            ->with('success', 'Promotion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id)->delete();

        return redirect()->route('promotions.index')
            ->with('success', 'Promotion deleted successfully');
    }
}
