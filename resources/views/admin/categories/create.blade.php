<div class="modal fade" id="modalCreateCategory">
    <div class="modal-dialog modal-sm">
        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('category_create')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('category_name')</label>
                        <input class="form-control" type="text" name="category[name]" id="">
                    </div>
                    <div class="form-group">
                        <label>@lang('select_parent')</label>
                        @include('admin.inc.categories_dropdown', ['list' => $Categories, 'max_level' => 3])
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('skip')</button>
                    <button type="submit" class="btn btn-primary">@lang('save')</button>
                </div>
            </div>
        </form>
    </div>
</div>
