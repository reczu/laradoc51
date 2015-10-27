@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() AS $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif