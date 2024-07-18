<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="title" class="form-label"> Title</label>
                                {!! Form::text('title',null,[
                            'class' =>'form-control '.($errors->has('title') ? ' is-invalid' : null),
                            'placeholder'=> 'Title' ,'required'
                            ]) !!}
                                @error('title')
                                <div class="invalid-feedback" style="color: #ef1010">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="body" class="form-label"> Description</label>
                            <textarea name="body" id="body" cols="30" rows="4"
                                      required    class="form-control {{$errors->has('body') ? 'is-invalid' : null}}">{{isset($expert) ? $expert->body : ''}}</textarea>
                            @error('body')
                            <div class="invalid-feedback" style="color: #ef1010">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>
                </div>


                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-success btn-block" type="submit">Save</button>
                    </div>

            </div>
        </div>
    </div>
</div>
