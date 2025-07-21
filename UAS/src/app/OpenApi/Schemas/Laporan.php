<?php
namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Laporan",
 *     type="object",
 *     title="Laporan",
 *     required={"id", "judul", "description", "kategori", "lokasi", "status"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="judul", type="string", example="Jalan Berlubang di Perempatan"),
 *     @OA\Property(property="description", type="string", example="Terdapat lubang cukup dalam yang membahayakan pengendara motor."),
 *     @OA\Property(property="kategori", type="string", enum={"berlubang", "rusak", "ambles"}, example="berlubang"),
 *     @OA\Property(property="lokasi", type="string", example="Jl. Sudirman No. 10, Tangerang"),
 *     @OA\Property(property="foto", type="string", nullable=true, example="01K0PRVTWVH53C88GP9DZP9R0R.jpg"),
 *     @OA\Property(property="status", type="string", enum={"parah", "biasa"}, example="parah"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-07-21T10:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-07-21T10:00:00Z")
 * )
 */
class Laporan {}
