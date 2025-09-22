<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Dummy categories
        $categories = collect([
            (object)['id' => 1, 'name' => 'Berita'],
            (object)['id' => 2, 'name' => 'Teknologi'],
            (object)['id' => 3, 'name' => 'Studi Kasus'],
        ]);

        // Dummy articles
        $dummyArticles = collect(range(1, 20))->map(function ($i) {
            $categoryNames = ['Berita', 'Teknologi', 'Studi Kasus'];
            $categoryIndex = $i % 3;

            return (object)[
                'id' => $i,
                'title' => "Ini Judul Artikel Dummy ke-$i Tentang Energi CNG",
                'category' => (object)[
                    'id' => $categoryIndex + 1,
                    'name' => $categoryNames[$categoryIndex],
                ],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'published_at' => Carbon::now()->subMonths($i),
                'thumbnail_url' => 'assets/layanan/l2.png',
            ];
        });

        // Filtering
        $articlesCollection = $dummyArticles
            ->when(
                $request->filled('search'),
                fn($q) =>
                $q->filter(fn($a) => str_contains(strtolower($a->title), strtolower($request->search)))
            )
            ->when(
                $request->filled('category'),
                fn($q) =>
                $q->filter(fn($a) => $a->category->id == $request->category)
            )
            ->when(
                $request->filled('year'),
                fn($q) =>
                $q->filter(fn($a) => $a->published_at->year == $request->year)
            )
            ->when(
                $request->filled('month'),
                fn($q) =>
                $q->filter(fn($a) => $a->published_at->month == $request->month)
            );

        // Pagination
        $perPage = 12;
        $currentPage = Paginator::resolveCurrentPage('page');
        $currentItems = $articlesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $articles = new LengthAwarePaginator(
            $currentItems,
            $articlesCollection->count(),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        $articles->withQueryString();

        return view('landing_page.article.index', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
