<style>
.page-break {
    page-break-after: always;
}
</style>
@foreach($data as $datas)
<h1>{{$datas->judul}}</h1>
<div class="page-break"></div>
<h1>Page 2</h1>
@endforeach
