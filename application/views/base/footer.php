<!--footer-->
  <div id="footer" class="navbar navbar-inverse navbar-static-bottom">
      <div class="container">
        <p class='copy-right'>&copy; Azeroz Nguyễn</p>
        <strong>Công ty gia sư gì gì đó</strong>
        <p>SĐT: 090 xxx xxxx</p>
        <p>Địa chỉ: số 123 đường xyz p.a Q.b tp.C Việt Nam</p>
      </div>
    </div>
    <!--/footer-->

    <!--JavaScript-->
    <script src="<?php echo site_url('assets/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.js') ?>"></script>  
    <script src="<?php echo site_url('assets/js/register.js') ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/file-uploader/3.7.0/fineuploader-jquery.min.js"></script>
    <script>
      $(function() {
        $('.carousel').carousel({interval: 2000});
        $('#avatar-uploader').fineUploader({
          uploadButton: 'Upload ảnh đại diện',
          request: {
            endpoint: '<?php echo site_url('upload/avatar') ?>'
          }
        });
      });
    </script>
    
    <!--/JavaScript-->
</body>
</html>