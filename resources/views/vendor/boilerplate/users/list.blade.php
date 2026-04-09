@extends('boilerplate::layout.index', [
    'title' => __('boilerplate::users.title'),
    'subtitle' => __('boilerplate::users.list.title'),
    'breadcrumb' => [
        __('boilerplate::users.title') => 'boilerplate.users.index'
    ]
])

@section('content')
    <div class="row">
        <div class="col-12 mbl">
            <span class="float-right pb-3">
                
                <!-- ✅ Create User Button -->
                <a href="{{ route("boilerplate.users.create") }}" class="btn btn-primary">
                    @lang('boilerplate::users.create.title')
                </a>

                <!-- ✅ Export Users Button (NEW) -->
                <a href="{{ route('boilerplate.users.export') }}" class="btn btn-success ml-2">
                    Export Users
                </a>

            </span>
        </div>
    </div>

    @component('boilerplate::card')
        @component('boilerplate::datatable', ['name' => 'users']) @endcomponent
    @endcomponent
@endsection

@push('css')
    <style>.img-circle { border:1px solid #CCC }</style>
@endpush