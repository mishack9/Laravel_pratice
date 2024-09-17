<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

    <h3><em>Students Lists</em></h3>

    <table border="2" cellspacing ="2" cellpadding ="3">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </thead>
        <tbody>
           
            @foreach ($students as $student)
            <tr>
             <td>{{ $student->name }}</td>
             <td>{{ $student->email }}</td>
             <td>{{ $student->class }}</td>
            </tr>
            @endforeach
       
        </tbody>
    </table>

</div>
