@extends('layouts.app', ['page' => __('Vue'), 'pageSlug' => 'Vue' ])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <router-view></router-view>
        </div>
    </div>
@endsection
