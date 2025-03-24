<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
 </head>
 <body>
  <div class="bg-gray-100 p-4" id="app">
   <div class="bg-white p-4 rounded shadow-md">
    <div class="flex items-center mb-4">
     <i class="fas fa-envelope text-yellow-500 text-xl mr-2">
     </i>
     <span class="font-bold">
      VnExpress Newsletters
     </span>
    </div>
    <h2 class="text-xl font-bold mb-2">
     Đừng bỏ lỡ tin tức quan trọng!
    </h2>
    <p class="mb-4">
     Nhận tóm tắt tin tức nổi bật, hấp dẫn nhất 24 giờ qua trên VnExpress.
    </p>
    <div class="flex items-center">
     <input class="border border-gray-300 p-2 rounded-l w-full" placeholder="Địa chỉ Email..." type="email"/>
     <button class="bg-purple-700 text-white p-2 rounded-r">
      Đăng ký
     </button>
    </div>
    <p class="text-sm mt-2">
     *Khi đăng ký, bạn đồng ý
     <a class="text-blue-600" href="#">
      điều khoản
     </a>
     của VnExpress
    </p>
   </div>
   <div class="mt-6 border-t border-gray-300 pt-4">
    <div class="flex justify-between items-center mb-4">
     <img alt="VnExpress logo" class="h-8" height="50" src="https://storage.googleapis.com/a1aa/image/RwaW4nJzxKZsqLKm6wb8YAc9WhSPbdGn6etZkLKvAXM.jpg" width="150"/>
     <div class="flex space-x-4">
      <a class="text-gray-600" href="#">
       Điều khoản sử dụng
      </a>
      <a class="text-gray-600" href="#">
       Chính sách bảo mật
      </a>
      <a class="text-gray-600" href="#">
       Cookies
      </a>
      <a class="text-gray-600" href="#">
       RSS
      </a>
      <a class="text-gray-600" href="#">
       Theo dõi VnExpress trên
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-facebook">
       </i>
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-gray-600" href="#">
       <i class="fab fa-youtube">
       </i>
      </a>
     </div>
    </div>
    <div class="flex justify-between text-sm text-gray-600">
     <div>
      <p class="font-bold">
       Báo điện tử
      </p>
      <p class="font-bold">
       Báo tiếng Việt nhiều người xem nhất
      </p>
      <p>
       Thuộc Bộ Khoa học và Công nghệ
      </p>
      <p>
       Số giấy phép: 548/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày 24/08/2021
      </p>
     </div>
     <div>
      <p>
       Tổng biên tập: Phạm Văn Hiếu
      </p>
      <p>
       Địa chỉ: Tầng 10, Tòa A FPT Tower, số 10 Phạm Văn Bạch, Dịch Vọng, Cầu Giấy, Hà Nội
      </p>
      <p>
       Điện thoại: 024 7300 8899 - máy lẻ 4500
      </p>
      <p>
       Email: webmaster@vnexpress.net
      </p>
     </div>
    </div>
    <div class="text-center text-sm text-gray-600 mt-4">
     <p>
      © 1997-2025. Toàn bộ bản quyền thuộc VnExpress
     </p>
    </div>
   </div>
  </div>
  <script>
   const { createApp, ref } = Vue
    createApp({
      setup() {
        return {}
      }
    }).mount('#app')
  </script>
 </body>
</html>
