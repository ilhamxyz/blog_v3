<script src="{{ config('static_source_cdn.jquery') }}"></script>
<!-- -->
<!-- -->
<!-- ------------------------- 后台主题需要 ------------------------- -->
<script src="{{ cdn_host() }}/static_pc/admin/theme/bootstrap/js/bootstrap.min.js?v=3.0.0"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ cdn_host() }}/static_pc/admin/theme/left_slide/jquery.slimscroll.min.js?v=3.0.0"></script>
<script src="{{ cdn_host() }}/static_pc/admin/theme/icheck/icheck.min.js?v=3.0.0"></script>
<script src="{{ cdn_host() }}/static_pc/admin/theme/scojs/sco.message.js?v=3.0.0"></script>
<script src='{{ cdn_host() }}/static_pc/admin/theme/left_slide/admin.js'></script>
<!-- ------------------------- 后台主题需要 ------------------------- -->
<!-- -->
<!-- -->
<!-- ------------------------- Blog v3 ------------------------- -->
<!-- Sentry -->
<script src="{{ config('static_source_cdn.sentry') }}" crossorigin="anonymous"></script>
<!-- ------------------------- Blog v3 ------------------------- -->
<!-- -->
<!-- -->
<!-- ------------------------- Blog v2 ------------------------- -->
<!-- <script src="{{ cdn_host() }}/static_pc/plugins/layui/js/layui.js"></script>
<script src="{{ cdn_host() }}/static_pc/plugins/pageinate/js/laypage.js"></script>
<script src="{{ config('static_source_cdn.laod_js') }}"></script> -->
<script src="{{ cdn_host() }}/static_pc/js/global.js"></script>
<script src="{{ cdn_host() }}/static_pc/admin/script.js"></script>
<!-- ------------------------- Blog v2 ------------------------- -->
<!-- -->
<!-- -->
<!-- 自动选中侧边栏 -->
<script>
$('.sidebar a[href="' + location.pathname + '"]').eq(0).parent().parent().parent().addClass('active');
$('.sidebar a[href="' + location.pathname + '"]').eq(0).attr("style", "color:white;");
</script>