<select class="form-control select2bs4" name="category[parent_id]">
    <option value="0" selected="selected">@lang('select_parent')</option>
    @foreach ($list as $item)
        @if ($item->level <= $max_level)
            <option class="select2-lv{{$item->level}}" value="{{ $item->id }}">{{ $item->name }}</option>
        @endif
    @endforeach
</select>


