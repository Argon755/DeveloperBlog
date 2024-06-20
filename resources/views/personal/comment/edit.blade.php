 @extends('personal.layouts.main')
 @section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
<div class="row">
        <div class="col-12">
          <form action="{{ route('personal.comment.update', $comment->id ) }}" method="POST" class="w-50">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <textarea class="form-control" name="message" cols="30" rows="10">{{ $comment->message }}</textarea> 
        @error('message')
            <div class="text-danger">Это поле необходимо для заполнения</div>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Обновить">
</form>
</div>
          <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="2" class="text-center">Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($comments as $comment)
                      <tr>
                        <td>{{ $comment->id }}</td>
                        <td> {{  $comment->title }} </td>
                        <td  class="text-center"><a href="{{ route('admin.post.edit', $comment->id)  }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                        <td  class="text-center">
                          <form action="{{ route('admin.comment.delete',$comment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                              <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                   </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </div>
  @endsection