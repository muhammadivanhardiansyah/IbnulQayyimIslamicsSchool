<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'favicon',
        'logo',
        'hero_bg',
        'hero_grafis',
        'hero_heading',
        'hero_text',
        'link_video',
        'address',
        'phone',
        'email',
        'maps',
        'telegram',
        'facebook',
        'instagram',
        'youtube',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('settings') // Koleksi gambar
             ->singleFile() // Pastikan hanya ada satu file (misalnya gambar sampul)
             ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif']); // Validasi tipe MIME gambar

        $this->addMediaCollection('documents') // Koleksi dokumen
             ->acceptsMimeTypes(['application/pdf']); // Validasi hanya PDF
    }
}
