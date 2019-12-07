@extends('admin')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Tambah Siswa</h5>
            </div>
            <div class="card-body">
                <form method="post" action="store" enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="nama" name="Name" value="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="no_hp" class="form-control"  placeholder="Phone Number" value="Your Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="email" value="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round" id="insert">Insert</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#insert').click(function(){
					$.ajax({
						type:'post',
						url: 'store',
						data:{
							'_token':$('input[name=_token').val(),
							'Nama':$('input[name=Nama').val(),
							'no_hp':$('input[name=no_hp').val(),
							'email':$('input[name=email').val()
						},
						success:function(data){
							window.location.reload();
						},
					});
				});
</script>
@endsection
