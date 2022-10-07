@extends('dashboard.layouts.main')

@section('container')

<h1>storage/{{ $materi->file_path }}</h1>



<object data="storage/{{ $materi->file_path }}"  type="application/pdf"></object>

test

{{ $materi->file_path }}
<iframe src="storage/{{ $materi->file_path }}" id="pdf_display_frame" width="100%" height="500px"></iframe>

<a href="storage/{{ $materi->file_path }}">Open the pdf!</a>
<div class="div">{{ $url }}   </div>


@endsection