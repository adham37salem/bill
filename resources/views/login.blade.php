<!doctype html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>فاتورتي - تسجيل الدخول</title>
        @vite('resources/css/app.css')
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body class="rtl:*" lang="ar">
    <!-- Header -->
    <header class=" bg-transparent text-[#4154F1] h-[75px]">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-[30px] font-bold">فاتورتي</h1>
            <nav>
                <ul class="flex space-x-6 text-[#4154F1] text-[16px] hover:transition-all">
                    <li><a href="{{ route("welcome") }}" class="hover:underline  font-semibold mx-4">الرئيسية</a></li>
                    <li><a href="#about" class="hover:underline font-semibold">من نحن</a></li>
                    <li><a href="#features" class="hover:underline font-semibold">ماذا نقدم لك</a></li>
                    <li><a href="#services" class="hover:underline font-semibold">خدماتنا</a></li>
                    <li><a href="#team" class="hover:underline font-semibold">الفريق</a></li>
                    <li><a href="#news" class="hover:underline font-semibold">اخر الاخبار</a></li>
                    <li><a href="{{ route("login") }}" class="hover:underline font-semibold">تسجيل الدخول</a></li>
                </ul>
            </nav>
        </div>
    </header>
   <x-hero-section class="h-[800px]">
       <div class="flex flex-col px-16">
           <h2 class="text-[#000000] text-[30px]">تسجيل الدخول</h2>
           <div class="flex flex-col gap-y-2 mt-4">
               <label class="text-[16px]">البريد الاكتروني</label>
               <input type="email" class="p-2 w-[368px] outline-none focus:outline-none text-left rtl:text-left" />
           </div>
           <div class="flex flex-col gap-y-2 mt-4">
               <label class="text-[16px]">كلمة السر</label>
               <input type="password" class="p-2 w-[368px]  outline-none focus:outline-none text-left rtl:text-left" />
           </div>
           <x-primary-button class="mt-8 mr-[160px]">
               تسجيل الدخول
           </x-primary-button>
       </div>
   </x-hero-section>

    <x-footer />

    </body>
</html>
