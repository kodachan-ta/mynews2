<!DOCTYPE html>
<html>
    <head>
        <mata charset="utf-8">
        <mata http-equiv-"X-UA-Compatible" content="IE=edge">
        <mata name="viewport" content="width=device-width, initial-scale=1">
            
            <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
        {{-- layouts/admin.blade.phpを読み込む --}}
        @extends('layouts.admin')
        
        
        {{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
        @section('title','ニュースの新規作成')
        
        {{-- admin.blade.phpの@yield('content')に以下のタグを埋め込み --}}
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto"
                        <h2>ニュース新規作成</h2>
                </div>
            </div>
        @endsection
    </body>
</html>