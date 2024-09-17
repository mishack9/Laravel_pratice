<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<h3><em>User Add</em></h3>

@if (session("message"))

<span class = "success-message">
    {{session('message')}}
</span>
    
@endif

@if (session("name"))

<span class = "success-message">
    {{session('name')}}
</span>
    
@endif

{{-- {{session()->reflash('message')}} --}}
{{-- {{session()->keep(['name'])}} --}}
<form action="{{ url('flash') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Name" id="">
    <br><br>
    <input type="text" name="password" placeholder="*****************" id="">
    <br><br>
    <input type="text" name="email" placeholder="@gmail.com" id="">
    <br><br>
    <button>Enter</button>
</form>

<style>
    .success-message
    {
        background-color: coral;
        padding: 2px 20px;
        margin-bottom: 10px;
        display: inline-block;
        border-radius: 2px 4px 6px;
    }
</style>

</div>
