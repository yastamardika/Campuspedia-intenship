@extends('admin')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Informasi Siswa</h5>
            </div>
            <div class="card-body">
                @foreach ($siswa as $s)

                <form method="post" action="/edit/update">{{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $s->id }}">
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="nama" name="Nama"
                                    value="{{ $s->Nama }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="No Hp"
                                    value="{{ $s->no_hp }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="email"
                                    value="{{ $s->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round" id="update">Update</button>
                        </div>
                    </div>
                </form>
                @endforeach


            </div>
        </div>
    </div>
</div>
{{-- <script type="text/javascript">
    $('#update').click(function(){
					$.ajax({
						type:'post',
						url: '/edit/update',
						data:{
                            '_token':$('input[name=_token').val(),
                            'id':$('#upid').val(),
							'Nama':$('input[name=Nama').val(),
							'no_hp':$('input[name=no_hp').val(),
							'email':$('input[name=email').val()
						},
						success:function(data){
							window.location.reload();
						},
					});
				});
</script> --}}
@endsection
