@extends(xPhpLib('c3R2OjpzdG1z'))
@section('title', xPhpLib('RGlyZWN0b3JpZXM='))
@section(xPhpLib('Y29udGVudA=='))
    @phXml('PGRpdiBjbGFzcz0id2l6YXJkLXN0ZXAtMiBkLWJsb2NrIj4NCiAgICAgICAgPGg2PlBsZWFzZSBlbnRlciB5b3VyIGFkbWluaXN0cmF0aW9uIGRldGFpbHMgYmVsb3cuPC9oNj4NCiAgICAgICAgPGRpdiBjbGFzcz0idGFibGUtcmVzcG9uc2l2ZSI+DQogICAgICAgICAgICA8dGFibGUgY2xhc3M9InRhYmxlIj4NCiAgICAgICAgICAgICAgICA8dGhlYWQ+DQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5QbGVhc2UgbWFrZSBzdXJlIHRoZSBQSFAgZXh0ZW5zaW9ucyBsaXN0ZWQgYmVsb3cgYXJlIGluc3RhbGxlZDwvdGg+DQogICAgICAgICAgICAgICAgICAgICAgICA8dGg+c3RhdHVzPC90aD4NCiAgICAgICAgICAgICAgICAgICAgPC90cj4NCiAgICAgICAgICAgICAgICA8L3RoZWFkPg0KICAgICAgICAgICAgICAgIDx0Ym9keT4=')
                    @foreach ($directories as $directory => $isCheck)
                        @phXml('PHRyPg==')
                            <td>{{ $directory }}</td>
                            @phXml('PHRkIGNsYXNzPSJpY29uLXN1Y2Nlc3MiPg==')
                                <i class="fas fa-{{ $isCheck ? 'check' : 'times' }}"></i>
                            @phXml('PC90ZD4=')
                        @phXml('PHRyPg==')
                    @endforeach
               @phXml('IDwvdGJvZHk+DQogICAgICAgICAgICA8L3RhYmxlPg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGRpdiBjbGFzcz0ibmV4dC1idG4gZC1mbGV4Ij4=')
            <a href="{{ route(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM=')) }}" @phXml('Y2xhc3M9ImJ0biBidG4tcHJpbWFyeSBwcmV2MSI=')>@phXml('PGkgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LWxlZnQgbWUtMiI+PC9pPiBzdGF0dXM8L2E+')
            @if ($configured)
                <a href="{{ route(xPhpLib('aW5zdGFsbC5saWNlbnNl')) }}" @phXml('Y2xhc3M9ImJ0biBidG4tcHJpbWFyeSBwcmV2MSI=')>@phXml('TmV4dCA8aSBjbGFzcz0iZmFyIGZhLWhhbmQtcG9pbnQtcmlnaHQgbXMtMiI+PC9pPjwvYT4=')
            @else
                @phXml('PGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IGRpc2FibGVkIj4='){{ __('static.next') }}@phXml('PGkgY2xhc3M9ImZhciBmYS1oYW5kLXBvaW50LXJpZ2h0IG1zLTIiPjwvaT48L2E+')
            @endif
        @phXml('PC9kaXY+DQogICAgPC9kaXY+')
@endsection
