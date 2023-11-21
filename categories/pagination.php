<section>
    <div class="container">
        <div class="pagi">
            <?php echo paginate_links( ); ?>
        </div>
    </div>
</section>
<style type="text/css">
    
.pagi { padding: 35px 0; margin: auto; display: table; }
.page-numbers{display:block;float:left;margin:0 5px;background:#eee;padding:10px 17px;color:#880202;font-weight:600;font-size:14px;opacity:.5}
.pagination .current,.page-numbers:hover{opacity:1}


.page-numbers {
display: block !important;
    float: left;
    margin: 0 5px 10px !important;
    background: #eee;
    padding: 0;
    color: #880202;
    font-weight: 600;
    font-size: 14px;
    opacity: .5;
   width: 50px !important;
    height: 50px !important;
    text-align: center;
    line-height: 50px;
}

.pagination {
    display: table  !important;
    margin: 0 auto 55px;
}

</style>