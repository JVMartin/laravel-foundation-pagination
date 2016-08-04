<div class="pagination text-center">
    {!! $paginate->appends(Input::except('page'))->render(Foundation::paginate($paginate)) !!}
</div>