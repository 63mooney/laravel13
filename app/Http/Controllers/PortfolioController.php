<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataPortfolio'] = Portfolio::all();
        return view('portfolio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['nama'] = $request->nama;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data = $request->except('foto');

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                                    ->store('foto', 'public');
}
        Portfolio::create($data);
        return redirect()->route('portfolio.index')->with('success', 'Portfolio berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Portfolio::findOrFail($id);

        return view('portfolio.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataPortfolio'] = Portfolio::findOrFail($id);
        return view('portfolio.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio_id = $id;
        $portfolio = Portfolio::findOrFail($portfolio_id);

        $portfolio->nama = $request->nama;
        $portfolio->birthday = $request->birthday;
        $portfolio->gender = $request->gender;
        $portfolio->email = $request->email;
        $portfolio->phone = $request->phone;

        $portfolio->save();
        return redirect()->route('portfolio.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.


     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
