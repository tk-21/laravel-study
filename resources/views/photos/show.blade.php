@extends('layouts.default')

@section('title', 'アップロード画像の表示')
@section('content')
    {{-- セッションに保存されていればメッセージを表示 --}}
    @if (session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif

    <img src="{{ asset('storage/photos/'. $fileName) }}" alt="">
@endsection
