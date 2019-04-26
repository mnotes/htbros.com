<?php
namespace App\Http\Controllers;
use App\Http\Models\Blog;
use Auth;

class AdminController extends Controller {

	//thay đổi avatar
	public function changeAvatar(){

		Auth::user()->avatar = $_POST['avatar'];
		Auth::user()->save();

		return Auth::user()->id;
	}

	//tạo bài mới trên blog
	public function createNewBlog(){

		$article = new Blog();
		$article->author_id = Auth::user()->id;
		$article->title    = $_POST['title'];
		$article->category = $_POST['category'];
		$article->thumbnail= $_POST['thumbnail'];
		$article->brief    = $_POST['brief'];
		$article->content  = $_POST['content'];
		$article->keyword  = $_POST['keyword'];
		$article->friendly_url = $article->getFriendlyUrl();
		$article->save();
		return;

	}

	//sửa trạng thái của status private ? ( 0 = true, 1 = false)
	public function doUpdateBlogItemStatus(){

		$article = Blog::find($_POST['id']);
		if($_POST['status'] == "private")
			$article->private   = 1;
		else
			$article->private   = 0;
		$article->save();

		return "success";
	}

	// cập nhật ảnh bìa bài viết blog
	public function doUpdateBlogThumbnail(){

		$article = Blog::find($_POST['id']);
		$article->thumbnail = $_POST['thumbnail'];
		$article->save();
	}

	//cập nhật thông tin bài viết
	public function doUpdateBlogContent(){

		$article = Blog::find($_POST['id']);

		$article->title   = $_POST['title'];
		$article->brief   = $_POST['brief'];
		$article->keyword   = $_POST['keyword'];
		$article->content = $_POST['content'];
		$article->friendly_url = $article->getFriendlyUrl();
		$article->save();
		return "success";
	}

	//xóa bài viết
	public function deleteBlogItem(){
		Blog::destroy($_POST['id']);
		return "success";
	}
}
