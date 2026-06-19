    <nav class="bg-slate-900 text-slate-400 sticky top-0 z-50 border-b border-slate-800">
        <div class="max-w-5xl mx-auto flex justify-center gap-4">
  <a href="/home" class="py-5 px-6 font-semibold hover:text-white transition">Home</a>
<a href="/about" class="py-5 px-6 font-semibold hover:text-white transition">About</a>

<a href="{{ auth()->check() && auth()->user()->role === 'admin' ? '/admin/contact' : '/contact' }}" class="py-5 px-6 font-semibold hover:text-white transition">Contact</a>
            @if(auth()->check())
    <div style="
        position: fixed; 
        top: 20px; 
        right: 20px; 
        z-index: 9999;
        font-family: 'Segoe UI', Roboto, sans-serif;
    ">
        <div style="position: relative; display: inline-block;">
            
            <button onclick="toggleDropdown(event)" style="
                background: #ffffff; 
                color: #1e293b; 
                border: 1px solid #cbd5e1; 
                padding: 8px 16px; 
                font-size: 14px; 
                font-weight: 600; 
                border-radius: 6px; 
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 8px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.1);
                user-select: none;
            ">
                <span>{{ auth()->user()->name }}</span>
                <span style="font-size: 10px; color: #64748b; pointer-events: none;">▼</span>
            </button>

            <div id="myDropdownContent" style="
                display: none;
                position: absolute;
                right: 0;
                top: 100%;
                margin-top: 5px;
                background-color: #ffffff;
                min-width: 160px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
                border: 1px solid #e2e8f0;
                border-radius: 6px;
                overflow: hidden;
            ">
                <div style="padding: 10px 16px; font-size: 12px; color: #64748b; border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                    Role: <strong>{{ auth()->user()->role }}</strong>
                </div>

                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" style="
                        width: 100%;
                        text-align: left;
                        background: none;
                        border: none;
                        padding: 10px 16px;
                        font-size: 14px;
                        color: #ef4444;
                        font-weight: 500;
                        cursor: pointer;
                    " onmouseover="this.style.backgroundColor='#fef2f2'" onmouseout="this.style.backgroundColor='transparent'">
                        🚪 Log Out
                    </button>
                </form>
            </div>
        </div>

        <script>
            function toggleDropdown(event) {
                event.stopPropagation();
                var dropdown = document.getElementById("myDropdownContent");
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                } else {
                    dropdown.style.display = "block";
                }
            }

            // Kalau ngeklik area luar mana saja, otomatis nutup sendiri
            window.onclick = function() {
                var dropdown = document.getElementById("myDropdownContent");
                if (dropdown) {
                    dropdown.style.display = "none";
                }
            }
        </script>
    </div>
@endif
        </div>
    </nav>
