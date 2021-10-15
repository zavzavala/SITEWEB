<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'ImpoSerC, Lda')
<img src="{{'img/Logotipo.png'}}" class="logo" alt="ImpoSerC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
