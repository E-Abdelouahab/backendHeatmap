<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Mentalome;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MentalomeController extends Controller
{
  function getDataMentalome(Request $request) {
    // Check if any filters are provided
    if (!$request->has('gene_ids')) {
        // No filters provided, return an empty response
        return response()->json([], 200);
    }

    $query = Mentalome::query();

    if ($request->has('sra')) {
        $query->where('sra', $request->input('sra'));
    }
    
    if ($request->has('expriment')) {
        $query->where('expriment', $request->input('expriment'));
    }  
    
    if ($request->has('disease')) {
        $query->where('disease', $request->input('disease'));
    }
    
    if ($request->has('gene_ids')) {
        $geneIds = $request->json('gene_ids');
        $query->whereIn('gene_ids', $geneIds);
    }

    // Retrieve all the filtered data from the query
    $filteredData = $query->get();

    // Return the filtered data as JSON response
    return response()->json($filteredData, 200);
}
public function getGene_ids(Request $request)
{
    try {
        $perPage = $request->input('perPage', 10); // Default items per page

        // Define the query
        $query = Mentalome::query();

        // Use pagination to retrieve data in chunks
        $data = $query->paginate($perPage);

        // Return the paginated data as JSON response
        return response()->json($data, 200);
    } catch (\Exception $e) {
        // Handle any exceptions that occur
        return response()->json(['error' => $e->getMessage()], 500);
    }
}




}

