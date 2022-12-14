@extends('layouts.admin', ['title' => 'Dashboard', 'activePage' => 'dashboard'])

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">All Reviews</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if (session('success'))
                            <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $row = (isset($_GET['page']) && $_GET['page'] != 1) ? ($_GET['page']*10)-9 : 1; ?>
                                    @foreach($reviews as $review)
                                        <tr>
                                            <td>{{ $row++ }}</td>
                                            <td>{{ $review->name }}</td>
                                            <td>{{ $review->email }}</td>
                                            <td>@if ($review->status == 1)
                                                <span class="bg-success text-white rounded p-1 small">Approved</span>
                                                @else
                                                <span class="bg-secondary text-white rounded p-1 small">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{ $review->created_at }}</td>
                                            <td><a class="btn btn-primary btn-sm" href="{{ route('admin.review', ['id' => $review->id]) }}">
                                                <i class="fa fa-eye"></i>
                                            </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            {{ $reviews->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
