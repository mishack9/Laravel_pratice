<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    
<h2><em>Users Lists</em></h2>

<table border="2" cellspacing ="2" cellpadding ="3">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </thead>
    <tbody>
       
        @foreach ($response as $user)
        <tr>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>{{ $user->phone }}</td>
        </tr>
        @endforeach
   
    </tbody>
</table>
</div>
