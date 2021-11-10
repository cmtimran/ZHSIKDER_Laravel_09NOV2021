@extends('website.index')
@section('website_main_section')

<div class="col-lg-8 twelve columns" id="left-content">
        <div class="row mainwrapper">
            <div class="col-lg-12 header_msg_section">
                <h3 class="header_msg_section_title">Notice</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Notice</th>
                            </tr>
                    		@foreach($notice as $notice_data)
                            <tr>
                                <td>{{$notice_data->created_at->format('d-M-Y')}}</td>
                                <td>{{str_limit($notice_data->notice_title, 150)}}</td>
                                <td>
                                    <a href="{{asset('/img/backend/noticeboard/'.$notice_data->notice_title.'.pdf')}}">Download</a>
                                    <span>&nbsp;/&nbsp;</span>
                                    <a href="/frontend/notice/{{$notice_data->notice_id}}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $notice->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop