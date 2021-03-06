@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Пользователи</div>
                    <div class="card-body">
                        <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New myUser">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Name</th><th>Surname</th><th>Email</th><th>Phone</th><th>Status</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($myusers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
										<td>{{ $item->surname }}</td>
										<td>{{ $item->email }}</td>
										<td>{{ $item->phone }}</td>
										<td>{{ $item->getstatus->title }}</td>
                                        <td>
                                            <a href="{{ url('/user/' . $item->id) }}" title="View myUser"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit myUser"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete myUser" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
