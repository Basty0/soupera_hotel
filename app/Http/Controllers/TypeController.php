<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\TypeRequest;

/**
 * Class TypeController
 * @package App\Http\Controllers
 */
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::paginate();

        return view('type.index', compact('types'))
            ->with('i', (request()->input('page', 1) - 1) * $types->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = new Type();
        return view('type.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeRequest $request)
    {
        Type::create($request->validated());

        return redirect()->route('types.index')
            ->with('success', 'Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $type = Type::find($id);

        return view('type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = Type::find($id);

        return view('type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeRequest $request, Type $type)
    {
        $type->update($request->validated());

        return redirect()->route('types.index')
            ->with('success', 'Type updated successfully');
    }

    public function destroy($id)
    {
        Type::find($id)->delete();

        return redirect()->route('types.index')
            ->with('success', 'Type deleted successfully');
    }
}
