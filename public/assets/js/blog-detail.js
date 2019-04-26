// khởi tạo markdown editter
var token = $('meta[name="csrf-token"]').attr('content');
var bContent = null;

//enable chế độ sửa bài viết
function enableEditBlogArticle(){

	$('.article-detail-title').css("display","none");
	$(".article-detail-content").css("display","none");
	$(".edit-blog-article-container").css("display","block");
    $(".hidden-input").css("display","block");
	if(bContent == null) bContent = new SimpleMDE({ element: $(".edit-blog-article-content")[0], spellChecker: false });
}

//ẩn chế độ sửa bài viết
function cancelChangeBlogArticle(){

    $('.article-detail-title').css("display","block");
    $(".hidden-input").css("display","none");
    $(".article-detail-content").css("display","block");
    $(".edit-blog-article-container").css("display","none");
}



//sửa trạng thái public, private
function updateBlogItemStatus(id, status){

	var data = {
		'_token'   : token,
		'id'  : id,
		'status' : status
	};

	$.ajax({
		url: "../../blog/doUpdateBlogItemStatus",
		type:"POST",
		beforeSend: function (xhr) {
			if (token) return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		},
		data: data,
		success:function(response){
			location.reload();
		},error:function(){
			alert("lỗi");
		},
		async:   false
	});
}

//lưu lại tiêu đề hoặc nội dung khi vừa sửa xong
function saveBlogArticleChange(id){

	var data = {
		'_token' : token,
		'id'     : id,
		'title'  : $(".article-input-update-title").val(),
        'brief'  : $(".article-input-update-brief").val(),
        'keyword': $(".article-input-update-keyword").val(),
		'content': bContent.value()
	};

	//console.log(data);

	$.ajax({
		url: "../../blog/doUpdateBlogContent",
		type:"POST",
		beforeSend: function (xhr) {
			if (token) return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		},
		data: data,
		success:function(response){
			location.reload();

		},error:function(){
			alert("lỗi");
		},
		async:   false
	});
}