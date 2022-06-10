<div>
    <label style="font-size:1.1rem" class="mb-3" for="{{ $question->key }}">{{ $question->content }}</label>
    {{ $slot }}
    @if($errors->has($question->key))
        <p>{{ $errors->first($question->key) }}</p>
    @endif
</div>

<div class="text-success">
    {{ $report ?? '' }}
</div>
