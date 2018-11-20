<?php
            $msg = '<svg/onload=alert(1)>';
			$old = array("/<script(.*)<\/script>/isU","/<frame(.*)>/isU","/<\/fram(.*)>/isU","/<iframe(.*)>/isU","/<\/ifram(.*)>/isU","/<style(.*)<\/style>/isU");
			$new = array("","","","","","");
			$msg = preg_replace($old,$new,$msg);
            var_dump($msg);
?>