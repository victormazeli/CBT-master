@extends('epanel.master')
@section('title')
Upload Question
@endsection
@section('content')
<upload-questions :courses="{{$courses}}"></upload-questions>
@endsection
