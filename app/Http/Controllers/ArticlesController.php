<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller {

    /**
     *Create a new articles controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index', 'show']);
    }
    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
        $limit = Input::get('limit') ?:5;
		$articles = Article::latest('published_at')->published()->paginate($limit)->getCollection();

        return view('articles.index', compact('articles'));
	}

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     * @internal param $id
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);

        flash()->success('Your article has been created');

        return redirect('articles');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article','tags'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        $this->SyncTags($article, $request->input('tag_list'));

        return redirect('articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        $article->tags()->detach();

        return redirect('articles');
    }

    /**
     * Sync up the last of tags in the database
     *
     * @param Article $article
     * @param array $tags
     */
    private function SyncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    /**
     * Save a new article
     *
     * @param ArticleRequest $request
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->SyncTags($article, $request->input('tag_list'));

        return $article;
    }

//    protected function respondWithPagination($articles, $data){
//        $data = array_merge($data, [
//           'paginator' => [
//               ''
//           ]
//        ]);
//    }

}
