@extends('layouts.layout')

@section('content')
    @if(isset($login))

        <div class="table-responsive" id="student">
            <table class="table">
                <thead>
                <tr>
                @foreach($student[0] as $key=>$value)
                    @if($value!=''&&$key!='updated_at'&&$key!='created_at')
                        @if($key=='subject_id')
                            {{--*/$key='subject'/*--}}
                        @endif
                            @if($key=='about_you')
                                {{--*/$key='About'/*--}}
                            @endif
                            @if($key=='night')
                                {{--*/$key='Night Hours'/*--}}
                            @endif
                    <th>{{ucwords($key)}}</th>
                    @endif
                @endforeach
                    <th>Registered on</th>

                </tr>
                </thead>
                <tbody>
                @foreach($student as $stu)
                    <tr>
                    @foreach($stu as $key=>$value)
                    @if($value!=''&&$key!='updated_at'&&$key!='created_at')
                        @if($key=='subject_id')
                            {{--*/$value=DB::table('subjects')->where('id',$value)->get()[0]->name/*--}}
                        @endif
                            @if($key=='resume')
                                <td><a href="{{asset($value)}}">Click here to View</a></td>
                            @else
                                <td>{{$value}}</td>
                            @endif
                    @endif
                    @endforeach
                        <td>{{$stu->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="table-responsive" id="expert">
            <table class="table">
                <thead>
                <tr>
                    @foreach($expert[0] as $key=>$value)
                        @if($value!=''&&$key!='updated_at'&&$key!='created_at')
                            @if($key=='subject_id')
                                {{--*/$key='subject'/*--}}
                            @endif
                            @if($key=='about_you')
                                {{--*/$key='About'/*--}}
                            @endif
                                @if($key=='job')
                                    {{--*/$key='Full Time'/*--}}
                                @endif
                                @if($key=='night')
                                    {{--*/$key='Night Hours'/*--}}
                                @endif
                            <th>{{ucwords($key)}}</th>
                        @endif
                    @endforeach
                        <th>Registered on</th>

                </tr>
                </thead>
                <tbody>
                @foreach($expert as $exp)
                    <tr>
                        @foreach($exp as $key=>$value)
                            @if($value!=''&&$key!='updated_at'&&$key!='created_at')
                                @if($key=='subject_id')
                                    {{--*/$value=DB::table('subjects')->where('id',$value)->get()[0]->name/*--}}
                                @endif

                                    @if($key=='resume')
                                        <td><a href="{{asset($value)}}">Click here to View</a></td>
                                    @else
                                        <td>{{$value}}</td>
                                    @endif
                            @endif
                        @endforeach
                            <td>{{$stu->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @else
        <div class="modal fade" tabindex="-1" role="dialog" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Admin Login</h4>
                    </div>
                    <div class="modal-body">
                        <form id="adminPassword" action="{{url('/authorise')}}" method="post">
                            <div class="form-group" id="aPassword">
                                @if(session('status'))
                                    <label class="control-label has-error" for="adminPass">{{session('status')}}</label>
                                @endif
                                <input class="form-control" type="password" placeholder="Password" id="adminPass" name="pass">
                            </div>
                        </form>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    @endif

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            if ($("#modal").length > 0) {
                $('#modal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#name').focus();
            }
        });
    </script>
@endsection