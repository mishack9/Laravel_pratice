<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
<style>
    input[type="text"]{
        border: 1px solid rgb(64, 140, 159);
        margin-top: 5px;
        border-radius: 5px 7px 8px;
        width: 400px;
        height: 30px; 
    }
    .input-error{
        border-color: red;
    }
    .error{
        font-size: 13px;
        color: red;
    }
</style>

<div class="">
{{--     @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class=""> {{ $error }} </div>
    @endforeach
    @endif --}}
</div>
     <h2>User Form</h2>
    <form action="{{ url('user_form') }}" method="post">
        @csrf
        <div class="input-field">
            <input type="text" name = "username" placeholder="Enter Your Username" {{-- style="@error('username')
                border-color:blue
            @enderror" --}} class = "{{ $errors->first('username') ? 'input-error' : '' }}" value = "{{ old('username') }}">
        </div>
        <span class="error">
            @error('username')
                {{ $message }}
            @enderror
        </span>
        

        <div class="input-field">
            <input type="text" name = "email" placeholder="Enter Your Email" {{-- style="@error('email')
            border-color:blue
        @enderror" --}} value = "{{ old('email') }}" class = "{{ $errors->first('username') ? 'input-error' : '' }}">
        </div>
        <span class="error">
            @error('email')
                {{ $message }}
            @enderror
        </span>

        <div class="input-field">
            <input type="text" name = "city" placeholder="Enter Your City" {{-- style="@error('city')
            border-color:blue
        @enderror" --}} value = "{{ old('city') }}" class = "{{ $errors->first('username') ? 'input-error' : '' }}">
        </div>
        <span class="error">
            @error('city')
                {{ $message }}
            @enderror
        </span>

        <div class="field">
            <h2>Skills</h2>
         <div class="">
            <span class="error">
                @error('city')
                    {{ $message }}
                @enderror
            </span>
         </div>
            <input type="checkbox" name = "skill[]" id="java">
            <label for="java">Java</label>

            <input type="checkbox" name = "skill" id="laravel">
            <label for="laravel">Laravel</label>

            <input type="checkbox" name = "skill" id="python">
            <label for="python">Python</label>
        </div>

        <br>

        <button type="submit" class="btn"> Submit </button>

    </form>

</div>
