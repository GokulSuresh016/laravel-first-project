@extends('layout.app');
@section('title','about');
@section('content')
<p>test secction
</p>
<ul>
<li>test1</li>
<li>test2</li>
</ul>
{{$message}}
@foreach($items as $item)
{{$item}}
@endforeach
{{$id}}
@endsection