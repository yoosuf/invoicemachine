@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Create your account.</h3>


                        <form class="" method="POST" action="{{ route('register') }}" autocomplete="off">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Email address</label>


                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>


                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                <label for="business_name" class="control-label">Your business name</label>


                                <input id="business_name" type="text" class="form-control" name="business_name"
                                       value="{{ old('business_name') }}" required>

                                @if ($errors->has('business_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    Create your busness
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

@endsection
