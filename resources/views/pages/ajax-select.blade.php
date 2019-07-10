<option>--- Select State ---</option>
@if(!empty($datak))
  @foreach($datak as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif