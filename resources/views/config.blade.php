@extends('layouts.app')

@section('content')

    @include('components.head-toolbox', ['title' => 'TM Configuration', 'current_page' => 'TM Configuration'])

    <div class="container py-5">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">General Configuration</h3>
            </div>
            <div class="card-body">

{{--                Validation Errors--}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

{{--                Config Form--}}
                <form action="{{ route('admin.tempmailer.config.store') }}" method="POST">

                    {{csrf_field()}}

                    <div class="mb-10">
                        <label class="form-label">API Endpoint</label>
                        <input type="url" class="form-control" value="{{ $apiUri }}" placeholder="https://api.expample.com" name="api_url">
                    </div>

                    <div class="mb-10">
                        <label class="form-label">API Key</label>
                        <input type="password" class="form-control" value="{{ $apiKey }}" placeholder="*****************************************" name="api_key">
                    </div>

                    <div class="mb-10">
                      <button class="btn btn-success btn-sm float-end">Save Settings</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
