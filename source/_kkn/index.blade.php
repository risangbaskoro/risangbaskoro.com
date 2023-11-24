---
title: Table of Contents
---

@extends('_layouts.kkn')

@section('content')
    <h1>
        Table of Contents
    </h1>

    @foreach($kkn as $note)
        <li>
            <a href="{{ $note->getUrl() }}">{{ $note->title }}</a>
        </li>
    @endforeach
@endsection