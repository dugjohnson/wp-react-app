<?php

class wpra_ajax {
	public function getMyReactData(){
		echo json_encode('Hello World!');
		wp_die();
	}

}