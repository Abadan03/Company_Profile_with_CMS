<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Index
     */
    public function index(Request $request)
    {
        // Data dummy, ganti ORM lek wes konek database
        $allArticles = $this->getDummyArticles();
        $categories = $this->getDummyCategories();

        // Filtering
        $articlesCollection = $allArticles
            ->when($request->filled('search'), function ($collection) use ($request) {
                return $collection->filter(fn($article) => str_contains(strtolower($article->title), strtolower($request->search)));
            })
            ->when($request->filled('category'), function ($collection) use ($request) {
                return $collection->filter(fn($article) => $article->category->id == $request->category);
            })
            ->when($request->filled('year'), function ($collection) use ($request) {
                return $collection->filter(fn($article) => $article->published_at->year == $request->year);
            })
            ->when($request->filled('month'), function ($collection) use ($request) {
                return $collection->filter(fn($article) => $article->published_at->month == $request->month);
            });

        // Pagination
        $perPage = 12;
        $currentPage = Paginator::resolveCurrentPage('page');
        $currentItems = $articlesCollection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $articles = new LengthAwarePaginator($currentItems, $articlesCollection->count(), $perPage, $currentPage, ['path' => Paginator::resolveCurrentPath()]);
        $articles->withQueryString();

        return view('landing_page.article.index', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }

    /**
     * Detail Page
     */
    public function show($id)
    {
        $allArticles = $this->getDummyArticles();
        $article = $allArticles->firstWhere('id', $id);

        if (!$article) {
            abort(404);
        }

        return view('landing_page.article.detail', [
            'article' => $article,
            'allArticles' => $allArticles 
        ]);
    }

    /**
     * DUMMY Categories, lek wes konek database dihapus ae
     */
    private function getDummyCategories(): Collection
    {
        return collect([
            (object)['id' => 1, 'name' => 'Berita'],
            (object)['id' => 2, 'name' => 'Teknologi'],
            (object)['id' => 3, 'name' => 'Studi Kasus'],
        ]);
    }

    /**
     * DUMMY Articles, lek wes konek database dihapus ae
     */
    private function getDummyArticles(): Collection
    {
        return collect(range(1, 12))->map(function ($i) {
            $categoryNames = ['Berita', 'Teknologi', 'Studi Kasus'];
            $categoryIndex = ($i - 1) % 3;

            return (object)[
                'id' => $i,
                'title' => "Ini Judul Artikel Dummy ke-$i Tentang Energi CNG",
                'category' => (object)[
                    'id' => $categoryIndex + 1,
                    'name' => $categoryNames[$categoryIndex],
                ],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'published_at' => Carbon::now()->subMonths($i),
                'thumbnail_url' => 'assets/artikel/a' . $i . '.png',
            ];
        });
    }
}
