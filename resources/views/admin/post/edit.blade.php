 @extends('admin.layouts.main')
 @section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование посты</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <form action="{{ route('admin.post.update', $post->id ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group w-25">
                    <input type="text" class="form-control" name="title" placeholder="Название поста"
                    value="{{ $post->title }}"
                    >
                    @error('title')
                      <div class="text-danger">{{ message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <textarea name="content" id="summernote">
                   {{ $post->content }}
                    </textarea>
                    @error('content')
                      <div class="text-danger">{{ message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить превью</label>
                    <div class="w-50">
                      <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image">
                        <label class="custom-file-label">Выберите изображение</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                    @error('preview_image')
                      <div class="text-danger">{{ message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить главное изображение</label>
                    <div class="w-25">
                      <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="main_image">
                        <label class="custom-file-label">Выберите изображение</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                    @error('main_image')
                      <div class="text-danger">{{ message }}</div>
                    @enderror
                  </div>
                  <div class="form-group w-50">
                        <label>Выберите категорию</label>
                        <select name="category_id" class="form-control">
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}"
                          {{ $category->id == $post->category_id ? ' selected' : ''}}
                          >{{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                  <label>Тэги</label>
                  <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                  @foreach($tags as $tag)
                  <option {{ is_array( $post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                  @endforeach
                  </select>
                </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Обновить">
                  </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection