<!DOCTYPE html>
<html>
    <head>
        <mata charset="utf-8">
        <mata http-equiv="X-UA-Compatible" content="IE=edge">
        <mata name="viewport" content="width=device-width, initial-scale-1">
            
            <title>プロフィール</title>
    </head>
    <body>
        <h1>プロフィール</h1>
                {{-- layouts/profile.blade.phpを読み込む --}}
        @extends('layouts.profile')


        {{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
        @section('title', 'Myプロフィール')

        {{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2>Myプロフィール</h2>
                    </div>
                </div>
    </div>
@endsection
    </body>
</html>  