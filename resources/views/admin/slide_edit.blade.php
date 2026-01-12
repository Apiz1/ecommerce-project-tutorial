<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>SurfsideMedia</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div> -->

                @include('admin.sidebar')
                <div class="section-content-right">
                @include('admin.header')
                    <div class="main-content">

                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Slide</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="{{url('home')}}">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="slider.html">
                                                <div class="text-tiny">Slider</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">New Slide</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                   <div class="wg-box">
                                    <form class="form-new-product form-style-1" action="{{url('slide_update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf  
                                        <input type="hidden" name="id" value="{{$slide->id}}" />  
                                    <fieldset class="name">
                                            <div class="body-title">Tagline <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="tagline" name="tagline"
                                                tabindex="0" value="{{$slide->tagline}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('tagline')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                        <fieldset class="name">
                                            <div class="body-title">Title <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="title" name="title"
                                                tabindex="0" value="{{$slide->title}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('title')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                        <fieldset class="name">
                                            <div class="body-title">Subtitle <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="subtitle" name="subtitle"
                                                tabindex="0" value="{{$slide->subtitle}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('subtitle')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                          <fieldset class="name">
                                            <div class="body-title">lnik <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="link" name="link"
                                                tabindex="0" value="{{$slide->link}}" aria-required="true" required="">
                                        </fieldset>
                                        @error('link')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                        <fieldset>
                                            <div class="body-title">Upload images <span class="tf-color-1">*</span>
                                            </div>
                                            <div class="upload-image flex-grow">
                                                @if('$slide->image')
                                                <div class="item" id="imgpreview">
                                                    <img src="/slide_image/{{$slide->image}}" class="effect8" alt=""/>
                                                </div>
                                                @endif
                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span
                                                                class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="image">
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        @error('image')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                        <fieldset class="category">
                                            <div class="body-title">Status</div>
                                            <div class="select flex-grow">
                                                <select class="" name="status">
                                                    <option>Select</option>
                                                    <option value="1" @if($slide->status=="1") selected @endif>Active</option>
                                                    <option value="0" @if($slide->status=="0") selected @endif>Inactive</option>
                                                </select>
                                            </div>
                                            @error('status')<span class ="alert alert-danger text-center">{{$message}}</span>@enderror
                                        </fieldset>
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /new-category -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>


                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>   
    <script src="js/apexcharts/apexcharts.js"></script>
    <script src="js/main.js"></script>

     <script>
    $(function () {
        $("#myFile").on("change", function () {
            const [file] = this.files;
            if (file) {
                $("#imgpreview img").attr('src', URL.createObjectURL(file));
                $("#imgpreview").show();
            }
        });

        $("input[name='name']").on("change", function () {
            $("input[name='slug']").val(stringToSlug($(this).val()));
        });
    });

    function stringToSlug(text) {
        return text
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }
</script>

</body>

</html>