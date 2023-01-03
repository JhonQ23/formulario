<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Importacion de Jquery validate -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/jquery.validate.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/additional-methods.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/messages_es_AR.min.js'); ?>"></script>
    <!-- Importacion de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- Importacion de sweetAlert -->
    <!-- Importación de sweetalert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.js"></script>
    <?php if ($this->session->flashdata('confirmacion')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
              Swal.fire(
                'confirmacion!', //Titulo
                '<?php echo $this->session->flashdata('confirmacion');?>', //Contenido o mensaje
                'success'//tipo de alerta
              )
        });

      </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
      <script type="text/javascript">
        $(document).ready(function(){
          Swal.fire(
            'ERROR', //titulo
            '<?php echo $this->session->flashdata('error'); ?>', //Contenido o mensaje
            'error' //Tipo de alerta
          )
        });
      </script>
    <?php endif; ?>
  </head>
  <body class="container-fluid">
    <div class="row text-center" style="background-color:#1F2441;">
      <h1 style="color:white;"> <i class="glyphicon glyphicon-list-alt"></i> <b>FORMULARIO DE AUDITORIA</b> </h1>
    </div>
