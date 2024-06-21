<!DOCTYPE html>
<html>
<head>
    <title>Inscriptions Review</title>
</head>
<body>
   
    <h1>Pending Inscriptions</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Filiere</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscriptions as $inscription)
                <tr>
                    <td>{{ $inscription->first_name }}</td>
                    <td>{{ $inscription->last_name }}</td>
                    <td>{{ $inscription->email }}</td>
                    <td>{{ $inscription->phone_number }}</td>
                    <td>{{ $inscription->filiere }}</td>
                    <td>
                        <form action="{{ route('inscriptions.accept', $inscription->id) }}" method="POST">
                            @csrf
                            <button type="submit">Accept</button>
                        </form>
                        <form action="{{ route('inscriptions.reject', $inscription->id) }}" method="POST">
                            @csrf
                            <button type="submit">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
</body>
</html>
