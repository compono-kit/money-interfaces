<?php declare(strict_types=1);

namespace ComponoKit\Money\Interfaces;

interface BuildsMoneys
{
	public function build( int $amount, RepresentsCurrency $currency ): RepresentsMoney;
}
