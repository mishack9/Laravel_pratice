<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h2><em>Check request for a method</em></h2>
    <form action="{{url('/request')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter a username here" id="">
        <br><br>
        <input type="text" name="password" placeholder="*************" id="">
        <br><br>
        <button>Request</button>
    </form>
</div>
