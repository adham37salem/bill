<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاتورتي</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="rtl:*"  lang="ar">
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

{{ $slot }}

<x-footer />

@livewireScripts
</body>
</html>
