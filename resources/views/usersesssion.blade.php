<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<h3><em>User check session</em></h3>

<form action="{{ url('sessioncheck') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" id="">
    <br><br>
    <input type="text" name="password" placeholder="*****************" id="">
    <br><br>
    <button>Enter</button>
</form>

</div>
