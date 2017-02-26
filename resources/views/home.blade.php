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
                      @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <?php
            $errormsg='The video may not be greater than 25600 kilobytes.';
            if($error==$errormsg)
                echo "<li>The video may not be greater than 25 MB.</li>";
            else
                echo " <li> $error </li>";
                ?>
               
            @endforeach
        </ul>
    </div>
@endif

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
