<?php

use Zoglo\ContaoCaptcha\Controller\FrontendModule\ModuleSubscribeController;
use Zoglo\ContaoCaptcha\Controller\FrontendModule\ModuleUnsubscribeController;
use Zoglo\ContaoCaptcha\Widget\FormCaptcha;

$GLOBALS['TL_FFL']['captcha'] = FormCaptcha::class;

// Front end modules
$GLOBALS['FE_MOD']['newsletter']['subscribe'] = ModuleSubscribeController::class;
$GLOBALS['FE_MOD']['newsletter']['unsubscribe'] = ModuleUnsubscribeController::class;
