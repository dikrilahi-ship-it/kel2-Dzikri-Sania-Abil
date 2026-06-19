<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Laravel Premium Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen flex flex-col selection:bg-red-500 selection:text-white">

    <header class="relative overflow-hidden pt-20 pb-16 px-4 bg-radial from-indigo-950 via-slate-950 to-slate-950 w-full flex-grow flex items-center justify-center">
        <div class="absolute top-[-10%] right-[20%] w-[35rem] h-[35rem] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-[-20%] left-[10%] w-[40rem] h-[40rem] bg-red-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative w-full max-w-md mx-auto">
            
            <div class="bg-slate-800/40 border border-slate-800 p-8 rounded-2xl backdrop-blur-md shadow-2xl">
                
                <div class="text-center mb-6">
                    <span class="inline-flex items-center gap-1.5 bg-gradient-to-r from-indigo-500/20 to-red-500/20 text-indigo-400 text-[10px] font-bold tracking-widest uppercase px-4 py-1.5 rounded-full border border-indigo-500/30 mb-3">
                        Registration
                    </span>
                    <h2 class="text-2xl font-black tracking-tight uppercase">
                        Buat <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-red-400">Akun Baru</span>
                    </h2>
                    <p class="text-xs text-slate-400 mt-1">Daftarkan identitas kelompok/user kamu</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-xs uppercase tracking-wider font-bold text-slate-400 mb-1.5">Full Name</label>
                        <input id="name" 
                               class="block w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200" 
                               type="text" 
                               name="name" 
                               :value="old('name')" 
                               required 
                               autofocus 
                               placeholder="Nama Lengkap" />
                        
                        @if ($errors->get('name'))
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="email" class="block text-xs uppercase tracking-wider font-bold text-slate-400 mb-1.5">Email Address</label>
                        <input id="email" 
                               class="block w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200" 
                               type="email" 
                               name="email" 
                               :value="old('email')" 
                               required 
                               placeholder="nama@email.com" />
                        
                        @if ($errors->get('email'))
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="password" class="block text-xs uppercase tracking-wider font-bold text-slate-400 mb-1.5">Password</label>
                        <div class="relative flex items-center">
                            <input id="password" 
                                   class="block w-full bg-slate-950/60 border border-slate-800 rounded-xl pl-4 pr-12 py-2.5 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200" 
                                   type="password" 
                                   name="password" 
                                   required 
                                   placeholder="••••••••" />
                            
                            <button type="button" id="toggle-password" class="absolute right-0 h-full px-4 flex items-center text-slate-400 hover:text-slate-200 cursor-pointer focus:outline-none z-10">
                                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 pointer-events-none">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </button>
                        </div>
                        
                        @if ($errors->get('password'))
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-xs uppercase tracking-wider font-bold text-slate-400 mb-1.5">Confirm Password</label>
                        <div class="relative flex items-center">
                            <input id="password_confirmation" 
                                   class="block w-full bg-slate-950/60 border border-slate-800 rounded-xl pl-4 pr-12 py-2.5 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-200" 
                                   type="password" 
                                   name="password_confirmation" 
                                   required 
                                   placeholder="••••••••" />
                            
                            <button type="button" id="toggle-password-confirm" class="absolute right-0 h-full px-4 flex items-center text-slate-400 hover:text-slate-200 cursor-pointer focus:outline-none z-10">
                                <svg id="eye-icon-confirm" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 pointer-events-none">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </button>
                        </div>
                        
                        @if ($errors->get('password_confirmation'))
                            <p class="text-xs text-red-500 mt-1 font-medium">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-600 text-white font-black py-3 rounded-xl shadow-lg shadow-indigo-600/20 transform active:scale-98 transition duration-150 text-xs uppercase tracking-wider cursor-pointer">
                            Daftarkan Akun Baru
                        </button>
                    </div>

                    <div class="text-center pt-2 border-t border-slate-800/60 mt-4">
                        <p class="text-xs text-slate-400">
                            Sudah punya akun kelompok? 
                            <a href="{{ route('login') }}" class="text-indigo-400 hover:text-indigo-300 font-bold transition ml-1 underline underline-offset-4 decoration-indigo-500/40 hover:decoration-indigo-400">
                                Masuk Saja
                            </a>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // --- 1. Logika Mata untuk Password Utama ---
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('toggle-password');
        const eyeIcon = document.getElementById('eye-icon');

        if (toggleButton && passwordInput) {
            toggleButton.addEventListener('click', function (e) {
                e.preventDefault(); 
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 11-4.243-4.243m4.242 4.242L9.88 9.88" />`;
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />`;
                }
            });
        }

        // --- 2. Logika Mata untuk Confirm Password ---
        const confirmInput = document.getElementById('password_confirmation');
        const toggleConfirmButton = document.getElementById('toggle-password-confirm');
        const eyeIconConfirm = document.getElementById('eye-icon-confirm');

        if (toggleConfirmButton && confirmInput) {
            toggleConfirmButton.addEventListener('click', function (e) {
                e.preventDefault(); 
                if (confirmInput.type === 'password') {
                    confirmInput.type = 'text';
                    eyeIconConfirm.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 11-4.243-4.243m4.242 4.242L9.88 9.88" />`;
                } else {
                    confirmInput.type = 'password';
                    eyeIconConfirm.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />`;
                }
            });
        }
    });
</script>
</body>
</html>