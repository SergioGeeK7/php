<?php

require_once('pclzip.lib.php');

  $archive = new PclZip('archivo.zip');

  $v_list = $archive->add('../',

   PCLZIP_OPT_REMOVE_PATH, 'dev');

?>