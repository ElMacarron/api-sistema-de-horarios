<?php

namespace Yonkes\Exception;

use Yonkes\Base\Request;

class NotFoundException extends AppException
{

  public function render(Request $request)
  {
    return $this->json([
      'error' => $this->getMessage()
    ], 404);
  }

}