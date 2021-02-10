@extends('backoffice.master')

@section('title', Lang::get('Dashboard') )

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin') }}"><i class="fas fa-home"></i> @lang('Dashboard')</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        @if(kvfj(Auth::user()->permissions, 'Dashboard_small_stats'))
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-chart-bar"></i> @lang('Quick Stats')</h2>
                </div>
            </div>
        @endif
    </div>

@endsection
