@extends(xPhpLib('c3R2OjpzdG1z'))
@section('title', xPhpLib('RGF0YWJhc2U='))
@section(xPhpLib('Y29udGVudA=='))
    @phXml('PGRpdiBjbGFzcz0id2l6YXJkLXN0ZXAtMyBkLWJsb2NrIj4=')
        <form action="{{ route(xPhpLib('aW5zdGFsbC5kYXRhYmFzZS5jb25maWc=')) }}" method=@phXml('UE9TVA==')>
            @csrf
            @method(xPhpLib('UE9TVA=='))
            @phXml('PGRpdiBjbGFzcz0icm93Ij4=')
            @if (scDotPkS())
            @phXml('PGRpdiBjbGFzcz0iZGF0YWJhc2UtZmllbGQgY29sLW1kIj4=')
            @phXml('PGg2PlBsZWFzZSBlbnRlciB5b3VyIGRhdGFiYXNlIGNvbmZpZ3VyYXRpb24gZGV0YWlscyBiZWxvdy48L2g2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Ib3N0IDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                           @phXml('IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJkYXRhYmFzZVtEQl9IT1NUXSI')
                                value="{{ old(xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==')) ? old(xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==')) : '127.0.0.1' }}"
                                @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgcGxhY2Vob2xkZXI9IjEyNy4wLjAuMSIgYXV0b2NvbXBsZXRlPSJvZmYiPg')
                            @if ($errors->has(xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==')))
                                @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZGF0YWJhc2UuREJfSE9TVA==')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Qb3J0PHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                            @phXml('PGlucHV0IHR5cGU9Im51bWJlciIgbmFtZT0iZGF0YWJhc2VbREJfUE9SVF0i')
                                value="{{ old(xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==')) ? old(xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==')) : '3306' }}"
                               @phXml('IGNsYXNzPSJmb3JtLWNvbnRyb2wiIHBsYWNlaG9sZGVyPSIzMzA2IiBhdXRvY29tcGxldGU9Im9mZiI+')
                            @if ($errors->has(xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==')))
                            @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZGF0YWJhc2UuREJfUE9SVA==')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EQiBVc2VybmFtZTxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            @phXml('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImRhdGFiYXNlW0RCX1VTRVJOQU1FXSIg') value="{{ old(xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUU=')) }}"
                                @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                            @if ($errors->has(xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUU=')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZGF0YWJhc2UuREJfVVNFUk5BTUU=')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EQiBQYXNzd29yZDwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                           @phXml('IDxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0iZGF0YWJhc2VbREJfUEFTU1dPUkRdIiBjbGFzcz0iZm9ybS1jb250cm9sIiBhdXRvY29tcGxldGU9Im9mZiI+')
                            @if ($errors->has(xPhpLib('ZGF0YWJhc2UuREJfUEFTU1dPUkQ=')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZGF0YWJhc2UuREJfUEFTU1dPUkQ=')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5EYXRhYmFzZSBOYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                               @phXml('IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJkYXRhYmFzZVtEQl9EQVRBQkFTRV0i') value="{{ old(xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0U=')) }}"
                                @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgIGF1dG9jb21wbGV0ZT0ib2ZmIj4=')
                            @if ($errors->has(xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0U=')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZGF0YWJhc2UuREJfREFUQUJBU0U=')) }}@phXml('PC9zcGFuPg==')
                            @endif

                        @phXml('PC9kaXY+DQo8L2Rpdj4NCjxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3cgZm9ybS1jaGVjayI+DQogIDxpbnB1dCBjbGFzcz0iZm9ybS1jaGVjay1pbnB1dCIgbmFtZT0iaXNfaW1wb3J0X2RhdGEiIHR5cGU9ImNoZWNrYm94IiB2YWx1ZT0iIiBpZD0iaW1wb3J0RHVtbXlEYXRhIj4NCiAgPGxhYmVsIGNsYXNzPSJmb3JtLWNoZWNrLWxhYmVsIiBmb3I9ImlzX2ltcG9ydF9kYXRhIj4NCiAgICBJbXBvcnQgRHVtbXkgRGF0YSANCiAgPC9sYWJlbD4NCjwvZGl2Pg0KPC9kaXY+')
                @endif
                @if(scSpatPkS())
                @phXml('PGRpdiBjbGFzcz0iZGF0YWJhc2UtZmllbGQgY29sLW1kIiBpZD0iYWRtaW5Gb3JtR3JvdXAiPg==')
                       @phXml('PGg2PlBsZWFzZSBlbnRlciB5b3VyIGFkbWluaXN0cmF0aW9uIGRldGFpbHMgYmVsb3cuPC9oNj4NCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+Rmlyc3QgTmFtZSA8c3BhbiBjbGFzcz0icmVxdWlyZWQtZmlsbCI+Kjwvc3Bhbj48L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                            @phXml('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImFkbWluW2ZpcnN0X25hbWVdIiA=') value="{{ old(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')) }}"
                                @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                            @if ($errors->has(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5MYXN0IE5hbWU8c3BhbiBjbGFzcz0icmVxdWlyZWQtZmlsbCI+Kjwvc3Bhbj48L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                            @phXml('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImFkbWluW2xhc3RfbmFtZV0i') value="{{ old(xPhpLib('YWRtaW4ubGFzdF9uYW1l')) }}"
                                @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                            @if ($errors->has(xPhpLib('YWRtaW4ubGFzdF9uYW1l')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ubGFzdF9uYW1l')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5FbWFpbDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            @phXml('PGlucHV0IHR5cGU9ImVtYWlsIiBuYW1lPSJhZG1pbltlbWFpbF0i') value="{{ old(xPhpLib('YWRtaW4uZW1haWw=')) }}" @phXml('IGNsYXNzPSJmb3JtLWNvbnRyb2wiIGF1dG9jb21wbGV0ZT0ib2ZmIj4=')
                            @if ($errors->has(xPhpLib('YWRtaW4uZW1haWw=')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4uZW1haWw=')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5QYXNzd29yZDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            @phXml('PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJhZG1pbltwYXNzd29yZF0iIGNsYXNzPSJmb3JtLWNvbnRyb2wiIGF1dG9jb21wbGV0ZT0ib2ZmIj4=')
                            @if ($errors->has(xPhpLib('YWRtaW4ucGFzc3dvcmQ=')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ucGFzc3dvcmQ=')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJmb3JtLWdyb3VwIGZvcm0tcm93Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Db25maXJtIFBhc3N3b3JkIDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                            @phXml('PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJhZG1pbltwYXNzd29yZF9jb25maXJtYXRpb25dIiBjbGFzcz0iZm9ybS1jb250cm9sIiBhdXRvY29tcGxldGU9Im9mZiI+')
                            @if ($errors->has(xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u')))
                               @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u')) }}@phXml('PC9zcGFuPg==')
                            @endif
                      @phXml('ICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgPC9kaXY+')
                @endif
            @phXml('PC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')

            <a href="{{ route(xPhpLib('aW5zdGFsbC5saWNlbnNl')) }}" @phXml('Y2xhc3M9ImJ0biBidG4tcHJpbWFyeSIgaWQ9InByZXZpb3VzQnRuIj48aSBjbGFzcz0iZmFyIGZhLWhhbmQtcG9pbnQtbGVmdCBtZS0yIj48L2k+DQogICAgICAgICAgICAgICAgUHJldmlvdXM8L2E+')
            @phXml('PGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiAgaWQ9InN1Ym1pdEJ0biIgIGNsYXNzPSJidG4gYnRuLXByaW1hcnkgc3VibWl0LWZvcm0iPk5leHQ8aQ0KICAgICAgICAgICAgICAgICAgICBjbGFzcz0iZmFyIGZhLWhhbmQtcG9pbnQtcmlnaHQgbXMtMiI+PC9pPjxzcGFuIGlkPSJzcGlubmVySWNvbiIgY2xhc3M9InNwaW5uZXItYm9yZGVyIHNwaW5uZXItYm9yZGVyLXNtIG1zLTIgZC1ub25lIj48L3NwYW4+PC9hPg==')
       @phXml('IDwvZGl2Pg0K')
       @phXml('IDwvZGl2Pg0K')
@endsection
@section(xPhpLib('c2NyaXB0cw=='))
   @phXml('PHNjcmlwdD4NCiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkgew0KJ3VzZSBzdHJpY3QnOw0KDQokKCcjaW1wb3J0RHVtbXlEYXRhJykuY2hhbmdlKGZ1bmN0aW9uKCkgew0KICAgICAgaWYgKCQodGhpcykuaXMoJzpjaGVja2VkJykpIHsNCiAgICAgICAgJCgnI2FkbWluRm9ybUdyb3VwJykuYWRkQ2xhc3MoJ2Qtbm9uZScpOw0KICAgICAgfSBlbHNlIHsNCiAgICAgICAgJCgnI2FkbWluRm9ybUdyb3VwJykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpOw0KICAgICAgfQ0KICAgIH0pOw0KICAgICAgICAgICAgJCgnLnN1Ym1pdC1mb3JtJykub24oJ2NsaWNrJywgZnVuY3Rpb24oZXZlbnQpIHsNCiAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpOw0KICAgICAgICAgICAgICAgICQodGhpcykuYWRkQ2xhc3MoJ2Rpc2FibGVkJyk7DQogICAgICAgICAgICAgICAgJCh0aGlzKS5maW5kKCdpJykuYWRkQ2xhc3MoJ2Qtbm9uZScpOw0KICAgICAgICAgICAgICAgICQoJyNwcmV2aW91c0J0bicpLmFkZENsYXNzKCdkaXNhYmxlZCcpOw0KICAgICAgICAgICAgICAgICQoJyNzdWJtaXRCdG4nKS5hZGRDbGFzcygnZGlzYWJsZWQnKTsNCiAgICAgICAgICAgICAgICAkKCcjc3Bpbm5lckljb24nKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7DQogICAgICAgICAgICAgICAgJCgiZm9ybSIpLnN1Ym1pdCgpOw0KICAgICAgICAgICAgfSk7DQogICAgICAgIH0pOw0KPC9zY3JpcHQ+')
@endsection
