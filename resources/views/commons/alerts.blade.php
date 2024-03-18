@if($errors->any())
<div class="row">
    <div class="col-md">
        <div class="alert alert-danger">
            <strong>Atenção!</strong><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endif

@if(session()->has('success'))
<div class="row">
    <div class="col-md">
        <div class="alert alert-success">
            <strong>Uêba!!!</strong><br>
            {{ session()->get('success') }}
        </div>
    </div>
</div>
@endif
