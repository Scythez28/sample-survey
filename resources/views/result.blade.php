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
                    <strong>1.</strong>{{ $questions[0]['title'] }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="{{ $questions[0]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Below 18</div>
                            <div><p class="text-success">(Total : {{ $totalAgeBelow18 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[0]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>18 to 35</div>
                            <div><p class="text-success">(Total : {{ $totalAgeBelow35 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[0]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>35 to 60</div>
                            <div><p class="text-success">(Total : {{ $totalAgeBelow60 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[0]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Above 60</div>
                            <div><p class="text-success">(Total : {{ $totalAgeAbove60 }})</p></div>
                        </li>
                    </label>
                </ul>
                </div>
            </div>
            <div class="card mt-4">
                 <div class="card-header">
                    <strong>2.</strong>{{ $questions[1]['title'] }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="{{ $questions[1]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Secondary school and below</div>
                            <div><p class="text-success">(Total : {{ $totalSecondaryLevel }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[1]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Diploma</div>
                            <div><p class="text-success">(Total : {{ $totalDiplomaLevel }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[1]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Degree</div>
                            <div><p class="text-success">(Total : {{ $totalDegreeLevel }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[1]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Post graduate degree</div>
                            <div><p class="text-success">(Total : {{ $totalPostGraduateLevel }})</p></div>
                        </li>
                    </label>      
                </ul>
                </div>
            </div><div class="card mt-4">
                 <div class="card-header">
                    <strong>3.</strong>{{ $questions[2]['title'] }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="{{ $questions[2]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Less than RM 1000</div>
                            <div><p class="text-success">(Total : {{ $totalIncomeBelow1000 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[2]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Between RM1000 to RM3000</div>
                            <div><p class="text-success">(Total : {{ $totalIncomeBelow3000 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[2]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Between RM3000 to RM5000</div>
                            <div><p class="text-success">(Total : {{ $totalIncomeBelow5000 }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[2]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>More than RM5000</div>
                            <div><p class="text-success">(Total : {{ $totalIncomeAbove5000 }})</p></div>
                        </li>
                    </label>    
                </ul>
                </div>
            </div><div class="card mt-4">
                 <div class="card-header">
                    <strong>4.</strong>{{ $questions[3]['title'] }}
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    <label for="{{ $questions[3]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Male</div>
                            <div><p class="text-success">(Total : {{ $totalGenderMale }})</p></div>
                        </li>
                    </label>
                    <label for="{{ $questions[3]['title'] }}">
                        <li class="list-group-item d-flex justify-content-between">
                            <div>Female</div>
                            <div><p class="text-success">(Total : {{ $totalGenderFemale }})</p></div>
                        </li>
                    </label>    
                    </ul>
                </div>
            </div>
            </form>
        </div>
    </div>                
</body>
@endsection
