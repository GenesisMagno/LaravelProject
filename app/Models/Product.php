<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'big',
        'medium',
        'platter',
        'tub'
    ];

    public static function destroyImage($imageName)
{
    // Define the path to the image in storage (assuming it's in the public directory)
    $imagePath =  $imageName;

    // Check if the file exists before attempting to delete it
    if (Storage::disk('public')->exists($imagePath)) {
        // Delete the file from storage
        Storage::disk('public')->delete($imagePath);
        
        return response()->json(['message' => 'Image deleted successfully']);
    }

    return response()->json(['message' => 'Image not found'], 404);
}
}
