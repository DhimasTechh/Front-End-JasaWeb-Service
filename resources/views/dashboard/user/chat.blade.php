@extends('layouts.dashboard_layout')

@section('title', 'Diskusi & Chat')

@section('sidebar-menu')
    <div class="px-4 mb-2 mt-4">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Menu Pembeli</p>
    </div>
    
    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        <span>Beranda</span>
    </a>

    <a href="{{ route('user.orders') }}" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-blue-600 rounded-xl font-medium mb-1 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        <span>Pesanan Saya</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-xl font-semibold transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        <span>Diskusi / Chat</span>
    </a>
@endsection

@section('content')
    <div class="h-[calc(100vh-120px)] flex flex-col md:flex-row bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
        
        <div class="w-full md:w-1/3 border-r border-slate-100 bg-slate-50 flex flex-col">
            <div class="p-4 border-b border-slate-100 bg-white">
                <input type="text" placeholder="Cari percakapan..." class="w-full bg-slate-100 border-none rounded-lg px-4 py-2 text-sm focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="flex-1 overflow-y-auto">
                <div class="p-4 bg-white border-l-4 border-blue-600 cursor-pointer hover:bg-slate-50 transition">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="font-bold text-slate-800">Toko Abadi</h4>
                        <span class="text-[10px] text-slate-400">10:42</span>
                    </div>
                    <p class="text-sm text-slate-500 line-clamp-1">Baik kak, revisinya sudah kami kerjakan ya...</p>
                </div>

                <div class="p-4 cursor-pointer hover:bg-white transition opacity-70">
                    <div class="flex justify-between items-start mb-1">
                        <h4 class="font-bold text-slate-800">DesainKuy</h4>
                        <span class="text-[10px] text-slate-400">Kemarin</span>
                    </div>
                    <p class="text-sm text-slate-500 line-clamp-1">Terima kasih orderannya kak!</p>
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/3 flex flex-col bg-slate-50/50">
            
            <div class="p-4 bg-white border-b border-slate-100 flex justify-between items-center shadow-sm z-10">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center font-bold text-blue-600">
                        TA
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800">Toko Abadi</h4>
                        <div class="flex items-center gap-1">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <p class="text-xs text-slate-500">Online</p>
                        </div>
                    </div>
                </div>
                <button class="text-slate-400 hover:text-slate-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto p-4 space-y-4">
                
                <div class="flex gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex-shrink-0 flex items-center justify-center text-[10px] font-bold text-blue-600">TA</div>
                    <div class="max-w-[80%] bg-white p-3 rounded-tr-xl rounded-br-xl rounded-bl-xl shadow-sm border border-slate-100">
                        <p class="text-sm text-slate-700">Halo Kak, pesanan Landing Page-nya sudah masuk tahap coding ya.</p>
                        <span class="text-[10px] text-slate-400 mt-1 block">09:15</span>
                    </div>
                </div>

                <div class="flex gap-3 justify-end">
                    <div class="max-w-[80%] bg-blue-600 p-3 rounded-tl-xl rounded-br-xl rounded-bl-xl shadow-md text-white">
                        <p class="text-sm">Siap mas. Tolong bagian header warnanya dibikin agak gelap dikit ya.</p>
                        <span class="text-[10px] text-blue-200 mt-1 block text-right">09:20</span>
                    </div>
                </div>

                 <div class="flex gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex-shrink-0 flex items-center justify-center text-[10px] font-bold text-blue-600">TA</div>
                    <div class="max-w-[80%] bg-white p-3 rounded-tr-xl rounded-br-xl rounded-bl-xl shadow-sm border border-slate-100">
                        <p class="text-sm text-slate-700">Baik kak, revisinya sudah kami kerjakan ya. Nanti sore kami update lagi.</p>
                        <span class="text-[10px] text-slate-400 mt-1 block">10:42</span>
                    </div>
                </div>

            </div>

            <div class="p-4 bg-white border-t border-slate-100">
                <div class="flex gap-2">
                    <button class="p-2 text-slate-400 hover:bg-slate-100 rounded-full transition">
                        📎
                    </button>
                    <input type="text" placeholder="Tulis pesan..." class="flex-1 bg-slate-50 border border-slate-200 rounded-full px-4 py-2 text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                    <button class="p-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection