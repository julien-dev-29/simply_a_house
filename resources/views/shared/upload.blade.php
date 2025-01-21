@php
    $class ??= null;
    $multiple ??= false;
@endphp

<div @class(['form-group', $class])>

    <label for="{{ $name }}">{{ $label }}</label>
    <input @if ($multiple) multiple @endif type="file" id="{{ $name }}"
        name="{{ $name . ($multiple ? '[]' : '') }}" class="form-control @error($name)
        is-invalid  @enderror">

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
