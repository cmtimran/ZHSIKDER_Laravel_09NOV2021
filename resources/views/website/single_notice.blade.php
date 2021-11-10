@extends('website.index')
@section('website_main_section')

<div class="col-lg-8 twelve columns" id="left-content">
    <div class="row mainwrapper">
        <div class="col-lg-12 header_msg_section">
            <h3 class="header_msg_section_title">Notice</h3>
            <div class="row">
               
                <div class="col-lg-12">
                    <h2 style="padding-left: 15px;">{{$notice->notice_title}}</h2>
                    <p style="padding-left: 15px;"><strong>Date: </strong>{{date('d-M-Y', strtotime($notice->created_at))}}</p>
                    <p style="padding-left: 15px;">{{$notice->Notice}}</p>
                    <br>
                    @php
                        $file = str_replace("laravel",'',base_path()).'img/backend/noticeboard/'.$notice->notice_title.'.pdf';
                    @endphp
                    @if(file_exists($file))
                    <table>
                        <tr>
                            <td><a href="{{asset('/img/backend/noticeboard/'.$notice->notice_title.'.pdf')}}">Download</a></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <iframe style="height: 972px; width:100%" src="{{asset('/img/backend/noticeboard/'.$notice->notice_title.'.pdf')}}"></iframe>
                            </td>
                        </tr>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop