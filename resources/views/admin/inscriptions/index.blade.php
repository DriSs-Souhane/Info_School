<!DOCTYPE html>
<html>
<head>
    <title>Inscriptions List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
   
            color: #fff;
            font-family: 'Arial', sans-serif;
         
            
        }
        .card {
            margin-top: 50px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .card-header {
            background-color: rgba(0, 123, 255, 0.5);
            color: #fff;
            border-radius: 10px 10px 0 0;
            text-align: center;
            padding: 20px;
        }
        
        .card-body {
            padding: 30px;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.2);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .table {
            border: 1px solid blue;
            border-radius: 10px;
            overflow: hidden;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-danger {
            background-color: #dc3545;
        }
        .badge-secondary {
            background-color: #6c757d;
        }
        .btn {
            margin: 5px;
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-footer {
            border-top: none;
        }
        .navbar {
            background-color: #007bff; 
            
            padding: 10px 0; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important; 
            transition: all 0.3s ease; 
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #f8f9fa !important; 
            transform: scale(1.1);
        }
        .navbar-brand {
            font-size: 24px;
        }
        .navbar-nav {
            margin-left: auto; 
        }
        .nav-link {
            margin: 0 15px;
            border-radius: 10px; 
            padding: 8px 15px; 
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2); 
        }
        .animate-hover {
            transition: all 0.3s ease; 
        }
        .animate-hover:hover {
            transform: translateY(-3px); 
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link, .btn-outline-light {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        .alert {
            margin-top: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
          
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #007bff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .form-container:hover {
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
        }
       
    </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Info_School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 animate-hover " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light " type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="card border border-primary">
        <div class="card-header bg-primary text-white ">
            <h1>Inscriptions List</h1>
       
        <div class="card-body">
        
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table  table-hover  border border-dark bg-dark">
                <thead class="table-light">
                    <tr>
                        <th class="bg-dark text-white " >First Name</th>
                        <th class="bg-dark text-white">Last Name</th>
                        <th class="bg-dark text-white">Email</th>
                        <th class="bg-dark text-white">Status</th>
                        <th class="bg-dark text-white">Actions</th>
                    </tr>
                    </div>
                </thead>
                <tbody>
                    @foreach ($inscriptions as $inscription)
                        <tr>
                            <td >{{ $inscription->first_name }}</td>
                            <td>{{ $inscription->last_name }}</td>
                            <td>{{ $inscription->email }}</td>
                            <td>
                                <span class="badge bg-{{ $inscription->status == 'accepted' ? 'success' : ($inscription->status == 'rejected' ? 'danger' : 'secondary') }}">
                                    {{ ucfirst($inscription->status) }}
                                </span>
                            </td>
                            <td>
                                @if ($inscription->status == 'pending')
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#acceptModal{{ $inscription->id }}">Accept</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $inscription->id }}">Reject</button>
                                @else
                                    <button type="button" class="btn btn-secondary btn-sm bg-light text-primary btn-outline-primary" disabled>Done</button>
                                @endif
                            </td>
                        </tr>

                        
                        <div class="modal fade" id="acceptModal{{ $inscription->id }}" tabindex="-1" aria-labelledby="acceptModalLabel{{ $inscription->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success text-white">
                                        <h5 class="modal-title" id="acceptModalLabel{{ $inscription->id }}">Accept Inscription</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark ">
                                        Are you sure you want to accept this inscription?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('inscriptions.accept', $inscription->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Yes, Accept</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <div class="modal fade" id="rejectModal{{ $inscription->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $inscription->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title " id="rejectModalLabel{{ $inscription->id }}">Reject Inscription</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-dark ">
                                        Are you sure you want to reject this inscription?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('inscriptions.reject', $inscription->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Yes, Reject</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

                  
</body>
</html>
