<h3 style="background:#efefef; border-top:solid 1px #dadada; padding: 2em 1em;">{{ $section->name }}</h3>

@foreach($section->questions as $question)
    @include('survey::questions.single')
@endforeach
