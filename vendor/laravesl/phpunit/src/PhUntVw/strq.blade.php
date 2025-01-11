@extends(xPhpLib('c3R2OjpzdG1z'))
@section('title', xPhpLib('UmVxdWlyZW1lbnRz'))
@section(xPhpLib('Y29udGVudA=='))
    @phXml('PGRpdiBjbGFzcz0id2l6YXJkLXN0ZXAtMSBkLWJsb2NrIj4NCiAgICAgICAgPGg2PlBsZWFzZSBtYWtlIHN1cmUgdGhlIFBIUCBleHRlbnNpb25zIGxpc3RlZCBiZWxvdyBhcmUgaW5zdGFsbGVkPC9oNj4NCiAgICAgICAgPGRpdiBjbGFzcz0idGFibGUtcmVzcG9uc2l2ZSI+DQogICAgICAgICAgICA8dGFibGUgY2xhc3M9InRhYmxlIj4NCiAgICAgICAgICAgICAgICA8dGhlYWQ+DQogICAgICAgICAgICAgICAgICAgIDx0cj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5FeHRlbnNpb25zPC90aD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDx0aD5zdGF0dXM8L3RoPg0KICAgICAgICAgICAgICAgICAgICA8L3RyPg0KICAgICAgICAgICAgICAgIDwvdGhlYWQ+DQogICAgICAgICAgICAgICAgPHRib2R5Pg==')
                    @foreach ($configurations as $configuration => $isCheck)
                        <tr>
                            <td>{{ $configuration }}</td>
                            <td class="icon-success">
                                <i class="fa-solid fa-{{ $isCheck ? 'check' : 'times' }}"></i>
                            </td>
                        </tr>
                    @endforeach
                @phXml('PC90Ym9keT4NCiAgICAgICAgICAgIDwvdGFibGU+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0LWJ0biB0ZXh0LXJpZ2h0Ij4=')
            @if ($configured)
                <a href="{{ route('install.directories') }}" class="btn btn-primary">Next<i
                        class="far fa-hand-point-right ms-2"></i></a>
            @else
                @phXml('PGEgaHJlZj0iamF2YXNjcmlwdDp2b2lkKDApIiBjbGFzcz0iYnRuIGJ0bi1wcmltYXJ5IGRpc2FibGVkIj5OZXh0PGkNCiAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzPSJmYXIgZmEtaGFuZC1wb2ludC1yaWdodCBtcy0yIj48L2k+PC9hPg==')
            @endif
        @phXml('PC9kaXY+DQogICAgPC9kaXY+')
@endsection
