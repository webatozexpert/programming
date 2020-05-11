@extends('admin.master')
@section ('content')

    <!--Content Start-->
    <section class="container-fluid">
        <div class="row content registration-form">
            <div class="col-12 pl-0 pr-0">
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">Header & Footer Add Form</h4>
                    </div>
                </div>
                <form method="POST" action="{{ route('header-and-footer-save') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
                    @csrf


                    <div class="form-group col-12 mb-3">
                        <label for="titleName" class="col-sm-3 col-form-label text-right">Title Name</label>
                        <input id="titleName" type="text" class="col-sm-9 form-control @error('title_name') is-invalid @enderror"  name="title_name"  value="{{ old('title_name') }}"  placeholder="title name" required autofocus >
                        @error('title_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group col-12 mb-3">
                        <label for="subTitle" class="col-sm-3 col-form-label text-right">Sub Title</label>
                        <input id="subTitle" type="text" class="col-sm-9 form-control @error('sub_title') is-invalid @enderror"  name="sub_title"  value="{{ old('sub_title') }}"  placeholder="sub title" required autofocus >
                        @error('sub_title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>



                    <div class="form-group col-12 mb-3">
                        <label for="address" class="col-sm-3 col-form-label text-right">Address</label>
                        <input id="address" type="test" class="col-sm-9 form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder=" address" required autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label for="mobile" class="col-sm-3 col-form-label text-right">Mobile</label>
                        <input id="mobile" type="text" class="col-sm-9 form-control" name="mobile" value="" placeholder="8801xxxxxxxxx" required autofocus>

                    </div>

                    <div class="form-group col-12 mb-3">
                        <label for="copyright" class="col-sm-3 col-form-label text-right">Copy Right</label>
                        <input id="copyright" type="test" class="col-sm-9 form-control @error('copyright') is-invalid @enderror" name="copyright" value="{{ old('copyright') }}" placeholder=" copy right" required autofocus>
                        @error('copyright')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>



                    <div class="form-group col-12 mb-3">
                        <label class="col-sm-3"></label>
                        <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">Submit</button>
                    </div>
                    <input type="hidden" name="status" value="1"/>
                </form>
            </div>
        </div>
    </section>
    <!--Content End-->
@endsection

