<x-app-layout>
  <div class="container w-full md:max-w-3xl mx-auto pt-20">
      <div class="content">
          <h2> New Post </h2>

          <form method="POST" action="{{ route('blogpost.update', $post->id) }}" enctype="multipart/form-data"> 
          @csrf
          @method('PATCH')
              <div class="field">
                  <label class="label" for="title">Title</label>

                  <div class="control">
                      <input 
                        class="input post-text-box" 
                        type="text" 
                        name="title" 
                        id="title"
                        value="{{ $post->title }}">

                      @error('title')
                          <p class="help is-danger">{{ $errors->first('title') }}</p>
                      @enderror
                  </div>
              </div>

              <div class="field">
                  <label class="label" for="body">Body</label>

                  <div class="control">
                      <textarea 
                        class="post-text-box textarea" 
                        type="text"
                        name="body" 
                        id="body">{{ $post->body }}</textarea>

                      <!-- This error auto fills if the page needs to request for invalid input data -->
                      @error('body')
                          <p class="help is-danger">{{ $errors->first('body') }}</p>
                      @enderror
                  </div>
              </div>

              <div class="field is-grouped">
                  <div class="control">
                      <button class="button is-link" type="submit">Save</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</x-app-layout>