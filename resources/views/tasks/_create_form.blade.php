<!-- create task form -->
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="form-group row mb-1">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

        <div class="col-md-6">
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ old('description') }}</textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
        <div class="col-md-6">
            <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date">
            @error('start_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>
        <div class="col-md-6">
            <input id="end_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date">
            @error('end_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-1">
        <label for="priority" class="col-md-4 col-form-label text-md-right">{{ __('Priority') }}</label>
        <div class="col-md-6">
            <select name="priority" id="priority" class="form-control">
                @for($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('priority')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <!-- save button -->
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>
<!-- create task form end -->
