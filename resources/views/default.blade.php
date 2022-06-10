@foreach ($survey->sections()->get() as $section)
    @dd($section)
    @include("survey::sections.single")
@endforeach

@foreach($survey->questions()->withoutSection()->get() as $question)
    @include("survey::questions.single")
@endforeach

@if ($eligible)
    <button>Submit</button>
@endif
