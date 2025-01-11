@extends(xPhpLib('c3R2OjpzdG12'))
@section('title', xPhpLib('VmVyaWZ5'))
@section(xPhpLib('Y29udGVudA=='))
    @phXml('PGRpdj4=')
        <form action="{{ route(xPhpLib('aW5zdGFsbC52ZXJpZnk=')) }}" method=@phXml('UE9TVA==')>
            @csrf
            @method(xPhpLib('UE9TVA=='))
            @phXml('PGRpdiBjbGFzcz0icm93Ij4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJkYXRhYmFzZS1maWVsZCBjb2wtbWQtMTIiPg0KICAgICAgICAgICAgICAgICAgICA8aDY+UGxlYXNlIHZlcmlmeSBsaWNlbnNlICYgZW50ZXIgeW91ciBhZG1pbmlzdHJhdGlvbiBkZXRhaWxzIGJlbG93LjwvaDY+DQoNCiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+RW52YXRvIFVzZXJuYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                           @phXml('IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJlbnZhdG9fdXNlcm5hbWUi') value="{{ old(xPhpLib('ZW52YXRvX3VzZXJuYW1l')) }}"
                           @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                            @if ($errors->has(xPhpLib('ZW52YXRvX3VzZXJuYW1l')))
                                @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('ZW52YXRvX3VzZXJuYW1l')) }}@phXml('PC9zcGFuPg==')
                            @endif
                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KDQogICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg==')
                        @phXml('PGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+')
                        @phXml('PGxhYmVsPlB1cmNoYXNlIENvZGU8c3BhbiBjbGFzcz0icmVxdWlyZWQtZmlsbCI+Kjwvc3Bhbj48L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                            @phXml('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImxpY2Vuc2Ui') value="{{ old(xPhpLib('bGljZW5zZQ==')) }}" @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                            @if ($errors->has(xPhpLib('bGljZW5zZQ==')))
                                @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('bGljZW5zZQ==')) }}@phXml('PC9zcGFuPg==')
                            @endif

                        @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KPGRpdj4NCklmIHlvdSBkb24ndCBrbm93IGhvdyB0byBnZXQgcHVyY2hhc2UgY29kZSwgY2xpY2sgaGVyZTogPGEgaHJlZiA9Imh0dHBzOi8vaGVscC5tYXJrZXQuZW52YXRvLmNvbS9oYy9lbi11cy9hcnRpY2xlcy8yMDI4MjI2MDAtV2hlcmUtSXMtTXktUHVyY2hhc2UtQ29kZSI+IHdoZXJlIGlzIG15IHB1cmNoYXNlIGNvZGUgPC9hPg0KPC9kaXY+')
                        @if (scSpatPkS())
                        @phXml('PGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+DQogICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+Rmlyc3QgTmFtZSA8c3BhbiBjbGFzcz0icmVxdWlyZWQtZmlsbCI+Kjwvc3Bhbj48L2xhYmVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2Pg==')
                                    @phXml('PGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImFkbWluW2ZpcnN0X25hbWVdIiA=') value="{{ old(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')) }}"
                                        @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                                    @if ($errors->has(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')))
                                        @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4uZmlyc3RfbmFtZQ==')) }}@phXml('PC9zcGFuPg==')
                                    @endif
                                @phXml('IDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+TGFzdCBOYW1lPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJhZG1pbltsYXN0X25hbWVdIiA=') value="{{ old(xPhpLib('YWRtaW4ubGFzdF9uYW1l')) }}"
                                        @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                                    @if ($errors->has(xPhpLib('YWRtaW4ubGFzdF9uYW1l')))
                                        @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ubGFzdF9uYW1l')) }}@phXml('PC9zcGFuPg==')
                                    @endif
                               @phXml('IDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImZvcm0tZ3JvdXAgZm9ybS1yb3ciPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+RW1haWwgPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                                    @phXml('PGlucHV0IHR5cGU9ImVtYWlsIiBuYW1lPSJhZG1pbltlbWFpbF0i') value="{{ old(xPhpLib('YWRtaW4uZW1haWw=')) }}" @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                                    @if ($errors->has(xPhpLib('YWRtaW4uZW1haWw=')))
                                        @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4uZW1haWw=')) }}@phXml('PC9zcGFuPg==')
                                    @endif
                                @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5QYXNzd29yZCAgPHNwYW4gY2xhc3M9InJlcXVpcmVkLWZpbGwiPio8L3NwYW4+PC9sYWJlbD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj4=')
                                    @phXml('PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJhZG1pbltwYXNzd29yZF0i') @phXml('Y2xhc3M9ImZvcm0tY29udHJvbCIgYXV0b2NvbXBsZXRlPSJvZmYiPg==')
                                    @if ($errors->has(xPhpLib('YWRtaW4ucGFzc3dvcmQ=')))
                                        @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ucGFzc3dvcmQ=')) }}@phXml('PC9zcGFuPg==')
                                    @endif
                                @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iZm9ybS1ncm91cCBmb3JtLXJvdyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5Db25maXJtIFBhc3N3b3JkIDxzcGFuIGNsYXNzPSJyZXF1aXJlZC1maWxsIj4qPC9zcGFuPjwvbGFiZWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+')
                                   @phXml('IDxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0iYWRtaW5bcGFzc3dvcmRfY29uZmlybWF0aW9uXSIgY2xhc3M9ImZvcm0tY29udHJvbCINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhdXRvY29tcGxldGU9Im9mZiI+')
                                    @if ($errors->has(xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u')))
                                        @phXml('PHNwYW4gY2xhc3M9InRleHQtZGFuZ2VyIj4='){{ $errors->first(xPhpLib('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u')) }}@phXml('PC9zcGFuPg==')
                                    @endif
                                @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+')
                                @endif
                                @phXml('PC9kaXY+DQogICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgIDwvZm9ybT4NCiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0LWJ0biBkLWZsZXgiPg0KICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSJqYXZhc2NyaXB0OnZvaWQoMCkiIGNsYXNzPSJidG4gYnRuLXByaW1hcnkgc3VtaXQtZm9ybSI+U3VibWl0IDxpDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LXJpZ2h0IG1zLTIiPjwvaT48L2E+DQogICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICA8L2Rpdj4=')
        @endsection
        @section(xPhpLib('c2NyaXB0cw=='))
            @phXml('IDxzY3JpcHQ+DQogICAgICAgICAgICAgICAgJCgiLnN1bWl0LWZvcm0iKS5jbGljayhmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICAgICAgICAgJCgiZm9ybSIpLnN1Ym1pdCgpOw0KICAgICAgICAgICAgICAgIH0pOw0KICAgICAgICAgICAgPC9zY3JpcHQ+')
        @endsection

