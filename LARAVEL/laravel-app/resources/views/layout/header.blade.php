<div style="background-color: aqua; height: 100px;">
    
    <ul>
        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a class="nav-link {{ request()->is('/about') ? 'active' : '' }}">About</a>
        <a>News</a>
    </ul>
    <div>
        {{-- // 
            <img src="{{ URL('images/t2.png')}}" />
            php artisan storage:link
             <img src="{{ asset('images/t2.png')}}" />
            --}}
        
    </div>
</div>

