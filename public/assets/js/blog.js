// khởi tạo markdown editter
var simplemde = new SimpleMDE({ element: $("#post-blog-content")[0], spellChecker: false, });
var token = $('meta[name="csrf-token"]').attr('content');

/****** Mở thư viện ảnh *****************************/
// Listen to the fileManager
var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];
var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

var fileManagerTarget = '';
// Bắt sự kiện chọn ảnh từ popup
eventer(messageEvent,function(e) {
	var tempUrl = e.data.url;
	var imgUrl = "resources/upload/"+tempUrl.split("upload/")[1]; // tách lấy url thật
	switch (fileManagerTarget) {

		case 'new-blog-thumbnail':{
			//console.log("insert new thumbnail");
			$("#blog-thumbnail").val(imgUrl);
			$(".blog-upload-image").css("background", "#327ec2");
		}
			break;

		case 'change-profile-avatar':{
			//console.log("insert new thumbnail");
			$(".profile-avatar").attr('src', "../"+imgUrl);
			updateProfileAvatar(imgUrl);
		}
			break;

		default:{
			console.log("update start thumbnail");
			updateBlogThumbnail(fileManagerTarget.split("blog-thumbnail-")[1], imgUrl);
		}
			break;
	}
	fileManagerTarget = '';
	dialogInstance.close();
},false);

var dialogInstance;

// Bật popup quản lý ảnh
function OpenFileManager(selector) {
	fileManagerTarget = selector;
	BootstrapDialog.show({
		size: BootstrapDialog.SIZE_WIDE,
		draggable: true,
		title: 'Quản lý tài nguyên ảnh',
		message: '<div class="embed-responsive embed-responsive-16by9">' +
		' <iframe class="embed-responsive-item" src="../resources/assets/plugin/tinymce/filemanager/dialog.php?type=1&crossdomain=1">' +
		'</iframe></div>',
		buttons: [{
			label: 'Đóng',
			action: function(dialogRef){
				dialogRef.close();
			}
		}],
		onshow: function(dialogRef){
			dialogInstance = dialogRef;
		}
	});

}

function CloseInstantPopup() {dialogInstance.close();}


//bắt sự kiện click chuột focus vào khu vực post bài
$(".blog-post-focus").click(function(){
	$(".post-blog-title").css("display", "block");
	$(".blog-upload-image").css("display", "block");
	$(".post-blog-brief").css("display", "block");
	$(".post-bottom-area").css("display", "block");
});

//sửa avatar người dùng
function updateProfileAvatar(url){
	var data = {
		'_token': token,
		'avatar': url
	};

	console.log(data);

	$.ajax({
		url: "https://www.htbros.com/changeAvatar",
		type:"POST",
		beforeSend: function (xhr) {
			if (token) return xhr.setRequestHeader('X-CSRF-TOKEN', token);
		},
		data: data,
		success:function(response){

			//location.reload();
			console.log(response);

		},error:function(){
			alert("lỗi");
		},
		async:   false
	});
}


//thêm một bài viết mới
function addNewBlogArticle(){

	var data = {
		'_token': token,
		'category' : $("#blog-category").val(),
		'title' :    $("#post-blog-title").val(),
		'brief' :    $("#post-blog-brief").val(),
		'thumbnail': $("#blog-thumbnail").val(),
		'content' :  simplemde.value(),
		'keyword' : $(".blog-tags").select2("val").join(" , ")
	};

	console.log(data);

	$.ajax({
		url: "https://www.htbros.com/blog/createNewBlog",
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


function updateBlogThumbnail(id, thumbnail){

	var data = {
		'_token'   : token,
		'id'  : id,
		'thumbnail' : thumbnail
	};

	console.log(data);

	$.ajax({
		url: "https://www.htbros.com/blog/doUpdateBlogThumbnail",
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

//sửa trạng thái public, private
function updateBlogItemStatus(id, status){

	var data = {
		'_token'   : token,
		'id'  : id,
		'status' : status
	};

	$.ajax({
		url: "https://www.htbros.com/blog/doUpdateBlogItemStatus",
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
		'title'   : $("#article-detail-title").html(),
		'content'  : sContent.value()
	};

	console.log(data);

	$.ajax({
		url: "https://www.htbros.com/blog/doUpdateBlogContent",
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


function deleteBlogArticle(id){

	var data = {
		'_token': token,
		'id': id
	};

	console.log(data);

	$.ajax({
		url: "https://www.htbros.com/blog/deleteBlogItem",
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