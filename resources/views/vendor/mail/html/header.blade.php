<tr>
    <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td class="header" align="center">
                <a href="{{ route('home') }}" style="display: inline-block;">
                    @if (trim($slot) === 'Kjota')
                        <img src="{{ asset('assets/general/logo.png') }}" alt="Kjota Logo">
                    @else
                        {{ $slot }}
                    @endif
                </a>
            </td>
        </tr>
    </table>
</tr>
