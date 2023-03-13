@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">All data in 2nd table</h2>
        <div class="table-container">
            <table table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Text</th>
                        <th>First Table Text</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($views as $view)
                        <tr>
                            <td>{{ $view -> text2}}</td>
                            <td>{{ $view -> testinputs -> text}}</td>
                            <td>
                                <a class="table_link" href="{{ route('update3', $view->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="display: inline-flex;" method="post" action="{{URL::to('/delete/data_2/'.$view->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="table_link"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="link_section">
            <a class="link" href="{{ route('welcome') }}">Add data in 1st table</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('add2') }}">Add data in 2nd table</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('view') }}">View 1st table datas</a>
        </div>
    </div>
    @include('partials.footer')
@endsection