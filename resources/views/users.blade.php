<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->

<h2><em>Users Lists</em></h2>

<table border="2" cellspacing ="2" cellpadding ="3">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </thead>
    <tbody>
       
        @foreach ($users as $user)
        <tr>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>{{ $user->phone }}</td>
        </tr>
        @endforeach
   
    </tbody>
</table>

</div>
