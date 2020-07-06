@extends('layouts.app')

@section('content')
<body>
    <div class="content">
        <div class="title">
            Survey
        </div>

        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8">
            <form action="/" method="POST">
            @csrf
            <div class="card mt-4">
                 <div class="card-header">
                    <strong>1.</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="">{{ $questions[0]['title'] }}
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[0]['id'] }}" id="{{ $questions[0]['id'] }}" class="mr-2" value="{{ $options[0]['id'] }}">Below 18
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[0]['id'] }}" id="{{ $questions[0]['id'] }}" class="mr-2" value="{{ $options[1]['id'] }}">18 - 35
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[0]['id'] }}" id="{{ $questions[0]['id'] }}" class="mr-2" value="{{ $options[2]['id'] }}">35 - 60
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[0]['id'] }}" id="{{ $questions[0]['id'] }}" class="mr-2" value="{{ $options[3]['id'] }}">Above 60
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                </ul>
                </div>
            </div>
            <div class="card mt-4">
                 <div class="card-header">
                    <strong>2.</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="">{{ $questions[1]['title'] }}
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[1]['id'] }}" id="{{ $questions[1]['id'] }}" class="mr-2" value="{{ $options[0]['id'] }}">Secondary school and below
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[1]['id'] }}" id="{{ $questions[1]['id'] }}" class="mr-2" value="{{ $options[1]['id'] }}">Diploma
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[1]['id'] }}" id="{{ $questions[1]['id'] }}" class="mr-2" value="{{ $options[2]['id'] }}">Degree
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[1]['id'] }}" id="{{ $questions[1]['id'] }}" class="mr-2" value="{{ $options[3]['id'] }}">Post graduate degree
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                </ul>
                </div>
            </div>
            <div class="card mt-4">
                 <div class="card-header">
                    <strong>3.</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="">{{ $questions[2]['title'] }}
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[2]['id'] }}" id="{{ $questions[2]['id'] }}" class="mr-2" value="{{ $options[0]['id'] }}">Less than RM 1000
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[2]['id'] }}" id="{{ $questions[2]['id'] }}" class="mr-2" value="{{ $options[1]['id'] }}">Between RM1000 to RM3000
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[2]['id'] }}" id="{{ $questions[2]['id'] }}" class="mr-2" value="{{ $options[2]['id'] }}">Between RM3000 to RM5000
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[2]['id'] }}" id="{{ $questions[2]['id'] }}" class="mr-2" value="{{ $options[3]['id'] }}">More than RM5000
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                </ul>
                </div>
            </div>
            <div class="card mt-4">
                 <div class="card-header">
                    <strong>4.</strong>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="">{{ $questions[3]['title'] }}
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[3]['id'] }}" id="{{ $questions[3]['id'] }}" class="mr-2" value="{{ $options[0]['id'] }}"> Male
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                    <label for="">
                        <li class="list-group-item">
                            <input type="radio" name="{{ $questions[3]['id'] }}" id="{{ $questions[3]['id'] }}" class="mr-2" value="{{ $options[1]['id'] }}">Female
                            <input type="hidden" name="" value="">
                        </li>
                    </label>
                </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-dark mt-4">Submit</button>
            </form>
        </div>
    </div>                
</body>
@endsection
