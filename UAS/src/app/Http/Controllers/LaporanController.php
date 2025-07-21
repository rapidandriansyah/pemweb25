<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Server(
 *   url="http://localhost/api",
 *   description="API Server"
 * )
 * @OA\Tag(
 *   name="Laporans",
 *   description="API Endpoints for Laporan Management"
 * )
 */
class LaporanController extends Controller
{
    /**
     * @OA\Get(
     *   path="/laporans",
     *   tags={"Laporans"},
     *   summary="Get all laporans",
     *   security={{"ApiKeyAuth": {}}},
     *   @OA\Response(
     *     response=200,
     *     description="Success",
     *     @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Laporan"))
     *   )
     * )
     */
    public function index()
    {
        return response()->json(Laporan::all());
    }

    /**
     * @OA\Get(
     *   path="/laporans/{id}",
     *   tags={"Laporans"},
     *   summary="Get a single laporan by ID",
     *   security={{"ApiKeyAuth": {}}},
     *   @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *   @OA\Response(response=200, description="Success", @OA\JsonContent(ref="#/components/schemas/Laporan")),
     *   @OA\Response(response=404, description="Laporan not found")
     * )
     */
    public function show($id)
    {
        $laporan = Laporan::find($id);
        if (!$laporan) {
            return response()->json(['message' => 'Laporan not found'], 404);
        }
        return response()->json($laporan);
    }

    /**
     * @OA\Post(
     *   path="/laporans",
     *   tags={"Laporans"},
     *   summary="Create a new laporan",
     *   security={{"ApiKeyAuth": {}}},
     *   @OA\RequestBody(required=true, @OA\JsonContent(ref="#/components/schemas/Laporan")),
     *   @OA\Response(response=201, description="Laporan created", @OA\JsonContent(ref="#/components/schemas/Laporan"))
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'description' => 'required|string',
            'kategori' => 'required|string',
            'lokasi' => 'required|string',
            'foto' => 'nullable|string',
            'status' => 'nullable|string',
            'client_id' => 'nullable|exists:clients,id'
        ]);

        $laporan = Laporan::create($validated);
        return response()->json($laporan, 201);
    }

    /**
     * @OA\Put(
     *   path="/laporans/{id}",
     *   tags={"Laporans"},
     *   summary="Update an existing laporan",
     *   security={{"ApiKeyAuth": {}}},
     *   @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *   @OA\RequestBody(required=true, @OA\JsonContent(ref="#/components/schemas/Laporan")),
     *   @OA\Response(response=200, description="Laporan updated", @OA\JsonContent(ref="#/components/schemas/Laporan")),
     *   @OA\Response(response=404, description="Laporan not found")
     * )
     */
    public function update(Request $request, $id)
    {
        $laporan = Laporan::find($id);
        if (!$laporan) {
            return response()->json(['message' => 'Laporan not found'], 404);
        }

        $validated = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'kategori' => 'sometimes|required|string',
            'lokasi' => 'sometimes|required|string',
            'foto' => 'nullable|string',
            'status' => 'nullable|string',
            'client_id' => 'nullable|exists:clients,id'
        ]);

        $laporan->update($validated);
        return response()->json($laporan);
    }

    /**
     * @OA\Delete(
     *   path="/laporans/{id}",
     *   tags={"Laporans"},
     *   summary="Delete a laporan",
     *   security={{"ApiKeyAuth": {}}},
     *   @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *   @OA\Response(response=200, description="Laporan deleted"),
     *   @OA\Response(response=404, description="Laporan not found")
     * )
     */
    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        if (!$laporan) {
            return response()->json(['message' => 'Laporan not found'], 404);
        }
        $laporan->delete();
        return response()->json(['message' => 'Laporan deleted']);
    }
}
