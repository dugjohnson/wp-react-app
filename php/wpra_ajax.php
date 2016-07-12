<?php

class wpra_ajax {
	public function getMyReactData(){
		echo json_encode('No, really, HELLO!!!');
		wp_die();
	}

}