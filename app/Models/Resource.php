<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
        'link',
        'file_path',
        'category_id',
        'is_approved',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}
}