<?php

namespace Opencart\Catalog\Controller\Extension\Paytabs\Payment;

require_once DIR_EXTENSION . 'paytabs/system/library/paytabs_api.php';

use Opencart\System\Library\PaytabsCatalogController;

class PaytabsTru extends PaytabsCatalogController
{
	public $_code = 'tru';
}