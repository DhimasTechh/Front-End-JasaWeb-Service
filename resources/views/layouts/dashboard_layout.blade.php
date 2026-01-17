<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - JasaWeb</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex">

    <aside class="w-64 h-screen bg-white border-r border-gray-200 fixed left-0 top-0 overflow-y-auto">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-blue-600">JasaWeb<span class="text-slate-800">.</span></h1>
        </div>
        
        <nav class="mt-2 px-4 space-y-2">
            @yield('sidebar-menu')
        </nav>

       <div class="absolute bottom-10 px-6 w-full">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center gap-3 text-red-500 hover:text-red-700 font-medium transition w-full">
            <span>🚪</span> Logout
        </button>
    </form>
</div>
    </aside>

    <main class="ml-64 w-full p-8">
        <header class="flex justify-between items-center mb-8 bg-white p-4 rounded-xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-xl font-bold text-slate-800">@yield('title')</h2>
                <p class="text-sm text-gray-500">Selamat datang kembali, Chief!</p>
            </div>
            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold">
                U
            </div>
        </header>

        @yield('content')
    </main>

</body>
</html>