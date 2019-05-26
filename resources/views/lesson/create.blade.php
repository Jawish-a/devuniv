@extends('admin')
@section('pagecss')
<script src="{{asset('/vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<style>
    #lessonPage {
        height: 760px;
    }
</style>
@endsection

@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Create New Lesson
    </h1>
    <form action="{{action('LessonController@store', [$section,$course])}}" onsubmit="vlinkvalue()" method="post">
        @csrf
        <input type="hidden" name="user_id" value="1">
        <div class="h5p-standard-page-element">
            <div class="h5p-standard-page">
                <h1>test</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label for="lessonTitle">Lesson Title</label>
                    <input type="text" class="form-control  border-1" name="lessonTitle" id="categoryName"
                        placeholder="Insert Lesson Title" required>
                </div>
                <div class="form-group">
                    <label for="lessonContent">Lesson Content</label>
                    <div class="form-control border-1" id="lessonPage">
                        <textarea name="lessonContent" id="lessonContent" cols="30" rows="10">Hello World</textarea>
                    </div>
                    {{-- <textarea name="lessonContent" class="form-control border-1" id="lessonContent" cols="30" rows="20"></textarea>                    --}}
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow mb-4">
                    <a href="#saveOption" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="saveOption">
                        <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                    </a>
                    <div class="collapse show text-center" id="saveOption">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success btn-block">
                                <span class="icon text-white-50"><i class="fas fa-check"></i></span>
                                <span class="text"> Save</span>
                            </button>
                            <a href="#" class="btn btn-secondary btn-block">
                                <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                <span class="text"> Cancel</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#lessonType" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="lessonType">
                        <h6 class="m-0 font-weight-bold text-primary">Lesson Type</h6>
                    </a>
                    <div class="collapse show" id="lessonType">
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="lessonType" id="lessonType" required>
                                    <option selected value="fas fa-video">Video</option>
                                    <option value="fas fa-file-alt">Text</option>
                                    <option value="fas fa-volume-up">Audio</option>
                                    <option value="fas fa-stream">Quiz</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#lessonDuration" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="lessonDuration">
                        <h6 class="m-0 font-weight-bold text-primary">Lesson Duration</h6>
                    </a>
                    <div class="collapse show" id="lessonDuration">
                        <div class="card-body">
                            <div class="form-group">
                                {{-- this one should be fixed to give duration and not time --}}
                                <input type="time" class="form-control  border-1" name="lessonDuration"
                                    id="lessonDuration`" placeholder="Insert Lesson Video Link">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#lessonVideoLink" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="lessonVideoLink">
                        <h6 class="m-0 font-weight-bold text-primary">Video Link</h6>
                    </a>
                    <div class="collapse show" id="lessonVideoLink">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control  border-1" name="lessonVideoLink"
                                    id="lessonVideoLinkValue" placeholder="Insert Lesson Video Link"
                                    value="https://www.youtube.com/watch?v=_SHYKBD8w8Q">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#lessonAttachment" class="d-block card-header py-3" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="lessonAttachment">
                        <h6 class="m-0 font-weight-bold text-primary">Lesson Attachment</h6>
                    </a>
                    <div class="collapse show" id="lessonAttachment">
                        <div class="card-body">
                            <div class="form-group">
                                {{-- iamge preview should be here --}}
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="lessonAttachment"
                                        name="lessonAttachment" type="image">
                                    <label class="custom-file-label" for="lessonAttachment">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- end of page content --}}
@endsection

@section('pagescript')
<script>
    tinymce.init({
        path_absolute: "{{URL::to('/')}}/",
        relative_urls:false,
        selector: 'textarea',
        height:750,
        browser_spellcheck: true,
        plugins:[
            'print preview fullpage searchreplace directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help'
        ],
        toolbar: 'undo redo | formatselect | fontselect fontsizeselect blockquote | bold italic underline strikethrough forecolor backcolor permanentpen formatpainter | link image media codesample | alignleft aligncenter alignright alignjustify rtl ltr | numlist bullist outdent indent | removeformat | code',
        image_advtab: true,
        font_formats: 'Arial=arial,helvetica,sans-serif; Courier New=courier new,courier,monospace; AkrutiKndPadmini=Akpdmi-n; Droid Sans=Droid Sans; Cairo=Cairo, sans-serif;',
        fontsize_formats: '11px 12px 14px 16px 18px 24px 36px 48px',
        contextmenu: "link image imagetools table spellchecker",
        content_css: [
            '//fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Baloo+Bhaijaan|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Markazi+Text|Mirza|Rakkas|Reem+Kufi|Scheherazade|Tajawal',
            '/vendor/tinymce/js/tinymce/themes/custom.css',
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ],
        branding: false,
        

    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
{{-- google fonts -- list of fonts --}}
<script>
    WebFont.load({
        google: {
        families: ['Droid Sans', 'Droid Serif','Cairo','Aref Ruqaa','Rakkas','Jomhuria','Katibeh','Harmattan','Mirza','Baloo Bhaijaan','Reem Kufi','Lateef','Lemonada','Mada','Scheherazade','Markazi Text','El Messiri','Changa','Tajawal','Lalezar','Amiri']
        }
    });

</script>
<script type="text/javascript">
    function vlinkvalue() {

        var vlink = document.getElementById("lessonVideoLinkValue").value;
        vlink = vlink.replace("https://www.youtube.com/watch?v=","");
        document.getElementById("lessonVideoLinkValue").value = vlink;
        console.log(document.getElementById("lessonVideoLinkValue").value);
    }

</script>

<script src="{{asset('\vendor\h5p-standard-page\standard-page.js')}}"></script>

<script src="{{asset('/vendor/h5p-multi-choice/js/multichoice.js')}}"></script>


@endsection