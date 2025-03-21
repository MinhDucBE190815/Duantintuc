<!-- <style>
  
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        @foreach ($menu as $mn)      
        <li class="nav-item">
            <a class="nav-link" href="{{ url('tintrongloai/'.$mn->id) }}">{{ $mn->tenloai }}</a>
        </li>
    @endforeach

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <script src="https://registry.npmmirror.com/vue/3.3.11/files/dist/vue.global.js">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto">
  <div class="border-b" id="app">
   <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-2">
     <div class="flex items-center space-x-4">
      <img alt="VNExpress logo" class="h-10" height="40" src="https://storage.googleapis.com/a1aa/image/vCE6vnF7yR7NTuCgqWLu9DbMdOPE_omA-umlBOL-cFA.jpg" width="100"/>
      <span class="text-gray-500">
       Thứ hai, 17/3/2025
      </span>
      <span class="text-gray-500">
       Hà Nội
       <i class="fas fa-cloud">
       </i>
       15°
      </span>
     </div>
     <div class="flex items-center space-x-4">
      <a class="text-gray-500" href="{{ route('baivietmoi.baivietmoi') }}">
       Mới nhất
      </a>
      <a class="text-gray-500" href="#">
       Tin HOT
      </a>
      <a class="text-gray-500 flex items-center" href="#">
       <img alt="International icon" class="h-5 mr-1" height="20" src="https://storage.googleapis.com/a1aa/image/hdmpxCeysK3MU28wZeHTdX-F3m5EDQdwl1rD20vJE50.jpg" width="20"/>
       International
      </a>
      <div class="relative">
       <input class="border rounded-full py-1 px-3 text-gray-700" placeholder="Tìm kiếm" type="text"/>
       <i class="fas fa-search absolute right-3 top-2 text-gray-500">
       </i>
      </div>
      <a class="text-gray-500 flex items-center" href="#">
       <i class="fas fa-user mr-1">
       </i>
       Đăng nhập
      </a>
      <i class="fas fa-bell text-gray-500">
      </i>
     </div>
    </div>
    <div class="flex items-center space-x-4 py-2">
     <i class="fas fa-home text-gray-500">
     </i>
     
     @foreach ($menu as $mn)      
        <li class="nav-item">
            <a class="text-black" href="{{ url('tintrongloai/'.$mn->id) }}">{{ $mn->tenloai }}</a>
        </li>
    @endforeach
     </i>
    </div>
   </div>
  </div>
  <script>
   const { createApp, ref } = Vue
    createApp({
      setup() {
        const message = ref('Hello vue!')
        return {
          message
        }
      }
    }).mount('#app')
  </script>
 </body>
</html>