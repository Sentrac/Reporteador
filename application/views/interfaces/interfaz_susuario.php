<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='SU'){
    }
    else{
        redirect(base_url());
    }
?>
<script>
  function recargar()
  {
    location.href=location.href
  }
  setInterval('recargar()',60000)
</script>     
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                </div>
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                  <div class="embed-responsive embed-responsive-1by1">
       			      <!-- <iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/Metricbeat-system-overview?embed=true&_g=()" height="600" width="800"></iframe> -->
       			        <iframe src="http://192.168.4.41:3000/d/-HiYvgjiz/warriors?orgId=1&from=now-5m&to=now&kiosk" height="600" width="800"></iframe>
                  </div>
                </div>
                </div>
                
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
