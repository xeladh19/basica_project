@extends('template.index')

@section('title')
    Portofolio
@endsection

@section('content')

    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Portfolio</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>We are leading company</h2>
                    <h3>Specializing in Wordpress Theme Development</h3>
                    <p>
                        Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque,
                        orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent
                        consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim
                        fermentum lobortis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">

                @include('works._recents')

            </div>
            <ul class="pager">
                  <li><a href="{{ route('ajax.works.index') }}" id="olderWorks">More works</a></li>
            </ul>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.hoverdir.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $(' #da-thumbs > li ').each(function() {
                $(this).hoverdir();
            });
        });
    </script>
      <script src="{{ asset('assets/js/works/index.js') }}"></script>
@endsection
