@extends('layouts.app')

@section('content')


    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Add Contact</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            <form class="" method="POST" action="{{ route('register') }}" autocomplete="off">
                {{ csrf_field() }}


                @include('app.account.company._contact')


                @include('app.account.company._person')



                @include('app.account.company._email')

                @include('app.account.company._phone')

                @include('app.account.company._address_form')


                @include('app.account.company._memo')


                <div class="form-group">

                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>

            </form>

        </div>
    </div>



@endsection
