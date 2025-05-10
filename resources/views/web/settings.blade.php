@extends('web.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">{{ __('labels.settings') }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">{{ __('labels.settings') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-4 border-top">
                                    <form method="POST" action="{{ route('save-operator-settings') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="type">{{__('labels.update_current_landborder')}}</label>
                                                    <select id="active_port" name="active_port" class="form-control">
                                                        <option value="">{{__('labels.select_current_landborder')}}</option>
                                                        @foreach ($ports as $id => $port)
                                                            <option value="{{ $port->id }}" @if(Auth::user()->active_port == $port->id) selected @endif>{{ $port->port_name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('type')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="justify-content-end d-flex gap-3 mt-3">
                                                    <button type="button" class="btn btn-light waves-effect"
                                                        data-bs-dismiss="modal">{{ __('labels.cancel') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">{{ __('labels.save') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#type').change(function() {
                if ($(this).val() === '1') {
                    $('#staffNameContainer').show();
                } else {
                    $('#staffNameContainer').hide();
                }
            });

            $('#staff_name').select2({
                placeholder: '{{ __('Enter staff name') }}',
                ajax: {
                    url: '{{ route('fetch.staff.names') }}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });

        });
    </script>
@endsection
