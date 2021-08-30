@if (session('success') || session('failure'))
    <div class="alert alert-{{ !is_null(session('success')) ? 'success' : 'danger' }}">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span><b> Info - </b> {{ session('success') ?? session('failure') }}</span>
    </div>
@endif
