@component('survey::questions.base', compact('question'))
    @foreach ($question->options as $option)
        <div>
            <input type="checkbox"
                   name="{{ $question->key }}[]"
                   id="{{ $question->key . '-' . Str::slug($option) }}"
                   value="{{ $option }}"
                   class="custom-control-input"
                    {{ ($value ?? old($question->key)) == $option ? 'checked' : '' }}
                    {{ ($disabled ?? false) ? 'disabled' : '' }}
            >
            <label for="{{ $question->key . '-' . Str::slug($option) }}">{{ $option }}</label>
        </div>
    @endforeach
@endcomponent
