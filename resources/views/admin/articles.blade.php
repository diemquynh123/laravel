 @extends('admin.master')
 @section('main')
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.js"></script>
<style type="text/css">
    .row{
        margin-left: 15px;
        padding-bottom: 10px;
        border: 1px solid #fff;
    }
    .title{
        font-weight: bold;
        
    }
</style>

<div class="row">
    <div class="col-md-1 title">stt</div>
    <div class="col-md-2 title">name</div>
    <div class="col-md-6 title">title</div>
</div>
<div class="infinite-scroll">
    @foreach($article as $arl)
        <div class="row">
            <div class="col-md-1">{{$arl->id}}</div>
            <div class="col-md-2">{{$arl->name}}</div>
            <div class="col-md-6">{{$arl->text}}</div>
        </div>
    @endforeach
    {{ $article->links() }} 
</div>

<!-- <div class="footer" style="height: 50px;">
    
</div> -->
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.infinite-scroll').jscroll({            
            autoTrigger: true,
            loadingHtml: '<i class="fa fa-spinner" aria-hidden="true"></i>',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                $('ul.pagination').remove();                
            }
        });
    });
</script>
@stop()
