@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('tripsheet.create') }}">
                <button type="button" class="btn btn-secondary">Pridėti naują</button>
            </a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Periodas</th>
                    <th scope="col">Automobilio markė</th>
                    <th scope="col">Automobilio modelis</th>
                </tr>
                </thead>
                @foreach($tripsheets as $tripsheet)
                    <tbody>
                    <tr>
                        <td>{{$tripsheet->name}}</td>
                        <td>{{$tripsheet->period}} {{$tripsheet->day}}</td>
                        <td>{{$tripsheet->carMake->name}}</td>
                        <td>{{$tripsheet->carModel->name}}</td>
                        <td><a href="{{route('export.tripsheet', $tripsheet->id)}}">Atsisiųsti (.xls)</a>
                            <a href="{{route('tripsheet.show', $tripsheet->id)}}">Daugiau</a>
                            <a href="{{route('tripsheet.edit', $tripsheet->id)}}">Redaguoti</a>
                            <a href="{{route('tripsheet.destroy', $tripsheet->id)}}">Ištrinti</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    {!! $tripsheets->links() !!}
@endsection