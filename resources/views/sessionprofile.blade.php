<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <h3><em>User session get</em></h3>

   

    @if (session('name'))
    <p><em>
     You Are Welcome   {{ session('name') }}
    </em></p>
    @else
    <p><em>
        No User Session Found....
    </em></p>
    <p>
        <a href="{{url('usersesssion')}}">Login</a>
    </p>
    @endif

    <p>
        <a href="{{url('logout')}}">Logout</a>
    </p>

   {{-- {{print_r(session('allData')['password'])}} --}}

</div>
