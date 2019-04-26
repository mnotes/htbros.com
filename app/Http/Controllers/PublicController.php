<?php
namespace App\Http\Controllers;
use App\Http\Models\Blog;
use Auth, DB;

class PublicController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Điều khiển cho cả hệ thống
	|--------------------------------------------------------------------------
	*/

    // Hiển thị trang chủ
    public function getHomePage(){return view('home.home');}

	/* Trang chính application và các trang con của tab app */
    public function getAppPage(){               return view('product.apps');}
	public function getIntroCoDiem(){           return view('product.products.horses-chess-game');}
	public function getIntroTheGioiTrollface(){ return view('product.products.world-of-trollface');}

	/* Trang chính application và các trang con của tab services */
	public function getServicesPage(){    return view('services.services');}
	public function getAppDesignPage(){   return view('services.app-design');}
	public function getWebDesignPage(){   return view('services.web-design');}
	public function getKinectDesignPage(){return view('services.kinect-design');}
	public function getOrderServicePage(){return view('services.order-service');}


	/*** Blog và các thành phần liên quan ***/

	//lấy ra danh sách bài biết cho trang đầu
	public function getBlogPage(){

		// danh sách bài viết được phân trang
		if(Auth::check()){
			$articles = Blog::orderBy('created_at', 'desc')->paginate(5);
        }else{
			$articles = Blog::orderBy('created_at', 'desc')->where('private','=','0')->paginate(5);
        }

		$listCategory = Blog::where('private','=','0')->groupBy('cat');

		/* tạo url thân thiện cho tất cả các bài viết
        foreach($articles as $article){
            $article->friendly_url = $article->getFriendlyUrl();
            $article->save();
        }*/


		return view('blog.blog')
			->with('articles', $articles)
			->with("listCategory", $listCategory);
	}

	// Xem 1 bài viết chi tiết theo id
	public function getBlogDetail($id){

		//tăng view cho bài viết
        $article = Blog::find($id);
		$article->views +=1;
		$article->save();

		//bài viết liên quan
        $suggestArticle = Blog::where('id', '<>', $id)
        ->orderBy('views', 'desc')->paginate(3);

        return view('blog.blog-detail')
        	->with("suggestArticle", $suggestArticle)
			->with("article",$article);
    }

	// Lấy thông tin rss của blog
	public function getRssPage(){
		$listArticles = Blog::orderBy('id', 'desc')->get();
		return response($listArticles);
	}

	// Đăng ký email
	public function registerMail(){
		return abort(404);
	}

	// Hiển thị trang about
	public function getAboutPage(){return view('about.about');}

	// Trang tìm kiếm
	public function getSearchPage(){
		$keyword = $_GET['key'];
		return view('search.search')
			->with("keyword", $keyword);
	}
}
