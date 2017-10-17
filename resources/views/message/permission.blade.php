@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <a href="{{ URL::route('message.view') }}" class="btn btn-outline-dark back">Back</a>
                <div class="message-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="message-heading">{{ ($message->isApproved === null) ? 'Requested' : (($message->isApproved === 1) ? 'Approved' : 'Rejected') }}</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">From: <span>{{ $message->user->first_name }}</span></h4>
                            <h5 class="card-title">Date: <span>{{ $message->created_at }}</span></h5>

                            @if($message->isApproved == null)
                                <p class="card-text">{{ $message->user->first_name }} has requested to edit result
                                    for semester {{ $message->semester_no }} of {{ $message->student->user->first_name }}
                                    of {{$message->student->department->name}}
                                    of {{$message->student->department->university->name}} Registration no
                                    {{ $message->student->registration_no}}. Please go through the following link to
                                    give permission.</p>

                                <p><b>Message:</b><span> {{ $message->message }}</span></p>

                                <button id="approval" class="btn btn-primary">Approve</button>
                                <button id="rejection" class="btn btn-primary">Reject</button>

                            @endif
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection

@section('css')
    <style type="text/css">
        .list-group-item.active{
            background-color: #000034 !important;
            border-color: #000034 !important;
        }

        .back{
            margin: 20px 0;
        }
    </style>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
            });

            $('#approval').click(function () {
                update(1);
            });

            $('#rejection').click(function () {
                update(0);
            });

            function update(val) {
                $.post("{{ URL::route('message.permission') }}",
                    {
                        permission: val,
                        id: '<?php echo $message->id ?>'
                    },
                    function(data){
                        if(data == "OK"){
                            location.reload();
                        }
                    }
                );
            }
        });
    </script>

@endsection