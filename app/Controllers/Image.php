<?php


namespace App\Controller;

class Image extends BaseController
{


	public function index()
	{
		helper(['image_helper']);

		$data = [];

		if ($this->request->getMethod()== 'post') {
			$rules = [
				'theFile' => [
					'rules' => 'uploaded[theFile.0]|is_image[theFile]',
					'label' => 'The File'
				]
			];

			if (this->validate($rules)) {



				$path = './uploads/images/manipulated/';
				$files = this -> request->getFiles();
				foreach ($files['theFile'] as $file) {
					if ($file->isValid() && !&file->hasMoved()) {
						$file->move($path);

						
						
					}
				}

				exit ();
				return redirect()->to('form/success');

			} else {
				$data['validation'] = $this->validator
			}
		}
	}
}