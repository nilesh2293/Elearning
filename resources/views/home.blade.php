@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Upload a video</div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'upload_video','files'=>true)) !!}
                      {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="video" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Upload a Video
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
