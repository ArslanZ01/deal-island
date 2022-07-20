@extends('layouts.app', ['tinymce'=>true])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Template') }}</div>

                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                        <form method="post" action="{{ route('templates.description.show') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <textarea type="text" class="form-control" id="title" name="title"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="product_details" class="form-label">Product Details</label>
                                <textarea type="text" class="form-control" id="product_details" name="product_details"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="features_and_further_details" class="form-label">Features and Further Details</label>
                                <textarea type="text" class="form-control" id="features_and_further_details" name="features_and_further_details"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="specifications" class="form-label">Specifications</label>
                                <textarea type="text" class="form-control" id="specifications" name="specifications"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="dimensions" class="form-label">Dimensions</label>
                                <textarea type="text" class="form-control" id="dimensions" name="dimensions"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea#product_details, textarea#features_and_further_details, textarea#specifications, textarea#dimensions',
            height: 200,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>
@endsection
