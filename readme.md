<br/><br/>

<p align="center"><a href="https://www.htbros.com" target="_blank" rel="noopener noreferrer"><img width="250" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/public/assets/image/logo-active.png" alt="Htbros logo"></a></p>

<p align="center">
	<a href="#"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
  	<a href="#"><img src="https://img.shields.io/circleci/project/github/vuejs/vue/dev.svg" alt="Build Status"></a>
</p>

<br/>

# Chia sẻ source code và themes website giới thiệu công ty

### Website: [https://www.htbros.com](https://www.htbros.com)

Chia sẻ mã nguồn và giao diện của [website](https://www.htbros.com) giới thiệu công ty, có kèm database cho trang bài viết blog, mục tiêu mình công khai dự án này nhằm giúp lập trình viên tiết kiệm thời gian cho các dự án website giới thiệu công ty nhỏ lẻ hoặc có nguồn để tham khảo

Bạn có thể ghé thăm [blog](https://www.trungnotes.com) của tôi để ủng hộ, đó là nguồn động lực lớn để tôi tiếp tục thực hiện các dự án công cộng

## Demo

Bạn có thể xem trang demo [ở đây](https://www.htbros.com)

ScreenShots một vài màn hình trong dự án

<!--gold start-->
<table>
  <tbody>
    <tr>
      <td align="center" valign="middle">
        <a href="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img1.png" target="_blank">
          <img width="148px" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img1.png">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img2.png" target="_blank">
          <img width="148px" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img2.png">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img3.png" target="_blank">
          <img width="148px" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img3.png">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img4.png" target="_blank">
          <img width="148px" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img4.png">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img5.png" target="_blank">
          <img width="148px" src="https://raw.githubusercontent.com/trungnotes/htbros.com/master/screenshots/img5.png">
        </a>
      </td>
    </tr>
  </tbody>
</table>
<!--gold end-->

## Môi trường

Apache/Nginx

Laravel 5.4.11

MySQL 5.5

PHP 7.0

## Cài đặt

Clone dự án từ github

```
git clone git@github.com:trungnotes/htbros.com.git
```

Vào thư mục

```
cd htbros.com/
```

Cài đặt các components qua composer

```
composer install
```

**Kết nối database**

> Bạn hãy tạo databse và import file dữ liệu `database.sql` trong thư mục dự án
> 
> Copy file `sample.env` hoặc đổi tên ra file `.env`
> 
> Sửa thông tin kết nối tới database trong file `.env` cho phù hợp
> 

Khởi chạy trên môi trường local

```
php artisan serve
```

Bạn có thể xem trang ở địa chỉ [localhost:8000](http://localhost:8000)


## License

[MIT](http://opensource.org/licenses/MIT)

Copyright © 2014-present, Trung Tran