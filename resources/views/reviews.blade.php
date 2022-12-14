@extends('layouts.app', ['title' => 'Reviews', 'activePage' => 'reviews'])

@section('content')
        <section class="page-header" style="background-image: url({{ asset('images/background/page-header-bg-1-1.jpg') }});">
            <div class="container">
                <h2>Customer Reviews</h2>
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Reviews</span></li>
                </ul><!-- /.list-unstyled -->
            </div>
            <!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        @foreach ($reviews as $review)
                            <div class="card shadow mb-3" style="border-left:3px solid #4CB7FF">
                                <div class="card-body">
                                    <em class="small">{{ $review->created_at }}</em>
                                    <p>{{ $review->comment }}</p>
                                    <div class="text-right">
                                        <div class="rating text-warning">{{ $review->rating }}</div>
                                        <div class="small">{{ strtoupper($review->name) }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row justify-content-center my-4 pt-4">
                            {{ $reviews->links() }}
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <section class="contact-one" id="reviewFormSection">
            <div class="container">
                <div class="block-title text-center">
                    <p>Write a Review</p>
                    <h3>Share your experience with us</h3>
                </div><!-- /.block-title -->
                @if (count($errors))
                    <div class="alert alert-danger mb-2">
                        <strong>Whoops!</strong> Error validating data.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                @endif
                <form action="{{ route('review.new') }}" method="POST" class="contact-one__form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}">
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}">
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12" style="padding: 0px 30px;">
                            <div class="row bg-white mb-4 p-3" style="border-radius: 50px;">
                                <div class="col-auto">Star Rating</div>
                                <div class="col">
                                    <input type="number" name="rating" id="rating1" class="rating text-warning" data-clearable="remove">
                                </div>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <textarea name="comment" placeholder="Comment"></textarea>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="thm-btn contact-one__btn">Submit Review</button>
                            <!-- /.thm-btn contact-one__btn -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
					
                </form>
                <div class="result"></div><!-- /.result -->
            </div>
            <!-- /.container -->
        </section><!-- /.contact-one -->
@endsection