@extends('layouts.admin', ['title' => 'Review', 'activePage' => ''])

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Review</h1>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Review Information</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if (session('success'))
                            <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                        @endif
                        <div class="table-responsive mb-4">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $review->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $review->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Star Rating</th>
                                        <td><div class="rating text-warning">{{ $review->rating }}</div></td>
                                    </tr>
                                    <tr>
                                        <th>Comment</th>
                                        <td>{{ $review->comment }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @if ($review->status == false)
                            <form action="{{ route('admin.review.approve', ['id' => $review->id]) }}" method="post" class="row justify-content-center">
                                @csrf
                                <input type="hidden" name="approve" value="1">
                                <button type="submit" class="btn btn-success col-8">Approve <i class="fa fa-check"></i></button>
                            </form>
                        @endif
                        <div class="row justify-content-center my-3">
                            <a class="btn btn-danger col-8" href="{{ route('admin.review.trash', ['id' => $review->id]) }}">
                                Delete <i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
