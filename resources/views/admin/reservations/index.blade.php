@extends('admin.Layout.app')

@section('title', 'Liste des Reservations')

@section('content')

<div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header"><h3 class="card-title">Liste des Reservations</h3></div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Date</th>
                <th>Client</th>
                <th>N° siege</th>
                <th>Prix</th>
                <th style="width: 6%">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reserva)
                    
                    <tr class="align-middle">
                        <td>{{$reserva->date_reservation}}</td>
                        <td>{{$reserva->user->name}}</td>
                        <td>{{$reserva->num_siege}}</td>
                        <td>{{$reserva->prix}} Dh</td>
                        <td><a href="{{route('reservation.admin.show', $reserva->id)}}" class="btn btn-primary"><i class="bi bi-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{$reservations->links()}}        
        </div>
      </div>
</div>
@endsection
