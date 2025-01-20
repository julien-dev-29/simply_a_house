@php
    $label ??= ucfirst($name);
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp

<div @class(['form-group', $class])>

    <label for="{{ $name }}">{{ $label }}</label>

    <select name="{{ $name }}[]" id="{{ $name }}" multiple>

        @foreach ($options as $k => $option)
            <option @selected($value->contains($k)) value="{{ $k }}">{{ $option }}</option>
        @endforeach

    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
