<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Job extends Model
{
    use HasFactory;

    public static array $experience = ['entry', 'intermediate', 'senior'];
    public static array $category = ['IT', 'Finance', 'Sales', 'Marketing'];

    public function scopeFilter(Builder | QueryBuilder $query, array $filters): Builder | QueryBuilder
    {
        return $query
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%');
                });
            })
            ->when($filters['min_salary'] ?? null, function ($query, $min_salary) {
                $query->where('salary', '>=', $min_salary);
            })
            ->when($filters['max_salary'] ?? null, function ($query, $max_salary) {
                $query->where('salary', '<=', $max_salary);
            })
            ->when($filters['experience'] ?? null, function ($query, $experience) {
                $query->where('experience', '=', $experience);
            })
            ->when($filters['category'] ?? null, function ($query, $category) {
                $query->where('category', '=', $category);
            });
    }
}
